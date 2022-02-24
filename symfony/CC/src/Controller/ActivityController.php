<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\User;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/activity')]
class ActivityController extends AbstractController
{
    #[Route('/showI', name: 'activity_showI')]
    public function showInscriptions(): Response
    {
        return $this->render('activity/showAct.html.twig', [
            'user'=>$this->getUser()
        ]);
    }

    #[Route('/', name: 'activity_index', methods: ['GET'])]
    public function index(ActivityRepository $activityRepository): Response
    {
        return $this->render('activity/index.html.twig', [
            'activities' => $activityRepository->findAll(),
        ]);
    }

    #[Route('/animator/new', name: 'activity_new', methods: ['GET', 'POST'])]
    /**
     * @IsGranted("ROLE_ANIMATOR")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activity = new Activity();
        $form = $this->createForm(ActivityType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $activity->setAnimateur($this->getUser());
            $entityManager->persist($activity);
            $entityManager->flush();

            return $this->redirectToRoute('activity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activity/new.html.twig', [
            'activity' => $activity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'activity_show', methods: ['GET'])]
    public function show(Activity $activity): Response
    {
        return $this->render('activity/show.html.twig', [
            'activity' => $activity,
        ]);
    }

    #[Route('/animator/{id}/edit', name: 'activity_edit', methods: ['GET', 'POST'])]
    /**
     * @IsGranted("ROLE_ANIMATOR")
     */
    public function edit(Request $request, Activity $activity, EntityManagerInterface $entityManager): Response
    {
        if ($activity->getAnimateur() === $this->getUser()) {
            $form = $this->createForm(ActivityType::class, $activity);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();

                return $this->redirectToRoute('activity_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('activity/edit.html.twig', [
                'activity' => $activity,
                'form' => $form,
            ]);
        }
        else{
            return $this->redirectToRoute('activity_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/animator/{id}', name: 'activity_delete', methods: ['POST'])]
    /**
     * @IsGranted("ROLE_ANIMATOR")
     */
    public function delete(Request $request, Activity $activity, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activity->getId(), $request->request->get('_token'))) {
            $entityManager->remove($activity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('activity_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/inscription', name: 'activity_inscription', methods: ['GET', 'POST'])]
    /**
     * @IsGranted("ROLE_USER")
     */
    public function inscription(Activity $activity, EntityManagerInterface $entityManager): Response
    {
        if(!$activity->getParticipants()->contains($this->getUser()) && !($activity->getAnimateur() === ($this->getUser()))){
            $activity->addParticipant($this->getUser());
            $entityManager->persist($activity);
            $entityManager->flush();
            return $this->redirectToRoute('about', [], Response::HTTP_SEE_OTHER);
        }
        else{
            return $this->redirectToRoute('activity_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/{id}/desinscription', name: 'activity_desinscription', methods: ['GET', 'POST'])]
    public function desinscription(Activity $activity, EntityManagerInterface $entityManager): Response
    {
        if($activity->getParticipants()->contains($this->getUser())) {
            $activity->removeParticipant($this->getUser());
            $entityManager->persist($activity);
            $entityManager->flush();
            return $this->redirectToRoute('about', [], Response::HTTP_SEE_OTHER);
        }
        else{
            return $this->redirectToRoute('activity_index', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/animator/{id}/showP', name: 'activity_showP', methods: ['GET', 'POST'])]
    public function showParticipants(Activity $activity): Response
    {
        if($activity->getAnimateur() === $this->getUser()){
            return $this->render('activity/show.html.twig', [
                'activity' => $activity,
            ]);
        }

        else{
            return $this->redirectToRoute('activity_index', [], Response::HTTP_SEE_OTHER);
        }
    }
}

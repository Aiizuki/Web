<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/animateur')]
class UserController extends AbstractController
{
    #[Route('/animator/', name: 'user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/animator/{id}', name: 'user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/animator/{id}/anim', name: 'user_anim', methods: ['GET', 'POST'])]
    public function setAnimator(User $user, EntityManagerInterface $entityManager): Response
    {
        $user->setRoles(["ROLE_ANIMATOR"]);
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/animator/{id}/admin', name: 'user_admin', methods: ['GET', 'POST'])]
    public function setAdmin(User $user, EntityManagerInterface $entityManager): Response
    {
        $user->setRoles(["ROLE_ADMIN"]);
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/animator/{id}/downgrade', name: 'user_downgrade', methods: ['GET', 'POST'])]
    public function downgrade(User $user, EntityManagerInterface $entityManager): Response
    {
        $user->setRoles(["ROLE_USER"]);
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }
}

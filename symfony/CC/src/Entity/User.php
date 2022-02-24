<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @UniqueEntity(fields={"login"}, message="There is already an account with this login")
 */
#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $login;

    #[ORM\Column(type: 'json')]
    private $roles = ["ROLE_USER"];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\Column(type: 'string')]
    private $nom;

    #[ORM\Column(type: 'string')]
    private $prenom;

    #[ORM\OneToMany(mappedBy: 'animateur', targetEntity: Activity::class, orphanRemoval: true)]
    private $activities;

    #[ORM\ManyToMany(targetEntity: Activity::class, mappedBy: 'participants')]
    private $Inscrit;

    public function __construct()
    {
        $this->activities = new ArrayCollection();
        $this->Inscrit = new ArrayCollection();
    }

    public function getNom():?string
    {
        return $this->nom;
    }

    public function getPrenom():?string
    {
        return $this->prenom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;

        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|Activity[]
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(Activity $activity): self
    {
        if (!$this->activities->contains($activity)) {
            $this->activities[] = $activity;
            $activity->setAnimateur($this);
        }

        return $this;
    }

    public function removeActivity(Activity $activity): self
    {
        if ($this->activities->removeElement($activity)) {
            // set the owning side to null (unless already changed)
            if ($activity->getAnimateur() === $this) {
                $activity->setAnimateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Activity[]
     */
    public function getInscrit(): Collection
    {
        return $this->Inscrit;
    }

    public function addInscrit(Activity $inscrit): self
    {
        if (!$this->Inscrit->contains($inscrit)) {
            $this->Inscrit[] = $inscrit;
            $inscrit->addParticipant($this);
        }

        return $this;
    }

    public function removeInscrit(Activity $inscrit): self
    {
        if ($this->Inscrit->removeElement($inscrit)) {
            $inscrit->removeParticipant($this);
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ApiResource(
 *     normalizationContext={"groups"={"film:read"}},
 *     denormalizationContext={"groups"={"film:write"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\FilmRepository")
*/

class Film
{
   /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type= "integer")
   * @Groups("film:read")
   */
   private $id;

    /**
    * @ORM\Column(type="string", length=255)
    * @Groups({"film:read", "film:write"})
    */
    private $titre;

    /**
    * @ORM\Column(type="integer")
    * @Groups({"film:read", "film:write"})
    */
    private $duree;

    /**
    * @ORM\Column(type="string", length=255)
    * @Groups({"film:read", "film:write"})
    */
    private $categorie;

    /**
    * @ORM\Column(type="string", length=255)
    * @Groups({"film:read", "film:write"})
    */
    private $resume;

    /**
    * @ORM\Column(type="string", length=255)
    * @Groups({"film:read", "film:write"})
    */
    private $version;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "veuillez remplir ce champ")]
    #[Assert\Length(min: 4,minMessage: "Veuillez entrer au moins 4 caracteres")]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "veuillez remplir ce champ")]
    #[Assert\Length(min: 4,minMessage: "Veuillez entrer au moins 4 caracteres")]
    private $prenom;

    #[ORM\ManyToOne(targetEntity: Section::class, inversedBy: 'etudiant')]
    private $section;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

        return $this;
    }
}

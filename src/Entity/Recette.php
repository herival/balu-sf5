<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecetteRepository::class)
 */
class Recette
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="time")
     */
    private $cuisson;

    /**
     * @ORM\Column(type="time")
     */
    private $tpspreparation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dificculte;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $note;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCuisson(): ?\DateTimeInterface
    {
        return $this->cuisson;
    }

    public function setCuisson(\DateTimeInterface $cuisson): self
    {
        $this->cuisson = $cuisson;

        return $this;
    }

    public function getTpspreparation(): ?\DateTimeInterface
    {
        return $this->tpspreparation;
    }

    public function setTpspreparation(\DateTimeInterface $tpspreparation): self
    {
        $this->tpspreparation = $tpspreparation;

        return $this;
    }

    public function getDificculte(): ?string
    {
        return $this->dificculte;
    }

    public function setDificculte(string $dificculte): self
    {
        $this->dificculte = $dificculte;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(?float $note): self
    {
        $this->note = $note;

        return $this;
    }
}

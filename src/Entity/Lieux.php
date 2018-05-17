<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LieuxRepository")
 */
class Lieux
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_de_la_salle;

    public function getId()
    {
        return $this->id;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->Cp;
    }

    public function setCp(string $Cp): self
    {
        $this->Cp = $Cp;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getNomDeLaSalle(): ?string
    {
        return $this->Nom_de_la_salle;
    }

    public function setNomDeLaSalle(string $Nom_de_la_salle): self
    {
        $this->Nom_de_la_salle = $Nom_de_la_salle;

        return $this;
    }
}

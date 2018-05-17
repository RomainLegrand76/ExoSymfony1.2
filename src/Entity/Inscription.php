<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InscriptionRepository")
 */
class Inscription
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $usePrenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $useNom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $useMail;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $usePassword;

    public function getId()
    {
        return $this->id;
    }

    public function getUsePrenom(): ?string
    {
        return $this->usePrenom;
    }

    public function setUsePrenom(string $usePrenom): self
    {
        $this->usePrenom = $usePrenom;

        return $this;
    }

    public function getUseNom(): ?string
    {
        return $this->useNom;
    }

    public function setUseNom(string $useNom): self
    {
        $this->useNom = $useNom;

        return $this;
    }

    public function getUseMail(): ?string
    {
        return $this->useMail;
    }

    public function setUseMail(string $useMail): self
    {
        $this->useMail = $useMail;

        return $this;
    }

    public function getUsePassword(): ?string
    {
        return $this->usePassword;
    }

    public function setUsePassword(string $usePassword): self
    {
        $this->usePassword = $usePassword;

        return $this;
    }
}

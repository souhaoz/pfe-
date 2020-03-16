<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DocumentsRepository")
 */
class Documents
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Size;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Extension;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Path;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ShareDocument", inversedBy="documents")
     */
    private $ShareDocument;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Publicity", inversedBy="documents")
     */
    private $Publicity;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->Size;
    }

    public function setSize(string $Size): self
    {
        $this->Size = $Size;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->Extension;
    }

    public function setExtension(string $Extension): self
    {
        $this->Extension = $Extension;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->Path;
    }

    public function setPath(string $Path): self
    {
        $this->Path = $Path;

        return $this;
    }

    public function getShareDocument(): ?ShareDocument
    {
        return $this->ShareDocument;
    }

    public function setShareDocument(?ShareDocument $ShareDocument): self
    {
        $this->ShareDocument = $ShareDocument;

        return $this;
    }

    public function getPublicity(): ?Publicity
    {
        return $this->Publicity;
    }

    public function setPublicity(?Publicity $Publicity): self
    {
        $this->Publicity = $Publicity;

        return $this;
    }





}

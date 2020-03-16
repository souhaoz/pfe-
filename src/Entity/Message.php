<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
 */
class Message
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
    private $Receiver;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Transmitter;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Text;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DocumentMessage", mappedBy="Message")
     */
    private $documentMessages;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Emoji", mappedBy="Message")
     */
    private $emoji;

    public function __construct()
    {
        $this->documentMessages = new ArrayCollection();
        $this->emoji = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReceiver(): ?string
    {
        return $this->Receiver;
    }

    public function setReceiver(string $Receiver): self
    {
        $this->Receiver = $Receiver;

        return $this;
    }

    public function getTransmitter(): ?string
    {
        return $this->Transmitter;
    }

    public function setTransmitter(string $Transmitter): self
    {
        $this->Transmitter = $Transmitter;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }

    /**
     * @return Collection|DocumentMessage[]
     */
    public function getDocumentMessages(): Collection
    {
        return $this->documentMessages;
    }

    public function addDocumentMessage(DocumentMessage $documentMessage): self
    {
        if (!$this->documentMessages->contains($documentMessage)) {
            $this->documentMessages[] = $documentMessage;
            $documentMessage->setMessage($this);
        }

        return $this;
    }

    public function removeDocumentMessage(DocumentMessage $documentMessage): self
    {
        if ($this->documentMessages->contains($documentMessage)) {
            $this->documentMessages->removeElement($documentMessage);
            // set the owning side to null (unless already changed)
            if ($documentMessage->getMessage() === $this) {
                $documentMessage->setMessage(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Emoji[]
     */
    public function getEmoji(): Collection
    {
        return $this->emoji;
    }

    public function addEmoji(Emoji $emoji): self
    {
        if (!$this->emoji->contains($emoji)) {
            $this->emoji[] = $emoji;
            $emoji->setMessage($this);
        }

        return $this;
    }

    public function removeEmoji(Emoji $emoji): self
    {
        if ($this->emoji->contains($emoji)) {
            $this->emoji->removeElement($emoji);
            // set the owning side to null (unless already changed)
            if ($emoji->getMessage() === $this) {
                $emoji->setMessage(null);
            }
        }

        return $this;
    }
}

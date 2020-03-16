<?php

namespace App\Entity;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}
 *
 *     })
 * @ORM\Entity(repositoryClass="App\Repository\ChartRepository")
 */
class Chart
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"write"})
     * @ORM\Column(type="string", length=255)
     */
    private $BackgroudColor;

    /**
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=255)
     */
    private $ItemColor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBackgroudColor(): ?string
    {
        return $this->BackgroudColor;
    }

    public function setBackgroudColor(string $BackgroudColor): self
    {
        $this->BackgroudColor = $BackgroudColor;

        return $this;
    }

    public function getItemColor(): ?string
    {
        return $this->ItemColor;
    }

    public function setItemColor(string $ItemColor): self
    {
        $this->ItemColor = $ItemColor;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="liv_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $livId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="liv_d_reelle", type="date", nullable=true)
     */
    private $livDReelle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="liv_d_expedition", type="date", nullable=true)
     */
    private $livDExpedition;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="liv_d_preparation", type="date", nullable=true)
     */
    private $livDPreparation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Contenir", mappedBy="liv")
     */
    private $lig;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lig = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getLivId(): ?int
    {
        return $this->livId;
    }

    public function getLivDReelle(): ?\DateTimeInterface
    {
        return $this->livDReelle;
    }

    public function setLivDReelle(?\DateTimeInterface $livDReelle): self
    {
        $this->livDReelle = $livDReelle;

        return $this;
    }

    public function getLivDExpedition(): ?\DateTimeInterface
    {
        return $this->livDExpedition;
    }

    public function setLivDExpedition(?\DateTimeInterface $livDExpedition): self
    {
        $this->livDExpedition = $livDExpedition;

        return $this;
    }

    public function getLivDPreparation(): ?\DateTimeInterface
    {
        return $this->livDPreparation;
    }

    public function setLivDPreparation(?\DateTimeInterface $livDPreparation): self
    {
        $this->livDPreparation = $livDPreparation;

        return $this;
    }

    /**
     * @return Collection|Contenir[]
     */
    public function getLig(): Collection
    {
        return $this->lig;
    }

    public function addLig(Contenir $lig): self
    {
        if (!$this->lig->contains($lig)) {
            $this->lig[] = $lig;
            $lig->addLiv($this);
        }

        return $this;
    }

    public function removeLig(Contenir $lig): self
    {
        if ($this->lig->contains($lig)) {
            $this->lig->removeElement($lig);
            $lig->removeLiv($this);
        }

        return $this;
    }

}

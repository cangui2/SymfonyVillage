<?php

namespace App\Entity;

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


}

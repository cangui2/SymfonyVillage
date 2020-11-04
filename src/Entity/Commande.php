<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="com_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="com_ref", type="string", length=255, nullable=true)
     */
    private $comRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="com_remise", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $comRemise;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="com_date", type="date", nullable=true)
     */
    private $comDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="com_mode_paiement", type="string", length=255, nullable=true)
     */
    private $comModePaiement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="com_date_reglement", type="date", nullable=true)
     */
    private $comDateReglement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="com_date_paiement", type="date", nullable=true)
     */
    private $comDatePaiement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="com_status", type="string", length=255, nullable=true)
     */
    private $comStatus;
    
    public function getComId(): ?int
    {
       
        return $this->comId;
    }

    public function getComRef(): ?string
    {
        return $this->comRef;
    }

    public function setComRef(?string $comRef): self
    {
        $this->comRef = $comRef;

        return $this;
    }

    public function getComRemise(): ?string
    {
        return $this->comRemise;
    }

    public function setComRemise(?string $comRemise): self
    {
        $this->comRemise = $comRemise;

        return $this;
    }

    public function getComDate(): ?\DateTimeInterface
    {
        return $this->comDate;
    }

    public function setComDate(?\DateTimeInterface $comDate): self
    {
        $this->comDate = $comDate;

        return $this;
    }

    public function getComModePaiement(): ?string
    {
        return $this->comModePaiement;
    }

    public function setComModePaiement(?string $comModePaiement): self
    {
        $this->comModePaiement = $comModePaiement;

        return $this;
    }

    public function getComDateReglement(): ?\DateTimeInterface
    {
        return $this->comDateReglement;
    }

    public function setComDateReglement(?\DateTimeInterface $comDateReglement): self
    {
        $this->comDateReglement = $comDateReglement;

        return $this;
    }

    public function getComDatePaiement(): ?\DateTimeInterface
    {
        return $this->comDatePaiement;
    }

    public function setComDatePaiement(?\DateTimeInterface $comDatePaiement): self
    {
        $this->comDatePaiement = $comDatePaiement;

        return $this;
    }

    public function getComStatus(): ?string
    {
        return $this->comStatus;
    }

    public function setComStatus(?string $comStatus): self
    {
        $this->comStatus = $comStatus;

        return $this;
    }



    /**
     * Set the value of comId
     *
     * @param  int  $comId
     *
     * @return  self
     */ 
    public function setComId(int $comId)
    {
        $this->comId = $comId;

        return $this;
    }

    
}

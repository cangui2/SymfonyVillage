<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * LigneDeCommande
 *
 * @ORM\Table(name="ligne_de_commande", uniqueConstraints={@ORM\UniqueConstraint(name="pro_id", columns={"pro_id"})}, indexes={@ORM\Index(name="FK_ligne_de_commande_commande", columns={"com_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\LigneDeCommandeRepository")
 */
class LigneDeCommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="lig_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ligId;

    /**
     * @var int
     *
     * @ORM\Column(name="lig_quantite", type="integer", nullable=false)
     */
    private $ligQuantite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lig_remise", type="string", length=255, nullable=true)
     */
    private $ligRemise;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pro_id", referencedColumnName="pro_id")
     * })
     */
    private $pro;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="com_id", referencedColumnName="com_id")
     * })
     */
    private $com;
    

    public function getLigId(): ?int
    {
        return $this->ligId;
    }

    public function getLigQuantite(): ?int
    {
        return $this->ligQuantite;
    }

    public function setLigQuantite(int $ligQuantite): self
    {
        $this->ligQuantite = $ligQuantite;

        return $this;
    }

    public function getLigRemise(): ?string
    {
        return $this->ligRemise;
    }

    public function setLigRemise(?string $ligRemise): self
    {
        $this->ligRemise = $ligRemise;

        return $this;
    }

    public function getPro(): ?Produit
    {
        return $this->pro;
    }

    public function setPro(?Produit $pro): self
    {
        $this->pro = $pro;

        return $this;
    }

    




    /**
     * Get the value of com
     *
     * @return  \Commande
     */ 
    public function getCom()
    {
        return $this->com;
    }

    /**
     * Set the value of com
     *
     * @param  \Commande  $com
     *
     * @return  self
     */ 
    public function setCom(?Commande $com)
    {
        $this->com = $com;

        return $this;
    }
}

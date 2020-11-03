<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneDeCommande
 *
 * @ORM\Table(name="ligne_de_commande", uniqueConstraints={@ORM\UniqueConstraint(name="pro_id", columns={"pro_id"})})
 * @ORM\Entity
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
     * Get the value of ligId
     *
     * @return  int
     */ 
    public function getLigId()
    {
        return $this->ligId;
    }

    /**
     * Set the value of ligId
     *
     * @param  int  $ligId
     *
     * @return  self
     */ 
    public function setLigId(int $ligId)
    {
        $this->ligId = $ligId;

        return $this;
    }

    /**
     * Get the value of ligQuantite
     *
     * @return  int
     */ 
    public function getLigQuantite()
    {
        return $this->ligQuantite;
    }

    /**
     * Set the value of ligQuantite
     *
     * @param  int  $ligQuantite
     *
     * @return  self
     */ 
    public function setLigQuantite(int $ligQuantite)
    {
        $this->ligQuantite = $ligQuantite;

        return $this;
    }

    /**
     * Get the value of ligRemise
     *
     * @return  string|null
     */ 
    public function getLigRemise()
    {
        return $this->ligRemise;
    }

    /**
     * Set the value of ligRemise
     *
     * @param  string|null  $ligRemise
     *
     * @return  self
     */ 
    public function setLigRemise($ligRemise)
    {
        $this->ligRemise = $ligRemise;

        return $this;
    }

    /**
     * Get the value of pro
     *
     * @return  \Produit
     */ 
    public function getPro()
    {
        return $this->pro;
    }

    /**
     * Set the value of pro
     *
     * @param  \Produit  $pro
     *
     * @return  self
     */ 
    public function setPro($pro)
    {
        $this->pro = $pro;

        return $this;
    }

    public function __toString()
    {
        return $this->pro;
    }
}

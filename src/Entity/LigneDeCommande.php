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
     * @var string
     *
     * @ORM\Column(name="lig_remise", type="string", length=255, nullable=false)
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
    protected $pro;

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

    public function setLigRemise(string $ligRemise): self
    {
        $this->ligRemise = $ligRemise;

        return $this;
    }

    public function getPro()
    {
        return $this->pro;
    }

    public function setPro(?int $pro)
    {
        $this->pro = $pro;

        return $this;
    }
   

}

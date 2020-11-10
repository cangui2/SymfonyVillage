<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="Id_utilis", columns={"Id_utilis"})}, indexes={@ORM\Index(name="FK_client_commande", columns={"com_id"}), @ORM\Index(name="FK_client_pays", columns={"pay_id"})})
 * @ORM\Entity
 */
class Client extends Utilis
{
   
    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_adresse_livraison", type="string", length=255, nullable=true)
     */
    private $cliAdresseLivraison;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cli_type", type="boolean", nullable=true)
     */
    private $cliType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_coefficient", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $cliCoefficient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_reference", type="string", length=10, nullable=true)
     */
    private $cliReference;

    /**
     * @var \Utilis
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\ManyToOne(targetEntity="Utilis")
     *
     */
    private $idUtilis;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="com_id", referencedColumnName="com_id")
     * })
     */
    private $com;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pay_id", referencedColumnName="pay_id")
     * })
     */
    private $pay;
    
    private $roles = [];

    public function getCliAdresseLivraison(): ?string
    {
        return $this->cliAdresseLivraison;
    }

    public function setCliAdresseLivraison(?string $cliAdresseLivraison): self
    {
        $this->cliAdresseLivraison = $cliAdresseLivraison;

        return $this;
    }

    public function getCliType(): ?bool
    {
        return $this->cliType;
    }

    public function setCliType(?bool $cliType): self
    {
        $this->cliType = $cliType;

        return $this;
    }

    public function getCliCoefficient(): ?string
    {
        return $this->cliCoefficient;
    }

    public function setCliCoefficient(?string $cliCoefficient): self
    {
        $this->cliCoefficient = $cliCoefficient;

        return $this;
    }

    public function getCliReference(): ?string
    {
        return $this->cliReference;
    }

    public function setCliReference(?string $cliReference): self
    {
        $this->cliReference = $cliReference;

        return $this;
    }

    

    public function getCom(): ?Commande
    {
        return $this->com;
    }

    public function setCom(?Commande $com): self
    {
        $this->com = $com;

        return $this;
    }

    public function getPay(): ?Pays
    {
        return $this->pay;
    }

    public function setPay(?Pays $pay): self
    {
        $this->pay = $pay;

        return $this;
    }
   
    
    public function getRoles(): array
   {
       $Roles=$this->roles;
       // guarantee every user at least has ROLE_USER
       $Roles[] = 'ROLE_USER';
        
       return array_unique($Roles);
   }

}
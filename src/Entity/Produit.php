<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="cat_id", columns={"cat_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="pro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $proId;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_libelle", type="string", length=255, nullable=false)
     */
    private $proLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_description", type="string", length=255, nullable=false)
     */
    private $proDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_prix", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $proPrix;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_ref", type="string", length=255, nullable=false)
     */
    private $proRef;

    /**
     * @var int
     *
     * @ORM\Column(name="pro_stock", type="integer", nullable=false)
     */
    private $proStock;

    /**
     * @var int
     *
     * @ORM\Column(name="pro_stock_alerte", type="integer", nullable=false)
     */
    private $proStockAlerte;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_couleur", type="string", length=100, nullable=false)
     */
    private $proCouleur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pro_photo", type="string", length=255, nullable=true)
     */
    private $proPhoto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pro_date_ajout", type="date", nullable=false)
     */
    private $proDateAjout;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pro_date_modif", type="datetime", nullable=true)
     */
    private $proDateModif;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pro_bloque", type="boolean", nullable=true)
     */
    private $proBloque;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_id", referencedColumnName="cat_id")
     * })
     */
    private $cat;
    
    public function getProId(): ?int
    {
        return $this->proId;
    }

    public function getProLibelle(): ?string
    {
        return $this->proLibelle;
    }

    public function setProLibelle(string $proLibelle): self
    {
        $this->proLibelle = $proLibelle;

        return $this;
    }

    public function getProDescription(): ?string
    {
        return $this->proDescription;
    }

    public function setProDescription(string $proDescription): self
    {
        $this->proDescription = $proDescription;

        return $this;
    }

    public function getProPrix(): ?string
    {
        return $this->proPrix;
    }

    public function setProPrix(string $proPrix): self
    {
        $this->proPrix = $proPrix;

        return $this;
    }

    public function getProRef(): ?string
    {
        return $this->proRef;
    }

    public function setProRef(string $proRef): self
    {
        $this->proRef = $proRef;

        return $this;
    }

    public function getProStock(): ?int
    {
        return $this->proStock;
    }

    public function setProStock(int $proStock): self
    {
        $this->proStock = $proStock;

        return $this;
    }

    public function getProStockAlerte(): ?int
    {
        return $this->proStockAlerte;
    }

    public function setProStockAlerte(int $proStockAlerte): self
    {
        $this->proStockAlerte = $proStockAlerte;

        return $this;
    }

    public function getProCouleur(): ?string
    {
        return $this->proCouleur;
    }

    public function setProCouleur(string $proCouleur): self
    {
        $this->proCouleur = $proCouleur;

        return $this;
    }

    public function getProPhoto(): ?string
    {
        return $this->proPhoto;
    }

    public function setProPhoto(?string $proPhoto): self
    {
        $this->proPhoto = $proPhoto;

        return $this;
    }

    public function getProDateAjout(): string
    {
        return $this->proDateAjout->format('d/m/Y');
    }

    public function setProDateAjout(\DateTimeInterface $proDateAjout): self
    {
        $this->proDateAjout = $proDateAjout;

        return $this;
    }

    public function getProDateModif(): string
    {
        return $this->proDateModif->format('d/m/Y');
    }

    public function setProDateModif(?\DateTimeInterface $proDateModif): self
    {
        $this->proDateModif = $proDateModif;

        return $this;
    }

    public function getProBloque(): ?bool
    {
        return $this->proBloque;
    }

    public function setProBloque(?bool $proBloque): self
    {
        $this->proBloque = $proBloque;

        return $this;
    }

    public function getCat(): ?Categorie
    {
        return $this->cat;
    }

    public function setCat(?Categorie $cat): self
    {
        $this->cat = $cat;

        return $this;
    }
   
    public function __toString():?string{
    
    return $this->proId;
    }
    
    }
    


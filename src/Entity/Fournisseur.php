<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur", indexes={@ORM\Index(name="pro_id", columns={"pro_id"}), @ORM\Index(name="fournisseur_ibfk_1", columns={"pay_id"})})
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="four_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fourId;

    /**
     * @var string
     *
     * @ORM\Column(name="four_nom", type="string", length=255, nullable=false)
     */
    private $fourNom;

    /**
     * @var string
     *
     * @ORM\Column(name="four_adresse", type="string", length=255, nullable=false)
     */
    private $fourAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="four_adresse_suite", type="string", length=255, nullable=true)
     */
    private $fourAdresseSuite;

    /**
     * @var int
     *
     * @ORM\Column(name="four_cp", type="integer", nullable=false)
     */
    private $fourCp;

    /**
     * @var string
     *
     * @ORM\Column(name="four_ville", type="string", length=255, nullable=false)
     */
    private $fourVille;

    /**
     * @var int
     *
     * @ORM\Column(name="four_telephone", type="integer", nullable=false)
     */
    private $fourTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="four_mail", type="string", length=255, nullable=false)
     */
    private $fourMail;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pay_id", referencedColumnName="pay_id")
     * })
     */
    private $pay;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pro_id", referencedColumnName="pro_id")
     * })
     */
    private $pro;

    public function getFourId(): ?int
    {
        return $this->fourId;
    }

    public function getFourNom(): ?string
    {
        return $this->fourNom;
    }

    public function setFourNom(string $fourNom): self
    {
        $this->fourNom = $fourNom;

        return $this;
    }

    public function getFourAdresse(): ?string
    {
        return $this->fourAdresse;
    }

    public function setFourAdresse(string $fourAdresse): self
    {
        $this->fourAdresse = $fourAdresse;

        return $this;
    }

    public function getFourAdresseSuite(): ?string
    {
        return $this->fourAdresseSuite;
    }

    public function setFourAdresseSuite(?string $fourAdresseSuite): self
    {
        $this->fourAdresseSuite = $fourAdresseSuite;

        return $this;
    }

    public function getFourCp(): ?int
    {
        return $this->fourCp;
    }

    public function setFourCp(int $fourCp): self
    {
        $this->fourCp = $fourCp;

        return $this;
    }

    public function getFourVille(): ?string
    {
        return $this->fourVille;
    }

    public function setFourVille(string $fourVille): self
    {
        $this->fourVille = $fourVille;

        return $this;
    }

    public function getFourTelephone(): ?int
    {
        return $this->fourTelephone;
    }

    public function setFourTelephone(int $fourTelephone): self
    {
        $this->fourTelephone = $fourTelephone;

        return $this;
    }

    public function getFourMail(): ?string
    {
        return $this->fourMail;
    }

    public function setFourMail(string $fourMail): self
    {
        $this->fourMail = $fourMail;

        return $this;
    }

    public function getPay(): ?string
    {
        return $this->pay;
    }

    public function setPay(?string $pay): self
    {
        $this->pay = $pay;

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


}

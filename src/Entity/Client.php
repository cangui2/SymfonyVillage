<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="client_ibk_1", columns={"pay_id"}), @ORM\Index(name="com_id", columns={"com_id"})})
 * @ORM\Entity
 * @UniqueEntity(
 * fields ={"cliMail"},
 * message ="l'email que vous indiqué est deja utilise"
 * )
 */
class Client implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="cli_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cliId;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_nom", type="string", length=255, nullable=false)
     */
    private $cliNom;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_prenom", type="string", length=255, nullable=false)
     */
    private $cliPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_sexe", type="string", length=1, nullable=false)
     */
    private $cliSexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cli_date_de_naissance", type="date", nullable=false)
     */
    private $cliDateDeNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cli_adresse_facturation", type="string", length=255, nullable=true)
     */
    private $cliAdresseFacturation;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_adresse_livraison", type="string", length=255, nullable=false)
     */
    private $cliAdresseLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="cli_cp", type="integer", nullable=false)
     */
    private $cliCp;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_ville", type="string", length=255, nullable=false)
     */
    private $cliVille;

    /**
     * @var int
     *
     * @ORM\Column(name="cli_telephone", type="integer", nullable=false)
     */
    private $cliTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_mail", type="string", length=255, nullable=false)
     * 
     */
    private $cliMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Password", type="string", length=60, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Username", type="string", length=50, nullable=true)
     */
    private $username;

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

    private $roles =[];
    public function getCliId(): ?int
    {
        return $this->cliId;
    }

    public function getCliNom(): ?string
    {
        return $this->cliNom;
    }

    public function setCliNom(string $cliNom): self
    {
        $this->cliNom = $cliNom;

        return $this;
    }

    public function getCliPrenom(): ?string
    {
        return $this->cliPrenom;
    }

    public function setCliPrenom(string $cliPrenom): self
    {
        $this->cliPrenom = $cliPrenom;

        return $this;
    }

    public function getCliSexe(): ?string
    {
        return $this->cliSexe;
    }

    public function setCliSexe(string $cliSexe): self
    {
        $this->cliSexe = $cliSexe;

        return $this;
    }

    public function getCliDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->cliDateDeNaissance;
    }

    public function setCliDateDeNaissance(\DateTimeInterface $cliDateDeNaissance): self
    {
        $this->cliDateDeNaissance = $cliDateDeNaissance;

        return $this;
    }

    public function getCliAdresseFacturation(): ?string
    {
        return $this->cliAdresseFacturation;
    }

    public function setCliAdresseFacturation(?string $cliAdresseFacturation): self
    {
        $this->cliAdresseFacturation = $cliAdresseFacturation;

        return $this;
    }

    public function getCliAdresseLivraison(): ?string
    {
        return $this->cliAdresseLivraison;
    }

    public function setCliAdresseLivraison(string $cliAdresseLivraison): self
    {
        $this->cliAdresseLivraison = $cliAdresseLivraison;

        return $this;
    }

    public function getCliCp(): ?int
    {
        return $this->cliCp;
    }

    public function setCliCp(int $cliCp): self
    {
        $this->cliCp = $cliCp;

        return $this;
    }

    public function getCliVille(): ?string
    {
        return $this->cliVille;
    }

    public function setCliVille(string $cliVille): self
    {
        $this->cliVille = $cliVille;

        return $this;
    }

    public function getCliTelephone(): ?int
    {
        return $this->cliTelephone;
    }

    public function setCliTelephone(int $cliTelephone): self
    {
        $this->cliTelephone = $cliTelephone;

        return $this;
    }

    public function getCliMail(): ?string
    {
        return $this->cliMail;
    }

    public function setCliMail(string $cliMail): self
    {
        $this->cliMail = $cliMail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

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
    public function getSalt()
    {
        // The bcrypt and argon2i algorithms don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    public function getRoles()
    {
        $roles=$this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique(($roles));
    }

    public function eraseCredentials()
    {
    }

}

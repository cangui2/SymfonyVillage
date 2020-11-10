<?php

namespace App\Entity;

use Serializable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilis
 *
 * @ORM\Table(name="utilis")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"client"="Client", "employe"="Employe"})
 */
abstract class Utilis implements UserInterface
{
    /**
     * @var int
     *
     * 
     * @ORM\Id
     * @ORM\Column(name="Id_utilis", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_Nom", type="string", length=50, nullable=true)
     */
    private $utilNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_Prenom", type="string", length=50, nullable=true)
     */
    private $utilPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_sexe", type="string", length=50, nullable=true)
     */
    private $utilSexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_adresse", type="string", length=50, nullable=true)
     */
    private $utilAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_Cp", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $utilCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_ville", type="string", length=50, nullable=true)
     */
    private $utilVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_mail", type="string", length=50, nullable=true)
     */
    private $utilMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_username", type="string", length=50, nullable=true)
     */
    private $utilUsername;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_password", type="string", length=255, nullable=true)
     */
    private $utilPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Util_telephone", type="string", length=255, nullable=true)
     */
    private $utilTelephone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Util_date_de_naissance", type="date", nullable=true)
     */
    private $utilDateDeNaissance;
   
    private $type;
    public function getUsername()
    {
        return $this->utilUsername;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->utilPassword;
    }

    
    
    public function eraseCredentials()
    {
    }

    public function getIdUtilis(): ?int
    {
        return $this->idUtilis;
    }
    function setIdutilis($id){
        return $this->idUtilis=$id;
    }
    public function getUtilNom(): ?string
    {
        return $this->utilNom;
    }

    public function setUtilNom(?string $utilNom): self
    {
        $this->utilNom = $utilNom;

        return $this;
    }

    public function getUtilPrenom(): ?string
    {
        return $this->utilPrenom;
    }

    public function setUtilPrenom(?string $utilPrenom): self
    {
        $this->utilPrenom = $utilPrenom;

        return $this;
    }

    public function getUtilSexe(): ?string
    {
        return $this->utilSexe;
    }

    public function setUtilSexe(?string $utilSexe): self
    {
        $this->utilSexe = $utilSexe;

        return $this;
    }

    public function getUtilAdresse(): ?string
    {
        return $this->utilAdresse;
    }

    public function setUtilAdresse(?string $utilAdresse): self
    {
        $this->utilAdresse = $utilAdresse;

        return $this;
    }

    public function getUtilCp(): ?string
    {
        return $this->utilCp;
    }

    public function setUtilCp(?string $utilCp): self
    {
        $this->utilCp = $utilCp;

        return $this;
    }

    public function getUtilVille(): ?string
    {
        return $this->utilVille;
    }

    public function setUtilVille(?string $utilVille): self
    {
        $this->utilVille = $utilVille;

        return $this;
    }

    public function getUtilMail(): ?string
    {
        return $this->utilMail;
    }

    public function setUtilMail(?string $utilMail): self
    {
        $this->utilMail = $utilMail;

        return $this;
    }

    public function getUtilUsername(): ?string
    {
        return $this->utilUsername;
    }

    public function setUtilUsername(?string $utilUsername): self
    {
        $this->utilUsername = $utilUsername;

        return $this;
    }

    public function getUtilPassword(): ?string
    {
        return $this->utilPassword;
    }

    public function setUtilPassword(?string $utilPassword): self
    {
        $this->utilPassword = $utilPassword;

        return $this;
    }

    public function getUtilTelephone(): ?string
    {
        return $this->utilTelephone;
    }

    public function setUtilTelephone(?string $utilTelephone): self
    {
        $this->utilTelephone = $utilTelephone;

        return $this;
    }

    public function getUtilDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->utilDateDeNaissance;
    }

    public function setUtilDateDeNaissance(?\DateTimeInterface $utilDateDeNaissance): self
    {
        $this->utilDateDeNaissance = $utilDateDeNaissance;

        return $this;
    }
   
    public function getType(){
        return $this->type;
    }
   public function setType($types){
        $this->type=$types;
   }
 
   public function __toString()
   {
       return $this->idUtilis;
   }

}
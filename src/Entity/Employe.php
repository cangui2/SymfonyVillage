<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employe
 *
 * @ORM\Table(name="employe", indexes={@ORM\Index(name="pos_id", columns={"pos_id"}), @ORM\Index(name="emp_id_1", columns={"emp_id_1"}), @ORM\Index(name="employe_ibk_3", columns={"cli_id"})})
 * @ORM\Entity
 */
class Employe
{
    /**
     * @var int
     *
     * @ORM\Column(name="emp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $empId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="emp_pos_id", type="integer", nullable=true)
     */
    private $empPosId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="emp_emp_id", type="integer", nullable=true)
     */
    private $empEmpId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="emp_date_entree", type="date", nullable=false)
     */
    private $empDateEntree;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="emp_date_sortie", type="date", nullable=true)
     */
    private $empDateSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_nom", type="string", length=255, nullable=false)
     */
    private $empNom;

    /**
     * @var int
     *
     * @ORM\Column(name="emp_num_secu_social", type="integer", nullable=false)
     */
    private $empNumSecuSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_prenom", type="string", length=255, nullable=false)
     */
    private $empPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_sexe", type="string", length=1, nullable=false)
     */
    private $empSexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="emp_date_de_naissance", type="date", nullable=false)
     */
    private $empDateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_adresse", type="string", length=255, nullable=false)
     */
    private $empAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_adresse_suite", type="string", length=255, nullable=false)
     */
    private $empAdresseSuite;

    /**
     * @var int
     *
     * @ORM\Column(name="emp_cp", type="integer", nullable=false)
     */
    private $empCp;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_ville", type="string", length=255, nullable=false)
     */
    private $empVille;

    /**
     * @var int
     *
     * @ORM\Column(name="emp_telephone", type="integer", nullable=false)
     */
    private $empTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="emp_mail", type="string", length=255, nullable=false)
     */
    private $empMail;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="emp_type_client", type="boolean", nullable=true)
     */
    private $empTypeClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emp_motdepasse", type="string", length=50, nullable=true)
     */
    private $empMotdepasse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emp_login", type="string", length=60, nullable=true)
     */
    private $empLogin;

    /**
     * @var json|null
     *
     * @ORM\Column(name="emp_role", type="json", nullable=true)
     */
    private $empRole;

    /**
     * @var \Employe
     *
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emp_id_1", referencedColumnName="emp_id")
     * })
     */
    private $empId1;

    /**
     * @var \Poste
     *
     * @ORM\ManyToOne(targetEntity="Poste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pos_id", referencedColumnName="pos_id")
     * })
     */
    private $pos;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cli_id", referencedColumnName="cli_id")
     * })
     */
    private $cli;

    public function getEmpId(): ?int
    {
        return $this->empId;
    }

    public function getEmpPosId(): ?int
    {
        return $this->empPosId;
    }

    public function setEmpPosId(?int $empPosId): self
    {
        $this->empPosId = $empPosId;

        return $this;
    }

    public function getEmpEmpId(): ?int
    {
        return $this->empEmpId;
    }

    public function setEmpEmpId(?int $empEmpId): self
    {
        $this->empEmpId = $empEmpId;

        return $this;
    }

    public function getEmpDateEntree(): ?\DateTimeInterface
    {
        return $this->empDateEntree;
    }

    public function setEmpDateEntree(\DateTimeInterface $empDateEntree): self
    {
        $this->empDateEntree = $empDateEntree;

        return $this;
    }

    public function getEmpDateSortie(): ?\DateTimeInterface
    {
        return $this->empDateSortie;
    }

    public function setEmpDateSortie(?\DateTimeInterface $empDateSortie): self
    {
        $this->empDateSortie = $empDateSortie;

        return $this;
    }

    public function getEmpNom(): ?string
    {
        return $this->empNom;
    }

    public function setEmpNom(string $empNom): self
    {
        $this->empNom = $empNom;

        return $this;
    }

    public function getEmpNumSecuSocial(): ?int
    {
        return $this->empNumSecuSocial;
    }

    public function setEmpNumSecuSocial(int $empNumSecuSocial): self
    {
        $this->empNumSecuSocial = $empNumSecuSocial;

        return $this;
    }

    public function getEmpPrenom(): ?string
    {
        return $this->empPrenom;
    }

    public function setEmpPrenom(string $empPrenom): self
    {
        $this->empPrenom = $empPrenom;

        return $this;
    }

    public function getEmpSexe(): ?string
    {
        return $this->empSexe;
    }

    public function setEmpSexe(string $empSexe): self
    {
        $this->empSexe = $empSexe;

        return $this;
    }

    public function getEmpDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->empDateDeNaissance;
    }

    public function setEmpDateDeNaissance(\DateTimeInterface $empDateDeNaissance): self
    {
        $this->empDateDeNaissance = $empDateDeNaissance;

        return $this;
    }

    public function getEmpAdresse(): ?string
    {
        return $this->empAdresse;
    }

    public function setEmpAdresse(string $empAdresse): self
    {
        $this->empAdresse = $empAdresse;

        return $this;
    }

    public function getEmpAdresseSuite(): ?string
    {
        return $this->empAdresseSuite;
    }

    public function setEmpAdresseSuite(string $empAdresseSuite): self
    {
        $this->empAdresseSuite = $empAdresseSuite;

        return $this;
    }

    public function getEmpCp(): ?int
    {
        return $this->empCp;
    }

    public function setEmpCp(int $empCp): self
    {
        $this->empCp = $empCp;

        return $this;
    }

    public function getEmpVille(): ?string
    {
        return $this->empVille;
    }

    public function setEmpVille(string $empVille): self
    {
        $this->empVille = $empVille;

        return $this;
    }

    public function getEmpTelephone(): ?int
    {
        return $this->empTelephone;
    }

    public function setEmpTelephone(int $empTelephone): self
    {
        $this->empTelephone = $empTelephone;

        return $this;
    }

    public function getEmpMail(): ?string
    {
        return $this->empMail;
    }

    public function setEmpMail(string $empMail): self
    {
        $this->empMail = $empMail;

        return $this;
    }

    public function getEmpTypeClient(): ?bool
    {
        return $this->empTypeClient;
    }

    public function setEmpTypeClient(?bool $empTypeClient): self
    {
        $this->empTypeClient = $empTypeClient;

        return $this;
    }

    public function getEmpMotdepasse(): ?string
    {
        return $this->empMotdepasse;
    }

    public function setEmpMotdepasse(?string $empMotdepasse): self
    {
        $this->empMotdepasse = $empMotdepasse;

        return $this;
    }

    public function getEmpLogin(): ?string
    {
        return $this->empLogin;
    }

    public function setEmpLogin(?string $empLogin): self
    {
        $this->empLogin = $empLogin;

        return $this;
    }

    public function getEmpRole(): ?array
    {
        return $this->empRole;
    }

    public function setEmpRole(?array $empRole): self
    {
        $this->empRole = $empRole;

        return $this;
    }

    public function getEmpId1(): ?self
    {
        return $this->empId1;
    }

    public function setEmpId1(?self $empId1): self
    {
        $this->empId1 = $empId1;

        return $this;
    }

    public function getPos(): ?Poste
    {
        return $this->pos;
    }

    public function setPos(?Poste $pos): self
    {
        $this->pos = $pos;

        return $this;
    }

    public function getCli(): ?Client
    {
        return $this->cli;
    }

    public function setCli(?Client $cli): self
    {
        $this->cli = $cli;

        return $this;
    }


}

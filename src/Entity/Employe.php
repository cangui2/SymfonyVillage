<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employe
 *
 * @ORM\Table(name="employe", uniqueConstraints={@ORM\UniqueConstraint(name="Id_utilis", columns={"Id_utilis"})}, indexes={@ORM\Index(name="emp_id_1", columns={"emp_id_1"}), @ORM\Index(name="pos_id", columns={"pos_id"})})
 * @ORM\Entity
 */
class Employe extends Utilis
{
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
     * @var int
     *
     * @ORM\Column(name="emp_num_secu_social", type="integer", nullable=false)
     */
    private $empNumSecuSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emp_roles", type="string", length=50, nullable=true)
     */
    private $empRoles;

    /**
     * @var int|null
     *
     * @ORM\Column(name="emp_id_1", type="integer", nullable=true)
     */
    private $empId1;

    /**
     * @var \Utilis
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_utilis", referencedColumnName="Id_utilis")
     * })
     */
    private $idUtilis;

    /**
     * @var \Poste
     *
     * @ORM\ManyToOne(targetEntity="Poste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pos_id", referencedColumnName="pos_id")
     * })
     */
    private $pos;

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

    public function getEmpNumSecuSocial(): ?int
    {
        return $this->empNumSecuSocial;
    }

    public function setEmpNumSecuSocial(int $empNumSecuSocial): self
    {
        $this->empNumSecuSocial = $empNumSecuSocial;

        return $this;
    }

    public function getEmpRoles(): ?string
    {
        return $this->empRoles;
    }

    public function setEmpRoles(?string $empRoles): self
    {
        $this->empRoles = $empRoles;

        return $this;
    }

    public function getEmpId1(): ?int
    {
        return $this->empId1;
    }

    public function setEmpId1(?int $empId1): self
    {
        $this->empId1 = $empId1;

        return $this;
    }

    public function getIdUtilis(): ?int
    {
        return $this->idUtilis;
    }

    public function setIdUtilis(?Utilis $idUtilis): self
    {
        $this->idUtilis = $idUtilis;

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
    public function getRoles(){
        return array($this->empRoles);
    }
    public function setRoles($roles) 
    {
        
            $this->empRoles=$roles;
        
    
    }


}

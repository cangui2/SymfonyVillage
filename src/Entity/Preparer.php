<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preparer
 *
 * @ORM\Table(name="préparer", indexes={@ORM\Index(name="FK_B085C7C3748C0F37", columns={"com_id"})})
 * @ORM\Entity
 */
class Preparer
{
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
     * @var \Livraison
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Livraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="liv_id", referencedColumnName="liv_id")
     * })
     */
    private $liv;

    public function getCom(): ?Commande
    {
        return $this->com;
    }

    public function setCom(?Commande $com): self
    {
        $this->com = $com;

        return $this;
    }

    public function getLiv(): ?Livraison
    {
        return $this->liv;
    }

    public function setLiv(?Livraison $liv): self
    {
        $this->liv = $liv;

        return $this;
    }


}

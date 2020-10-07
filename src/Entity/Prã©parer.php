<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prã©parer
 *
 * @ORM\Table(name="prÃ©parer", indexes={@ORM\Index(name="com_id", columns={"com_id"})})
 * @ORM\Entity
 */
class Prã©parer
{
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

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="com_id", referencedColumnName="com_id")
     * })
     */
    private $com;

    public function getLiv(): ?Livraison
    {
        return $this->liv;
    }

    public function setLiv(?Livraison $liv): self
    {
        $this->liv = $liv;

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


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="pay_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $payId;

    /**
     * @var int
     *
     * @ORM\Column(name="pay_libelle", type="integer", nullable=false)
     */
    private $payLibelle;

    public function getPayId(): ?int
    {
        return $this->payId;
    }

    public function getPayLibelle(): ?int
    {
        return $this->payLibelle;
    }

    public function setPayLibelle(int $payLibelle): self
    {
        $this->payLibelle = $payLibelle;

        return $this;
    }


}

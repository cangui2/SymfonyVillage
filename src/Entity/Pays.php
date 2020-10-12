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
     * @var string
     *
     * @ORM\Column(name="pay_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $payId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pay_libelle", type="string", length=50, nullable=false)
     */
    private $payLibelle = '';

    public function getPayId(): ?string
    {
        return $this->payId;
    }

    public function getPayLibelle(): ?string
    {
        return $this->payLibelle;
    }
    
    public function __toString(): string
    {
        return $this->payLibelle;
    }
    public function setPayLibelle(string $payLibelle): self
    {
        $this->payLibelle = $payLibelle;

        return $this;
    }


}

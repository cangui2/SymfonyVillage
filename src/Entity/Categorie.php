<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", indexes={@ORM\Index(name="cat_id_1", columns={"cat_id_1"})})
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_nom", type="string", length=255, nullable=false)
     */
    private $catNom;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_id_1", referencedColumnName="cat_id")
     * })
     */
    private $catId1;

    public function getCatId(): ?int
    {
        return $this->catId;
    }

    public function getCatNom(): ?string
    {
        return $this->catNom;
    }

    public function setCatNom(string $catNom): self
    {
        $this->catNom = $catNom;

        return $this;
    }

    public function getCatId1(): ?self
    {
        return $this->catId1;
    }

    public function setCatId1(?self $catId1): self
    {
        $this->catId1 = $catId1;

        return $this;
    }


}

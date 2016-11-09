<?php

namespace Pg\GsbFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablette
 *
 * @ORM\Table(name="tablette")
 * @ORM\Entity(repositoryClass="Pg\GsbFraisBundle\Repository\TabletteRepository")
 */
class Tablette
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="visiteur", type="string", length=45, nullable=true)
     */
    private $visiteur;

    /**
     * @var int
     *
     * @ORM\Column(name="memoireInterne", type="integer")
     */
    private $memoireInterne;

    /**
     * @var int
     *
     * @ORM\Column(name="memoireExterne", type="integer")
     */
    private $memoireExterne;

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=45)
     */
    private $os;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set visiteur
     *
     * @param string $visiteur
     * @return Tablette
     */
    public function setVisiteur($visiteur)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @return string 
     */
    public function getVisiteur()
    {
        return $this->visiteur;
    }

    /**
     * Set memoireInterne
     *
     * @param integer $memoireInterne
     * @return Tablette
     */
    public function setMemoireInterne($memoireInterne)
    {
        $this->memoireInterne = $memoireInterne;

        return $this;
    }

    /**
     * Get memoireInterne
     *
     * @return integer 
     */
    public function getMemoireInterne()
    {
        return $this->memoireInterne;
    }

    /**
     * Set memoireExterne
     *
     * @param integer
     * @return Tablette
     */
    public function setMemoireExterne($memoireExterne)
    {
        $this->memoireExterne = $memoireExterne;

        return $this;
    }

    /**
     * Get memoireExterne
     *
     * @return integer
     */
    public function getMemoireExterne()
    {
        return $this->memoireExterne;
    }

    /**
     * Set os
     *
     * @param string $os
     * @return Tablette
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }
}

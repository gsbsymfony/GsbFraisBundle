<?php

namespace Pg\GsbFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablettes
 *
 * @ORM\Table(name="tablettes")
 * @ORM\Entity(repositoryClass="Pg\GsbFraisBundle\Repository\TablettesRepository")
 */
class Tablettes
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
     * ORM\Column(name="visiteur", type="string", lenght=45)
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
     * @ORM\Column(name="memoireExterne", type="integer", nullable=true)
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
     * Set memoireInterne
     *
     * @param integer $memoireInterne
     * @return Tablettes
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
     * Set visiteur
     *
     * @param string $visiteur
     * @return Tablettes
     */
    public function setvisiteur($visiteur)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @param string $visiteur
     * @return Tablettes
     */
    public function getvisiteur($visiteur)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Set memoireExterne
     *
     * @param integer $memoireExterne
     * @return Tablettes
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
     * @return Tablettes
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

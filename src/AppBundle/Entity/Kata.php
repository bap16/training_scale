<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kata
 */
class Kata
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $suly;

    /**
     * @var integer
     */
    private $bicepszBal;

    /**
     * @var integer
     */
    private $bicepszJobb;

    /**
     * @var integer
     */
    private $dagadtHattyuBal;

    /**
     * @var integer
     */
    private $dagadtHattyuJobb;

    /**
     * @var integer
     */
    private $mell;

    /**
     * @var integer
     */
    private $derek;

    /**
     * @var integer
     */
    private $csipo;

    /**
     * @var integer
     */
    private $combBal;

    /**
     * @var integer
     */
    private $combJobb;

    /**
     * @var integer
     */
    private $vadliBal;

    /**
     * @var integer
     */
    private $vadliJobb;

    /**
     * @var \DateTime
     */
    private $datum;


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
     * Set suly
     *
     * @param integer $suly
     * @return Kata
     */
    public function setSuly($suly)
    {
        $this->suly = $suly;

        return $this;
    }

    /**
     * Get suly
     *
     * @return integer 
     */
    public function getSuly()
    {
        return $this->suly;
    }

    /**
     * Set bicepszBal
     *
     * @param integer $bicepszBal
     * @return Kata
     */
    public function setBicepszBal($bicepszBal)
    {
        $this->bicepszBal = $bicepszBal;

        return $this;
    }

    /**
     * Get bicepszBal
     *
     * @return integer 
     */
    public function getBicepszBal()
    {
        return $this->bicepszBal;
    }

    /**
     * Set bicepszJobb
     *
     * @param integer $bicepszJobb
     * @return Kata
     */
    public function setBicepszJobb($bicepszJobb)
    {
        $this->bicepszJobb = $bicepszJobb;

        return $this;
    }

    /**
     * Get bicepszJobb
     *
     * @return integer 
     */
    public function getBicepszJobb()
    {
        return $this->bicepszJobb;
    }

    /**
     * Set dagadtHattyuBal
     *
     * @param integer $dagadtHattyuBal
     * @return Kata
     */
    public function setDagadtHattyuBal($dagadtHattyuBal)
    {
        $this->dagadtHattyuBal = $dagadtHattyuBal;

        return $this;
    }

    /**
     * Get dagadtHattyuBal
     *
     * @return integer 
     */
    public function getDagadtHattyuBal()
    {
        return $this->dagadtHattyuBal;
    }

    /**
     * Set dagadtHattyuJobb
     *
     * @param integer $dagadtHattyuJobb
     * @return Kata
     */
    public function setDagadtHattyuJobb($dagadtHattyuJobb)
    {
        $this->dagadtHattyuJobb = $dagadtHattyuJobb;

        return $this;
    }

    /**
     * Get dagadtHattyuJobb
     *
     * @return integer 
     */
    public function getDagadtHattyuJobb()
    {
        return $this->dagadtHattyuJobb;
    }

    /**
     * Set mell
     *
     * @param integer $mell
     * @return Kata
     */
    public function setMell($mell)
    {
        $this->mell = $mell;

        return $this;
    }

    /**
     * Get mell
     *
     * @return integer 
     */
    public function getMell()
    {
        return $this->mell;
    }

    /**
     * Set derek
     *
     * @param integer $derek
     * @return Kata
     */
    public function setDerek($derek)
    {
        $this->derek = $derek;

        return $this;
    }

    /**
     * Get derek
     *
     * @return integer 
     */
    public function getDerek()
    {
        return $this->derek;
    }

    /**
     * Set csipo
     *
     * @param integer $csipo
     * @return Kata
     */
    public function setCsipo($csipo)
    {
        $this->csipo = $csipo;

        return $this;
    }

    /**
     * Get csipo
     *
     * @return integer 
     */
    public function getCsipo()
    {
        return $this->csipo;
    }

    /**
     * Set combBal
     *
     * @param integer $combBal
     * @return Kata
     */
    public function setCombBal($combBal)
    {
        $this->combBal = $combBal;

        return $this;
    }

    /**
     * Get combBal
     *
     * @return integer 
     */
    public function getCombBal()
    {
        return $this->combBal;
    }

    /**
     * Set combJobb
     *
     * @param integer $combJobb
     * @return Kata
     */
    public function setCombJobb($combJobb)
    {
        $this->combJobb = $combJobb;

        return $this;
    }

    /**
     * Get combJobb
     *
     * @return integer 
     */
    public function getCombJobb()
    {
        return $this->combJobb;
    }

    /**
     * Set vadliBal
     *
     * @param integer $vadliBal
     * @return Kata
     */
    public function setVadliBal($vadliBal)
    {
        $this->vadliBal = $vadliBal;

        return $this;
    }

    /**
     * Get vadliBal
     *
     * @return integer 
     */
    public function getVadliBal()
    {
        return $this->vadliBal;
    }

    /**
     * Set vadliJobb
     *
     * @param integer $vadliJobb
     * @return Kata
     */
    public function setVadliJobb($vadliJobb)
    {
        $this->vadliJobb = $vadliJobb;

        return $this;
    }

    /**
     * Get vadliJobb
     *
     * @return integer 
     */
    public function getVadliJobb()
    {
        return $this->vadliJobb;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     * @return Kata
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime 
     */
    public function getDatum()
    {
        return $this->datum;
    }
}

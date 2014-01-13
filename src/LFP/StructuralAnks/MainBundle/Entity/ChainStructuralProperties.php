<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chainStructuralProperties
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChainStructuralProperties
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="tileability", type="float", nullable=true)
     */
    private $tileability;

    /**
     * @var float
     *
     * @ORM\Column(name="contactOrder", type="float", nullable=true)
     */
    private $contactOrder;

    /**
     * @var float
     *
     * @ORM\Column(name="sasa", type="float", nullable=true)
     */
    private $sasa;

    /**
     * @var float
     *
     * @ORM\Column(name="deltaSasa", type="float", nullable=true)
     */
    private $deltaSasa;

    /**
     * @var float
     *
     * @ORM\Column(name="rGyr", type="float", nullable=true)
     */
    private $rGyr;

    /**
     * @var float
     *
     * @ORM\Column(name="icsRepeats", type="float", nullable=true)
     */
    private $icsRepeats;


    /**
     *  @ORM\OneToOne(targetEntity="Chain", inversedBy="chainStructuralProperties")
     */
    protected $chain;
    
    
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
     * Set tileability
     *
     * @param float $tileability
     * @return chainStructuralProperties
     */
    public function setTileability($tileability)
    {
        $this->tileability = $tileability;
    
        return $this;
    }

    /**
     * Get tileability
     *
     * @return float 
     */
    public function getTileability()
    {
        return $this->tileability;
    }

    /**
     * Set contactOrder
     *
     * @param float $contactOrder
     * @return chainStructuralProperties
     */
    public function setContactOrder($contactOrder)
    {
        $this->contactOrder = $contactOrder;
    
        return $this;
    }

    /**
     * Get contactOrder
     *
     * @return float 
     */
    public function getContactOrder()
    {
        return $this->contactOrder;
    }

    /**
     * Set sasa
     *
     * @param float $sasa
     * @return chainStructuralProperties
     */
    public function setSasa($sasa)
    {
        $this->sasa = $sasa;
    
        return $this;
    }

    /**
     * Get sasa
     *
     * @return float 
     */
    public function getSasa()
    {
        return $this->sasa;
    }

    /**
     * Set deltaSasa
     *
     * @param float $deltaSasa
     * @return chainStructuralProperties
     */
    public function setDeltaSasa($deltaSasa)
    {
        $this->deltaSasa = $deltaSasa;
    
        return $this;
    }

    /**
     * Get deltaSasa
     *
     * @return float 
     */
    public function getDeltaSasa()
    {
        return $this->deltaSasa;
    }

    /**
     * Set rGyr
     *
     * @param float $rGyr
     * @return chainStructuralProperties
     */
    public function setRGyr($rGyr)
    {
        $this->rGyr = $rGyr;
    
        return $this;
    }

    /**
     * Get rGyr
     *
     * @return float 
     */
    public function getRGyr()
    {
        return $this->rGyr;
    }

    /**
     * Set icsRepeats
     *
     * @param float $icsRepeats
     * @return chainStructuralProperties
     */
    public function setIcsRepeats($icsRepeats)
    {
        $this->icsRepeats = $icsRepeats;
    
        return $this;
    }

    /**
     * Get icsRepeats
     *
     * @return float 
     */
    public function getIcsRepeats()
    {
        return $this->icsRepeats;
    }

    /**
     * Set chain
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Chain $chain
     * @return ChainStructuralProperties
     */
    public function setChain(\LFP\StructuralAnks\MainBundle\Entity\Chain $chain = null)
    {
        $this->chain = $chain;
    
        return $this;
    }

    /**
     * Get chain
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\Chain 
     */
    public function getChain()
    {
        return $this->chain;
    }
}
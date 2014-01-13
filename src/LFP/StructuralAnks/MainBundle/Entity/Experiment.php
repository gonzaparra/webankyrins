<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experiment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Experiment
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
     * @var string
     *
     * @ORM\Column(name="technique", type="string", length=255, nullable=true)
     */
    private $technique;

    /**
     * @var string
     *
     * @ORM\Column(name="cualCuant", type="string", length=255, nullable=true)
     */
    private $cualCuant;

    /**
     * @var string
     *
     * @ORM\Column(name="equilCinet", type="string", length=255, nullable=true)
     */
    private $equilCinet;

    
    /**
     * @var string
     *
     * @ORM\Column(name="derivedFrom", type="string", length=255, nullable=true)
     */
    private $derivedFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="variant", type="string", length=255, nullable=true)
     */
    private $variant;

    /**
     * @var float
     *
     * @ORM\Column(name="deltaG", type="float", nullable=true)
     */
    private $deltaG;

    /**
     * @var float
     *
     * @ORM\Column(name="deltaGError", type="float", nullable=true)
     */
    private $deltaGError;

    /**
     * @var float
     *
     * @ORM\Column(name="m", type="float", nullable=true)
     */
    private $m;

    /**
     * @var float
     *
     * @ORM\Column(name="mError", type="float", nullable=true)
     */
    private $mError;

    /**
     * @var float
     *
     * @ORM\Column(name="ph", type="float", nullable=true)
     */
    private $ph;

    /**
     * @var float
     *
     * @ORM\Column(name="temp", type="float", nullable=true)
     */
    private $temp;

    /**
     * @var string
     *
     * @ORM\Column(name="buffer", type="string", length=255, nullable=true)
     */
    private $buffer;

    /**
     * @var string
     *
     * @ORM\Column(name="denaturant", type="string", length=255, nullable=true)
     */
    private $denaturant;

    /**
     * @var float
     *
     * @ORM\Column(name="tm", type="float", nullable=true)
     */
    private $tm;

    /**
     * @var string
     *
     * @ORM\Column(name="pmid", type="string", length=255, nullable=true)
     */
    private $pmid;

    /**
     * @var integer
     *
     * @ORM\Column(name="nStates", type="integer", nullable=true)
     */
    private $nStates;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasStructure", type="boolean", nullable=true)
     */
    private $hasStructure;

    /**
     * @var string
     *
     * @ORM\Column(name="typeArq", type="string", length=255, nullable=true)
     */
    private $typeArq;

    /**
     *  @ORM\ManyToOne(targetEntity="Protein", inversedBy="experiment")
     */
    protected $protein;
    

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
     * Set technique
     *
     * @param string $technique
     * @return Experiment
     */
    public function setTechnique($technique)
    {
        $this->technique = $technique;
    
        return $this;
    }

    /**
     * Get technique
     *
     * @return string 
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Set cualCuant
     *
     * @param string $cualCuant
     * @return Experiment
     */
    public function setCualCuant($cualCuant)
    {
        $this->cualCuant = $cualCuant;
    
        return $this;
    }

    /**
     * Get cualCuant
     *
     * @return string 
     */
    public function getCualCuant()
    {
        return $this->cualCuant;
    }

    /**
     * Set equilCinet
     *
     * @param string $equilCinet
     * @return Experiment
     */
    public function setEquilCinet($equilCinet)
    {
        $this->equilCinet = $equilCinet;
    
        return $this;
    }

    /**
     * Get equilCinet
     *
     * @return string 
     */
    public function getEquilCinet()
    {
        return $this->equilCinet;
    }

    
    /**
     * Set derivedFrom
     *
     * @param string $derivedFrom
     * @return Experiment
     */
    public function setDerivedFrom($derivedFrom)
    {
        $this->derivedFrom = $derivedFrom;
    
        return $this;
    }

    /**
     * Get derivedFrom
     *
     * @return string 
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Set variant
     *
     * @param string $variant
     * @return Experiment
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    
        return $this;
    }

    /**
     * Get variant
     *
     * @return string 
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Set deltaG
     *
     * @param float $deltaG
     * @return Experiment
     */
    public function setDeltaG($deltaG)
    {
        $this->deltaG = $deltaG;
    
        return $this;
    }

    /**
     * Get deltaG
     *
     * @return float 
     */
    public function getDeltaG()
    {
        return $this->deltaG;
    }

    /**
     * Set deltaGError
     *
     * @param float $deltaGError
     * @return Experiment
     */
    public function setDeltaGError($deltaGError)
    {
        $this->deltaGError = $deltaGError;
    
        return $this;
    }

    /**
     * Get deltaGError
     *
     * @return float 
     */
    public function getDeltaGError()
    {
        return $this->deltaGError;
    }

    /**
     * Set m
     *
     * @param float $m
     * @return Experiment
     */
    public function setM($m)
    {
        $this->m = $m;
    
        return $this;
    }

    /**
     * Get m
     *
     * @return float 
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * Set mError
     *
     * @param float $mError
     * @return Experiment
     */
    public function setMError($mError)
    {
        $this->mError = $mError;
    
        return $this;
    }

    /**
     * Get mError
     *
     * @return float 
     */
    public function getMError()
    {
        return $this->mError;
    }

    /**
     * Set ph
     *
     * @param float $ph
     * @return Experiment
     */
    public function setPh($ph)
    {
        $this->ph = $ph;
    
        return $this;
    }

    /**
     * Get ph
     *
     * @return float 
     */
    public function getPh()
    {
        return $this->ph;
    }

    /**
     * Set temp
     *
     * @param float $temp
     * @return Experiment
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;
    
        return $this;
    }

    /**
     * Get temp
     *
     * @return float 
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set buffer
     *
     * @param string $buffer
     * @return Experiment
     */
    public function setBuffer($buffer)
    {
        $this->buffer = $buffer;
    
        return $this;
    }

    /**
     * Get buffer
     *
     * @return string 
     */
    public function getBuffer()
    {
        return $this->buffer;
    }

    /**
     * Set denaturant
     *
     * @param string $denaturant
     * @return Experiment
     */
    public function setDenaturant($denaturant)
    {
        $this->denaturant = $denaturant;
    
        return $this;
    }

    /**
     * Get denaturant
     *
     * @return string 
     */
    public function getDenaturant()
    {
        return $this->denaturant;
    }

    /**
     * Set tm
     *
     * @param float $tm
     * @return Experiment
     */
    public function setTm($tm)
    {
        $this->tm = $tm;
    
        return $this;
    }

    /**
     * Get tm
     *
     * @return float 
     */
    public function getTm()
    {
        return $this->tm;
    }

    /**
     * Set pmid
     *
     * @param string $pmid
     * @return Experiment
     */
    public function setPmid($pmid)
    {
        $this->pmid = $pmid;
    
        return $this;
    }

    /**
     * Get pmid
     *
     * @return string 
     */
    public function getPmid()
    {
        return $this->pmid;
    }

    /**
     * Set nStates
     *
     * @param integer $nStates
     * @return Experiment
     */
    public function setNStates($nStates)
    {
        $this->nStates = $nStates;
    
        return $this;
    }

    /**
     * Get nStates
     *
     * @return integer 
     */
    public function getNStates()
    {
        return $this->nStates;
    }

    /**
     * Set hasStructure
     *
     * @param boolean $hasStructure
     * @return Experiment
     */
    public function setHasStructure($hasStructure)
    {
        $this->hasStructure = $hasStructure;
    
        return $this;
    }

    /**
     * Get hasStructure
     *
     * @return boolean 
     */
    public function getHasStructure()
    {
        return $this->hasStructure;
    }

    /**
     * Set typeArq
     *
     * @param string $typeArq
     * @return Experiment
     */
    public function setTypeArq($typeArq)
    {
        $this->typeArq = $typeArq;
    
        return $this;
    }

    /**
     * Get typeArq
     *
     * @return string 
     */
    public function getTypeArq()
    {
        return $this->typeArq;
    }

    /**
     * Set protein
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Protein $protein
     * @return Experiment
     */
    public function setProtein(\LFP\StructuralAnks\MainBundle\Entity\Protein $protein = null)
    {
        $this->protein = $protein;
    
        return $this;
    }

    /**
     * Get protein
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\Protein 
     */
    public function getProtein()
    {
        return $this->protein;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->protein = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add protein
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Protein $protein
     * @return Experiment
     */
    public function addProtein(\LFP\StructuralAnks\MainBundle\Entity\Protein $protein)
    {
        $this->protein[] = $protein;
    
        return $this;
    }

    /**
     * Remove protein
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Protein $protein
     */
    public function removeProtein(\LFP\StructuralAnks\MainBundle\Entity\Protein $protein)
    {
        $this->protein->removeElement($protein);
    }
}
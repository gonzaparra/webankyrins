<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chain
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Chain
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="chain", type="string", length=255)
     */
    protected $chain;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    protected $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="SubGroup", type="string", length=255)
     */
    protected $subGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", length=255)
     */
    protected $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="nReps", type="integer", length=255)
     */
    protected $nReps;
    
    /**
     * @var string
     *
     * @ORM\Column(name="frustrationPath", type="string", length=255)
     */
    protected $frustrationPath;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pdbFilePath", type="string", length=255)
     */
    protected $pdbFilePath;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pdbFastaPath", type="string", length=255)
     */
    protected $pdbFastaPath;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="startStructFrac", type="integer", length=255)
     */
    protected $startStructFrac;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="endStructFrac", type="integer", length=255)
     */
    protected $endStructFrac;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="missingResidues", type="integer", length=255)
     */
    protected $missingResidues;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="nonRedundantSet", type="boolean", length=255)
     */
    protected $nonRedundantSet;
    
    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=255)
     */
    protected $observations;

    /**
     *  @ORM\ManyToOne(targetEntity="Protein", inversedBy="chains")
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
     * Set chain
     *
     * @param string $chain
     * @return Chain
     */
    public function setChain($chain)
    {
        $this->chain = $chain;
    
        return $this;
    }

    /**
     * Get chain
     *
     * @return string 
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Chain
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set subGroup
     *
     * @param string $subGroup
     * @return Chain
     */
    public function setSubGroup($subGroup)
    {
        $this->subGroup = $subGroup;
    
        return $this;
    }

    /**
     * Get subGroup
     *
     * @return string 
     */
    public function getSubGroup()
    {
        return $this->subGroup;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return Chain
     */
    public function setLength($length)
    {
        $this->length = $length;
    
        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set nReps
     *
     * @param integer $nReps
     * @return Chain
     */
    public function setNReps($nReps)
    {
        $this->nReps = $nReps;
    
        return $this;
    }

    /**
     * Get nReps
     *
     * @return integer 
     */
    public function getNReps()
    {
        return $this->nReps;
    }

    /**
     * Set frustrationPath
     *
     * @param string $frustrationPath
     * @return Chain
     */
    public function setFrustrationPath($frustrationPath)
    {
        $this->frustrationPath = $frustrationPath;
    
        return $this;
    }

    /**
     * Get frustrationPath
     *
     * @return string 
     */
    public function getFrustrationPath()
    {
        return $this->frustrationPath;
    }

    /**
     * Set pdbFilePath
     *
     * @param string $pdbFilePath
     * @return Chain
     */
    public function setPdbFilePath($pdbFilePath)
    {
        $this->pdbFilePath = $pdbFilePath;
    
        return $this;
    }

    /**
     * Get pdbFilePath
     *
     * @return string 
     */
    public function getPdbFilePath()
    {
        return $this->pdbFilePath;
    }

    /**
     * Set pdbFastaPath
     *
     * @param string $pdbFastaPath
     * @return Chain
     */
    public function setPdbFastaPath($pdbFastaPath)
    {
        $this->pdbFastaPath = $pdbFastaPath;
    
        return $this;
    }

    /**
     * Get pdbFastaPath
     *
     * @return string 
     */
    public function getPdbFastaPath()
    {
        return $this->pdbFastaPath;
    }

    /**
     * Set startStructFrac
     *
     * @param integer $startStructFrac
     * @return Chain
     */
    public function setStartStructFrac($startStructFrac)
    {
        $this->startStructFrac = $startStructFrac;
    
        return $this;
    }

    /**
     * Get startStructFrac
     *
     * @return integer 
     */
    public function getStartStructFrac()
    {
        return $this->startStructFrac;
    }

    /**
     * Set endStructFrac
     *
     * @param integer $endStructFrac
     * @return Chain
     */
    public function setEndStructFrac($endStructFrac)
    {
        $this->endStructFrac = $endStructFrac;
    
        return $this;
    }

    /**
     * Get endStructFrac
     *
     * @return integer 
     */
    public function getEndStructFrac()
    {
        return $this->endStructFrac;
    }

    /**
     * Set missingResidues
     *
     * @param integer $missingResidues
     * @return Chain
     */
    public function setMissingResidues($missingResidues)
    {
        $this->missingResidues = $missingResidues;
    
        return $this;
    }

    /**
     * Get missingResidues
     *
     * @return integer 
     */
    public function getMissingResidues()
    {
        return $this->missingResidues;
    }

    /**
     * Set nonRedundantSet
     *
     * @param \bool $nonRedundantSet
     * @return Chain
     */
    public function setNonRedundantSet(\bool $nonRedundantSet)
    {
        $this->nonRedundantSet = $nonRedundantSet;
    
        return $this;
    }

    /**
     * Get nonRedundantSet
     *
     * @return \bool 
     */
    public function getNonRedundantSet()
    {
        return $this->nonRedundantSet;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return Chain
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;
    
        return $this;
    }

    /**
     * Get observations
     *
     * @return string 
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set protein
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Protein $protein
     * @return Chain
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
}
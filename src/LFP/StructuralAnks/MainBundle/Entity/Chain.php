<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chain
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LFP\StructuralAnks\MainBundle\Entity\Repository\ChainRepository")
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    protected $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="SubGroup", type="string", length=255, nullable=true)
     */
    protected $subGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", length=255, nullable=true)
     */
    protected $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="nReps", type="integer", length=255, nullable=true)
     */
    protected $nReps;
    
    /**
     * @var string
     *
     * @ORM\Column(name="frustrationPath", type="string", length=255, nullable=true)
     */
    protected $frustrationPath;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pdbFilePath", type="string", length=255, nullable=true)
     */
    protected $pdbFilePath;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pdbFastaPath", type="string", length=255, nullable=true)
     */
    protected $pdbFastaPath;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="startStructFrac", type="integer", length=255, nullable=true)
     */
    protected $startStructFrac;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="endStructFrac", type="integer", length=255, nullable=true)
     */
    protected $endStructFrac;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="missingResiduesCount", type="integer", length=255, nullable=true)
     */
    protected $missingResiduesCount;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="nonRedundantSet", type="boolean", length=255)
     */
    protected $nonRedundantSet;
    
    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=255, nullable=true)
     */
    protected $observations;

    /**
     *  @ORM\OneToOne(targetEntity="ChainStructuralProperties", mappedBy="chain")
     */
    protected $chainStructuralProperties;
    
    /**
     *  @ORM\OneToOne(targetEntity="FrustrationRes", mappedBy="chain")
     */
    protected $frustrationRes;
    
    /**
     *  @ORM\OneToOne(targetEntity="FrustrationCont", mappedBy="chain")
     */
    protected $frustrationCont;
    
    /**
     *  @ORM\ManyToOne(targetEntity="Protein", inversedBy="chains")
     */
    protected $protein;
    
    /**
     *  @ORM\ManyToOne(targetEntity="Structure", inversedBy="chains")
     */
    protected $structure;

    /**
     *  @ORM\OneToMany(targetEntity="Residue", mappedBy="chain")
     */
    protected $residues;
    
    /**
     *  @ORM\OneToMany(targetEntity="MissingRes", mappedBy="chain")
     */
    protected $missingResidues;
    
    /**
     *  @ORM\OneToMany(targetEntity="StructuralRepeat", mappedBy="chain")
     */
    protected $structuralRepeats;
    

    
    
    public function __construct() {
        $this->residues = new \Doctrine\Common\Collections\ArrayCollection();
        $this->missingResidues = new \Doctrine\Common\Collections\ArrayCollection();
        $this->structuralRepeats = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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

//    /**
//     * Set missingResidues
//     *
//     * @param integer $missingResidues
//     * @return Chain
//     */
//    public function setMissingResidues($missingResidues)
//    {
//        $this->missingResidues = $missingResidues;
//    
//        return $this;
//    }

    

    /**
     * Set nonRedundantSet
     *
     * @param \bool $nonRedundantSet
     * @return Chain
     */
    public function setNonRedundantSet($nonRedundantSet)
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

    /**
     * Set missingResiduesCount
     *
     * @param integer $missingResiduesCount
     * @return Chain
     */
    public function setMissingResiduesCount($missingResiduesCount)
    {
        $this->missingResiduesCount = $missingResiduesCount;
    
        return $this;
    }

    /**
     * Get missingResiduesCount
     *
     * @return integer 
     */
    public function getMissingResiduesCount()
    {
        return $this->missingResiduesCount;
    }

    /**
     * Add residues
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Residue $residues
     * @return Chain
     */
    public function addResidue(\LFP\StructuralAnks\MainBundle\Entity\Residue $residues)
    {
        $this->residues[] = $residues;
    
        return $this;
    }

    /**
     * Remove residues
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Residue $residues
     */
    public function removeResidue(\LFP\StructuralAnks\MainBundle\Entity\Residue $residues)
    {
        $this->residues->removeElement($residues);
    }

    /**
     * Get residues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResidues()
    {
        return $this->residues;
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
     * Add missingResidues
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues
     * @return Chain
     */
    public function addMissingResidues(\LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues)
    {
        $this->missingResidues[] = $missingResidues;
    
        return $this;
    }

    /**
     * Remove missingResidues
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues
     */
    public function removeMissingResidues(\LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues)
    {
        $this->missingResidues->removeElement($missingResidues);
    }

    /**
     * Set chainStructuralProperties
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\ChainStructuralProperties $chainStructuralProperties
     * @return Chain
     */
    public function setChainStructuralProperties(\LFP\StructuralAnks\MainBundle\Entity\ChainStructuralProperties $chainStructuralProperties = null)
    {
        $this->chainStructuralProperties = $chainStructuralProperties;
    
        return $this;
    }

    /**
     * Get chainStructuralProperties
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\ChainStructuralProperties 
     */
    public function getChainStructuralProperties()
    {
        return $this->chainStructuralProperties;
    }

    /**
     * Add structuralRepeats
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat $structuralRepeats
     * @return Chain
     */
    public function addStructuralRepeat(\LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat $structuralRepeats)
    {
        $this->structuralRepeats[] = $structuralRepeats;
    
        return $this;
    }

    /**
     * Remove structuralRepeats
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat $structuralRepeats
     */
    public function removeStructuralRepeat(\LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat $structuralRepeats)
    {
        $this->structuralRepeats->removeElement($structuralRepeats);
    }

    /**
     * Get structuralRepeats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStructuralRepeats()
    {
        return $this->structuralRepeats;
    }

    /**
     * Set frustrationRes
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\FrustrationRes $frustrationRes
     * @return Chain
     */
    public function setFrustrationRes(\LFP\StructuralAnks\MainBundle\Entity\FrustrationRes $frustrationRes = null)
    {
        $this->frustrationRes = $frustrationRes;
    
        return $this;
    }

    /**
     * Get frustrationRes
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\FrustrationRes 
     */
    public function getFrustrationRes()
    {
        return $this->frustrationRes;
    }

    /**
     * Set frustrationCont
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\FrustrationCont $frustrationCont
     * @return Chain
     */
    public function setFrustrationCont(\LFP\StructuralAnks\MainBundle\Entity\FrustrationCont $frustrationCont = null)
    {
        $this->frustrationCont = $frustrationCont;
    
        return $this;
    }

    /**
     * Get frustrationCont
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\FrustrationCont 
     */
    public function getFrustrationCont()
    {
        return $this->frustrationCont;
    }

    /**
     * Set structure
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Structure $structure
     * @return Chain
     */
    public function setStructure(\LFP\StructuralAnks\MainBundle\Entity\Structure $structure = null)
    {
        $this->structure = $structure;
    
        return $this;
    }

    /**
     * Get structure
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\Structure 
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Add missingResidues
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues
     * @return Chain
     */
    public function addMissingResidue(\LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues)
    {
        $this->missingResidues[] = $missingResidues;
    
        return $this;
    }

    /**
     * Remove missingResidues
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues
     */
    public function removeMissingResidue(\LFP\StructuralAnks\MainBundle\Entity\MissingRes $missingResidues)
    {
        $this->missingResidues->removeElement($missingResidues);
    }
}
<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Protein
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Protein
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
     * @ORM\Column(name="uniprot", type="string", length=255)
     */
    private $uniprot;

    /**
     * @var string
     *
     * @ORM\Column(name="entryName", type="string", length=255, nullable=true)
     */
    private $entryName;

    /**
     * @var string
     *
     * @ORM\Column(name="proteinNames", type="string", length=255, nullable=true)
     */
    private $proteinNames;

    /**
     * @var string
     *
     * @ORM\Column(name="organism", type="string", length=255, nullable=true)
     */
    private $organism;

    /**
     * @var integer
     *
     * @ORM\Column(name="organismId", type="integer", nullable=true)
     */
    private $organismId;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="repType", type="string", length=255, nullable=true)
     */
    private $repType;

    /**
     * @var string
     *
     * @ORM\Column(name="subGroup", type="string", length=255, nullable=true)
     */
    private $subGroup;

    /**
     *  @ORM\OneToMany(targetEntity="Experiment", mappedBy="protein")
     */
    protected $experiment;
    
    /**
     *  @ORM\OneToMany(targetEntity="Chain", mappedBy="protein")
     */
    protected $chains;
    /**
     *  @ORM\OneToMany(targetEntity="PFAMRepeat", mappedBy="protein")
     */
    protected $pfamRepeats;
    
    /**
     * @ORM\ManyToMany(targetEntity="GODef", mappedBy="proteins")
     */
    private $goDefs;
    
    
    
    public function __construct() {
        $this->chains = new ArrayCollection();
        $this->pfamRepeats = new ArrayCollection();
        $this->goDefs = new ArrayCollection();
        $this->experiments = new ArrayCollection();
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
     * Set uniprot
     *
     * @param string $uniprot
     * @return Protein
     */
    public function setUniprot($uniprot)
    {
        $this->uniprot = $uniprot;
    
        return $this;
    }

    /**
     * Get uniprot
     *
     * @return string 
     */
    public function getUniprot()
    {
        return $this->uniprot;
    }

    /**
     * Set entryName
     *
     * @param string $entryName
     * @return Protein
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
    
        return $this;
    }

    /**
     * Get entryName
     *
     * @return string 
     */
    public function getEntryName()
    {
        return $this->entryName;
    }

    /**
     * Set proteinNames
     *
     * @param string $proteinNames
     * @return Protein
     */
    public function setProteinNames($proteinNames)
    {
        $this->proteinNames = $proteinNames;
    
        return $this;
    }

    /**
     * Get proteinNames
     *
     * @return string 
     */
    public function getProteinNames()
    {
        return $this->proteinNames;
    }

    /**
     * Set organism
     *
     * @param string $organism
     * @return Protein
     */
    public function setOrganism($organism)
    {
        $this->organism = $organism;
    
        return $this;
    }

    /**
     * Get organism
     *
     * @return string 
     */
    public function getOrganism()
    {
        return $this->organism;
    }

    /**
     * Set organismId
     *
     * @param integer $organismId
     * @return Protein
     */
    public function setOrganismId($organismId)
    {
        $this->organismId = $organismId;
    
        return $this;
    }

    /**
     * Get organismId
     *
     * @return integer 
     */
    public function getOrganismId()
    {
        return $this->organismId;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return Protein
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
     * Set repType
     *
     * @param string $repType
     * @return Protein
     */
    public function setRepType($repType)
    {
        $this->repType = $repType;
    
        return $this;
    }

    /**
     * Get repType
     *
     * @return string 
     */
    public function getRepType()
    {
        return $this->repType;
    }

    /**
     * Set subGroup
     *
     * @param string $subGroup
     * @return Protein
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
     * Add chains
     *
     * @param Chain $chains
     * @return Protein
     */
    public function addChain(Chain $chains)
    {
        $this->chains[] = $chains;
    
        return $this;
    }

    /**
     * Remove chains
     *
     * @param Chain $chains
     */
    public function removeChain(Chain $chains)
    {
        $this->chains->removeElement($chains);
    }

    /**
     * Get chains
     *
     * @return Collection 
     */
    public function getChains()
    {
        return $this->chains;
    }

    /**
     * Set experiment
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Experiment $experiment
     * @return Protein
     */
    public function setExperiment(\LFP\StructuralAnks\MainBundle\Entity\Experiment $experiment = null)
    {
        $this->experiment = $experiment;
    
        return $this;
    }

    /**
     * Get experiment
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\Experiment 
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * Add pfamRepeats
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\PFAMRepeat $pfamRepeats
     * @return Protein
     */
    public function addPfamRepeat(\LFP\StructuralAnks\MainBundle\Entity\PFAMRepeat $pfamRepeats)
    {
        $this->pfamRepeats[] = $pfamRepeats;
    
        return $this;
    }

    /**
     * Remove pfamRepeats
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\PFAMRepeat $pfamRepeats
     */
    public function removePfamRepeat(\LFP\StructuralAnks\MainBundle\Entity\PFAMRepeat $pfamRepeats)
    {
        $this->pfamRepeats->removeElement($pfamRepeats);
    }

    /**
     * Get pfamRepeats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPfamRepeats()
    {
        return $this->pfamRepeats;
    }

    /**
     * Add goDefs
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\GODef $goDefs
     * @return Protein
     */
    public function addGoDef(\LFP\StructuralAnks\MainBundle\Entity\GODef $goDefs)
    {
        $this->goDefs[] = $goDefs;
    
        return $this;
    }

    /**
     * Remove goDefs
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\GODef $goDefs
     */
    public function removeGoDef(\LFP\StructuralAnks\MainBundle\Entity\GODef $goDefs)
    {
        $this->goDefs->removeElement($goDefs);
    }

    /**
     * Get goDefs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGoDefs()
    {
        return $this->goDefs;
    }

    /**
     * Add experiment
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Experiment $experiment
     * @return Protein
     */
    public function addExperiment(\LFP\StructuralAnks\MainBundle\Entity\Experiment $experiment)
    {
        $this->experiment[] = $experiment;
    
        return $this;
    }

    /**
     * Remove experiment
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Experiment $experiment
     */
    public function removeExperiment(\LFP\StructuralAnks\MainBundle\Entity\Experiment $experiment)
    {
        $this->experiment->removeElement($experiment);
    }
}
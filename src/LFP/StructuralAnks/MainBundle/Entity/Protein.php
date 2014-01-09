<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

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
     * @ORM\Column(name="entryName", type="string", length=255)
     */
    private $entryName;

    /**
     * @var string
     *
     * @ORM\Column(name="proteinNames", type="string", length=255)
     */
    private $proteinNames;

    /**
     * @var string
     *
     * @ORM\Column(name="organism", type="string", length=255)
     */
    private $organism;

    /**
     * @var integer
     *
     * @ORM\Column(name="organismId", type="integer")
     */
    private $organismId;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer")
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="repType", type="string", length=255)
     */
    private $repType;

    /**
     * @var string
     *
     * @ORM\Column(name="subGroup", type="string", length=255)
     */
    private $subGroup;

    /**
     *  @ORM\OneToMany(targetEntity="Chain", mappedBy="protein")
     */
    protected $chains;
    
    public function __construct() {
        $this->chains = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \LFP\StructuralAnks\MainBundle\Entity\Chain $chains
     * @return Protein
     */
    public function addChain(\LFP\StructuralAnks\MainBundle\Entity\Chain $chains)
    {
        $this->chains[] = $chains;
    
        return $this;
    }

    /**
     * Remove chains
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Chain $chains
     */
    public function removeChain(\LFP\StructuralAnks\MainBundle\Entity\Chain $chains)
    {
        $this->chains->removeElement($chains);
    }

    /**
     * Get chains
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChains()
    {
        return $this->chains;
    }
}
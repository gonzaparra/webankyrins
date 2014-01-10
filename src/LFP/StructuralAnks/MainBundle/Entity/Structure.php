<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Structure
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Structure
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
     * @ORM\Column(name="pdbId", type="string", length=255, nullable=true)
     */
    private $pdbId;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pubDate", type="datetime", nullable=true)
     */
    private $pubDate;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=255, nullable=true)
     */
    private $method;

    /**
     * @var float
     *
     * @ORM\Column(name="resolution", type="float", length=255, nullable=true)
     */
    private $resolution=null;

    /**
     * @var string
     *
     * @ORM\Column(name="overallFrustration", type="string", length=255, nullable=true)
     */
    private $overallFrustration;

    /**
     * @var string
     *
     * @ORM\Column(name="subGroup", type="string", length=255, nullable=true)
     */
    private $subGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="mainRepeat", type="string", length=255, nullable=true)
     */
    private $mainRepeat;

    /**
     * @var integer
     *
     * @ORM\Column(name="nChains", type="integer", nullable=true)
     */
    private $nChains;

    /**
     * @var string
     *
     * @ORM\Column(name="bu", type="string", length=255, nullable=true)
     */
    private $bu;

    /**
     * @var string
     *
     * @ORM\Column(name="buComp", type="string", length=255, nullable=true)
     */
    private $buComp;

    /**
     *  @ORM\OneToMany(targetEntity="Chain", mappedBy="structure")
     */
    protected $chains;
    
    /**
     *  @ORM\ManyToOne(targetEntity="Publication", inversedBy="structure")
     */
    protected $publication;
    
    public function __construct() {
        $this->chains = new ArrayCollection();
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
     * Set pdbId
     *
     * @param string $pdbId
     * @return Structure
     */
    public function setPdbId($pdbId)
    {
        $this->pdbId = $pdbId;
    
        return $this;
    }

    /**
     * Get pdbId
     *
     * @return string 
     */
    public function getPdbId()
    {
        return $this->pdbId;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Structure
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Structure
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set pubDate
     *
     * @param \DateTime $pubDate
     * @return Structure
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;
    
        return $this;
    }

    /**
     * Get pubDate
     *
     * @return \DateTime 
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * Set method
     *
     * @param string $method
     * @return Structure
     */
    public function setMethod($method)
    {
        $this->method = $method;
    
        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set resolution
     *
     * @param float $resolution
     * @return Structure
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
    
        return $this;
    }

    /**
     * Get resolution
     *
     * @return float 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set overallFrustration
     *
     * @param string $overallFrustration
     * @return Structure
     */
    public function setOverallFrustration($overallFrustration)
    {
        $this->overallFrustration = $overallFrustration;
    
        return $this;
    }

    /**
     * Get overallFrustration
     *
     * @return string 
     */
    public function getOverallFrustration()
    {
        return $this->overallFrustration;
    }

    /**
     * Set subGroup
     *
     * @param string $subGroup
     * @return Structure
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
     * Set nChains
     *
     * @param integer $nChains
     * @return Structure
     */
    public function setNChains($nChains)
    {
        $this->nChains = $nChains;
    
        return $this;
    }

    /**
     * Get nChains
     *
     * @return integer 
     */
    public function getNChains()
    {
        return $this->nChains;
    }

    /**
     * Set bu
     *
     * @param string $bu
     * @return Structure
     */
    public function setBu($bu)
    {
        $this->bu = $bu;
    
        return $this;
    }

    /**
     * Get bu
     *
     * @return string 
     */
    public function getBu()
    {
        return $this->bu;
    }

    /**
     * Set buComp
     *
     * @param string $buComp
     * @return Structure
     */
    public function setBuComp($buComp)
    {
        $this->buComp = $buComp;
    
        return $this;
    }

    /**
     * Get buComp
     *
     * @return string 
     */
    public function getBuComp()
    {
        return $this->buComp;
    }

    /**
     * Add chains
     *
     * @param Chain $chains
     * @return Structure
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
     * Set publication
     *
     * @param Publication $publication
     * @return Structure
     */
    public function setPublication(Publication $publication = null)
    {
        $this->publication = $publication;
    
        return $this;
    }

    /**
     * Get publication
     *
     * @return Publication 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set mainRepeat
     *
     * @param string $mainRepeat
     * @return Structure
     */
    public function setMainRepeat($mainRepeat)
    {
        $this->mainRepeat = $mainRepeat;
    
        return $this;
    }

    /**
     * Get mainRepeat
     *
     * @return string 
     */
    public function getMainRepeat()
    {
        return $this->mainRepeat;
    }
}

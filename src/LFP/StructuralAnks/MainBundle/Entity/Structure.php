<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

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
     * @ORM\Column(name="pdbId", type="string", length=255)
     */
    private $pdbId;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pubDate", type="datetime")
     */
    private $pubDate;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=255)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=255)
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="overallFrustration", type="string", length=255)
     */
    private $overallFrustration;

    /**
     * @var string
     *
     * @ORM\Column(name="subGroup", type="string", length=255)
     */
    private $subGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="nChains", type="integer")
     */
    private $nChains;

    /**
     * @var string
     *
     * @ORM\Column(name="bu", type="string", length=255)
     */
    private $bu;

    /**
     * @var string
     *
     * @ORM\Column(name="buComp", type="string", length=255)
     */
    private $buComp;


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
     * @param string $resolution
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
     * @return string 
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
}
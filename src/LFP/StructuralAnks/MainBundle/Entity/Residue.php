<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Residue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Residue
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
     * @ORM\Column(name="uniprotPos", type="string", length=255)
     */
    private $uniprotPos;

    /**
     * @var string
     *
     * @ORM\Column(name="resId", type="string", length=255, nullable=true)
     */
    private $resId;

    /**
     * @var string
     *
     * @ORM\Column(name="dssp", type="string", length=255, nullable=true)
     */
    private $dssp;

    /**
     * @var float
     *
     * @ORM\Column(name="perresMutFrstVal", type="float", nullable=true)
     */
    private $perresMutFrstVal;

    /**
     * @var float
     *
     * @ORM\Column(name="sasa", type="float", nullable=true)
     */
    private $sasa;

    /**
     * @var float
     *
     * @ORM\Column(name="energy", type="float", nullable=true)
     */
    private $energy;

    /**
     * @var float
     *
     * @ORM\Column(name="pasta", type="float", nullable=true)
     */
    private $pasta;

    /**
     * @var float
     *
     * @ORM\Column(name="disorder", type="float", nullable=true)
     */
    private $disorder;

    /**
     * @var integer
     *
     * @ORM\Column(name="chainNConts", type="integer", nullable=true)
     */
    private $chainNConts;

    
    /**
     *  @ORM\ManyToOne(targetEntity="Chain", inversedBy="residues")
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
     * Set uniprotPos
     *
     * @param string $uniprotPos
     * @return Residue
     */
    public function setUniprotPos($uniprotPos)
    {
        $this->uniprotPos = $uniprotPos;
    
        return $this;
    }

    /**
     * Get uniprotPos
     *
     * @return string 
     */
    public function getUniprotPos()
    {
        return $this->uniprotPos;
    }

    /**
     * Set resId
     *
     * @param string $resId
     * @return Residue
     */
    public function setResId($resId)
    {
        $this->resId = $resId;
    
        return $this;
    }

    /**
     * Get resId
     *
     * @return string 
     */
    public function getResId()
    {
        return $this->resId;
    }

    /**
     * Set dssp
     *
     * @param string $dssp
     * @return Residue
     */
    public function setDssp($dssp)
    {
        $this->dssp = $dssp;
    
        return $this;
    }

    /**
     * Get dssp
     *
     * @return string 
     */
    public function getDssp()
    {
        return $this->dssp;
    }

    /**
     * Set perresMutFrstVal
     *
     * @param float $perresMutFrstVal
     * @return Residue
     */
    public function setPerresMutFrstVal($perresMutFrstVal)
    {
        $this->perresMutFrstVal = $perresMutFrstVal;
    
        return $this;
    }

    /**
     * Get perresMutFrstVal
     *
     * @return float 
     */
    public function getPerresMutFrstVal()
    {
        return $this->perresMutFrstVal;
    }

    /**
     * Set sasa
     *
     * @param float $sasa
     * @return Residue
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
     * Set energy
     *
     * @param float $energy
     * @return Residue
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    
        return $this;
    }

    /**
     * Get energy
     *
     * @return float 
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set pasta
     *
     * @param float $pasta
     * @return Residue
     */
    public function setPasta($pasta)
    {
        $this->pasta = $pasta;
    
        return $this;
    }

    /**
     * Get pasta
     *
     * @return float 
     */
    public function getPasta()
    {
        return $this->pasta;
    }

    /**
     * Set disorder
     *
     * @param float $disorder
     * @return Residue
     */
    public function setDisorder($disorder)
    {
        $this->disorder = $disorder;
    
        return $this;
    }

    /**
     * Get disorder
     *
     * @return float 
     */
    public function getDisorder()
    {
        return $this->disorder;
    }

    /**
     * Set chainNConts
     *
     * @param integer $chainNConts
     * @return Residue
     */
    public function setChainNConts($chainNConts)
    {
        $this->chainNConts = $chainNConts;
    
        return $this;
    }

    /**
     * Get chainNConts
     *
     * @return integer 
     */
    public function getChainNConts()
    {
        return $this->chainNConts;
    }

    /**
     * Set chain
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Chain $chain
     * @return Residue
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
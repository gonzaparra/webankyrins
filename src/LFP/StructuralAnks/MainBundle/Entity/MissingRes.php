<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MissingRes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MissingRes
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
     * @var integer
     *
     * @ORM\Column(name="resNum", type="integer", nullable=true)
     */
    private $resNum;

    /**
     *  @ORM\ManyToOne(targetEntity="Chain", inversedBy="missingResidues")
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
     * Set resNum
     *
     * @param integer $resNum
     * @return MissingRes
     */
    public function setResNum($resNum)
    {
        $this->resNum = $resNum;
    
        return $this;
    }

    /**
     * Get resNum
     *
     * @return integer 
     */
    public function getResNum()
    {
        return $this->resNum;
    }

    /**
     * Set chain
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Chain $chain
     * @return MissingRes
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
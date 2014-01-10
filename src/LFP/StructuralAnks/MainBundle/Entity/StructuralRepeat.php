<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StructuralRepeat
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class StructuralRepeat
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
     * @ORM\Column(name="start", type="integer", nullable=true)
     */
    private $start;

    /**
     * @var integer
     *
     * @ORM\Column(name="end", type="integer", nullable=true)
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="confStart", type="integer", nullable=true)
     */
    private $confStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="confEnd", type="integer", nullable=true)
     */
    private $confEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", nullable=true)
     */
    private $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="confLength", type="integer", nullable=true)
     */
    private $confLength;

    /**
     * @var string
     *
     * @ORM\Column(name="consensus", type="string", length=255, nullable=true)
     */
    private $consensus;

    /**
     * @var integer
     *
     * @ORM\Column(name="cannonicalConts", type="integer", nullable=true)
     */
    private $cannonicalConts;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     *  @ORM\ManyToOne(targetEntity="Chain", inversedBy="structuralRepeats")
     */
    protected $chain;
    
    /**
     *  @ORM\OneToMany(targetEntity="CharactPos", mappedBy="structuralRepeat")
     */
    protected $charactPos;
    
    /**
     *  @ORM\OneToMany(targetEntity="StructuralRepModif", mappedBy="structuralRepeat")
     */
    protected $structuralRepModifs;
    
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
     * Set start
     *
     * @param integer $start
     * @return StructuralRepeat
     */
    public function setStart($start)
    {
        $this->start = $start;
    
        return $this;
    }

    /**
     * Get start
     *
     * @return integer 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param integer $end
     * @return StructuralRepeat
     */
    public function setEnd($end)
    {
        $this->end = $end;
    
        return $this;
    }

    /**
     * Get end
     *
     * @return integer 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set confStart
     *
     * @param integer $confStart
     * @return StructuralRepeat
     */
    public function setConfStart($confStart)
    {
        $this->confStart = $confStart;
    
        return $this;
    }

    /**
     * Get confStart
     *
     * @return integer 
     */
    public function getConfStart()
    {
        return $this->confStart;
    }

    /**
     * Set confEnd
     *
     * @param integer $confEnd
     * @return StructuralRepeat
     */
    public function setConfEnd($confEnd)
    {
        $this->confEnd = $confEnd;
    
        return $this;
    }

    /**
     * Get confEnd
     *
     * @return integer 
     */
    public function getConfEnd()
    {
        return $this->confEnd;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return StructuralRepeat
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
     * Set confLength
     *
     * @param integer $confLength
     * @return StructuralRepeat
     */
    public function setConfLength($confLength)
    {
        $this->confLength = $confLength;
    
        return $this;
    }

    /**
     * Get confLength
     *
     * @return integer 
     */
    public function getConfLength()
    {
        return $this->confLength;
    }

    /**
     * Set consensus
     *
     * @param string $consensus
     * @return StructuralRepeat
     */
    public function setConsensus($consensus)
    {
        $this->consensus = $consensus;
    
        return $this;
    }

    /**
     * Get consensus
     *
     * @return string 
     */
    public function getConsensus()
    {
        return $this->consensus;
    }

    /**
     * Set cannonicalConts
     *
     * @param integer $cannonicalConts
     * @return StructuralRepeat
     */
    public function setCannonicalConts($cannonicalConts)
    {
        $this->cannonicalConts = $cannonicalConts;
    
        return $this;
    }

    /**
     * Get cannonicalConts
     *
     * @return integer 
     */
    public function getCannonicalConts()
    {
        return $this->cannonicalConts;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return StructuralRepeat
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
     * Constructor
     */
    public function __construct()
    {
        $this->charactPos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->structuralRepModifs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set chain
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Chain $chain
     * @return StructuralRepeat
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

    /**
     * Add charactPos
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\CharactPos $charactPos
     * @return StructuralRepeat
     */
    public function addCharactPo(\LFP\StructuralAnks\MainBundle\Entity\CharactPos $charactPos)
    {
        $this->charactPos[] = $charactPos;
    
        return $this;
    }

    /**
     * Remove charactPos
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\CharactPos $charactPos
     */
    public function removeCharactPo(\LFP\StructuralAnks\MainBundle\Entity\CharactPos $charactPos)
    {
        $this->charactPos->removeElement($charactPos);
    }

    /**
     * Get charactPos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCharactPos()
    {
        return $this->charactPos;
    }

    /**
     * Add structuralRepModifs
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\StructuralRepModif $structuralRepModifs
     * @return StructuralRepeat
     */
    public function addStructuralRepModif(\LFP\StructuralAnks\MainBundle\Entity\StructuralRepModif $structuralRepModifs)
    {
        $this->structuralRepModifs[] = $structuralRepModifs;
    
        return $this;
    }

    /**
     * Remove structuralRepModifs
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\StructuralRepModif $structuralRepModifs
     */
    public function removeStructuralRepModif(\LFP\StructuralAnks\MainBundle\Entity\StructuralRepModif $structuralRepModifs)
    {
        $this->structuralRepModifs->removeElement($structuralRepModifs);
    }

    /**
     * Get structuralRepModifs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStructuralRepModifs()
    {
        return $this->structuralRepModifs;
    }
}
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
     * @ORM\Column(name="start", type="integer")
     */
    private $start;

    /**
     * @var integer
     *
     * @ORM\Column(name="end", type="integer")
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="confStart", type="integer")
     */
    private $confStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="confEnd", type="integer")
     */
    private $confEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer")
     */
    private $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="confLength", type="integer")
     */
    private $confLength;

    /**
     * @var string
     *
     * @ORM\Column(name="consensus", type="string", length=255)
     */
    private $consensus;

    /**
     * @var integer
     *
     * @ORM\Column(name="cannonicalConts", type="integer")
     */
    private $cannonicalConts;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
}
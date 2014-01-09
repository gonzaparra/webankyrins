<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StructuralRepModif
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class StructuralRepModif
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="start", type="integer")
     */
    private $start;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer")
     */
    private $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="repNum", type="integer")
     */
    private $repNum;

    /**
     *  @ORM\ManyToOne(targetEntity="StructuralRepeat", inversedBy="structuralRepModifs")
     */
    protected $structuralRepeat;
    
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
     * Set type
     *
     * @param string $type
     * @return StructuralRepModif
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
     * Set start
     *
     * @param integer $start
     * @return StructuralRepModif
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
     * Set length
     *
     * @param integer $length
     * @return StructuralRepModif
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
     * Set repNum
     *
     * @param integer $repNum
     * @return StructuralRepModif
     */
    public function setRepNum($repNum)
    {
        $this->repNum = $repNum;
    
        return $this;
    }

    /**
     * Get repNum
     *
     * @return integer 
     */
    public function getRepNum()
    {
        return $this->repNum;
    }

    /**
     * Set structuralRepeat
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat $structuralRepeat
     * @return StructuralRepModif
     */
    public function setStructuralRepeat(\LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat $structuralRepeat = null)
    {
        $this->structuralRepeat = $structuralRepeat;
    
        return $this;
    }

    /**
     * Get structuralRepeat
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat 
     */
    public function getStructuralRepeat()
    {
        return $this->structuralRepeat;
    }
}
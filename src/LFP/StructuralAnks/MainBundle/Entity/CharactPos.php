<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharactPos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CharactPos
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
     * @ORM\Column(name="charactPos", type="integer", nullable=true)
     */
    private $charactPos;

    /**
     *  @ORM\ManyToOne(targetEntity="StructuralRepeat", inversedBy="charactPos")
     */
    protected $structuralRepeat;
    
    /**
     *  @ORM\ManyToOne(targetEntity="Residue", inversedBy="charactPos")
     */
    protected $residue;
    
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
     * Set charactPos
     *
     * @param integer $charactPos
     * @return CharactPos
     */
    public function setCharactPos($charactPos = null)
    {
        if($charactPos){
            $this->charactPos = $charactPos;
        }
        return $this;
    }

    /**
     * Get charactPos
     *
     * @return integer 
     */
    public function getCharactPos()
    {
        return $this->charactPos;
    }

    /**
     * Set structuralRepeat
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat $structuralRepeat
     * @return CharactPos
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

   

    /**
     * Set residue
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Residue $residue
     * @return CharactPos
     */
    public function setResidue(\LFP\StructuralAnks\MainBundle\Entity\Residue $residue = null)
    {
        $this->residue = $residue;
    
        return $this;
    }

    /**
     * Get residue
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\Residue 
     */
    public function getResidue()
    {
        return $this->residue;
    }
}
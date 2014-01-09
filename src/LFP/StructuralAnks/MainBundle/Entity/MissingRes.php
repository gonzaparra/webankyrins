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
     * @ORM\Column(name="resNum", type="integer")
     */
    private $resNum;


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
}
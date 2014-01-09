<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrustrationCont
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FrustrationRes
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
     * @ORM\Column(name="state", type="integer")
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="confMinFrst", type="integer")
     */
    private $confMinFrst;

    /**
     * @var integer
     *
     * @ORM\Column(name="confNeuFrst", type="integer")
     */
    private $confNeuFrst;

    /**
     * @var integer
     *
     * @ORM\Column(name="confMaxFrst", type="integer")
     */
    private $confMaxFrst;

    /**
     * @var integer
     *
     * @ORM\Column(name="mutMinFrst", type="integer")
     */
    private $mutMinFrst;

    /**
     * @var integer
     *
     * @ORM\Column(name="mutNeuFrst", type="integer")
     */
    private $mutNeuFrst;

    /**
     * @var integer
     *
     * @ORM\Column(name="mutMaxFrst", type="integer")
     */
    private $mutMaxFrst;

    /**
     * @var integer
     *
     * @ORM\Column(name="nConts", type="integer")
     */
    private $nRes;
    
    /**
     *  @ORM\OneToOne(targetEntity="Chain", inversedBy="frustrationRes")
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
     * Set state
     *
     * @param integer $state
     * @return FrustrationCont
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set confMinFrst
     *
     * @param integer $confMinFrst
     * @return FrustrationCont
     */
    public function setConfMinFrst($confMinFrst)
    {
        $this->confMinFrst = $confMinFrst;
    
        return $this;
    }

    /**
     * Get confMinFrst
     *
     * @return integer 
     */
    public function getConfMinFrst()
    {
        return $this->confMinFrst;
    }

    /**
     * Set confNeuFrst
     *
     * @param integer $confNeuFrst
     * @return FrustrationCont
     */
    public function setConfNeuFrst($confNeuFrst)
    {
        $this->confNeuFrst = $confNeuFrst;
    
        return $this;
    }

    /**
     * Get confNeuFrst
     *
     * @return integer 
     */
    public function getConfNeuFrst()
    {
        return $this->confNeuFrst;
    }

    /**
     * Set confMaxFrst
     *
     * @param integer $confMaxFrst
     * @return FrustrationCont
     */
    public function setConfMaxFrst($confMaxFrst)
    {
        $this->confMaxFrst = $confMaxFrst;
    
        return $this;
    }

    /**
     * Get confMaxFrst
     *
     * @return integer 
     */
    public function getConfMaxFrst()
    {
        return $this->confMaxFrst;
    }

    /**
     * Set mutMinFrst
     *
     * @param integer $mutMinFrst
     * @return FrustrationCont
     */
    public function setMutMinFrst($mutMinFrst)
    {
        $this->mutMinFrst = $mutMinFrst;
    
        return $this;
    }

    /**
     * Get mutMinFrst
     *
     * @return integer 
     */
    public function getMutMinFrst()
    {
        return $this->mutMinFrst;
    }

    /**
     * Set mutNeuFrst
     *
     * @param integer $mutNeuFrst
     * @return FrustrationCont
     */
    public function setMutNeuFrst($mutNeuFrst)
    {
        $this->mutNeuFrst = $mutNeuFrst;
    
        return $this;
    }

    /**
     * Get mutNeuFrst
     *
     * @return integer 
     */
    public function getMutNeuFrst()
    {
        return $this->mutNeuFrst;
    }

    /**
     * Set mutMaxFrst
     *
     * @param integer $mutMaxFrst
     * @return FrustrationCont
     */
    public function setMutMaxFrst($mutMaxFrst)
    {
        $this->mutMaxFrst = $mutMaxFrst;
    
        return $this;
    }

    /**
     * Get mutMaxFrst
     *
     * @return integer 
     */
    public function getMutMaxFrst()
    {
        return $this->mutMaxFrst;
    }

    /**
     * Set nRes
     *
     * @param integer $nConts
     * @return FrustrationRes
     */
    public function setNRes($nRes)
    {
        $this->nRes = $nRes;
    
        return $this;
    }

    /**
     * Get nRes
     *
     * @return integer 
     */
    public function getNRes()
    {
        return $this->nRes;
    }

    /**
     * Set chain
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Chain $chain
     * @return FrustrationRes
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
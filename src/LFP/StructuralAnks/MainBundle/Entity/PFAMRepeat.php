<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PFAMRepeat
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PFAMRepeat
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
     * @ORM\Column(name="pfamRepeat", type="integer")
     */
    private $pfamRepeat;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="score", type="float")
     */
    private $score;

    /**
     * @var float
     *
     * @ORM\Column(name="bias", type="float")
     */
    private $bias;

    /**
     * @var float
     *
     * @ORM\Column(name="cEValue", type="float")
     */
    private $cEValue;

    /**
     * @var float
     *
     * @ORM\Column(name="iEValue", type="float")
     */
    private $iEValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="hmmFrom", type="integer")
     */
    private $hmmFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="hmmTo", type="integer")
     */
    private $hmmTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="aliFrom", type="integer")
     */
    private $aliFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="aliTo", type="integer")
     */
    private $aliTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="envFrom", type="integer")
     */
    private $envFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="envTo", type="integer")
     */
    private $envTo;

    /**
     * @var string
     *
     * @ORM\Column(name="aliHmm", type="string", length=255)
     */
    private $aliHmm;

    /**
     * @var string
     *
     * @ORM\Column(name="aliRep", type="string", length=255)
     */
    private $aliRep;

    /**
     * @var string
     *
     * @ORM\Column(name="consensus", type="string", length=255)
     */
    private $consensus;

    /**
     * @var string
     *
     * @ORM\Column(name="deletions", type="string", length=255)
     */
    private $deletions;

    /**
     * @var string
     *
     * @ORM\Column(name="insertions", type="string", length=255)
     */
    private $insertions;


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
     * Set pfamRepeat
     *
     * @param integer $pfamRepeat
     * @return PFAMRepeat
     */
    public function setPfamRepeat($pfamRepeat)
    {
        $this->pfamRepeat = $pfamRepeat;
    
        return $this;
    }

    /**
     * Get pfamRepeat
     *
     * @return integer 
     */
    public function getPfamRepeat()
    {
        return $this->pfamRepeat;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PFAMRepeat
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set score
     *
     * @param float $score
     * @return PFAMRepeat
     */
    public function setScore($score)
    {
        $this->score = $score;
    
        return $this;
    }

    /**
     * Get score
     *
     * @return float 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set bias
     *
     * @param float $bias
     * @return PFAMRepeat
     */
    public function setBias($bias)
    {
        $this->bias = $bias;
    
        return $this;
    }

    /**
     * Get bias
     *
     * @return float 
     */
    public function getBias()
    {
        return $this->bias;
    }

    /**
     * Set cEValue
     *
     * @param float $cEValue
     * @return PFAMRepeat
     */
    public function setCEValue($cEValue)
    {
        $this->cEValue = $cEValue;
    
        return $this;
    }

    /**
     * Get cEValue
     *
     * @return float 
     */
    public function getCEValue()
    {
        return $this->cEValue;
    }

    /**
     * Set iEValue
     *
     * @param float $iEValue
     * @return PFAMRepeat
     */
    public function setIEValue($iEValue)
    {
        $this->iEValue = $iEValue;
    
        return $this;
    }

    /**
     * Get iEValue
     *
     * @return float 
     */
    public function getIEValue()
    {
        return $this->iEValue;
    }

    /**
     * Set hmmFrom
     *
     * @param integer $hmmFrom
     * @return PFAMRepeat
     */
    public function setHmmFrom($hmmFrom)
    {
        $this->hmmFrom = $hmmFrom;
    
        return $this;
    }

    /**
     * Get hmmFrom
     *
     * @return integer 
     */
    public function getHmmFrom()
    {
        return $this->hmmFrom;
    }

    /**
     * Set hmmTo
     *
     * @param integer $hmmTo
     * @return PFAMRepeat
     */
    public function setHmmTo($hmmTo)
    {
        $this->hmmTo = $hmmTo;
    
        return $this;
    }

    /**
     * Get hmmTo
     *
     * @return integer 
     */
    public function getHmmTo()
    {
        return $this->hmmTo;
    }

    /**
     * Set aliFrom
     *
     * @param integer $aliFrom
     * @return PFAMRepeat
     */
    public function setAliFrom($aliFrom)
    {
        $this->aliFrom = $aliFrom;
    
        return $this;
    }

    /**
     * Get aliFrom
     *
     * @return integer 
     */
    public function getAliFrom()
    {
        return $this->aliFrom;
    }

    /**
     * Set aliTo
     *
     * @param integer $aliTo
     * @return PFAMRepeat
     */
    public function setAliTo($aliTo)
    {
        $this->aliTo = $aliTo;
    
        return $this;
    }

    /**
     * Get aliTo
     *
     * @return integer 
     */
    public function getAliTo()
    {
        return $this->aliTo;
    }

    /**
     * Set envFrom
     *
     * @param integer $envFrom
     * @return PFAMRepeat
     */
    public function setEnvFrom($envFrom)
    {
        $this->envFrom = $envFrom;
    
        return $this;
    }

    /**
     * Get envFrom
     *
     * @return integer 
     */
    public function getEnvFrom()
    {
        return $this->envFrom;
    }

    /**
     * Set envTo
     *
     * @param integer $envTo
     * @return PFAMRepeat
     */
    public function setEnvTo($envTo)
    {
        $this->envTo = $envTo;
    
        return $this;
    }

    /**
     * Get envTo
     *
     * @return integer 
     */
    public function getEnvTo()
    {
        return $this->envTo;
    }

    /**
     * Set aliHmm
     *
     * @param string $aliHmm
     * @return PFAMRepeat
     */
    public function setAliHmm($aliHmm)
    {
        $this->aliHmm = $aliHmm;
    
        return $this;
    }

    /**
     * Get aliHmm
     *
     * @return string 
     */
    public function getAliHmm()
    {
        return $this->aliHmm;
    }

    /**
     * Set aliRep
     *
     * @param string $aliRep
     * @return PFAMRepeat
     */
    public function setAliRep($aliRep)
    {
        $this->aliRep = $aliRep;
    
        return $this;
    }

    /**
     * Get aliRep
     *
     * @return string 
     */
    public function getAliRep()
    {
        return $this->aliRep;
    }

    /**
     * Set consensus
     *
     * @param string $consensus
     * @return PFAMRepeat
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
     * Set deletions
     *
     * @param string $deletions
     * @return PFAMRepeat
     */
    public function setDeletions($deletions)
    {
        $this->deletions = $deletions;
    
        return $this;
    }

    /**
     * Get deletions
     *
     * @return string 
     */
    public function getDeletions()
    {
        return $this->deletions;
    }

    /**
     * Set insertions
     *
     * @param string $insertions
     * @return PFAMRepeat
     */
    public function setInsertions($insertions)
    {
        $this->insertions = $insertions;
    
        return $this;
    }

    /**
     * Get insertions
     *
     * @return string 
     */
    public function getInsertions()
    {
        return $this->insertions;
    }
}
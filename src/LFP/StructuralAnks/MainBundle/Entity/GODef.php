<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GODef
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GODef
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="namespace", type="string", length=255, nullable=true)
     */
    private $namespace;
    
    /**
     * @ORM\ManyToMany(targetEntity="Protein", inversedBy="goDefs")
     * @ORM\JoinTable(name="proteins_goDefs")
     */
    private $proteins;

    public function __construct() {
        $this->proteins = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return GODef
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set namespace
     *
     * @param string $namespace
     * @return GODef
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    
        return $this;
    }

    /**
     * Get namespace
     *
     * @return string 
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Add proteins
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Protein $proteins
     * @return GODef
     */
    public function addProtein(\LFP\StructuralAnks\MainBundle\Entity\Protein $proteins)
    {
        $this->proteins[] = $proteins;
    
        return $this;
    }

    /**
     * Remove proteins
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Protein $proteins
     */
    public function removeProtein(\LFP\StructuralAnks\MainBundle\Entity\Protein $proteins)
    {
        $this->proteins->removeElement($proteins);
    }

    /**
     * Get proteins
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProteins()
    {
        return $this->proteins;
    }
}
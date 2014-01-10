<?php

namespace LFP\StructuralAnks\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Publication
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
     * @ORM\Column(name="authors", type="string", length=255, nullable=true)
     */
    private $authors;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=255, nullable=true)
     */
    private $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     *  @ORM\OneToMany(targetEntity="Structure", mappedBy="publication")
     */
    protected $structures;

    public function __construct() {
        $this->structures = new ArrayCollection();
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
     * Set authors
     *
     * @param string $authors
     * @return Publication
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    
        return $this;
    }

    /**
     * Get authors
     *
     * @return string 
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Publication
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set journal
     *
     * @param string $journal
     * @return Publication
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    
        return $this;
    }

    /**
     * Get journal
     *
     * @return string 
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Publication
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set structure
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Structure $structure
     * @return Publication
     */
    public function setStructure(\LFP\StructuralAnks\MainBundle\Entity\Structure $structure = null)
    {
        $this->structure = $structure;
    
        return $this;
    }

    /**
     * Get structure
     *
     * @return \LFP\StructuralAnks\MainBundle\Entity\Structure 
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Add structures
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Structure $structures
     * @return Publication
     */
    public function addStructure(\LFP\StructuralAnks\MainBundle\Entity\Structure $structures)
    {
        $this->structures[] = $structures;
    
        return $this;
    }

    /**
     * Remove structures
     *
     * @param \LFP\StructuralAnks\MainBundle\Entity\Structure $structures
     */
    public function removeStructure(\LFP\StructuralAnks\MainBundle\Entity\Structure $structures)
    {
        $this->structures->removeElement($structures);
    }

    /**
     * Get structures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStructures()
    {
        return $this->structures;
    }
}
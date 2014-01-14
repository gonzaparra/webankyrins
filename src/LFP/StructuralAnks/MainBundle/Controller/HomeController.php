<?php

namespace LFP\StructuralAnks\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat;

/**
 * @Route("/")
 */
class HomeController extends Controller
{
    /**
     * @Route("/home",name="ankyrins_home")
     * @Template()
     */
    public function indexAction()
    {
//        $doctrine = $this->get('doctrine');
//        $was = $doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2V4H', 'C', 1);
//        var_dump($was);
        return array();
    }
    
    /**
     * @Route("/browse",name="ankyrins_browse")
     * @Template()
     */
    public function browseAction()
    {
        /* Save entity manager in $em */
        $em = $this->getDoctrine()->getManager();
        
        /* Get all pdb structures */
        $pdbs = $em->getRepository('LFPStructuralAnksMainBundle:Structure')->getSortedStructures();
        
        return array(
            'pdbs' => $pdbs
            );
    }
}

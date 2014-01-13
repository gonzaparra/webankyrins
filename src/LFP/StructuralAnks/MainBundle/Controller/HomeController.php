<?php

namespace LFP\StructuralAnks\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


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
        $pdbs = $em->getRepository('LFPStructuralAnksMainBundle:Structure')->findAll();
        
        return array(
            'pdbs' => $pdbs
            );
    }
}

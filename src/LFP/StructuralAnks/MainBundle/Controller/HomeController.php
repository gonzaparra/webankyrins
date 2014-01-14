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
//        $was = $doctrine->getRepository('LFPStructuralAnksMainBundle:Residue')->findByPdbChainUniprotpos('2V4H', 'C', 19);
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
    
    /**
     * @Route("/popup/{id}",name="ankyrins_popup")*
     * @Template()
     */
    public function popupAction($id)
    {
        $pdb = $this->getDoctrine()->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById($id);
        
        return array(
            'pdb' => $pdb
            );
    }
    
    /**
     * @Route("/show/{pdbId}/{chainId}",name="ankyrins_show")
     * @Template()
     */
    public function showAction($pdbId, $chainId)
    {
        /* Save entity manager in $em */
        $em = $this->getDoctrine()->getManager();
        
        /* Get all pdb structures */
        $chain = $em->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById($chainId);
        $chartOptions = $this->createsChartsOptions($chain);

        return array(
            'chartOptions' => $chartOptions,
            'pdbId' => $pdbId,
            );
    }
    
    /**
     * Returns an array with options necessary for chart creation
     */
    public function createsChartsOptions($chain){
        $miniOptions = array();
        $miniOptions['divID'] = '#chart'.$chain->getChain();
        $resNames = '[';
        $sasa = array();
        $energy = array();
        foreach($chain->getResidues() as $r){
            $resNames = $resNames.$r->getResId().',';
            $sasa[] = $r->getSasa();
            $energy[] = $r->getEnergy();
        }
        
        
        $miniOptions['xAxisCategories'] = $resNames.']';
        $miniOptions['sasa'] = $this->getNormalizedValues($sasa);
        $miniOptions['energy'] = $this->getNormalizedValues($energy);

        return $miniOptions;
    }
    
    /**
     * Returns an string with values between Zero and One
     */
    public function getNormalizedValues($a){
        $minValue = min($a);
        $maxValue = max($a);
        $text = '[';
        foreach($a as $val){
            $$text = $text.$this->normalizeZeroOne($val, $minValue, $maxValue).',';
        }
        return $text.']';
    }
    
    /**
     * Returns a Normalized Value between Zero and One
     */
    public function normalizeZeroOne($x, $min, $max){
        return abs(($x-$min)/($max-$min));
    }
}

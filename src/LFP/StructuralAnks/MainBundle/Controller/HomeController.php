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
        $chain = $em->getRepository('LFPStructuralAnksMainBundle:Chain')->getChainByCode($pdbId,$chainId);
        
//        echo var_dump($chain);die();
        
        /* Get all pdb structures */
//        $chain = $em->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById($chainId);
        
        $chartOptions = $this->createsChartsOptions($chain);

        return array(
            'chartOptions' => $chartOptions,
            'pdb' => $chain->getStructure(),
            'chain'=>$chain
            );
    }
    
    /**
     * Returns an array with options necessary for chart creation
     */
    public function createsChartsOptions($chain){
        
        //three letter code to one letter code
        $code = array('ALA' => 'A', 'ARG' => 'R', 'ASN' => 'N', 'ASP' => 'D',
                      'ASX' => 'B', 'CYS' => 'C', 'GLU' => 'E', 'GLN' => 'Q',
                      'GLX' => 'Z', 'GLY' => 'G', 'HIS' => 'H', 'ILE' => 'I',
                      'LEU' => 'L', 'LYS' => 'K', 'MET' => 'M', 'PHE' => 'F',
                      'PRO' => 'P', 'SER' => 'S', 'THR' => 'T', 'TRP' => 'W',
                      'TYR' => 'Y', 'VAL' => 'V', null => 'X');
        
        
        $miniOptions = array();
        $miniOptions['divID'] = '#chart'.$chain->getChain();
        $resNames = '[';
        
        $miniOptions['xAxisCategories'] = null;
        $miniOptions['sasa'] = null;
        $miniOptions['energy'] = null;
        $miniOptions['mutFrustVal'] = null;
        $miniOptions['showChart'] = False;
        
        $num = 0;
        $sasa = array();
        $energy = array();
        foreach($chain->getResidues() as $r){
//            if(array_key_exists($r->getResId(), $code)){
                
            
            $resNames = $resNames."'".$code[$r->getResId()]."',";
            $sasa[] = $r->getSasa();
            $energy[] = $r->getEnergy();
            $mutFrustVal[] = $r->getPerresMutFrstVal();
            $num = $num + 1;
//            }
//            else{
//                var_dump($r);die;
//            }
        }
        
        
        if($num > 0){
            $miniOptions['showChart'] = True;
            $miniOptions['xAxisCategories'] = $resNames.']';
            $miniOptions['sasa'] = $this->getNormalizedValues($sasa);
            $miniOptions['energy'] = $this->getNormalizedValues($energy);
            $miniOptions['mutFrustVal'] = $this->getNormalizedValues($mutFrustVal);
        }

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
            $text = $text.$this->normalizeZeroOne($val, $minValue, $maxValue).',';
        }
        return $text.']';
    }
    
    /**
     * Returns a Normalized Value between Zero and One
     */
    public function normalizeZeroOne($x, $min, $max){
//        return round(abs(($x-$min)/($max-$min)), 3);
        return round($x);
    }
}

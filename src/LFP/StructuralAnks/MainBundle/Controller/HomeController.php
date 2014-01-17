<?php

namespace LFP\StructuralAnks\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat;
use LFP\StructuralAnks\MainBundle\Form\FilterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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
     * @Route("/about",name="ankyrins_about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
    
    /**
     * @Route("/browse",name="ankyrins_browse")
     * @Template()
     */
    public function browseAction(Request $request)
    {
        $filterForm = $this->createForm(new FilterType());
//        var_dump($request);
        if($request->getMethod()=="GET" && $request->get('filter_form')){
            $filterForm->bind($request);
            if ($filterForm->isValid()) {
                //setting new filterForms Attributes in session from filterForm
                $this->setFilterAtrributes($filterForm);
            }
        }
        
        
        /* Save entity manager in $em */
        $em = $this->getDoctrine()->getManager();
        
        /* Get all pdb structures */
        $pdbs = $em->getRepository('LFPStructuralAnksMainBundle:Structure')->getStructuresByFilter($this->getFilterAtrributes());
        $chains = $em->getRepository('LFPStructuralAnksMainBundle:Chain')->findAll();
        
        return array(
            'pdbs' => $pdbs,
            'chains'=> $chains,
            "filterForm" => $filterForm->createView(),
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
    public function showAction(Request $request,$pdbId, $chainId)
    {
        $filterForm = $this->createForm(new FilterType());
        
        
        if($request->getMethod()=="GET" && $request->get('filter_form')){
            $filterForm->bind($request);
            if ($filterForm->isValid()) {
                //setting new filterForms Attributes in session from filterForm
                $this->setFilterAtrributes($filterForm);
            }
        }
        
        
        /* Save entity manager in $em */
        $em = $this->getDoctrine()->getManager();
        $chains = $em->getRepository('LFPStructuralAnksMainBundle:Chain')->getChainByCode($pdbId,$chainId);
        $chain=$chains[0];
        
        $chartOptions = $this->createsChartsOptions($chain);
        
        $missingResidues = array();
        foreach ($chain->getMissingRes() as $missingRes){
            $missingResidues[] = $missingRes->getResNum();
        }
        

        return array(
            'chartOptions' => $chartOptions,
            'pdb' => $chain->getStructure(),
            'chain'=>$chain,
            'missingResidues'=>$missingResidues,
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
        $miniOptions['pasta'] = null;
        $miniOptions['showChart'] = False;
        
        $num = 0;
        $sasa = array();
        $energy = array();
        $mutFrustVal = array();
        $pasta = array();
        foreach($chain->getResidues() as $r){
//            if(array_key_exists($r->getResId(), $code)){
                
            
            $resNames = $resNames."'".$code[$r->getResId()]."',";
            $sasa[] = $r->getSasa();
            $energy[] = $r->getEnergy();
            $mutFrustVal[] = $r->getPerresMutFrstVal();
            $pasta[] = $r->getPasta();
            $num = $num + 1;
//            }
//            else{
//                var_dump($r);die;
//            }
        }
        
//        var_dump( $num);
        if($num > 0){
            $miniOptions['showChart'] = True;
            $miniOptions['xAxisCategories'] = $resNames.']';
            $miniOptions['sasa'] = $this->getFormatedValues($sasa);
            $miniOptions['energy'] = $this->getFormatedValues($energy);
            $miniOptions['mutFrustVal'] = $this->getFormatedValues($mutFrustVal);
            $miniOptions['pasta'] = $this->getFormatedValues($pasta);
        }

        return $miniOptions;
    }
    
    /**
     * Returns an string with values between Zero and One
     */
    public function getFormatedValues($a){
        $text = '[';
        foreach($a as $val){
            $text = $text.$val.',';
        }
        return $text.']';
    }
    /**
     * Returns filter atrributes for personal information section. 
     * @return array Filter attributes saved in session
     */
    private function getFilterAtrributes(){

        $session = $this->getRequest()->getSession();    
        
        //getting filterForms attributes
        $pdbCode = $session->get('filterForm/pdbCode');
        $type = $session->get('filterForm/type');
        $operator = $session->get('filterForm/operator');
        $nchains = $session->get('filterForm/nchains');
        var_dump($type);
        
        $filterData = array('pdbCode' => $pdbCode,
                            'type' => $type,
                            'operator' => $operator,
                            'nchains' => $nchains,
                            );
        return $filterData;
    }
    
    /**
     * Set filter atrributes for personal information section. 
     */
    private function setFilterAtrributes($filterForm){

        $session = $this->getRequest()->getSession();    
        
        //getting session attributes
        $pdbCode = $filterForm->get('pdbCode')->getData();
        $type = $filterForm->get('type')->getData();
        $operator = $filterForm->get('operator')->getData();
        $nchains = $filterForm->get('nchains')->getData();
        
        //SETTING ATTRIBUTES:
        
        //lastName attribute is a string value so this value can be saved directly
        $session->set('filterForm/pdbCode', $pdbCode);
        $session->set('filterForm/type', $type);
        $session->set('filterForm/operator', $operator);
        $session->set('filterForm/nchains', $nchains);
    }
    
}

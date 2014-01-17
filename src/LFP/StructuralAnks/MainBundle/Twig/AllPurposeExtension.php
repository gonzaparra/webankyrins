<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LFP\StructuralAnks\MainBundle\Twig;

class AllPurposeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('resConverter', array($this, 'residueConverterFilter')),
            new \Twig_SimpleFilter('strpad', array($this, 'strpadFilter')),
        );
    }

    public function residueConverterFilter($res)
    {
        //three letter code to one letter code
        $code = array('ALA' => 'A', 'ARG' => 'R', 'ASN' => 'N', 'ASP' => 'D',
                      'ASX' => 'B', 'CYS' => 'C', 'GLU' => 'E', 'GLN' => 'Q',
                      'GLX' => 'Z', 'GLY' => 'G', 'HIS' => 'H', 'ILE' => 'I',
                      'LEU' => 'L', 'LYS' => 'K', 'MET' => 'M', 'PHE' => 'F',
                      'PRO' => 'P', 'SER' => 'S', 'THR' => 'T', 'TRP' => 'W',
                      'TYR' => 'Y', 'VAL' => 'V', null => 'X');
        
        return $code[$res];
    }
    public function strpadFilter($input, $padlength, $padstring='', $padtype=\STR_PAD_LEFT){
        
        return str_pad($input, $padlength, $padstring, $padtype);
    }
    public function getName()
    {
        return 'all_purpose_extension';
    }
}

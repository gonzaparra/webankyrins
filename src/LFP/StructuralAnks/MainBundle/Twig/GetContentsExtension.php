<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LFP\StructuralAnks\MainBundle\Twig;

class GetContentsExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('getContents', array($this, 'getContentsFilter')),
        );
    }

    public function getContentsFilter($filename)
    {
        $content = file_get_contents($filename);
        $content = preg_replace('~\n~', ' ', $content);
        return $content;
    }

    public function getName()
    {
        return 'get_contents_extension';
    }
}

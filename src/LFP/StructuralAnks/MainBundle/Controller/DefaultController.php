<?php

namespace LFP\StructuralAnks\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LFPStructuralAnksMainBundle:Default:index.html.twig');
    }
}

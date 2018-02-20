<?php

namespace Plateforme\FrontofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlateformeFrontofficeBundle:Default:index.html.twig');
    }
}

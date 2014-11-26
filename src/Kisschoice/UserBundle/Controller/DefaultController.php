<?php

namespace Kisschoice\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KisschoiceUserBundle:Default:index.html.twig', array('name' => $name));
    }
}

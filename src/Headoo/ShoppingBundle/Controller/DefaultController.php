<?php

namespace Headoo\ShoppingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HeadooShoppingBundle:Default:index.html.twig', array('name' => $name));
    }
}

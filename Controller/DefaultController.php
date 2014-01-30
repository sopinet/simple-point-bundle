<?php

namespace Sopinet\Bundle\SimplePointBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SopinetSimplePointBundle:Default:index.html.twig', array('name' => $name));
    }
}

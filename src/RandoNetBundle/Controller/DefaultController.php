<?php

namespace RandoNetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@FOSUser/Default/index.html.twig');
    }
}

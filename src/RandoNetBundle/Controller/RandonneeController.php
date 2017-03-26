<?php

namespace RandoNetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandonneeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    function afficherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('RandoNetBundle:Randonnee')->findAll();
        return $this->render('@RandoNet/RandoNet/User/Randonnee.html.twig', array('m' => $modeles));
    }
}

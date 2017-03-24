<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedirectionAdminController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        return $this->render('@RandoNet/RandoNet/Admin/index.html.twig', array(
            'user' => $user,
        ));
    }
}

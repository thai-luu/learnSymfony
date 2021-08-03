<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActicleController extends AbstractController
{
    /**
     * @Route("/acticle", name="acticle")
     */
    public function index(): Response
    {
        return $this->render('acticle/index.html.twig', [
            'controller_name' => 'ActicleController',
        ]);
    }
}

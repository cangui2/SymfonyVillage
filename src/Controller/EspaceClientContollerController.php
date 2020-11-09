<?php

namespace App\Controller;

use App\Service\Panier\PanierService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EspaceClientContollerController extends AbstractController
{
    /**
     * @Route("/espace/client/contoller", name="espace_client_contoller")
     * 
     */
    public function index(PanierService $panierService)
    {

        return $this->render('espace_client_contoller/index.html.twig', [
            'controller_name' => 'EspaceClientContollerController',
            'item' =>$panierService->getTotal2(),
        ]);
    }
}

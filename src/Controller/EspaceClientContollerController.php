<?php

namespace App\Controller;

use App\Service\Panier\PanierService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EspaceClientContollerController extends AbstractController
{
    /**
     * @Route("/espace/client/contoller", name="espace_client_contoller")
     * 
     */
    public function index(PanierService $panierService,SessionInterface $session)
    {
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('App\Entity\Employe');
$session1 = $repository->find(4);

        return $this->render('espace_client_contoller/index.html.twig', [
            'controller_name' => 'EspaceClientContollerController',
            'item' =>$panierService->getTotal2(),
            'session'=>$session1,
            
        ]);
    }
}

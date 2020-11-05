<?php

namespace App\Controller;

use App\Entity\LigneDeCommande;
use App\Form\LigneDeCommandeType;
use Doctrine\DBAL\DriverManager;
use App\Service\Panier\PanierService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(PanierService $panierService)
    {
       

      

        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
            'item'=>$panierService->getTotal2(),
            'item2' =>$panierService->getFullPanier(),
            'total'=>$panierService->getTotal(),
            
            
        ]);
    }
}

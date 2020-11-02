<?php

namespace App\Controller;

use App\Service\Panier\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(PanierService $panierService)
    {
        
        $panier=$panierService->getFullPanier();
      
        foreach ($panier as $key => $value) {
            
           
            echo $value['produit']->getproId().'Produit Id '.'<br>';
            echo $value['quantity'].'quantite'.'<br>';   
       }
     


        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
            'item'=>$panierService->getTotal2(),
            'item2' =>$panierService->getFullPanier(),
            'total'=>$panierService->getTotal(),
            
        ]);
    }
}

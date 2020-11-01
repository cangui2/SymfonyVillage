<?php

namespace App\Controller;


use App\Service\Panier\PanierService;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(PanierService $panierService )
    {
       
      
        return $this->render('panier/index.html.twig', [
            'item2' =>$panierService->getFullPanier(),
            'item'=>$panierService->getTotal2(),
            'total'=>$panierService->getTotal()
        ]);
    }
    /**
     * @Route("/panier/add/{id}", name="panier_add")
     */
    public function add($id,PanierService $panierService){

        $panierService->add($id);

           
           
            return $this->redirectToRoute("panier");
    }
    /**
     * @Route("/panier/supprimer/{id}", name="panier_remove")
     */
    public function remove($id, PanierService $panierService){

        $panierService->remove($id);


        return $this->redirectToRoute("panier");
    }
}

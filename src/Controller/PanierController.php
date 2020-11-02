<?php

namespace App\Controller;

use App\Entity\LigneDeCommande;
use App\Form\LigneDeCommandeType;
use App\Service\Panier\PanierService;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(PanierService $panierService,Request $request):Response
    {
        $ligneDeCommande=new LigneDeCommande();
        $form =$this->createForm(LigneDeCommandeType::class,$ligneDeCommande);
        $form ->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ligneDeCommande);
            $entityManager->flush();

            return $this->redirectToRoute('commande');
        }


        return $this->render('panier/index.html.twig', [
            'item2' =>$panierService->getFullPanier(),
            'item'=>$panierService->getTotal2(),
            'total'=>$panierService->getTotal(),
            'lignecommande'=>$ligneDeCommande,
            'form'=>$form->createView(),
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

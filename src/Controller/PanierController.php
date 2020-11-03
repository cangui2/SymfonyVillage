<?php

namespace App\Controller;

use App\Entity\LigneDeCommande;
use Doctrine\DBAL\DriverManager;
use App\Form\LigneDeCommandeType;


use App\Form\LigneDeCommande1Type;
use App\Service\Panier\PanierService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier",methods={"GET","POST"})
     */
    public function index(PanierService $panierService,Request $request,EntityManagerInterface $em):Response
    {
        $ligneDeCommande=new LigneDeCommande();
        $form =$this->createForm(LigneDeCommande1Type::class,$ligneDeCommande);
        $form ->handleRequest($request);
       

        if($form->isSubmitted()){
            
            $panier=$panierService->getFullPanier();
            foreach ($panier as $key => $value) {
                
                $proId=$value['produit'];
                
                $quantity=$value['quantity'];
                 // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();
    
        $product = new LigneDeCommande();
        $product->setPro($proId);
        $product->setLigQuantite($quantity);
       

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

             }
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

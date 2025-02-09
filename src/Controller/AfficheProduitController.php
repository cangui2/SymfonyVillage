<?php

namespace App\Controller;

use App\Service\Panier\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AfficheProduitController extends AbstractController
{
   
    
    /**
     * @Route("/affiche/produit", name="affiche_produit")
     */
    public function index()
    {
        return $this->render('produit/produit.html.twig', [
            'controller_name' => 'AfficheProduitController',
        ]);
    }
    /**
     * @Route("/affiche/produit={id}", name="produit")
     */
   
    public function afficheProduit($id,PanierService $panierService){
        $produit=[];
        $aSousCategorie=[];
        $compteur=[];
        $categories=[];
        
        // SI ID <10 on clicque sur une categorie et ça recherche les sous cat ,
                    
        if($id < 10)
        {
            $repository =$this->getDoctrine()
                    ->getManager()
                    ->getRepository('App\Entity\Categorie');
                    $aSousCategorie=$repository->findBycatId1($id);
                  


        $repository =$this->getDoctrine()
                    ->getManager()
                    ->getRepository('App\Entity\Produit');

            
            for ($i=0; $i <count($aSousCategorie); $i++) { 
                   
                array_push($compteur,$i);
            }
              foreach ($aSousCategorie as $valeur)
              {
                    $produit=$repository->findByCat($aSousCategorie[0]);
                    
               }
            }
            else{
                // ça cherche la cat parent et il recupere les sous cat 
                $repository =$this->getDoctrine()
                    ->getManager()
                    ->getRepository('App\Entity\Categorie');
                    $Categorie=$repository->findBycatId($id);
                    $catId1=$Categorie[0]->getCatId1();
                    $aSousCategorie=$repository->findByCatId1($catId1);

                  
                    


                $repository =$this->getDoctrine()
                ->getManager()
                ->getRepository('App\Entity\Produit');
                $produit=$repository->findByCat($id);
            }
               
             




        return $this->render('produit/produit.html.twig',['produit'=>$produit,'aSousCategorie'=>$aSousCategorie,'categorie'=>$categories,'item' =>$panierService->getTotal2(),]);
        
            }
    

             

    
    
    
    }



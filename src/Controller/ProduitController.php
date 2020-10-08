<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symmfony\Repository\CategoriesRespository;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index()
    {
        return $this->render('produit/produit.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/produit={id}", name="produit")
     */
   
    public function afficheProduit($id){
        $produit=[];
        $aSousCategorie=[];
        $compteur=[];
        $repository =$this->getDoctrine()
                    ->getManager()
                    ->getRepository('App\Entity\Categorie');
                    $aSousCategorie=$repository->findBycatId1($id);
                    
    
                    
        $repository =$this->getDoctrine()
                    ->getManager()
                    ->getRepository('App\Entity\Produit');

             /*  for($i=0;$i<count($aSousCategorie);$i++){

                array_push($produit,$repository->findByCat($aSousCategorie[$i]));

             }
            */
              foreach ($aSousCategorie as $valeur)
              {
                    $produit=$repository->findByCat($aSousCategorie[2]);
                    
               }
               for ($i=0; $i <count($aSousCategorie); $i++) { 
                   
                   array_push($compteur,$i);
               }
             




        return $this->render('produit/produit.html.twig',['produit'=>$produit,'aSousCategorie'=>$aSousCategorie]);
        
            }
    

             

    /**
     * @Route("/produit={id}", name="produit")
     */
    /*
    public function afficheProduit(){

               
        $repository =$this->getDoctrine()
        ->getManager()
        ->getRepository('App\Entity\Produit');
        $produit=$repository->find(15);
        //$aSousCategorie=$produit->getCat()->getcatNom();
        return $this->render('produit/produit.html.twig',['produit'=>$produit]);

    }
    
    */
    }

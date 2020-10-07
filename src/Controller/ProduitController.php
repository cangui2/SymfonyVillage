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
     
        $repository =$this->getDoctrine()
                    ->getManager()
                    ->getRepository('App\Entity\Categorie');
                    $aSousCategorie=$repository->findBycatId1($id);
                    
    
                    
        $repository =$this->getDoctrine()
                    ->getManager()
                    ->getRepository('App\Entity\Produit');

                for($i=0;$i<count($aSousCategorie);$i++){

                array_push($produit,$repository->findByCat($aSousCategorie[$i]));

             }
              /* foreach ($aSousCategorie as $valeur){
                    $produit=$repository->findByCat($aSousCategorie);
                    
               }
               */




        return $this->render('produit/produit.html.twig',['produit'=>$produit]);
        
       
    }

  
}

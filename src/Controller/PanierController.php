<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use SessionIdInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository)
    {
        $panier=$session->get('panier',[]);
        $panierWhithData=[];

        foreach ($panier as $id => $quantity){
            $panierWhithData[]= [
                'produit'=> $produitRepository->find($id),
                'quantity'=>$quantity

            ];
        }
       
        $total=0;
         foreach ($panierWhithData as $item ) {
            $totalItem=$item['produit']->getProPrix()*$item['quantity'];
            $total +=$totalItem;
         }

        return $this->render('panier/index.html.twig', [
            'item' =>$panierWhithData,
            'total'=>$total
        ]);
    }
    /**
     * @Route("/panier/add/{id}", name="panier_add")
     */
    public function add($id,SessionInterface $session){

            
            $panier=$session->get('panier',[]);
            if (!empty($panier[$id])){
                $panier[$id]++;
            }else{
                $panier[$id]=1;
            }

            

            $session->set('panier',$panier);
           
            return $this->redirectToRoute("panier");
    }
    /**
     * @Route("/panier/supprimer/{id}", name="panier_remove")
     */
    public function remove($id, SessionInterface $session){

        $panier =$session ->get('panier',[]);

        if (!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set('panier',$panier);
        return $this->redirectToRoute("panier");
    }
}

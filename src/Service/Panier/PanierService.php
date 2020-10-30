<?php

namespace App\Service\Panier;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService{

   protected $_session;
   protected $_produitRepository;

   public function __construct(SessionInterface $session,ProduitRepository $produitRepository)
   {
       $this->_session=$session;
       $this->_produitRepository=$produitRepository;
   }


    public function add(int $id){

        $panier=$this->_session->get('panier',[]);
        if (!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id]=1;
        }

        

        $this->_session->set('panier',$panier);
    }

    public function remove(int $id){
        $panier =$this->_session->get('panier',[]);

        if (!empty($panier[$id])){
            unset($panier[$id]);
        }
        $this->_session->set('panier',$panier);

    }
    
    public function getFullPanier(): array {
        $panier=$this->_session->get('panier',[]);
        $panierWhithData=[];

        foreach ($panier as $id => $quantity){
            $panierWhithData[]= [
                'produit'=> $this->_produitRepository->find($id),
                'quantity'=>$quantity

            ];
        }
            return $panierWhithData;
    }
    public function getTotal():float{
        $total=0;
        
        foreach ($this->getFullPanier() as $item ) {
           $totalItem=$item['produit']->getProPrix()*$item['quantity'];
           $total +=$totalItem;
        }
        return $total;
        
    }
    public function getTotal2():float{
        $total=0;
        
        foreach ($this->getFullPanier() as $item ) {
           $totalItem=$item['quantity'];
           $total +=$totalItem;
        }
        return $total;
        
    }

}

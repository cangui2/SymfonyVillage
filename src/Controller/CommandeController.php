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
        $commande=new LigneDeCommande();
        $form = $this->createForm(LigneDeCommandeType::class, $commande);

      /*  
        $panier=$panierService->getFullPanier();
      
        foreach ($panier as $key => $value) {
            
            $proId=$value['produit']->getproId();
            $quantity=$value['quantity'];
            $conn = DriverManager::getConnection(array('dbname' => 'village',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',));
            $queryBuilder = $conn->createQueryBuilder();
            $queryBuilder
            ->insert('ligne_de_commande')
            ->values(
                array(
                    'pro_id' => $proId,
                    'password' => $quantity
                )
            )
            ->setParameter(0, $proId)
            ->setParameter(1, $quantity)
        ;
            echo $value['produit']->getproId().'Produit Id '.'<br>';
            echo $value['quantity'].'quantite'.'<br>';   
       }
     
*/

        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
            'item'=>$panierService->getTotal2(),
            'item2' =>$panierService->getFullPanier(),
            'total'=>$panierService->getTotal(),
            'form'=>$form->createView(),
            
        ]);
    }
}

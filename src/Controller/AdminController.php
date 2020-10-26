<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{

    /**
     * @Route("/admin2", name="admin2")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $repoArticles = $em->getRepository(Produit::class);
        
        $totalArticles = $repoArticles->createQueryBuilder('a')
        ->select('count(a.proId)')
        ->getQuery()
        ->getSingleScalarResult();
        


        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'countProduit'=>$totalArticles,
            
        ]);
    }
}

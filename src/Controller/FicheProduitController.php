<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FicheProduitController extends AbstractController
{
    /**
     * @Route("/fiche/produit/{id}", name="fiche_produit")
     */
    public function index($id)
    {
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('App\Entity\Produit');
            $article = $repository->find($id);
        return $this->render('fiche_produit/index.html.twig', [
            'article' => $article,
        ]);
    }
}

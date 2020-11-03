<?php

namespace App\Controller;

use App\Entity\LigneDeCommande;
use App\Form\LigneDeCommande1Type;
use App\Service\Panier\PanierService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/ligne/de/commande")
 */
class LigneDeCommandeController extends AbstractController
{
    /**
     * @Route("/", name="ligne_de_commande_index", methods={"GET"})
     */
    public function index(PanierService $panierService): Response
    {
        $ligneDeCommandes = $this->getDoctrine()
            ->getRepository(LigneDeCommande::class)
            ->findAll();

        return $this->render('ligne_de_commande/index.html.twig', [
            'ligne_de_commandes' => $ligneDeCommandes,
            'item'=>$panierService->getTotal2(),
            'item2' =>$panierService->getFullPanier(),
            'total'=>$panierService->getTotal(),

        ]);
    }

    /**
     * @Route("/new", name="ligne_de_commande_new", methods={"GET","POST"})
     */
    public function new(Request $request,PanierService $panierService): Response
    {
        $ligneDeCommande = new LigneDeCommande();
        $form = $this->createForm(LigneDeCommande1Type::class, $ligneDeCommande);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            $entityManager->persist($ligneDeCommande);
            $entityManager->flush();

            return $this->redirectToRoute('ligne_de_commande_index');
        }

        return $this->render('ligne_de_commande/new.html.twig', [
            'ligne_de_commande' => $ligneDeCommande,
            'form' => $form->createView(),
            'item'=>$panierService->getTotal2(),
            'item2' =>$panierService->getFullPanier(),
            'total'=>$panierService->getTotal(),
        ]);
    }

    /**
     * @Route("/{ligId}", name="ligne_de_commande_show", methods={"GET"})
     */
    public function show(LigneDeCommande $ligneDeCommande): Response
    {
        return $this->render('ligne_de_commande/show.html.twig', [
            'ligne_de_commande' => $ligneDeCommande,
        ]);
    }

    /**
     * @Route("/{ligId}/edit", name="ligne_de_commande_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LigneDeCommande $ligneDeCommande): Response
    {
        $form = $this->createForm(LigneDeCommande1Type::class, $ligneDeCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ligne_de_commande_index');
        }

        return $this->render('ligne_de_commande/edit.html.twig', [
            'ligne_de_commande' => $ligneDeCommande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{ligId}", name="ligne_de_commande_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LigneDeCommande $ligneDeCommande): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligneDeCommande->getLigId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ligneDeCommande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ligne_de_commande_index');
    }
}

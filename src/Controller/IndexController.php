<?php

namespace App\Controller;

use App\Service\Panier\PanierService;
use Symmfony\Repository\CategoriesRespository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index",methods={"GET","POST"})
     */
    public function index(AuthenticationUtils $authenticationUtils,PanierService $panierService)
    {
          // get the login error if there is one
          $error = $authenticationUtils->getLastAuthenticationError();
          // last username entered by the user
          $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('index/index.html.twig', [
            'item' =>$panierService->getTotal2(),
            'controller_name' => 'IndexController',
            'last_username' => $lastUsername, 
            'error' => $error
        ]);
    }

    

}

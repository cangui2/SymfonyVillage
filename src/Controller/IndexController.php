<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symmfony\Repository\CategoriesRespository;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index",methods={"GET"})
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }



}

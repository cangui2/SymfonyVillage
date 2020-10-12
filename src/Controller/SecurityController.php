<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(){
        
        $user=new Client();


        $form =$this->createForm(RegistrationType::class,$user);
        return $this->render('security/registration.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}

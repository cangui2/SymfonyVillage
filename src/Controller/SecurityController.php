<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentTokenInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request,EntityManagerInterface $manager){ 
        
        $user=new Client();


        $form =$this->createForm(RegistrationType::class,$user);

        $form->handleRequest($request);
            // passe la requet
        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($user);
            // je veux que tu persiste dans le temps prepare a le sauvegarder
            $manager->flush();
            //sauvegarde
        }


        return $this->render('security/registration.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}

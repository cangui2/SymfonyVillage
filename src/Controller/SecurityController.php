<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Employe;
use App\Form\RegistrationType;
use App\Form\RegistrationType2Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilis;
use App\Service\Panier\PanierService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentTokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\VarDumper\VarDumper;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request,EntityManagerInterface $manager,UserPasswordEncoderInterface $encoder,PanierService $panierService){ 
        
        $user=new Client();
       

        $form =$this->createForm(RegistrationType::class,$user);

        $form->handleRequest($request);
      
            // passe la requet
        if ($form->isSubmitted() && $form->isValid()){

            $hash= $encoder->encodePassword($user,$user->getPassword());
            $user->setUtilPassword($hash);

            $manager->persist($user);
            // je veux que tu persiste dans le temps prepare a le sauvegarder
            $manager->flush();
            //sauvegarde
            return $this->redirectToRoute('index');
        }


        return $this->render('security/registration.html.twig',[
            'form'=>$form->createView(),
            'item' =>$panierService->getFullPanier(),
        ]);
    }
    
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils,PanierService $panierService): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error,'item' =>$panierService->getTotal2()]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

}

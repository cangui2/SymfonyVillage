<?php

namespace App\Controller;


use App\Entity\Employe;
use App\Form\RegistrationType2Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilis;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\RememberMe\PersistentTokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\VarDumper\VarDumper;

class SecurityControllerEmployeController extends AbstractController
{
    /**
     * @Route("/inscriptionEmploye", name="security_registration2")
     */
    public function registrationEmploye(Request $request,EntityManagerInterface $manager,UserPasswordEncoderInterface $encoder){ 
        
        $user=new Employe();
        

        $form2 =$this->createForm(RegistrationType2Type::class,$user);

        $form2->handleRequest($request);
      
            // passe la requet
        if ($form2->isSubmitted() && $form2->isValid()){
            
            $hash= $encoder->encodePassword($user,$user->getPassword());
            $user->setUtilPassword($hash);
            
         
            $manager->persist($user);
           
            // je veux que tu persiste dans le temps prepare a le sauvegarder
            $manager->flush();
            
            //sauvegarde
            return $this->redirectToRoute('index');
        }


        return $this->render('security_controller_employe\index.html.twig',[
            'form'=>$form2->createView()
        ]);
    }
}

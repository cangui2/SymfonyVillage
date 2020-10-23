<?php

namespace App\Controller\Admin;


use App\Entity\Employe;
use App\Entity\Produit;
use App\Entity\Categorie;
use App\Form\RegistrationType2Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     * 
     */
    public function index(): Response
    { 
        $employes = $this->getDoctrine()
        ->getRepository(Employe::class)
        ->findAll();

        return $this->render('bundles\EasyAdminBundles\welcome.html.twig', [
            'employes' => $employes,
        ]);
    }
    /**
     * @Route("/admin/new", name="admin_new", methods={"GET","POST"})
     */
    public function new(Request $request,EntityManagerInterface $manager,UserPasswordEncoderInterface $encoder): Response
    {
        $employe = new Employe();
        $form = $this->createForm(RegistrationType2Type::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash= $encoder->encodePassword($employe,$employe->getPassword());
            $employe->setUtilPassword($hash);
            
         
            $manager->persist($employe);
           
            // je veux que tu persiste dans le temps prepare a le sauvegarder
            $manager->flush();
            
            return $this->redirectToRoute('admin');
        }

        return $this->render('employe/new.html.twig', [
            'employe' => $employe,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/{idUtilis}/show", name="admin_show", methods={"GET","POST"})
     */
    
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
        ]);
    }
    /**
     * @Route("admin/{idUtilis}/edit", name="admin_edit", methods={"GET","POST"})
     */
    
    public function edit(Request $request, Employe $employe,EntityManagerInterface $manager,UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(RegistrationType2Type::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash= $encoder->encodePassword($employe,$employe->getPassword());
            $employe->setUtilPassword($hash);
            
         
            $manager->persist($employe);
           
            // je veux que tu persiste dans le temps prepare a le sauvegarder
            $manager->flush();
            

            return $this->redirectToRoute('admin');
        }

        return $this->render('employe/edit.html.twig', [
            'employe' => $employe,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("admin/{idUtilis}/delete", name="admin_delete", methods={"GET","POST"})
     */
   
    public function delete(Request $request, Employe $employe): Response
    {
        if ($this->isCsrfTokenValid('delete'.$employe->getIdUtilis(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($employe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin');
    }


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('VillageTest');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Produit', 'fa fa-home', Produit::class);
        yield MenuItem::linkToCrud('Categorie', 'fa fa-home', Categorie::class);
       // yield MenuItem::linkToCrud('client', 'fa fa-home', Utilis::class);
        //yield MenuItem::linkToCrud('Employe', 'fa fa-home', Employe::class);
        // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
    }
    
}

<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\Employe;
use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     * 
     */
    public function index(): Response
    {
        return $this->render('bundles\EasyAdminBundles\welcome.html.twig');
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
        yield MenuItem::linkToCrud('Employe', 'fa fa-home', Employe::class);
        // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
    }
    
}

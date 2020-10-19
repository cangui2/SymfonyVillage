<?php

namespace App\Controller\Admin;

use App\Entity\Employe;
use App\Entity\Utilis;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EmployeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Employe::class;
    }

   /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new(''),
            
        ];
    }
   */
}

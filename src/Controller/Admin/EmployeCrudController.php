<?php

namespace App\Controller\Admin;

use App\Entity\Employe;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EmployeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Employe::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('Id_utilis','id'),
            TextField::new('Util_Nom'),
            Textfield::new('Util_Prenom'),
            TextField::new('Util_adresse'),
            TextField::new('Util_Cp'),
            TextField::new('Util_ville'),
            TextField::new('Util_mail'),
            TextField::new('Util_username'),
            TextField::new('Util_password'),
         
            CollectionField::new(('roles')),
            TextField::new(('emp_num_secu_social')),
            TextField::new(('emp_pos_id')),
           
            DateField::new(('emp_date_entree')),
            DateField::new(('emp_date_sortie')),
            TextField::new(('emp_num_secu_social')),
           

        ];
    }
    
}

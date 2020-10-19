<?php

namespace App\Controller\Admin;

use App\Entity\Utilis;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UtilisCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Utilis::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}

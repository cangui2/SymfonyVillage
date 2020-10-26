<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proLibelle')
            ->add('proDescription')
            ->add('proPrix')
            ->add('proRef')
            ->add('proStock')
            ->add('proStockAlerte')
            ->add('proCouleur')
            ->add('proPhoto')
            ->add('proDateAjout')
            ->add('proDateModif')
            ->add('proBloque')
            ->add('cat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}

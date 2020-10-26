<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Util_password',PasswordType::class)
            ->add('Util_username')
            ->add('Util_Nom')
            ->add('Util_Prenom')
            ->add('Util_sexe')
            ->add('Util_date_de_naissance',DateType::class)
            ->add('Util_telephone')
            ->add('Util_adresse')
            ->add('cliAdresseLivraison')
            ->add('Util_Cp')
            ->add('Util_ville')
            
            ->add('Util_mail')
            
           
            ->add('cliCoefficient')
            ->add('cliReference')
            ->add('pay')
            ->add('com')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}

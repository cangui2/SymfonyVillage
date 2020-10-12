<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cliNom')
            ->add('cliPrenom')
            ->add('cliSexe')
            ->add('cliDateDeNaissance')
            ->add('cliAdresseFacturation')
            ->add('cliAdresseLivraison')
            ->add('cliCp')
            ->add('cliVille')
            ->add('cliTelephone')
            ->add('cliMail')
            ->add('cliMotdepasse',PasswordType::class)
            ->add('cliLogin')
            ->add('cliType')
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

<?php

namespace App\Form;


use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('utilNom')
            ->add('utilPrenom')
            ->add('utilSexe')
            ->add('utilAdresse')
            ->add('utilCp')
            ->add('utilVille')
            ->add('utilMail')
            ->add('utilUsername')
            ->add('utilPassword')
            ->add('utilTelephone')
            ->add('utilDateDeNaissance',DateType::class,[
                'placeholder' => 'Select a value',
            ])
            
            ->add('cliAdresseLivraison')
            ->add('cliType')
            ->add('cliCoefficient')
            ->add('cliReference')
            
            ->add('pay')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}

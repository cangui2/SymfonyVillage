<?php

namespace App\Form;

use App\Entity\Utilis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisType extends AbstractType
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
            ->add('utilDateDeNaissance')
            ->add('roles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilis::class,
        ]);
    }
}

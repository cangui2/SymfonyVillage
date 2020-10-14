<?php

namespace App\Form;

use App\Entity\Employe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType2Type extends AbstractType
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
            ->add('empPosId')
            ->add('empEmpId')
            ->add('empDateEntree')
            ->add('empDateSortie')
            ->add('empNumSecuSocial')
            ->add('empTypeClient')
            ->add('empId1')
            ->add('pos')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}

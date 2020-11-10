<?php

namespace App\Form;

use App\Entity\LigneDeCommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LigneDeCommande1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'submit btn-sm btn-danger'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LigneDeCommande::class,
        ]);
    }
}

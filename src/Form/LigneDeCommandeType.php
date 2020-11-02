<?php

namespace App\Form;

use App\Entity\LigneDeCommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LigneDeCommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ligQuantite',TextareaType::class)
            ->add('ligRemise')
            ->add('pro',ChoiceType::class, [
                'choice_value' => function (?LigneDeCommande $entity) {
                    return $entity ? $entity->getpro() : '';
                },
                    ]);
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LigneDeCommande::class,
        ]);
    }
}

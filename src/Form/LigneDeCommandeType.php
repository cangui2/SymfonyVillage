<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\LigneDeCommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\ChoiceList\Loader\CallbackChoiceLoader;

class LigneDeCommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('save', SubmitType::class, [
            'attr' => ['class' => 'submit'],
        ])
        ->add('pro', ChoiceType::class, [
            'choice_value' => function (?LigneDeCommande $entity) {
                return $entity ? $entity->getPro() : '';
            },
            ]);
        /*
            ->add('ligQuantite',TextareaType::class)
            ->add('ligRemise')
            ->add('pro',ChoiceType::class, [
                'choice_value' => function (?LigneDeCommande $entity) {
                    return $entity ? $entity->getpro() : '';
                },
            
                    ]);
          */ 
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LigneDeCommande::class,
        ]);
    }
}

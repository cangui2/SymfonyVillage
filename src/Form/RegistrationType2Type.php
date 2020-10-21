<?php

namespace App\Form;

use App\Entity\Employe;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;

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
            ->add('empDateEntree')
            ->add('empDateSortie')
            
            ->add('empNumSecuSocial')
            ->add('roles', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices'  => [
                  'User' => 'ROLE_USER',
                  'Partner' => 'ROLE_PARTNER',
                  'Admin' => 'ROLE_ADMIN',
                ],
            ])
             
            
                
            ->add('empId1')
            
        ;
        
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($rolesArray) {
                     // transform the array to a string
                     return count($rolesArray)? $rolesArray[0]: null;
                },
                function ($rolesString) {
                     // transform the string back to an array
                     return [$rolesString];
                }
        ));
        
 
    }
   
    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }

}
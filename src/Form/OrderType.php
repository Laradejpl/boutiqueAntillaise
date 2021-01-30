<?php

namespace App\Form;

use App\Entity\Adress;
use App\Entity\Carrier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $builder
       

             ->add('addresses',EntityType::class,[
                'label'=>false,
                'required'=> true,
                'class'=>Adress::class,
                'choices'=> $user->getAdresses(),
                'multiple'=>false,
                'expanded'=>true
                


            ])
        
            ->add('carriers',EntityType::class,[
                'label'=>'Choissisez un transporteur.',
                'required'=> true,
                'class'=>Carrier::class,
                'multiple'=>false,
                'expanded'=>true
                


            ])
            ->add('submit',SubmitType::class,[
                'label'=>'Valider la commande.',
                'attr'=>[
                    'class'=> 'btn btn-success btn-block'
                ]
                


            ])


           

            




        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'user'=> array()
        ]);
    }
}
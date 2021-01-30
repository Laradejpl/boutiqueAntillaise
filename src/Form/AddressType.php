<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[

                'label'=>'Quelle nom souhaitez vous donner a votre adresse?',
                'attr'=>['placeholder'=>'Nommer votre adresse.']
            ])
            ->add('firstname',TextType::class,[

                'label'=>'votre prénom',
                'attr'=>['placeholder'=>'Entrez votre prénom']
            ])
            ->add('lastname',TextType::class,[

                'label'=>'votre nom',
                'attr'=>['placeholder'=>'Entrez votre nom']
            ])
            ->add('company',TextType::class,[

                'label'=>'votre societé',
                'attr'=>['placeholder'=>'(facultatif) Entrez votre societé'],
                'required'=>false

            ])
            ->add('address',TextType::class,[

                'label'=>'votre adresse?',
                'attr'=>['placeholder'=>'8 rue des lylas...']
            ])
            ->add('postal',TextType::class,[

                'label'=>'votre code postale',
                'attr'=>['placeholder'=>'Entrez votre code postale.']
            ])
            ->add('city',TextType::class,[

                'label'=>'votre ville',
                'attr'=>['placeholder'=>'Entrez votre ville']
            ])
            ->add('country',CountryType::class,[

                'label'=>'votre pays',
                'attr'=>['placeholder'=>'Entrez votre pays']
            ])
            ->add('phone',TelType::class,[

                'label'=>'votre téléphone',
                'attr'=>['placeholder'=>'Entrez votre téléphone']
            ])
            ->add('submit',SubmitType::class,[

                'label'=>'Valider',
                'attr'=>['class'=>'btn-block btn-info']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}

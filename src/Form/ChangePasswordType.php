<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,[
                'disabled'=>true,
                'label'=>'mon adresse email'
            ])
            ->add('firstname',TextType::class,[
                'disabled'=>true,
                'label'=>'mon nom'
                ])
                ->add('lastname',TextType::class,[
                    'disabled'=>true,
                    'label'=>'mon prénom'
                    ])
                    ->add('old_password',PasswordType::class,[
                        'label'=>'mon mot de passe actuel',
                        'mapped'=>false,
                        'attr'=>[
                            'placeholder'=>'Veuillez saisir votre mot de passe'
                        ]
                     ])

                     ->add('email',EmailType::class, [
                        'label'=>'Votre email',
                        'constraints'=> new Length([
                            'min' => 2,
                            'max' => 30,
                            'minMessage' => 'Votre email doit comporter plus que  {{ limit }} characters long',
                            'maxMessage' => 'Votre email doit comporter moins que {{ limit }} characters',
                            'allowEmptyString' => false,
                        ]),
                        'attr'=>['placeholder'=>'saisir votre Email']
        
        
                    ])
                    ->add('new_password',RepeatedType::class, [
                        'type'=> PasswordType::class,
                        'mapped'=>false,
                        'invalid_message'=> 'le mot de passe et la confirmation doivent ètre identique.',
                        'label'=>'Mon nouveau mot de passe',
                        'required'=> true,
                        'first_options' =>[
                            'label' => 'Mon nouveau mot de passe',
                            'attr'=>['placeholder'=>' merci de Saisir votre nouveau mot de passe']
                    ],
                        'second_options' =>[
                            'label' => 'Confirmez votre nouveau mot de passe',
                            'attr'=>['placeholder'=>' merci de confirmer votre mot de passe']
                            
                            ]
                        
        
        
                    ])
                    ->add('submit',SubmitType::class, [

                        'label'=>"M'etre à jour",
                        'attr'=>['class'=>'bg-info']
                    ])
        
        
                ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

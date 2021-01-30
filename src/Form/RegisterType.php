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

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('firstname',TextType::class, [
                'label'=>'Votre pénom',
                'constraints'=> new Length([
                    'min' => 2,
                    'max' => 30,
                    'minMessage' => 'Votre prenom doit comporter plus que  {{ limit }} characters long',
                    'maxMessage' => 'Votre prenom doit comporter moins que {{ limit }} characters',
                    'allowEmptyString' => false,
                ]),
                'attr'=>['placeholder'=>'saisir votre prénom']


            ]  )
            ->add('lastname',TextType::class, [
                'label'=>'Votre nom',
                'constraints'=> new Length([
                    'min' => 2,
                    'max' => 30,
                    'minMessage' => 'Votre nom doit comporter plus que  {{ limit }} characters long',
                    'maxMessage' => 'Votre nom doit comporter moins que {{ limit }} characters',
                    'allowEmptyString' => false,
                ]),
                'attr'=>['placeholder'=>'saisir votre nom']


            ]  )
            ->add('email',EmailType::class, [
                'label'=>'Votre email',
                'constraints'=> new Length([
                    'min' => 2,
                    'max' => 50,
                    'minMessage' => 'Votre email doit comporter plus que  {{ limit }} characters long',
                    'maxMessage' => 'Votre email doit comporter moins que {{ limit }} characters',
                    'allowEmptyString' => false,
                ]),
                'attr'=>['placeholder'=>'saisir votre Email']


            ])
            ->add('password',RepeatedType::class, [
                'type'=> PasswordType::class,
                'invalid_message'=> 'le mot de passe et la confirmation doivent ètre identique.',
                'label'=>'Votre mot de passe',
                'required'=> true,
                'first_options' =>[
                    'label' => 'mot de passe',
                    'attr'=>['placeholder'=>' merci de Saisir votre mot de passe']
            ],
                'second_options' =>[
                    'label' => 'Confirmez mot de passe',
                    'attr'=>['placeholder'=>' merci de confirmer votre mot de passe']
                    
                    ]
                


            ])
            /*->add('password_confirm',PasswordType::class, [
                'label'=>'Confirmer votre mot de passe',
                'mapped'=>false,//permet de pas lier a la base de donnée
                'attr'=>['placeholder'=>'Confirmer votre mot de passe']


            ])*/

            ->add('submit',SubmitType::class, [

                'label'=>"S'inscrire"
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

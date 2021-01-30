<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    private  $entityManager;//doctrine qui permet d'injecter dans la bdd
    public function __construct(EntityManagerInterface $entityManager)
     {
        $this->entityManager = $entityManager;
     }


    /**
     * @Route("/inscription", name="register")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notification = null ;

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();//permet de rentrer les valeurs sur user si le formulaire est submit
            $search_email = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());
            if (!$search_email) {
                $password = $encoder->encodePassword($user,$user->getPassword());//pour l'encodage du mot de passe
                $user->setPassword($password);
                $this->entityManager->persist($user);//ont fige les données
                $this->entityManager->flush();//equivalent de execute
                $mail = new Mail();
                
                $content= "Bonjour".$user->getFirstname()."<br>Bienvenue sur la Boutique dedié aux produits des Antilles française.<br><br>Retrouvez tous les Meilleurs Produits Antillais. Commandez dès Maintenant ! Course en ligne. Livraison France et Monde. Satisfait ou Remboursé. Site Antillais N°1. Plus de 500 Références. Livraison Rapide. Paiement Sécurisé. Gara";

                $mail->send($user->getEmail(),$user->getFirstname(),'Bienvenue sur la boutique Antillaise',$content);//ont envoi un mail de confirmation
                $notification = "Votre inscription s'est correctement déroulée.Vous pouvez à present voius connecté.";
            }else{
                $notification = "L'email que vous avez renseigné existe déja.";

            }
           
            
           
        }


        return $this->render('register/index.html.twig',[
            'form'=>$form->createView(),
            'notification'=>$notification
        
        
        ]);
       
    }
}

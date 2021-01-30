<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\Mail;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderSuccessController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/commande/merci/{stripeSessionId}", name="order_validate")
     */
    public function index(Cart $cart ,$stripeSessionId): Response
    {
        $order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);
        if (!$order || $order->getUser() != $this->getUser()) {
            return $this->redirectToRoute('home');
          }
          if (!$order->getIsPaid()) {
            $cart->remove();
              //modifier isPaid a oui.
              $order->setIsPaid(1);
              $this->entityManager->flush();
              
              $mail = new Mail();
                
              $content= "Bonjour".$order->getUser()->getFirstname()."<br>Merci pour votre commande sur notre boutique des antilles.<br><br>Retrouvez tous les Meilleurs Produits Antillais. Commandez dès Maintenant ! Course en ligne. Livraison France et Monde. Satisfait ou Remboursé. Site Antillais N°1. Plus de 500 Références. Livraison Rapide. Paiement Sécurisé. Gara";
    
              $mail->send($order->getUser()->getEmail(),$order->getUser()->getFirstname(),'Votre commande sur la boutique Antillaise est bien validée',$content);
              

              
          }
         
          // afficher les quelques informations du client de commande.
        //dd($order);
        return $this->render('order_success/index.html.twig',[

            'order'=>$order
        ]);
    }
}

<?php

namespace App\Controller;
use App\Classe\Cart;
use App\Entity\Order;
use App\Form\OrderType;
use App\Entity\OrderDetails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){

        $this->entityManager = $entityManager;


    }
    /**
     * @Route("/commande", name="order")
     */
    public function index( Request $request,Cart $cart): Response
    {
        if (!$this->getUser()->getAdresses()->getValues()) {
            return $this->redirectToRoute('account_address_add');
            
        }
        $form = $this->createForm(OrderType::class, null ,[
            'user'=>$this->getUser()

        ] );

      
        return $this->render('order/index.html.twig',[
           'form'=>$form->createView(),
           'cart'=>$cart->getFull()

        ]);
    }


     /**
     * @Route("/commande/recapitulatif", name="order_recap",methods={"POST"})
     */
    public function add( Request $request,Cart $cart): Response
    {
        
        $form = $this->createForm(OrderType::class, null ,[
            'user'=>$this->getUser()

        ] );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $date = new \DateTime();
            $carriers = $form->get('carriers')->getData();
            $delivery = $form->get('addresses')->getData();
            $delivery_content = $delivery->getFirstname().''.$delivery->getLastname();
            $delivery_content .= '<br/>'.$delivery->getPhone();
            if ($delivery->getCompany()) {
                
                $delivery_content .= '<br/>'.$delivery->getCompany();
            }
            $delivery_content .= '<br/>'.$delivery->getAddress();
            $delivery_content .= '<br/>'.$delivery->getPostal().''.$delivery->getCity();
            $delivery_content .= '<br/>'.$delivery->getCountry();
           

            //dd($delivery_content);

            //enregistrer ma commande.
            $order = new Order();
            $reference = $date->format('dmY').'-'.uniqid();
            $order->setReference($reference);

            $order->setUser($this->getUser());
            $order->setCreatedAt($date);
            $order->setCarrierName($carriers->getName());
            $order->setCarrierPrice($carriers->getPrice());
            $order->setDelivery($delivery_content);
            $order->setIsPaid(0);
            $this->entityManager->persist($order);
            //enregistrer les details de la commande.

          

            foreach ($cart->getFull() as $product) {
                //dd($product);
                $orderDetails = new OrderDetails();
                $orderDetails->setMyOrder($order);
                $orderDetails->setProduct($product['product']->getName());
                $orderDetails->setQuantity($product['quantity']);
                $orderDetails->setPrice($product['product']->getPrice());
                $orderDetails->setTotal($product['product']->getPrice() * $product['quantity'] );
                $this->entityManager->persist($orderDetails);

               
            }
            //dd($order);
            //dd($product_for_stripe);
            $this->entityManager->flush();
     //intégration de stripe voir https://stripe.com/docs/checkout/integration-builder
            
//dump($checkout_session->id);
//dd($checkout_session);


            return $this->render('order/add.html.twig',[
               'cart'=>$cart->getFull(),
               'carrier'=>$carriers,
               'delivery'=>$delivery_content,
               'reference'=>$order->getReference()
               
    
            ]);
        }

        return $this->redirectToRoute('cart');

    }
    
}

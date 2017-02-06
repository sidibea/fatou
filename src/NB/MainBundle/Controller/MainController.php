<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/31/17
 * Time: 10:58 AM
 */

namespace NB\MainBundle\Controller;


use NB\MainBundle\Entity\Reservation;
use NB\MainBundle\Entity\Ticket;
use NB\MainBundle\Entity\Transaction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Unirest;

class MainController extends Controller{

    public function indexAction(){

        $em = $this->getDoctrine()->getManager();
        $national = $em->getRepository('NBMainBundle:City')->findAllNationalCities();
        $international = $em->getRepository('NBMainBundle:City')->findAllInternationalCities();

        return $this->render('NBMainBundle::index.html.twig', [
            'national' => $national,
            'international' => $international
        ]);
    }

    public function listingAction(Request $request){

        if($request->getMethod() == 'GET'){
            $departure =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:City') ->find($request->get('from'));
            $arrival = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:City') ->find($request->get('to'));
        }


        $companies = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Company') ->findAll();

        $admin_link = $this->getParameter('admin_link');



        $search =  $this->get('doctrine.orm.entity_manager')
            ->getRepository('NBMainBundle:Travel')
            ->getTravelByRoute($request->get('from'), $request->get('to'), date("d-m-Y", strtotime($request->get('dateJ'))));

        return $this->render('NBMainBundle::listing.html.twig', [
            'departure' => $departure,
            'arrival' => $arrival,
            'listCompany' => $companies,
            'search' => $search,
            'admin_link' => $admin_link,
            'dateJ' => $request->get('dateJ')
        ]);

    }

    public function detailsAction(Request $request){
        $travel_id = $request->get('travel');
        $dateJ = $request->get('goingDate');

        $admin_link = $this->getParameter('admin_link');

        $travel = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Travel') ->find($travel_id);
        $promo = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Promotion') ->find($travel->getRoute()->getId());


        return $this->render('NBMainBundle::details.html.twig', [
            'travel' => $travel,
            'dateJ' => $dateJ,
            'promo' => $promo,
            'admin_link' => $admin_link

        ]);

    }


    public function custInfoAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $travel_id = $request->get('travel');
        $dateJ = $request->get('goingDate');

        $admin_link = $this->getParameter('admin_link');

        $reservation = new Reservation();
        $ticket = new Ticket();
        $transaction = new Transaction();

        $travel = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Travel') ->find($travel_id);
        $promo = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Promotion') ->find($travel->getRoute()->getId());

        $price = ($promo != null && $promo->getMontant() >0)?( $travel->getPrice()-$promo->getMontant() ):$travel->getPrice();

        if($request->getMethod() == 'POST'){
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');
            $age = $request->get('age');
            $sexe = $request->get('sexe');
            $telephone = $request->get('telephone');

            $reservation->setDoj($dateJ);
            $reservation->setTravel($travel);
            $reservation->setChannel('web');
            $reservation->setChannelId($telephone);
            $reservation->setSeats('1');
            $reservation->setConfirmed(false);
            $reservation->setDateAdd(new \datetime);
            $reservation->setDateUpd(new \datetime);
            $em->persist($reservation);

            $ticketNo = "#NB".substr($telephone, -1)."".substr($nom, 2).date('dmyHis').$reservation->getId();
            $ticket->setNom($nom." ".$prenom);
            $ticket->setAge($age);
            $ticket->setGender($sexe);
            $ticket->setTelephone($telephone);
            $ticket->setEmail($email);
            $ticket->setTicketNo($ticketNo);

            $reservation->setTickets($ticket);



            $em->persist($reservation);
            $em->flush();

            $callback_url = "http://next-bus.net/vitepay/callback/".$reservation->getId();
            $hash =  $reservation->getId().";".($price*100).";XOF;".$callback_url.";".$this->getParameter('vitePay_api_secret');

            //dump($price * 100); exit;

            $vitePay = [
                'payment' => [
                    'language_code' => 'fr',
                    'currency_code' => 'XOF',
                    'country_code' => 'ML',
                    'order_id' => $reservation->getId(),
                    'description' => 'paiement billet nextBus',
                    'amount_100' => $price * 100,
                    'buyer_ip_adress' => $request->getClientIp(),
                    'return_url' => 'http://127.0.0.1:8000/confirm/1',
                    'decline_url' => 'http://127.0.0.1:8000/decline/1',
                    'cancel_url' => 'http://127.0.0.1:8000/cancel/1',
                    'callback_url' => "http://next-bus.net/vitepay/callback/".$reservation->getId(),
                    'email' => $email,
                    'p_type' => 'orange_money',

                ],
                'redirect' => 0,
                'api_key' => $this->getParameter('vitePay_api_key'),
                'hash' => SHA1(strtoupper($hash)),

            ];

            $headers = array('Accept' => 'application/json');
            $body = Unirest\Request\Body::form($vitePay);

            $response = Unirest\Request::post("https://api.vitepay.com/v1/prod/payments", $headers, $body);

           // dump($response->code); exit;

            if($response->code == '200') {
                return $this->redirect($response->body);
            }

        }


        return $this->render('NBMainBundle::custInfo.html.twig', [
            'travel' => $travel,
            'dateJ' => $dateJ,
            'promo' => $promo,
            'admin_link' => $admin_link

        ]);

    }


    public function callbackAction($id, Request $request){


    }

}
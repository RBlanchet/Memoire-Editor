<?php

namespace Romain\MemoireBundle\Controller;

use Romain\MemoireBundle\Controller\ChiefController;


class HomeController extends ChiefController
{
    public function homeAction()
    {
        $_POST['auth'] = true;
        return $this->render('RomainMemoireBundle:Home:home.html.twig', array(
            'courant' => $this->getRepoCourantMonth(),
            'a_venir' => $this->getAVenirMonth(),
            'ecouler' => $this->getEcoulerMonth(),
            'auth' => $_POST['auth'],
            'auth_name' => 'Romain',
        ));
    }

    protected function getRepoCourantMonth()
    {
        // On récupère le repo
        $repo = $this->getDoctrine()->getManager()->getRepository('RomainMemoireBundle:MemoireDoctrine');
        // On récupère l'entité correspondant à l'id
        $mois_courant =  $repo->findOneBy(
            array('mois' => $this->getCourantMonth())
        );
        return $mois_courant;
    }

    protected function getAVenirMonth()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT m FROM RomainMemoireBundle:MemoireDoctrine m WHERE m.dateDebut > CURRENT_TIMESTAMP()");
        $mois_a_venir = $query->getResult();
        return $mois_a_venir;
    }

    protected function getEcoulerMonth()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT m FROM RomainMemoireBundle:MemoireDoctrine m WHERE m.dateFin < CURRENT_TIMESTAMP()");
        $mois_ecouler = $query->getResult();
        return $mois_ecouler;
    }

    protected function getCourantMonth()
    {
        // Définit le fuseau horaire
        date_default_timezone_set('Europe/Paris');
        // Stock dans des variable le Mois et l'Année
        $month = date("F");
        $year = date("Y");
        // On cherche quel mois on est et on l'indente avec l'année
        switch($month){
            case 'January':
                return 'Janvier ' . $year;
                break;
            case 'February':
                return 'Fevrier '  . $year;
                break;
            case 'March':
                return 'March ' . $year;
                break;
            case 'April':
                return 'Avril ' . $year;
                break;
            case 'May':
                return 'Mai ' . $year;
                break;
            case 'June':
                return 'Juin ' . $year;
                break;
            case 'July':
                return 'Juillet ' . $year;
                break;
            case 'August':
                return 'Aout ' . $year;
                break;
            case 'September':
                return 'Septembre ' . $year;
                break;
            case 'October':
                return 'Octobre ' . $year;
                break;
            case 'November':
                return 'Novembre ' . $year;
                break;
            case 'December':
                return 'Decembre ' . $year;
                break;
        }
    }

}

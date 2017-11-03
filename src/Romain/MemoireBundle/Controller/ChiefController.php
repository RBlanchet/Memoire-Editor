<?php

namespace Romain\MemoireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Controleur Parent
class ChiefController extends Controller
{
    // On l'utilise dans deux endroits enfants
    protected function showMonth($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('RomainMemoireBundle:MemoireDoctrine')
        ;
        $param = $repository->findOneBy(
            array('id' => $id)
        );
        return $param;
    }
}
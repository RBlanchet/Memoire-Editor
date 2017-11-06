<?php

namespace Romain\MemoireBundle\Controller;


class ShowController extends ChiefController
{
    public function showAction()
    {
        // On vérifie si l'user est connecté
        $user = $this->getUser();
        if($user != null)
        {
            if(!empty($_POST))
            {
                // Si la variable POST est pleine; on execute la requête
                $id = $_POST['link_id'];
                $param = $this->showMonth($id);
                return $this->render('RomainMemoireBundle:Show:show.html.twig', array(
                    'param' => $param,
                    'logged' => true
                ));
            }
            else
            {
                // Si la variable POST est vide, on renvoie une erreur.
                return $this->render('RomainMemoireBundle:Error:error.html.twig');
            }
        }
        else
        {
            if(!empty($_POST))
            {
                // Si la variable POST est pleine; on execute la requête
                $id = $_POST['link_id'];
                $param = $this->showMonth($id);
                return $this->render('RomainMemoireBundle:Show:show.html.twig', array(
                    'param' => $param,
                ));
            }
            else
            {
                // Si la variable POST est vide, on renvoie une erreur.
                return $this->render('RomainMemoireBundle:Error:error.html.twig');
            }
        }

    }
}
<?php

namespace Romain\MemoireBundle\Controller;


class EditController extends ChiefController
{
    public function editAction(){
        // On verifie si l'user est connecté
        $user = $this->getUser();
        if($user != null)
        {
            // On verifie si on accède au menu d'edition via le formulaire du boutton "Editer"
            if(!empty($_POST))
            {
                // On vérifie si l'edition a déjà été effectué ou non
                if(isset($_POST['edit_id_submit']))
                {
                    // Si elle a déjà été effectuée, on execute la requête Doctrine, puis on affiche le contenu
                    $this->editMonth($_POST['edit_id_submit'], $_POST['content']);
                    $param = $this->showMonth($_POST['edit_id_submit']);
                    return $this->render('RomainMemoireBundle:Show:show.html.twig', array(
                        'param' => $param,
                        'logged' => true
                    ));
                }
                else
                {
                    // Si la variable POST est vide; on se redirige vers le menu d'edition
                    $id = $_POST['edit_id'];
                    $param = $this->showMonth($id);
                    return $this->render('RomainMemoireBundle:Edit:edit.html.twig', array(
                        'param' => $param,
                        'logged' => true
                    ));
                }
            }
            else
            {
                // Si la variable POST est vide, on renvoie une erreur.
                return $this->render('RomainMemoireBundle:Error:error.html.twig');
            }
        }
        else
        {
            // Si l'user n'est pas connecté on le renvoie à la page d'authentification
            return $this->redirectToRoute('fos_user_security_login', array(
                'login_required' => true
            ));
        }

    }

    protected function editMonth($id, $content)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('RomainMemoireBundle:MemoireDoctrine')->find($id);
        $repo->setContent($content);
        // On définit le fuseau horaire
        date_default_timezone_set('Europe/Paris');
        // On crée un objet DateTime
        $date = new \Datetime();
        // Puis on l'envoie dans la bdd
        $repo->setDateModifier($date);
        // On execute les requête
        $em->flush();
    }
}
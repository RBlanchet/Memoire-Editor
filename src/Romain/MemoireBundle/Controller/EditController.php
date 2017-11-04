<?php

namespace Romain\MemoireBundle\Controller;


class EditController extends ChiefController
{
    public function editAction(){
        $user = $this->getUser();
        if($user != null)
        {
            if(!empty($_POST))
            {
                if(isset($_POST['edit_id_submit']))
                {
                    $this->editMonth($_POST['edit_id_submit'], $_POST['content']);
                    $param = $this->showMonth($_POST['edit_id_submit']);
                    return $this->render('RomainMemoireBundle:Show:show.html.twig', array(
                        'param' => $param,
                        'logged' => true
                    ));
                }
                else
                {
                    // Si la variable POST est pleine; on execute une requête de paramètre
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
        $em->flush();
    }
}
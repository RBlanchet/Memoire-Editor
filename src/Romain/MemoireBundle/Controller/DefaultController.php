<?php

namespace Romain\MemoireBundle\Controller;

use Romain\MemoireBundle\Controller\ChiefController;

class DefaultController extends ChiefController
{
    public function indexAction()
    {
        return $this->render('RomainMemoireBundle:Default:index.html.twig');
    }
}

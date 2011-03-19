<?php

namespace Funsataional\JobQueueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FunsataionalJobQueueBundle:Default:index.html.twig');
    }
}

<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PomocController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('KlientBundle:Pomoc:index.html.twig');
    }
}

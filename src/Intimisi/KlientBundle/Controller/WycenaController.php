<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WycenaController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('KlientBundle:Wycena:index.html.twig');
    }
}

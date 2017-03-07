<?php

namespace PTUT\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    public function indexAction()
    {
        
        $content = $this->get('templating')->render('PTUTTestBundle:Test:index.html.twig');
        
        return new Response($content);
    }
}

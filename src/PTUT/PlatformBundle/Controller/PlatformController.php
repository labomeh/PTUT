<?php

namespace PTUT\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PlatformController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:home.html.twig');
        return new Response($content);
    }
}

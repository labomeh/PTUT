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
    
    public function article_creatorAction()
    {
        if(isset($_POST['content_editor'])){
            $file=fopen('../src/PTUT/PlatformBundle/Resources/views/Platform/article_1.html.twig','w');
            fwrite($file,'{% extends "PTUTPlatformBundle:Platform:layout.html.twig" %}');
            fwrite($file,'{% block body %}');
            fwrite($file,$_POST['content_editor']);
            fwrite($file,'{% endblock %} ');
            fclose($file);
            unset($_POST);
        }
        
        
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:article_creator.html.twig');
        return new Response($content);
    }
    
    public function view_articleAction($id)
    {
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:articles/article_'.$id.'.html.twig');
        return new Response($content);
    }
}

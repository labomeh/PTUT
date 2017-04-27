<?php

namespace PTUT\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PlatformController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository("PTUTPlatformBundle:Article");
        $articles = $repository->findAll();
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:home.html.twig', array('articles' => $articles));
        return new Response($content);
    }
    
    public function viewidAction($id)
    {
        $repository = $this->getDoctrine()->getRepository("PTUTPlatformBundle:Article");
        $articles = $repository->findAll();
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:actualites.html.twig', array('articles' => $articles, 'id' => $id, 'taille' => sizeof($articles)));
        return new Response($content);
    }
    
    public function viewAction($id)
    {
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:'.$id.'.html.twig');
        return new Response($content);
    }
    
    public function article_creatorAction()
    {
        if(isset($_POST['content_editor'])){
            $file=fopen('../src/PTUT/PlatformBundle/Resources/views/Platform/articles/article_1.html.twig','w');
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

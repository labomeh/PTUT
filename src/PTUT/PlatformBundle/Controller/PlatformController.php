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
}

<?php

namespace PTUT\PlatformBundle\Controller;

use PTUT\PlatformBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

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
        $repository2 = $this->getDoctrine()->getRepository("PTUTPlatformBundle:Commentaire");
        $commentaire = $repository2->findAll();
        
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:actualites.html.twig', array('articles' => $articles, 'id' => $id, 'taille' => sizeof($articles), 'commentaire' => $commentaire, 'tailleCom' => sizeof($commentaire)));
        return new Response($content);
    }
    
    public function viewAction($id)
    {
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:'.$id.'.html.twig');
        return new Response($content);
    }
    
    public function article_creatorAction()
    {
        if(!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        {
            return $this->redirectToRoute('login');
        }
        if(isset($_POST['content_editor'])){
            $repository = $this->getDoctrine()->getRepository("PTUTPlatformBundle:Article");
            $articles = $repository->findAll();
            $id = sizeof($articles) + 1;
            $file=fopen('../src/PTUT/PlatformBundle/Resources/views/Platform/articles/article_'.$id.'.html.twig','w');
            fwrite($file,'{% extends "PTUTPlatformBundle:Platform:layout.html.twig" %}');
            fwrite($file,'{% block body %}');
            fwrite($file,$_POST['content_editor']);
            fwrite($file,'{% endblock %} ');
            fclose($file);
            
            //File upload
            $target_dir = "../web/bundles/ptutplatform/images/thumbnails/";
            $target_file = $target_dir . basename($_FILES["miniature"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["miniature"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["miniature"]["size"] > $_POST['MAX_FILE_SIZE']) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["miniature"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["miniature"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            
            $article = new Article();
            $article->setTitre($_POST['titre']);
            $article->setAuteur($_POST['autor']);
            $article->setPresentation($_POST['presentation']);
            $article->setDate(new \DateTime('now'));
                
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            
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
    
    public function redirectAction()
    {
        return $this->redirectToRoute('ptut_platform_article_creator');
    }
}

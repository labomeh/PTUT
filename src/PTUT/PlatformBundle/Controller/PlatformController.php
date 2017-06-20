<?php

namespace PTUT\PlatformBundle\Controller;

use PTUT\PlatformBundle\Entity\Article;
use PTUT\PlatformBundle\Entity\Commentaire;
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
    
    public function aboutAction()
    {
        $content = $this->get('templating')->render('PTUTPlatformBundle:Platform:about.html.twig');
        return new Response($content);
    }
    
    public function viewidAction($id)
    {
        
        if(isset($_POST['content'])){
            $commentaire2 = new Commentaire();
            $commentaire2->setAuteur($_POST['author']);
            $commentaire2->setContenu($_POST['content']);
            $commentaire2->setArticle($_POST['article']);
            $commentaire2->setReponse($_POST['parent']);
            $date=new \DateTime('now');
            $date->setTimezone(new \DateTimeZone('Europe/Paris')); 
            $commentaire2->setDate($date);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire2);
            $em->flush();
            
            unset($_POST);
        }
        
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
            fwrite($file,$_POST['content_editor']);
            fclose($file);
            
            //File upload
            $target_dir = "../web/bundles/ptutplatform/images/blog/";
            $target_file = $target_dir . "article_" . $id . ".jpg";
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["miniature"]["tmp_name"]);
                if($check !== false) {
                    echo "<div class='alert alert-danger'>Le fichier est une image - " . $check["mime"] . ".</div>";
                    $uploadOk = 1;
                } else {
                    echo "<div class='alert alert-danger'>Le fichier n'est pas une image.</div>";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "<div class='alert alert-danger'>Désolé, le fichier éxiste déjà.</div>";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["miniature"]["size"] > $_POST['MAX_FILE_SIZE']) {
                echo "<div class='alert alert-danger'>Désolé, le fichier est trop volumineux.</div>";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "<div class='alert alert-danger'>Désolé, seules les fichiers JPG, JPEG, PNG et GIF sont autorisés.</div>";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<div class='alert alert-danger'>Désolé, votre fichier n'a pas été envoyé.</div>";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["miniature"]["tmp_name"], $target_file)) {
                    echo "<div class='alert alert-success'>Le fichier ". basename( $_FILES["miniature"]["name"]). " a été uploadé.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Désolé il y a eu une erreur lors de l'envoi du fichier.</div>";
                }
            }
            
            $article = new Article();
            $article->setTitre($_POST['titre']);
            $article->setAuteur($_POST['autor']);
            $article->setPresentation($_POST['presentation']);
            $date=new \DateTime('now');
            $date->setTimezone(new \DateTimeZone('Europe/Paris')); 
            $article->setDate($date);
            $article->setCommentaires(0);
                
            
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

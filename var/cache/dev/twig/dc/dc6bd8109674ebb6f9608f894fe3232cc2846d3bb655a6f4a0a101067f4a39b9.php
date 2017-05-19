<?php

/* @PTUTPlatform/Platform/layout.html.twig */
class __TwigTemplate_38341985d116eab0c81d22815d2434adf317e7eadb2a24197af92ae23b527f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'include' => array($this, 'block_include'),
            'ongletHome' => array($this, 'block_ongletHome'),
            'ongletEditions' => array($this, 'block_ongletEditions'),
            'ongletCompte' => array($this, 'block_ongletCompte'),
            'ongletAbout' => array($this, 'block_ongletAbout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97336ec3edb0e7a77c35e1e0b5418e1f5836ac4717bd1f792d17917555c9d908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97336ec3edb0e7a77c35e1e0b5418e1f5836ac4717bd1f792d17917555c9d908->enter($__internal_97336ec3edb0e7a77c35e1e0b5418e1f5836ac4717bd1f792d17917555c9d908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_3c36188ad0b644b44c0e3121243608d74d5c6e6359d57bc3f4ba4f1cdbe47e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c36188ad0b644b44c0e3121243608d74d5c6e6359d57bc3f4ba4f1cdbe47e1b->enter($__internal_3c36188ad0b644b44c0e3121243608d74d5c6e6359d57bc3f4ba4f1cdbe47e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
   <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">
    <title>PTUT</title>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 16
        $this->displayBlock('include', $context, $blocks);
        // line 17
        echo "
    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"bundles/ptutplatform/images/ico/favicon.ico\">
    
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

</head>
<body id=\"site\">
    <header class=\"container-fluid\">
        <div class=\"navbar navbar-inverse navbar-fixed-top wet-asphalt\" role=\"banner\">
          <div class=\"container\">
            <div class=\"navbar-header\">
                
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                  
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
              </button>
                
              <a class=\"navbar-brand\" href=\"home\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 45
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view", array("id" => "home"));
        echo "\">Home</a></li>
                <li class=\"dropdown ";
        // line 46
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view_id", array("id" => 1));
        echo "\">Actualités</a>
                </li>
                <li class=\"dropdown ";
        // line 48
        $this->displayBlock('ongletCompte', $context, $blocks);
        echo "\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle = \"dropdown\" role=\"button\">Mon compte<span class=\"icon-angle-down\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Se connecter</a></li>
                        <li><a href=\"#\">S'inscrire</a></li>
                    </ul>
                </li>
                <li class=\"";
        // line 54
        $this->displayBlock('ongletAbout', $context, $blocks);
        echo "\"><a href=\"#about\">About</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
    
    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        
    <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"col-sm-7\"><span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
        </div>
        <div class=\"col-sm-5\">
            <ul class=\"pull-right\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">About Us</a></li>
                <li><a href=\"#\">Faq</a></li>
                <li><a href=\"#\">Contact Us</a></li>
                <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
            </ul>
        </div>
    </footer>

    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_97336ec3edb0e7a77c35e1e0b5418e1f5836ac4717bd1f792d17917555c9d908->leave($__internal_97336ec3edb0e7a77c35e1e0b5418e1f5836ac4717bd1f792d17917555c9d908_prof);

        
        $__internal_3c36188ad0b644b44c0e3121243608d74d5c6e6359d57bc3f4ba4f1cdbe47e1b->leave($__internal_3c36188ad0b644b44c0e3121243608d74d5c6e6359d57bc3f4ba4f1cdbe47e1b_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_6981b51eb7c6eff90b08c8c8a944baf6bdd3305cdad095eca4fdc173dd1662d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6981b51eb7c6eff90b08c8c8a944baf6bdd3305cdad095eca4fdc173dd1662d5->enter($__internal_6981b51eb7c6eff90b08c8c8a944baf6bdd3305cdad095eca4fdc173dd1662d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_fddd91e2ffa98813582c2b45d9b959a68d3b85d790c359e393d86d1c5a010b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddd91e2ffa98813582c2b45d9b959a68d3b85d790c359e393d86d1c5a010b10->enter($__internal_fddd91e2ffa98813582c2b45d9b959a68d3b85d790c359e393d86d1c5a010b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_fddd91e2ffa98813582c2b45d9b959a68d3b85d790c359e393d86d1c5a010b10->leave($__internal_fddd91e2ffa98813582c2b45d9b959a68d3b85d790c359e393d86d1c5a010b10_prof);

        
        $__internal_6981b51eb7c6eff90b08c8c8a944baf6bdd3305cdad095eca4fdc173dd1662d5->leave($__internal_6981b51eb7c6eff90b08c8c8a944baf6bdd3305cdad095eca4fdc173dd1662d5_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_d244e5c29cd73d4eb7d6cafab655f8fadc9deefabed36e2c2dd589413ffa2773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d244e5c29cd73d4eb7d6cafab655f8fadc9deefabed36e2c2dd589413ffa2773->enter($__internal_d244e5c29cd73d4eb7d6cafab655f8fadc9deefabed36e2c2dd589413ffa2773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_855d78080b0dc32a8ff6a6886108a28291efb7a07ab93431ef1953ae3b3ece5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855d78080b0dc32a8ff6a6886108a28291efb7a07ab93431ef1953ae3b3ece5c->enter($__internal_855d78080b0dc32a8ff6a6886108a28291efb7a07ab93431ef1953ae3b3ece5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_855d78080b0dc32a8ff6a6886108a28291efb7a07ab93431ef1953ae3b3ece5c->leave($__internal_855d78080b0dc32a8ff6a6886108a28291efb7a07ab93431ef1953ae3b3ece5c_prof);

        
        $__internal_d244e5c29cd73d4eb7d6cafab655f8fadc9deefabed36e2c2dd589413ffa2773->leave($__internal_d244e5c29cd73d4eb7d6cafab655f8fadc9deefabed36e2c2dd589413ffa2773_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_fc162a72f565f8506b7f7f6d24ed09b35a8f8933c718082cc2e52f4d79067f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc162a72f565f8506b7f7f6d24ed09b35a8f8933c718082cc2e52f4d79067f8e->enter($__internal_fc162a72f565f8506b7f7f6d24ed09b35a8f8933c718082cc2e52f4d79067f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_9f68b045bc96a78b0b29c7bf8962a17719dd2524ca656715749a366d4fee3ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f68b045bc96a78b0b29c7bf8962a17719dd2524ca656715749a366d4fee3ea8->enter($__internal_9f68b045bc96a78b0b29c7bf8962a17719dd2524ca656715749a366d4fee3ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_9f68b045bc96a78b0b29c7bf8962a17719dd2524ca656715749a366d4fee3ea8->leave($__internal_9f68b045bc96a78b0b29c7bf8962a17719dd2524ca656715749a366d4fee3ea8_prof);

        
        $__internal_fc162a72f565f8506b7f7f6d24ed09b35a8f8933c718082cc2e52f4d79067f8e->leave($__internal_fc162a72f565f8506b7f7f6d24ed09b35a8f8933c718082cc2e52f4d79067f8e_prof);

    }

    // line 48
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_bb325d745e80cbdabfa567513817d6ee5298ff71fbf9f8b299c8a476f77ab33d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb325d745e80cbdabfa567513817d6ee5298ff71fbf9f8b299c8a476f77ab33d->enter($__internal_bb325d745e80cbdabfa567513817d6ee5298ff71fbf9f8b299c8a476f77ab33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_27d2a381c4d7f359e85219041bbbf838c828a7791b0246d5ccdf7620a2a44eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d2a381c4d7f359e85219041bbbf838c828a7791b0246d5ccdf7620a2a44eb0->enter($__internal_27d2a381c4d7f359e85219041bbbf838c828a7791b0246d5ccdf7620a2a44eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_27d2a381c4d7f359e85219041bbbf838c828a7791b0246d5ccdf7620a2a44eb0->leave($__internal_27d2a381c4d7f359e85219041bbbf838c828a7791b0246d5ccdf7620a2a44eb0_prof);

        
        $__internal_bb325d745e80cbdabfa567513817d6ee5298ff71fbf9f8b299c8a476f77ab33d->leave($__internal_bb325d745e80cbdabfa567513817d6ee5298ff71fbf9f8b299c8a476f77ab33d_prof);

    }

    // line 54
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_68a89fe788518d07490c508f0f281d40f317c488c25211958f732a579d142ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a89fe788518d07490c508f0f281d40f317c488c25211958f732a579d142ed0->enter($__internal_68a89fe788518d07490c508f0f281d40f317c488c25211958f732a579d142ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_02143c45606e391af57f88331d8d96451101b3c6fcbb1c32e04a3678c692d159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02143c45606e391af57f88331d8d96451101b3c6fcbb1c32e04a3678c692d159->enter($__internal_02143c45606e391af57f88331d8d96451101b3c6fcbb1c32e04a3678c692d159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_02143c45606e391af57f88331d8d96451101b3c6fcbb1c32e04a3678c692d159->leave($__internal_02143c45606e391af57f88331d8d96451101b3c6fcbb1c32e04a3678c692d159_prof);

        
        $__internal_68a89fe788518d07490c508f0f281d40f317c488c25211958f732a579d142ed0->leave($__internal_68a89fe788518d07490c508f0f281d40f317c488c25211958f732a579d142ed0_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b1380af7bcbd851e0b9fd977babde50c2e97a28f6c83781242d85bf2bffc5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1380af7bcbd851e0b9fd977babde50c2e97a28f6c83781242d85bf2bffc5ba->enter($__internal_5b1380af7bcbd851e0b9fd977babde50c2e97a28f6c83781242d85bf2bffc5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed94aa42cfc0fd0d26ca27b995fb26cfafb66396718c1c6ae0b8e8dcfbc3afc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed94aa42cfc0fd0d26ca27b995fb26cfafb66396718c1c6ae0b8e8dcfbc3afc4->enter($__internal_ed94aa42cfc0fd0d26ca27b995fb26cfafb66396718c1c6ae0b8e8dcfbc3afc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "
    ";
        
        $__internal_ed94aa42cfc0fd0d26ca27b995fb26cfafb66396718c1c6ae0b8e8dcfbc3afc4->leave($__internal_ed94aa42cfc0fd0d26ca27b995fb26cfafb66396718c1c6ae0b8e8dcfbc3afc4_prof);

        
        $__internal_5b1380af7bcbd851e0b9fd977babde50c2e97a28f6c83781242d85bf2bffc5ba->leave($__internal_5b1380af7bcbd851e0b9fd977babde50c2e97a28f6c83781242d85bf2bffc5ba_prof);

    }

    public function getTemplateName()
    {
        return "@PTUTPlatform/Platform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 62,  264 => 61,  246 => 54,  228 => 48,  210 => 46,  192 => 45,  174 => 16,  161 => 82,  157 => 81,  153 => 80,  149 => 79,  132 => 64,  130 => 61,  120 => 54,  111 => 48,  104 => 46,  98 => 45,  75 => 25,  65 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
   <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">
    <title>PTUT</title>
    <link href=\"{{ asset('bundles/ptutplatform/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/prettyPhoto.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/animate.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/main.css')}}\" rel=\"stylesheet\">
    {% block include %} {% endblock %}

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"bundles/ptutplatform/images/ico/favicon.ico\">
    
    <script src=\"{{ asset('bundles/ptutplatform/ckeditor/ckeditor.js') }}\"></script>

</head>
<body id=\"site\">
    <header class=\"container-fluid\">
        <div class=\"navbar navbar-inverse navbar-fixed-top wet-asphalt\" role=\"banner\">
          <div class=\"container\">
            <div class=\"navbar-header\">
                
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                  
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
              </button>
                
              <a class=\"navbar-brand\" href=\"home\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"{{path('ptut_platform_view', {'id': 'home'})}}\">Home</a></li>
                <li class=\"dropdown {% block ongletEditions %} {% endblock %}\"><a href=\"{{path('ptut_platform_view_id', {'id': 1})}}\">Actualités</a>
                </li>
                <li class=\"dropdown {% block ongletCompte %} {% endblock %}\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle = \"dropdown\" role=\"button\">Mon compte<span class=\"icon-angle-down\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Se connecter</a></li>
                        <li><a href=\"#\">S'inscrire</a></li>
                    </ul>
                </li>
                <li class=\"{% block ongletAbout %} {% endblock %}\"><a href=\"#about\">About</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
    
    {% block body %}

    {% endblock %}
        
    <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"col-sm-7\"><span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
        </div>
        <div class=\"col-sm-5\">
            <ul class=\"pull-right\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">About Us</a></li>
                <li><a href=\"#\">Faq</a></li>
                <li><a href=\"#\">Contact Us</a></li>
                <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
            </ul>
        </div>
    </footer>

    <script src=\"{{ asset('bundles/ptutplatform/js/jquery.js')}}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/jquery.prettyPhoto.js')}}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/main.js')}}\"></script>
</body>
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

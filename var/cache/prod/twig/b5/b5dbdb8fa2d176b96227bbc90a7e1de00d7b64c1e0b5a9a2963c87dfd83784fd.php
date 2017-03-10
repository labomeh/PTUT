<?php

/* PTUTPlatformBundle:Platform:layout.html.twig */
class __TwigTemplate_378720e8608b284ad350ebe5f89a3027eae3c5e100a7faf1942ee000e2ef3e08 extends Twig_Template
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
        $__internal_56a553ef7dd0e6155016ac84950dc0ce8c1d2e84c0e0a6676b4401180317a3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a553ef7dd0e6155016ac84950dc0ce8c1d2e84c0e0a6676b4401180317a3cc->enter($__internal_56a553ef7dd0e6155016ac84950dc0ce8c1d2e84c0e0a6676b4401180317a3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
   <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">
    ";
        // line 10
        $this->displayBlock('include', $context, $blocks);
        // line 11
        echo "    <title>PTUT</title>
    <link href=\"bundles/ptutplatform/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/animate.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/main.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"bundles/ptutplatform/images/ico/favicon.ico\">

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
                
              <a class=\"navbar-brand\" href=\"#\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 43
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"#\">Home</a></li>
                <li class=\"";
        // line 44
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"#Editions\">Editions</a></li>
                <li class=\"dropdown ";
        // line 45
        $this->displayBlock('ongletCompte', $context, $blocks);
        echo "\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle = \"dropdown\" role=\"button\">Mon compte<span class=\"icon-angle-down\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Se connecter</a></li>
                        <li><a href=\"#\">S'inscrire</a></li>
                    </ul>
                </li>
                <li class=\"";
        // line 51
        $this->displayBlock('ongletAbout', $context, $blocks);
        echo "\"><a href=\"#about\">About</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
    
    ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        
    <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"col-sm-6\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
        </div>
        <div class=\"col-sm-6\">
                    <ul class=\"pull-right\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                        <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
                    </ul>
                </div>
    </footer> 
    <script src=\"bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"bundles/ptutplatform/js/main.js\"></script>
</body>
</html>";
        
        $__internal_56a553ef7dd0e6155016ac84950dc0ce8c1d2e84c0e0a6676b4401180317a3cc->leave($__internal_56a553ef7dd0e6155016ac84950dc0ce8c1d2e84c0e0a6676b4401180317a3cc_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_cc5e99eb01ebee657b28fad4b1e96157a49c503915c42e4c6e83704c9a619161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5e99eb01ebee657b28fad4b1e96157a49c503915c42e4c6e83704c9a619161->enter($__internal_cc5e99eb01ebee657b28fad4b1e96157a49c503915c42e4c6e83704c9a619161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_cc5e99eb01ebee657b28fad4b1e96157a49c503915c42e4c6e83704c9a619161->leave($__internal_cc5e99eb01ebee657b28fad4b1e96157a49c503915c42e4c6e83704c9a619161_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_c4e3c245a335c02a5908a8e199984971c87de3bc025941afa5019b3f6adacee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e3c245a335c02a5908a8e199984971c87de3bc025941afa5019b3f6adacee9->enter($__internal_c4e3c245a335c02a5908a8e199984971c87de3bc025941afa5019b3f6adacee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_c4e3c245a335c02a5908a8e199984971c87de3bc025941afa5019b3f6adacee9->leave($__internal_c4e3c245a335c02a5908a8e199984971c87de3bc025941afa5019b3f6adacee9_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_563a6cddced7448c458b9ea7d1c5ed805e606f2d835289f5950602639b14302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563a6cddced7448c458b9ea7d1c5ed805e606f2d835289f5950602639b14302b->enter($__internal_563a6cddced7448c458b9ea7d1c5ed805e606f2d835289f5950602639b14302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_563a6cddced7448c458b9ea7d1c5ed805e606f2d835289f5950602639b14302b->leave($__internal_563a6cddced7448c458b9ea7d1c5ed805e606f2d835289f5950602639b14302b_prof);

    }

    // line 45
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_509b441382eef0e504e189ed939b6d2fda66939ea17934e78b7cca15db2ea6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509b441382eef0e504e189ed939b6d2fda66939ea17934e78b7cca15db2ea6db->enter($__internal_509b441382eef0e504e189ed939b6d2fda66939ea17934e78b7cca15db2ea6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_509b441382eef0e504e189ed939b6d2fda66939ea17934e78b7cca15db2ea6db->leave($__internal_509b441382eef0e504e189ed939b6d2fda66939ea17934e78b7cca15db2ea6db_prof);

    }

    // line 51
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_200f5f1408803ecbd40d3c6f350a172f8daf25d62c3ab60604cd21895a7fc103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200f5f1408803ecbd40d3c6f350a172f8daf25d62c3ab60604cd21895a7fc103->enter($__internal_200f5f1408803ecbd40d3c6f350a172f8daf25d62c3ab60604cd21895a7fc103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_200f5f1408803ecbd40d3c6f350a172f8daf25d62c3ab60604cd21895a7fc103->leave($__internal_200f5f1408803ecbd40d3c6f350a172f8daf25d62c3ab60604cd21895a7fc103_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb589e09d8e6df9d4a21ca42d12fed473a0c7bb52171bcc6610f1aed6cf82d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb589e09d8e6df9d4a21ca42d12fed473a0c7bb52171bcc6610f1aed6cf82d1->enter($__internal_4cb589e09d8e6df9d4a21ca42d12fed473a0c7bb52171bcc6610f1aed6cf82d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
    ";
        
        $__internal_4cb589e09d8e6df9d4a21ca42d12fed473a0c7bb52171bcc6610f1aed6cf82d1->leave($__internal_4cb589e09d8e6df9d4a21ca42d12fed473a0c7bb52171bcc6610f1aed6cf82d1_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 59,  191 => 58,  179 => 51,  167 => 45,  155 => 44,  143 => 43,  131 => 10,  104 => 61,  102 => 58,  92 => 51,  83 => 45,  79 => 44,  75 => 43,  41 => 11,  39 => 10,  28 => 1,);
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
    {% block include %} {% endblock %}
    <title>PTUT</title>
    <link href=\"bundles/ptutplatform/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/animate.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/main.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"bundles/ptutplatform/images/ico/favicon.ico\">

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
                
              <a class=\"navbar-brand\" href=\"#\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"#\">Home</a></li>
                <li class=\"{% block ongletEditions %} {% endblock %}\"><a href=\"#Editions\">Editions</a></li>
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
        <div class=\"col-sm-6\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
        </div>
        <div class=\"col-sm-6\">
                    <ul class=\"pull-right\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                        <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
                    </ul>
                </div>
    </footer> 
    <script src=\"bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"bundles/ptutplatform/js/main.js\"></script>
</body>
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

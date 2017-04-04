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
        $__internal_207726e513f90231076aa13013d0515a1e06da133c39a332c88d0e3b904b7df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207726e513f90231076aa13013d0515a1e06da133c39a332c88d0e3b904b7df5->enter($__internal_207726e513f90231076aa13013d0515a1e06da133c39a332c88d0e3b904b7df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_bd33915265dd5dabce127802e5b7b5b8d0936d6cbed63cdffdbd0336dcaac3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd33915265dd5dabce127802e5b7b5b8d0936d6cbed63cdffdbd0336dcaac3d9->enter($__internal_bd33915265dd5dabce127802e5b7b5b8d0936d6cbed63cdffdbd0336dcaac3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/images/ico/favicon.ico"), "html", null, true);
        echo "\">
    
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
                
              <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_homepage");
        echo "\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 45
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_homepage");
        echo "\">Home</a></li>
                <li class=\"";
        // line 46
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_article_creator");
        echo "\">Editions</a></li>
                <li class=\"dropdown ";
        // line 47
        $this->displayBlock('ongletCompte', $context, $blocks);
        echo "\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle = \"dropdown\" role=\"button\">Mon compte<span class=\"icon-angle-down\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Se connecter</a></li>
                        <li><a href=\"#\">S'inscrire</a></li>
                    </ul>
                </li>
                <li class=\"";
        // line 53
        $this->displayBlock('ongletAbout', $context, $blocks);
        echo "\"><a href=\"#about\">About</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
    
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        
    <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"col-sm-7\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_207726e513f90231076aa13013d0515a1e06da133c39a332c88d0e3b904b7df5->leave($__internal_207726e513f90231076aa13013d0515a1e06da133c39a332c88d0e3b904b7df5_prof);

        
        $__internal_bd33915265dd5dabce127802e5b7b5b8d0936d6cbed63cdffdbd0336dcaac3d9->leave($__internal_bd33915265dd5dabce127802e5b7b5b8d0936d6cbed63cdffdbd0336dcaac3d9_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_8c9e4ec1bb55086dfe51e092b74cfaf55309150e7269116e23dd5f47198ebd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9e4ec1bb55086dfe51e092b74cfaf55309150e7269116e23dd5f47198ebd3a->enter($__internal_8c9e4ec1bb55086dfe51e092b74cfaf55309150e7269116e23dd5f47198ebd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_38a753a6d65e9d3d49a2ce0cc9cf4ce63c53aa795c463650e6a69d44ed35c565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a753a6d65e9d3d49a2ce0cc9cf4ce63c53aa795c463650e6a69d44ed35c565->enter($__internal_38a753a6d65e9d3d49a2ce0cc9cf4ce63c53aa795c463650e6a69d44ed35c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_38a753a6d65e9d3d49a2ce0cc9cf4ce63c53aa795c463650e6a69d44ed35c565->leave($__internal_38a753a6d65e9d3d49a2ce0cc9cf4ce63c53aa795c463650e6a69d44ed35c565_prof);

        
        $__internal_8c9e4ec1bb55086dfe51e092b74cfaf55309150e7269116e23dd5f47198ebd3a->leave($__internal_8c9e4ec1bb55086dfe51e092b74cfaf55309150e7269116e23dd5f47198ebd3a_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_d4f3a0221b7c1951ec3ec6ed3c9d0519833bf3e66c79bdfc15cbf1ea314fc6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f3a0221b7c1951ec3ec6ed3c9d0519833bf3e66c79bdfc15cbf1ea314fc6b5->enter($__internal_d4f3a0221b7c1951ec3ec6ed3c9d0519833bf3e66c79bdfc15cbf1ea314fc6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_509ed5e13fd0a4e58ea9bef873de2ba385034ea4d4ca7924aba7e7753b4f6af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509ed5e13fd0a4e58ea9bef873de2ba385034ea4d4ca7924aba7e7753b4f6af0->enter($__internal_509ed5e13fd0a4e58ea9bef873de2ba385034ea4d4ca7924aba7e7753b4f6af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_509ed5e13fd0a4e58ea9bef873de2ba385034ea4d4ca7924aba7e7753b4f6af0->leave($__internal_509ed5e13fd0a4e58ea9bef873de2ba385034ea4d4ca7924aba7e7753b4f6af0_prof);

        
        $__internal_d4f3a0221b7c1951ec3ec6ed3c9d0519833bf3e66c79bdfc15cbf1ea314fc6b5->leave($__internal_d4f3a0221b7c1951ec3ec6ed3c9d0519833bf3e66c79bdfc15cbf1ea314fc6b5_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_35c5141de3290d806ec3fb6e597e7def1857ede17e75db802050836c58419f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c5141de3290d806ec3fb6e597e7def1857ede17e75db802050836c58419f3e->enter($__internal_35c5141de3290d806ec3fb6e597e7def1857ede17e75db802050836c58419f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_6cc75d10a7f79b45a9e97a5b3425e0a34815544d1beb5a3bdd7bc996742479ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc75d10a7f79b45a9e97a5b3425e0a34815544d1beb5a3bdd7bc996742479ed->enter($__internal_6cc75d10a7f79b45a9e97a5b3425e0a34815544d1beb5a3bdd7bc996742479ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_6cc75d10a7f79b45a9e97a5b3425e0a34815544d1beb5a3bdd7bc996742479ed->leave($__internal_6cc75d10a7f79b45a9e97a5b3425e0a34815544d1beb5a3bdd7bc996742479ed_prof);

        
        $__internal_35c5141de3290d806ec3fb6e597e7def1857ede17e75db802050836c58419f3e->leave($__internal_35c5141de3290d806ec3fb6e597e7def1857ede17e75db802050836c58419f3e_prof);

    }

    // line 47
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_0044165e2da30142e606c0a60d4ac2e852461f5263706c09dee9604cd7b781e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0044165e2da30142e606c0a60d4ac2e852461f5263706c09dee9604cd7b781e5->enter($__internal_0044165e2da30142e606c0a60d4ac2e852461f5263706c09dee9604cd7b781e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_c6b934705bf32f25c8bfc9d032635aebbdbc1dda0590d56f0c9577fbcdc2480a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b934705bf32f25c8bfc9d032635aebbdbc1dda0590d56f0c9577fbcdc2480a->enter($__internal_c6b934705bf32f25c8bfc9d032635aebbdbc1dda0590d56f0c9577fbcdc2480a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_c6b934705bf32f25c8bfc9d032635aebbdbc1dda0590d56f0c9577fbcdc2480a->leave($__internal_c6b934705bf32f25c8bfc9d032635aebbdbc1dda0590d56f0c9577fbcdc2480a_prof);

        
        $__internal_0044165e2da30142e606c0a60d4ac2e852461f5263706c09dee9604cd7b781e5->leave($__internal_0044165e2da30142e606c0a60d4ac2e852461f5263706c09dee9604cd7b781e5_prof);

    }

    // line 53
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_8aa2221295209818ec01215119d8ed3cc769d05f0199587238bae4a8034d7353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa2221295209818ec01215119d8ed3cc769d05f0199587238bae4a8034d7353->enter($__internal_8aa2221295209818ec01215119d8ed3cc769d05f0199587238bae4a8034d7353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_915d9abaf1a3e85e13838abc72d572da5a9fec43206f5baa9d6a6a4cbb247236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915d9abaf1a3e85e13838abc72d572da5a9fec43206f5baa9d6a6a4cbb247236->enter($__internal_915d9abaf1a3e85e13838abc72d572da5a9fec43206f5baa9d6a6a4cbb247236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_915d9abaf1a3e85e13838abc72d572da5a9fec43206f5baa9d6a6a4cbb247236->leave($__internal_915d9abaf1a3e85e13838abc72d572da5a9fec43206f5baa9d6a6a4cbb247236_prof);

        
        $__internal_8aa2221295209818ec01215119d8ed3cc769d05f0199587238bae4a8034d7353->leave($__internal_8aa2221295209818ec01215119d8ed3cc769d05f0199587238bae4a8034d7353_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfe6d841de1e5266dccf034be9c01c68a3ed4979dfa3210d5eda2299159efa57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe6d841de1e5266dccf034be9c01c68a3ed4979dfa3210d5eda2299159efa57->enter($__internal_cfe6d841de1e5266dccf034be9c01c68a3ed4979dfa3210d5eda2299159efa57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e266afb7fedd22a912a84880c3e084d1504f2e05765fbfb8cb5125b5f162ce6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e266afb7fedd22a912a84880c3e084d1504f2e05765fbfb8cb5125b5f162ce6b->enter($__internal_e266afb7fedd22a912a84880c3e084d1504f2e05765fbfb8cb5125b5f162ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    ";
        
        $__internal_e266afb7fedd22a912a84880c3e084d1504f2e05765fbfb8cb5125b5f162ce6b->leave($__internal_e266afb7fedd22a912a84880c3e084d1504f2e05765fbfb8cb5125b5f162ce6b_prof);

        
        $__internal_cfe6d841de1e5266dccf034be9c01c68a3ed4979dfa3210d5eda2299159efa57->leave($__internal_cfe6d841de1e5266dccf034be9c01c68a3ed4979dfa3210d5eda2299159efa57_prof);

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
        return array (  278 => 61,  269 => 60,  251 => 53,  233 => 47,  215 => 46,  197 => 45,  179 => 10,  166 => 81,  162 => 80,  158 => 79,  154 => 78,  137 => 63,  135 => 60,  125 => 53,  116 => 47,  110 => 46,  104 => 45,  96 => 40,  78 => 25,  73 => 23,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  44 => 11,  42 => 10,  31 => 1,);
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
    <link href=\"{{ asset('bundles/ptutplatform/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/prettyPhoto.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/animate.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/main.css') }}\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/ptutplatform/images/ico/favicon.ico') }}\">
    
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
                
              <a class=\"navbar-brand\" href=\"{{ path('ptut_platform_homepage') }}\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"{{ path('ptut_platform_homepage') }}\">Home</a></li>
                <li class=\"{% block ongletEditions %} {% endblock %}\"><a href=\"{{ path('ptut_platform_article_creator') }}\">Editions</a></li>
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
        <div class=\"col-sm-7\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
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
    <script src=\"{{ asset('bundles/ptutplatform/js/jquery.js') }}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/jquery.prettyPhoto.js') }}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/main.js') }}\"></script>
</body>
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

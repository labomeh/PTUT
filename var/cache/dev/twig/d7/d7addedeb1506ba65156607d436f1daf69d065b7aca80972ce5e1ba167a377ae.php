<?php

/* PTUTPlatformBundle:Platform:layout.html.twig */
class __TwigTemplate_132b7f00b33f49204e9d19a79008d0b179d10d1cb8bea5c8f8638b5d4003199f extends Twig_Template
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
        $__internal_10834490b79008952a045a23db9ea80e9f3e07e7910de0d819c77d1f783db40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10834490b79008952a045a23db9ea80e9f3e07e7910de0d819c77d1f783db40c->enter($__internal_10834490b79008952a045a23db9ea80e9f3e07e7910de0d819c77d1f783db40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_249ee7178183cd98c90a911b65a9c4984880b506b219657539c8fac6e28f6d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249ee7178183cd98c90a911b65a9c4984880b506b219657539c8fac6e28f6d68->enter($__internal_249ee7178183cd98c90a911b65a9c4984880b506b219657539c8fac6e28f6d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        
        $__internal_10834490b79008952a045a23db9ea80e9f3e07e7910de0d819c77d1f783db40c->leave($__internal_10834490b79008952a045a23db9ea80e9f3e07e7910de0d819c77d1f783db40c_prof);

        
        $__internal_249ee7178183cd98c90a911b65a9c4984880b506b219657539c8fac6e28f6d68->leave($__internal_249ee7178183cd98c90a911b65a9c4984880b506b219657539c8fac6e28f6d68_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_fd239a76b33df7024c8a71858c9fbee2a9a073e0b191d21eb00cdeec71f8ba37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd239a76b33df7024c8a71858c9fbee2a9a073e0b191d21eb00cdeec71f8ba37->enter($__internal_fd239a76b33df7024c8a71858c9fbee2a9a073e0b191d21eb00cdeec71f8ba37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_c2e82039310451f0f955b25ce2ce1adcb45ac6c26d706a3f3111c9236acf52df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e82039310451f0f955b25ce2ce1adcb45ac6c26d706a3f3111c9236acf52df->enter($__internal_c2e82039310451f0f955b25ce2ce1adcb45ac6c26d706a3f3111c9236acf52df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_c2e82039310451f0f955b25ce2ce1adcb45ac6c26d706a3f3111c9236acf52df->leave($__internal_c2e82039310451f0f955b25ce2ce1adcb45ac6c26d706a3f3111c9236acf52df_prof);

        
        $__internal_fd239a76b33df7024c8a71858c9fbee2a9a073e0b191d21eb00cdeec71f8ba37->leave($__internal_fd239a76b33df7024c8a71858c9fbee2a9a073e0b191d21eb00cdeec71f8ba37_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_f0c29205624436eabf09b7ca3355ad68f4b17d97a36ae7a8886a7371b18bfa66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c29205624436eabf09b7ca3355ad68f4b17d97a36ae7a8886a7371b18bfa66->enter($__internal_f0c29205624436eabf09b7ca3355ad68f4b17d97a36ae7a8886a7371b18bfa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_d03a2451178ee17d4b25bd4f91528506808b7c317bff5f97e029d8adb59f9929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03a2451178ee17d4b25bd4f91528506808b7c317bff5f97e029d8adb59f9929->enter($__internal_d03a2451178ee17d4b25bd4f91528506808b7c317bff5f97e029d8adb59f9929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_d03a2451178ee17d4b25bd4f91528506808b7c317bff5f97e029d8adb59f9929->leave($__internal_d03a2451178ee17d4b25bd4f91528506808b7c317bff5f97e029d8adb59f9929_prof);

        
        $__internal_f0c29205624436eabf09b7ca3355ad68f4b17d97a36ae7a8886a7371b18bfa66->leave($__internal_f0c29205624436eabf09b7ca3355ad68f4b17d97a36ae7a8886a7371b18bfa66_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_9aa624b4b53e7b5fbc7fae36349a83aa4797cdc81a68b3d4fc3dd2f77a67e6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa624b4b53e7b5fbc7fae36349a83aa4797cdc81a68b3d4fc3dd2f77a67e6c0->enter($__internal_9aa624b4b53e7b5fbc7fae36349a83aa4797cdc81a68b3d4fc3dd2f77a67e6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_a5c6ee74ffd4209d84f742797b615ed1333d582ba4aab3ec0f79d63d5369ef46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c6ee74ffd4209d84f742797b615ed1333d582ba4aab3ec0f79d63d5369ef46->enter($__internal_a5c6ee74ffd4209d84f742797b615ed1333d582ba4aab3ec0f79d63d5369ef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_a5c6ee74ffd4209d84f742797b615ed1333d582ba4aab3ec0f79d63d5369ef46->leave($__internal_a5c6ee74ffd4209d84f742797b615ed1333d582ba4aab3ec0f79d63d5369ef46_prof);

        
        $__internal_9aa624b4b53e7b5fbc7fae36349a83aa4797cdc81a68b3d4fc3dd2f77a67e6c0->leave($__internal_9aa624b4b53e7b5fbc7fae36349a83aa4797cdc81a68b3d4fc3dd2f77a67e6c0_prof);

    }

    // line 47
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_43e831e34e65d9d38edb1dc4f18b263f0e57703b6bab87f076eb4980d386f977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e831e34e65d9d38edb1dc4f18b263f0e57703b6bab87f076eb4980d386f977->enter($__internal_43e831e34e65d9d38edb1dc4f18b263f0e57703b6bab87f076eb4980d386f977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_77ef48e2e201a7523d961b07705bbac37495dbf5c7ffa80cb00008905f80e0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ef48e2e201a7523d961b07705bbac37495dbf5c7ffa80cb00008905f80e0cc->enter($__internal_77ef48e2e201a7523d961b07705bbac37495dbf5c7ffa80cb00008905f80e0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_77ef48e2e201a7523d961b07705bbac37495dbf5c7ffa80cb00008905f80e0cc->leave($__internal_77ef48e2e201a7523d961b07705bbac37495dbf5c7ffa80cb00008905f80e0cc_prof);

        
        $__internal_43e831e34e65d9d38edb1dc4f18b263f0e57703b6bab87f076eb4980d386f977->leave($__internal_43e831e34e65d9d38edb1dc4f18b263f0e57703b6bab87f076eb4980d386f977_prof);

    }

    // line 53
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_c7bc2cb5f711b4c088dcfc9fde4829a58181703b452c601b592956d392dfe6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bc2cb5f711b4c088dcfc9fde4829a58181703b452c601b592956d392dfe6ed->enter($__internal_c7bc2cb5f711b4c088dcfc9fde4829a58181703b452c601b592956d392dfe6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_887d3761c28aef5b9766c0a193e188867b2e2e18aa0d3cb40c501a1d351fa632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887d3761c28aef5b9766c0a193e188867b2e2e18aa0d3cb40c501a1d351fa632->enter($__internal_887d3761c28aef5b9766c0a193e188867b2e2e18aa0d3cb40c501a1d351fa632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_887d3761c28aef5b9766c0a193e188867b2e2e18aa0d3cb40c501a1d351fa632->leave($__internal_887d3761c28aef5b9766c0a193e188867b2e2e18aa0d3cb40c501a1d351fa632_prof);

        
        $__internal_c7bc2cb5f711b4c088dcfc9fde4829a58181703b452c601b592956d392dfe6ed->leave($__internal_c7bc2cb5f711b4c088dcfc9fde4829a58181703b452c601b592956d392dfe6ed_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_a987d0941633c5395d3ad1ad84bf57093ec1ee4b5d50a28b98ec3a1c1c2e200e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a987d0941633c5395d3ad1ad84bf57093ec1ee4b5d50a28b98ec3a1c1c2e200e->enter($__internal_a987d0941633c5395d3ad1ad84bf57093ec1ee4b5d50a28b98ec3a1c1c2e200e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4f9a6d954774073c2dffa0b51b1c5a9ee79c0af92630fd01cb5c32ecfeef7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f9a6d954774073c2dffa0b51b1c5a9ee79c0af92630fd01cb5c32ecfeef7e2->enter($__internal_c4f9a6d954774073c2dffa0b51b1c5a9ee79c0af92630fd01cb5c32ecfeef7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    ";
        
        $__internal_c4f9a6d954774073c2dffa0b51b1c5a9ee79c0af92630fd01cb5c32ecfeef7e2->leave($__internal_c4f9a6d954774073c2dffa0b51b1c5a9ee79c0af92630fd01cb5c32ecfeef7e2_prof);

        
        $__internal_a987d0941633c5395d3ad1ad84bf57093ec1ee4b5d50a28b98ec3a1c1c2e200e->leave($__internal_a987d0941633c5395d3ad1ad84bf57093ec1ee4b5d50a28b98ec3a1c1c2e200e_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
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
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

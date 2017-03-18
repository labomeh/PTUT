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
        $__internal_d7b44252ab68531944bd2896474e0857f4b4fc0eb0a7cecb9a74525eb3408762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b44252ab68531944bd2896474e0857f4b4fc0eb0a7cecb9a74525eb3408762->enter($__internal_d7b44252ab68531944bd2896474e0857f4b4fc0eb0a7cecb9a74525eb3408762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../ckeditor/ckeditor.js"), "html", null, true);
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
        echo "\"><a href=\"home\">Home</a></li>
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
        
        $__internal_d7b44252ab68531944bd2896474e0857f4b4fc0eb0a7cecb9a74525eb3408762->leave($__internal_d7b44252ab68531944bd2896474e0857f4b4fc0eb0a7cecb9a74525eb3408762_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_cffad2150cd00bbbc42a074f19f7f7e99a9ff7ad423ca1a265a8fe43478e313e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffad2150cd00bbbc42a074f19f7f7e99a9ff7ad423ca1a265a8fe43478e313e->enter($__internal_cffad2150cd00bbbc42a074f19f7f7e99a9ff7ad423ca1a265a8fe43478e313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_cffad2150cd00bbbc42a074f19f7f7e99a9ff7ad423ca1a265a8fe43478e313e->leave($__internal_cffad2150cd00bbbc42a074f19f7f7e99a9ff7ad423ca1a265a8fe43478e313e_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_be4f741210e8d7debc722498d549435f3904ac4b638a0aa920b1da84c427dcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4f741210e8d7debc722498d549435f3904ac4b638a0aa920b1da84c427dcaa->enter($__internal_be4f741210e8d7debc722498d549435f3904ac4b638a0aa920b1da84c427dcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_be4f741210e8d7debc722498d549435f3904ac4b638a0aa920b1da84c427dcaa->leave($__internal_be4f741210e8d7debc722498d549435f3904ac4b638a0aa920b1da84c427dcaa_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_d023282dc70844dd430704d50e9038b9b38a9b090627f5061b5622b89bc0563b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d023282dc70844dd430704d50e9038b9b38a9b090627f5061b5622b89bc0563b->enter($__internal_d023282dc70844dd430704d50e9038b9b38a9b090627f5061b5622b89bc0563b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_d023282dc70844dd430704d50e9038b9b38a9b090627f5061b5622b89bc0563b->leave($__internal_d023282dc70844dd430704d50e9038b9b38a9b090627f5061b5622b89bc0563b_prof);

    }

    // line 47
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_3a621da4825d2108ac4ae74c1b3625bdc09053576a05e7e10aa9291cee55c9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a621da4825d2108ac4ae74c1b3625bdc09053576a05e7e10aa9291cee55c9b1->enter($__internal_3a621da4825d2108ac4ae74c1b3625bdc09053576a05e7e10aa9291cee55c9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_3a621da4825d2108ac4ae74c1b3625bdc09053576a05e7e10aa9291cee55c9b1->leave($__internal_3a621da4825d2108ac4ae74c1b3625bdc09053576a05e7e10aa9291cee55c9b1_prof);

    }

    // line 53
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_7101d778cda000710a68f2aa3a9942e90dd46e53354f189142d918c2bf4f2beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7101d778cda000710a68f2aa3a9942e90dd46e53354f189142d918c2bf4f2beb->enter($__internal_7101d778cda000710a68f2aa3a9942e90dd46e53354f189142d918c2bf4f2beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_7101d778cda000710a68f2aa3a9942e90dd46e53354f189142d918c2bf4f2beb->leave($__internal_7101d778cda000710a68f2aa3a9942e90dd46e53354f189142d918c2bf4f2beb_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f93b2a913fc264d4fb4b95a3d7bc4f4f37a7ed7ade6e3b978c77a7924e5b565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f93b2a913fc264d4fb4b95a3d7bc4f4f37a7ed7ade6e3b978c77a7924e5b565->enter($__internal_2f93b2a913fc264d4fb4b95a3d7bc4f4f37a7ed7ade6e3b978c77a7924e5b565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    ";
        
        $__internal_2f93b2a913fc264d4fb4b95a3d7bc4f4f37a7ed7ade6e3b978c77a7924e5b565->leave($__internal_2f93b2a913fc264d4fb4b95a3d7bc4f4f37a7ed7ade6e3b978c77a7924e5b565_prof);

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
        return array (  234 => 61,  228 => 60,  216 => 53,  204 => 47,  192 => 46,  180 => 45,  168 => 10,  158 => 81,  154 => 80,  150 => 79,  146 => 78,  129 => 63,  127 => 60,  117 => 53,  108 => 47,  102 => 46,  98 => 45,  75 => 25,  70 => 23,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  41 => 11,  39 => 10,  28 => 1,);
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
    
    <script src=\"{{ asset('../ckeditor/ckeditor.js') }}\"></script>

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
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"home\">Home</a></li>
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

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
        $__internal_9f3ea9f215bc44d346e8dbec21b9a17b7cca9f41a857f735311c487e60025cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3ea9f215bc44d346e8dbec21b9a17b7cca9f41a857f735311c487e60025cf8->enter($__internal_9f3ea9f215bc44d346e8dbec21b9a17b7cca9f41a857f735311c487e60025cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_7b09a76118343e44539dacc0187f0bec017be791aeea146d4760501375979609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b09a76118343e44539dacc0187f0bec017be791aeea146d4760501375979609->enter($__internal_7b09a76118343e44539dacc0187f0bec017be791aeea146d4760501375979609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        // line 43
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view", array("id" => "home"));
        echo "\">Home</a></li>
                <li class=\"dropdown ";
        // line 44
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view_id", array("id" => 1));
        echo "\">Actualités</a>
                </li>
                <li class=\"dropdown ";
        // line 46
        $this->displayBlock('ongletCompte', $context, $blocks);
        echo "\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle = \"dropdown\" role=\"button\">Mon compte<span class=\"icon-angle-down\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Se connecter</a></li>
                        <li><a href=\"#\">S'inscrire</a></li>
                    </ul>
                </li>
                <li class=\"";
        // line 52
        $this->displayBlock('ongletAbout', $context, $blocks);
        echo "\"><a href=\"#about\">About</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
    
    ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 62
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
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_9f3ea9f215bc44d346e8dbec21b9a17b7cca9f41a857f735311c487e60025cf8->leave($__internal_9f3ea9f215bc44d346e8dbec21b9a17b7cca9f41a857f735311c487e60025cf8_prof);

        
        $__internal_7b09a76118343e44539dacc0187f0bec017be791aeea146d4760501375979609->leave($__internal_7b09a76118343e44539dacc0187f0bec017be791aeea146d4760501375979609_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_0f751ee70027cf4b98858bc58c5d0d63cffbb815dd493b5371dd2f7267be32cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f751ee70027cf4b98858bc58c5d0d63cffbb815dd493b5371dd2f7267be32cc->enter($__internal_0f751ee70027cf4b98858bc58c5d0d63cffbb815dd493b5371dd2f7267be32cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_718d457cf4e2edb483c6cff1f90ab2175499f5b431acfa8d7e84763c28751e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718d457cf4e2edb483c6cff1f90ab2175499f5b431acfa8d7e84763c28751e32->enter($__internal_718d457cf4e2edb483c6cff1f90ab2175499f5b431acfa8d7e84763c28751e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_718d457cf4e2edb483c6cff1f90ab2175499f5b431acfa8d7e84763c28751e32->leave($__internal_718d457cf4e2edb483c6cff1f90ab2175499f5b431acfa8d7e84763c28751e32_prof);

        
        $__internal_0f751ee70027cf4b98858bc58c5d0d63cffbb815dd493b5371dd2f7267be32cc->leave($__internal_0f751ee70027cf4b98858bc58c5d0d63cffbb815dd493b5371dd2f7267be32cc_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_29f531eabf39d79c2f9b18d50ad6f7aa11fb092add3b4289ea2a784231b95f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f531eabf39d79c2f9b18d50ad6f7aa11fb092add3b4289ea2a784231b95f99->enter($__internal_29f531eabf39d79c2f9b18d50ad6f7aa11fb092add3b4289ea2a784231b95f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_c8574851a0fca75569abb3c30297a07e473db1bbcb3459a87e7605d56fcc8ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8574851a0fca75569abb3c30297a07e473db1bbcb3459a87e7605d56fcc8ad8->enter($__internal_c8574851a0fca75569abb3c30297a07e473db1bbcb3459a87e7605d56fcc8ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_c8574851a0fca75569abb3c30297a07e473db1bbcb3459a87e7605d56fcc8ad8->leave($__internal_c8574851a0fca75569abb3c30297a07e473db1bbcb3459a87e7605d56fcc8ad8_prof);

        
        $__internal_29f531eabf39d79c2f9b18d50ad6f7aa11fb092add3b4289ea2a784231b95f99->leave($__internal_29f531eabf39d79c2f9b18d50ad6f7aa11fb092add3b4289ea2a784231b95f99_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_f293ddadb11d3de46edec6aa9f21df624b9a0417cb5c60c901045d4f535cc420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f293ddadb11d3de46edec6aa9f21df624b9a0417cb5c60c901045d4f535cc420->enter($__internal_f293ddadb11d3de46edec6aa9f21df624b9a0417cb5c60c901045d4f535cc420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_bdd6c10d4e948d358628a913f20afc6decba7761382fd83e9aab7da0e68be422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd6c10d4e948d358628a913f20afc6decba7761382fd83e9aab7da0e68be422->enter($__internal_bdd6c10d4e948d358628a913f20afc6decba7761382fd83e9aab7da0e68be422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_bdd6c10d4e948d358628a913f20afc6decba7761382fd83e9aab7da0e68be422->leave($__internal_bdd6c10d4e948d358628a913f20afc6decba7761382fd83e9aab7da0e68be422_prof);

        
        $__internal_f293ddadb11d3de46edec6aa9f21df624b9a0417cb5c60c901045d4f535cc420->leave($__internal_f293ddadb11d3de46edec6aa9f21df624b9a0417cb5c60c901045d4f535cc420_prof);

    }

    // line 46
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_f39c1d9772d8aae22f07b7bc2fcef8b31c40e00e3c2f34057c99c0701a5a404e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39c1d9772d8aae22f07b7bc2fcef8b31c40e00e3c2f34057c99c0701a5a404e->enter($__internal_f39c1d9772d8aae22f07b7bc2fcef8b31c40e00e3c2f34057c99c0701a5a404e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_0169a64d76b69a7c43d8847bb6a7b8aa089a1f9c2ee35285d9d748aea7fe6b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0169a64d76b69a7c43d8847bb6a7b8aa089a1f9c2ee35285d9d748aea7fe6b87->enter($__internal_0169a64d76b69a7c43d8847bb6a7b8aa089a1f9c2ee35285d9d748aea7fe6b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_0169a64d76b69a7c43d8847bb6a7b8aa089a1f9c2ee35285d9d748aea7fe6b87->leave($__internal_0169a64d76b69a7c43d8847bb6a7b8aa089a1f9c2ee35285d9d748aea7fe6b87_prof);

        
        $__internal_f39c1d9772d8aae22f07b7bc2fcef8b31c40e00e3c2f34057c99c0701a5a404e->leave($__internal_f39c1d9772d8aae22f07b7bc2fcef8b31c40e00e3c2f34057c99c0701a5a404e_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_4a3c36c72e770932a16fef7983e288eda43d51db3a7ae3f99de58131784b0366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3c36c72e770932a16fef7983e288eda43d51db3a7ae3f99de58131784b0366->enter($__internal_4a3c36c72e770932a16fef7983e288eda43d51db3a7ae3f99de58131784b0366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_cefee11d01f37e2a27360a87be5e8de1296e6cdbf090a981f3f3a9669712a68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefee11d01f37e2a27360a87be5e8de1296e6cdbf090a981f3f3a9669712a68a->enter($__internal_cefee11d01f37e2a27360a87be5e8de1296e6cdbf090a981f3f3a9669712a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_cefee11d01f37e2a27360a87be5e8de1296e6cdbf090a981f3f3a9669712a68a->leave($__internal_cefee11d01f37e2a27360a87be5e8de1296e6cdbf090a981f3f3a9669712a68a_prof);

        
        $__internal_4a3c36c72e770932a16fef7983e288eda43d51db3a7ae3f99de58131784b0366->leave($__internal_4a3c36c72e770932a16fef7983e288eda43d51db3a7ae3f99de58131784b0366_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_33a7dabcb726339a76d9c0f5991c76cd8fa9ba66cb4af6ace2cf6abc5c60285e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a7dabcb726339a76d9c0f5991c76cd8fa9ba66cb4af6ace2cf6abc5c60285e->enter($__internal_33a7dabcb726339a76d9c0f5991c76cd8fa9ba66cb4af6ace2cf6abc5c60285e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a976834be562e3a074962fa6fdf91b8237a948bb5c82f8658bc9cdad0fc65f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a976834be562e3a074962fa6fdf91b8237a948bb5c82f8658bc9cdad0fc65f1->enter($__internal_1a976834be562e3a074962fa6fdf91b8237a948bb5c82f8658bc9cdad0fc65f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_1a976834be562e3a074962fa6fdf91b8237a948bb5c82f8658bc9cdad0fc65f1->leave($__internal_1a976834be562e3a074962fa6fdf91b8237a948bb5c82f8658bc9cdad0fc65f1_prof);

        
        $__internal_33a7dabcb726339a76d9c0f5991c76cd8fa9ba66cb4af6ace2cf6abc5c60285e->leave($__internal_33a7dabcb726339a76d9c0f5991c76cd8fa9ba66cb4af6ace2cf6abc5c60285e_prof);

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
        return array (  268 => 60,  259 => 59,  241 => 52,  223 => 46,  205 => 44,  187 => 43,  169 => 16,  156 => 80,  152 => 79,  148 => 78,  144 => 77,  127 => 62,  125 => 59,  115 => 52,  106 => 46,  99 => 44,  93 => 43,  65 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  31 => 1,);
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
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

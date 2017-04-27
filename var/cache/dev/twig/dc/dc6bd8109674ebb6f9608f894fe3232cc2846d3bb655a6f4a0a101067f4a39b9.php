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
        $__internal_f1a5df7d68dfc0b0b73e52d2a597a7daba2cae554cf0b82c68f9cbfa3f1b9845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a5df7d68dfc0b0b73e52d2a597a7daba2cae554cf0b82c68f9cbfa3f1b9845->enter($__internal_f1a5df7d68dfc0b0b73e52d2a597a7daba2cae554cf0b82c68f9cbfa3f1b9845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_e18d5320ae5ca5e279f7e0066bb910dbb86183efd13db58b6f74497551b45d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18d5320ae5ca5e279f7e0066bb910dbb86183efd13db58b6f74497551b45d49->enter($__internal_e18d5320ae5ca5e279f7e0066bb910dbb86183efd13db58b6f74497551b45d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        
        $__internal_f1a5df7d68dfc0b0b73e52d2a597a7daba2cae554cf0b82c68f9cbfa3f1b9845->leave($__internal_f1a5df7d68dfc0b0b73e52d2a597a7daba2cae554cf0b82c68f9cbfa3f1b9845_prof);

        
        $__internal_e18d5320ae5ca5e279f7e0066bb910dbb86183efd13db58b6f74497551b45d49->leave($__internal_e18d5320ae5ca5e279f7e0066bb910dbb86183efd13db58b6f74497551b45d49_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_bc5eeb1ddda5e4fa3d9166d0e23dd1117e6aa6ae5736903360de8bd30fa2e555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5eeb1ddda5e4fa3d9166d0e23dd1117e6aa6ae5736903360de8bd30fa2e555->enter($__internal_bc5eeb1ddda5e4fa3d9166d0e23dd1117e6aa6ae5736903360de8bd30fa2e555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_88313623919577764868cda62692abe75ff95c7e60477ee1aaef973757009ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88313623919577764868cda62692abe75ff95c7e60477ee1aaef973757009ca3->enter($__internal_88313623919577764868cda62692abe75ff95c7e60477ee1aaef973757009ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_88313623919577764868cda62692abe75ff95c7e60477ee1aaef973757009ca3->leave($__internal_88313623919577764868cda62692abe75ff95c7e60477ee1aaef973757009ca3_prof);

        
        $__internal_bc5eeb1ddda5e4fa3d9166d0e23dd1117e6aa6ae5736903360de8bd30fa2e555->leave($__internal_bc5eeb1ddda5e4fa3d9166d0e23dd1117e6aa6ae5736903360de8bd30fa2e555_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_869afef8519d4c90b9cf901daae999bff4eefc6b9cd0e91b96152b4da6d53447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869afef8519d4c90b9cf901daae999bff4eefc6b9cd0e91b96152b4da6d53447->enter($__internal_869afef8519d4c90b9cf901daae999bff4eefc6b9cd0e91b96152b4da6d53447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_2a5182d249fffcf1752d3f3f5b9256101bec69b6a89318473cb22d2e9382c68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5182d249fffcf1752d3f3f5b9256101bec69b6a89318473cb22d2e9382c68f->enter($__internal_2a5182d249fffcf1752d3f3f5b9256101bec69b6a89318473cb22d2e9382c68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_2a5182d249fffcf1752d3f3f5b9256101bec69b6a89318473cb22d2e9382c68f->leave($__internal_2a5182d249fffcf1752d3f3f5b9256101bec69b6a89318473cb22d2e9382c68f_prof);

        
        $__internal_869afef8519d4c90b9cf901daae999bff4eefc6b9cd0e91b96152b4da6d53447->leave($__internal_869afef8519d4c90b9cf901daae999bff4eefc6b9cd0e91b96152b4da6d53447_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_d02db2f3c9171d94f0ae74d1d53b0683702d7d71456719620bbfaed3c1d57c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02db2f3c9171d94f0ae74d1d53b0683702d7d71456719620bbfaed3c1d57c33->enter($__internal_d02db2f3c9171d94f0ae74d1d53b0683702d7d71456719620bbfaed3c1d57c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_4f673f85d695e453c9915f596a0fefaf57ddfeb185238228de02ee63784e47a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f673f85d695e453c9915f596a0fefaf57ddfeb185238228de02ee63784e47a6->enter($__internal_4f673f85d695e453c9915f596a0fefaf57ddfeb185238228de02ee63784e47a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_4f673f85d695e453c9915f596a0fefaf57ddfeb185238228de02ee63784e47a6->leave($__internal_4f673f85d695e453c9915f596a0fefaf57ddfeb185238228de02ee63784e47a6_prof);

        
        $__internal_d02db2f3c9171d94f0ae74d1d53b0683702d7d71456719620bbfaed3c1d57c33->leave($__internal_d02db2f3c9171d94f0ae74d1d53b0683702d7d71456719620bbfaed3c1d57c33_prof);

    }

    // line 46
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_b4c94042e286653557beebb2638970ef633d8e4380aec4b09be11ad78b881f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c94042e286653557beebb2638970ef633d8e4380aec4b09be11ad78b881f2a->enter($__internal_b4c94042e286653557beebb2638970ef633d8e4380aec4b09be11ad78b881f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_ecdea5d72ee4da2a61b43fcdcab05bfab2c8130d622b00e49752ea1f2d2e378b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdea5d72ee4da2a61b43fcdcab05bfab2c8130d622b00e49752ea1f2d2e378b->enter($__internal_ecdea5d72ee4da2a61b43fcdcab05bfab2c8130d622b00e49752ea1f2d2e378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_ecdea5d72ee4da2a61b43fcdcab05bfab2c8130d622b00e49752ea1f2d2e378b->leave($__internal_ecdea5d72ee4da2a61b43fcdcab05bfab2c8130d622b00e49752ea1f2d2e378b_prof);

        
        $__internal_b4c94042e286653557beebb2638970ef633d8e4380aec4b09be11ad78b881f2a->leave($__internal_b4c94042e286653557beebb2638970ef633d8e4380aec4b09be11ad78b881f2a_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_55b7c8466d9f2df8ec8356d311109c77bbc20a5e1c56e42941873acf0c54efc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b7c8466d9f2df8ec8356d311109c77bbc20a5e1c56e42941873acf0c54efc1->enter($__internal_55b7c8466d9f2df8ec8356d311109c77bbc20a5e1c56e42941873acf0c54efc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_ca17e3344844bb20d7123105d84502f5ca5b1f9856f8f1e16acb0aa03851176f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca17e3344844bb20d7123105d84502f5ca5b1f9856f8f1e16acb0aa03851176f->enter($__internal_ca17e3344844bb20d7123105d84502f5ca5b1f9856f8f1e16acb0aa03851176f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_ca17e3344844bb20d7123105d84502f5ca5b1f9856f8f1e16acb0aa03851176f->leave($__internal_ca17e3344844bb20d7123105d84502f5ca5b1f9856f8f1e16acb0aa03851176f_prof);

        
        $__internal_55b7c8466d9f2df8ec8356d311109c77bbc20a5e1c56e42941873acf0c54efc1->leave($__internal_55b7c8466d9f2df8ec8356d311109c77bbc20a5e1c56e42941873acf0c54efc1_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_7061329d4455909d59ae48d5797200b73127b9da488b2f2278fee85f42cb9bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7061329d4455909d59ae48d5797200b73127b9da488b2f2278fee85f42cb9bd6->enter($__internal_7061329d4455909d59ae48d5797200b73127b9da488b2f2278fee85f42cb9bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7f374481d14526581842ef810ffecf67f4a49f6e6a9d66015ed07deab743dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f374481d14526581842ef810ffecf67f4a49f6e6a9d66015ed07deab743dfe->enter($__internal_e7f374481d14526581842ef810ffecf67f4a49f6e6a9d66015ed07deab743dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_e7f374481d14526581842ef810ffecf67f4a49f6e6a9d66015ed07deab743dfe->leave($__internal_e7f374481d14526581842ef810ffecf67f4a49f6e6a9d66015ed07deab743dfe_prof);

        
        $__internal_7061329d4455909d59ae48d5797200b73127b9da488b2f2278fee85f42cb9bd6->leave($__internal_7061329d4455909d59ae48d5797200b73127b9da488b2f2278fee85f42cb9bd6_prof);

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
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

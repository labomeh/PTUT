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
        $__internal_3b7d0a1e5f88605cda6c462a8cd48b84a1aaa0d0b685d438d448db8912a7c494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7d0a1e5f88605cda6c462a8cd48b84a1aaa0d0b685d438d448db8912a7c494->enter($__internal_3b7d0a1e5f88605cda6c462a8cd48b84a1aaa0d0b685d438d448db8912a7c494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_f725a7b3f0d075a466cdd354f7b2086f12272a692f5ea79a562b9d3fa9d5949a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f725a7b3f0d075a466cdd354f7b2086f12272a692f5ea79a562b9d3fa9d5949a->enter($__internal_f725a7b3f0d075a466cdd354f7b2086f12272a692f5ea79a562b9d3fa9d5949a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        
        $__internal_3b7d0a1e5f88605cda6c462a8cd48b84a1aaa0d0b685d438d448db8912a7c494->leave($__internal_3b7d0a1e5f88605cda6c462a8cd48b84a1aaa0d0b685d438d448db8912a7c494_prof);

        
        $__internal_f725a7b3f0d075a466cdd354f7b2086f12272a692f5ea79a562b9d3fa9d5949a->leave($__internal_f725a7b3f0d075a466cdd354f7b2086f12272a692f5ea79a562b9d3fa9d5949a_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_4ca9d41d6cb26cb4f8ceb6711a0acabd12da6c802359e82f5b5b70cf3e1c26c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca9d41d6cb26cb4f8ceb6711a0acabd12da6c802359e82f5b5b70cf3e1c26c7->enter($__internal_4ca9d41d6cb26cb4f8ceb6711a0acabd12da6c802359e82f5b5b70cf3e1c26c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_26c5b673809191fad5b1e2097d4d9d11475a89e450353441c33004786b6bed0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c5b673809191fad5b1e2097d4d9d11475a89e450353441c33004786b6bed0c->enter($__internal_26c5b673809191fad5b1e2097d4d9d11475a89e450353441c33004786b6bed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_26c5b673809191fad5b1e2097d4d9d11475a89e450353441c33004786b6bed0c->leave($__internal_26c5b673809191fad5b1e2097d4d9d11475a89e450353441c33004786b6bed0c_prof);

        
        $__internal_4ca9d41d6cb26cb4f8ceb6711a0acabd12da6c802359e82f5b5b70cf3e1c26c7->leave($__internal_4ca9d41d6cb26cb4f8ceb6711a0acabd12da6c802359e82f5b5b70cf3e1c26c7_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_f57c80319d4d1d73d3a2a00617ed40b11b9d2e66be16ead3e686bb56888e98b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57c80319d4d1d73d3a2a00617ed40b11b9d2e66be16ead3e686bb56888e98b0->enter($__internal_f57c80319d4d1d73d3a2a00617ed40b11b9d2e66be16ead3e686bb56888e98b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_4a39d2de6bbff70b4086857cc90d881d50d15eab1706e3d4ed306e2332fb3c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a39d2de6bbff70b4086857cc90d881d50d15eab1706e3d4ed306e2332fb3c5b->enter($__internal_4a39d2de6bbff70b4086857cc90d881d50d15eab1706e3d4ed306e2332fb3c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_4a39d2de6bbff70b4086857cc90d881d50d15eab1706e3d4ed306e2332fb3c5b->leave($__internal_4a39d2de6bbff70b4086857cc90d881d50d15eab1706e3d4ed306e2332fb3c5b_prof);

        
        $__internal_f57c80319d4d1d73d3a2a00617ed40b11b9d2e66be16ead3e686bb56888e98b0->leave($__internal_f57c80319d4d1d73d3a2a00617ed40b11b9d2e66be16ead3e686bb56888e98b0_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_fbf425c6132126d9c3f32adb1457ae8a5b9c5c6d9c026961eeecceacc7348646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf425c6132126d9c3f32adb1457ae8a5b9c5c6d9c026961eeecceacc7348646->enter($__internal_fbf425c6132126d9c3f32adb1457ae8a5b9c5c6d9c026961eeecceacc7348646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_eb488c00fe5ce58d7f616c72df85db34055eec1450823db16c1f3d67aa5f063a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb488c00fe5ce58d7f616c72df85db34055eec1450823db16c1f3d67aa5f063a->enter($__internal_eb488c00fe5ce58d7f616c72df85db34055eec1450823db16c1f3d67aa5f063a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_eb488c00fe5ce58d7f616c72df85db34055eec1450823db16c1f3d67aa5f063a->leave($__internal_eb488c00fe5ce58d7f616c72df85db34055eec1450823db16c1f3d67aa5f063a_prof);

        
        $__internal_fbf425c6132126d9c3f32adb1457ae8a5b9c5c6d9c026961eeecceacc7348646->leave($__internal_fbf425c6132126d9c3f32adb1457ae8a5b9c5c6d9c026961eeecceacc7348646_prof);

    }

    // line 46
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_3701aef1667eb9f2620068e168d481ab2020895ccc239883e89dfc0e2a4e7372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3701aef1667eb9f2620068e168d481ab2020895ccc239883e89dfc0e2a4e7372->enter($__internal_3701aef1667eb9f2620068e168d481ab2020895ccc239883e89dfc0e2a4e7372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_c2e144cb80b69b27272254c7b3d38839eb4baf10d0fe0d162ef7fc6ee64dc882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e144cb80b69b27272254c7b3d38839eb4baf10d0fe0d162ef7fc6ee64dc882->enter($__internal_c2e144cb80b69b27272254c7b3d38839eb4baf10d0fe0d162ef7fc6ee64dc882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_c2e144cb80b69b27272254c7b3d38839eb4baf10d0fe0d162ef7fc6ee64dc882->leave($__internal_c2e144cb80b69b27272254c7b3d38839eb4baf10d0fe0d162ef7fc6ee64dc882_prof);

        
        $__internal_3701aef1667eb9f2620068e168d481ab2020895ccc239883e89dfc0e2a4e7372->leave($__internal_3701aef1667eb9f2620068e168d481ab2020895ccc239883e89dfc0e2a4e7372_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_3df2f7b6c93795dfcc73cdf1405e0e59479f3788a6ce787092fc285d12aa2589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df2f7b6c93795dfcc73cdf1405e0e59479f3788a6ce787092fc285d12aa2589->enter($__internal_3df2f7b6c93795dfcc73cdf1405e0e59479f3788a6ce787092fc285d12aa2589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_bbddc682f52a3be39fddd139e0858aa6b124c63086bf3761f36ed06fc045aff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbddc682f52a3be39fddd139e0858aa6b124c63086bf3761f36ed06fc045aff8->enter($__internal_bbddc682f52a3be39fddd139e0858aa6b124c63086bf3761f36ed06fc045aff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_bbddc682f52a3be39fddd139e0858aa6b124c63086bf3761f36ed06fc045aff8->leave($__internal_bbddc682f52a3be39fddd139e0858aa6b124c63086bf3761f36ed06fc045aff8_prof);

        
        $__internal_3df2f7b6c93795dfcc73cdf1405e0e59479f3788a6ce787092fc285d12aa2589->leave($__internal_3df2f7b6c93795dfcc73cdf1405e0e59479f3788a6ce787092fc285d12aa2589_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeabd2391a87d81e23a0029a52be864ad8bc18ba8986fb47fd99bec9a71bd77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeabd2391a87d81e23a0029a52be864ad8bc18ba8986fb47fd99bec9a71bd77f->enter($__internal_eeabd2391a87d81e23a0029a52be864ad8bc18ba8986fb47fd99bec9a71bd77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97088ca326667f61342d37a6f0265109bfaaed688ed4e95ded9193ae14755f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97088ca326667f61342d37a6f0265109bfaaed688ed4e95ded9193ae14755f10->enter($__internal_97088ca326667f61342d37a6f0265109bfaaed688ed4e95ded9193ae14755f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_97088ca326667f61342d37a6f0265109bfaaed688ed4e95ded9193ae14755f10->leave($__internal_97088ca326667f61342d37a6f0265109bfaaed688ed4e95ded9193ae14755f10_prof);

        
        $__internal_eeabd2391a87d81e23a0029a52be864ad8bc18ba8986fb47fd99bec9a71bd77f->leave($__internal_eeabd2391a87d81e23a0029a52be864ad8bc18ba8986fb47fd99bec9a71bd77f_prof);

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

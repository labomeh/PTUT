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
        $__internal_8aed042d8dc12cd96ac26d0883ca2e0096dbb725331d366488c355d9636ebdae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aed042d8dc12cd96ac26d0883ca2e0096dbb725331d366488c355d9636ebdae->enter($__internal_8aed042d8dc12cd96ac26d0883ca2e0096dbb725331d366488c355d9636ebdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_adc34efca2fb441e95de3a9005eed0c8dd4ebe89c3ed352c66d7db37ecc383ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc34efca2fb441e95de3a9005eed0c8dd4ebe89c3ed352c66d7db37ecc383ad->enter($__internal_adc34efca2fb441e95de3a9005eed0c8dd4ebe89c3ed352c66d7db37ecc383ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        
        $__internal_8aed042d8dc12cd96ac26d0883ca2e0096dbb725331d366488c355d9636ebdae->leave($__internal_8aed042d8dc12cd96ac26d0883ca2e0096dbb725331d366488c355d9636ebdae_prof);

        
        $__internal_adc34efca2fb441e95de3a9005eed0c8dd4ebe89c3ed352c66d7db37ecc383ad->leave($__internal_adc34efca2fb441e95de3a9005eed0c8dd4ebe89c3ed352c66d7db37ecc383ad_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_5dcbb06b8cda0c8dfa8e41d25f0a023bbaaff8b45aaaf1cdd5839ac364a4a49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcbb06b8cda0c8dfa8e41d25f0a023bbaaff8b45aaaf1cdd5839ac364a4a49f->enter($__internal_5dcbb06b8cda0c8dfa8e41d25f0a023bbaaff8b45aaaf1cdd5839ac364a4a49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_447348d8d61229f20733c5650724c2852f75f09df5f15080237747acac822681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447348d8d61229f20733c5650724c2852f75f09df5f15080237747acac822681->enter($__internal_447348d8d61229f20733c5650724c2852f75f09df5f15080237747acac822681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_447348d8d61229f20733c5650724c2852f75f09df5f15080237747acac822681->leave($__internal_447348d8d61229f20733c5650724c2852f75f09df5f15080237747acac822681_prof);

        
        $__internal_5dcbb06b8cda0c8dfa8e41d25f0a023bbaaff8b45aaaf1cdd5839ac364a4a49f->leave($__internal_5dcbb06b8cda0c8dfa8e41d25f0a023bbaaff8b45aaaf1cdd5839ac364a4a49f_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_b7ac41ef1ee437b2709d77f4b994c4504ff72dcebe9a5b32110ec4cb86583e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ac41ef1ee437b2709d77f4b994c4504ff72dcebe9a5b32110ec4cb86583e4e->enter($__internal_b7ac41ef1ee437b2709d77f4b994c4504ff72dcebe9a5b32110ec4cb86583e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_04fba2d7cd301188a1b74c08993fbf41a9af9e307f26c17cbc2abd24773cba3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fba2d7cd301188a1b74c08993fbf41a9af9e307f26c17cbc2abd24773cba3a->enter($__internal_04fba2d7cd301188a1b74c08993fbf41a9af9e307f26c17cbc2abd24773cba3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_04fba2d7cd301188a1b74c08993fbf41a9af9e307f26c17cbc2abd24773cba3a->leave($__internal_04fba2d7cd301188a1b74c08993fbf41a9af9e307f26c17cbc2abd24773cba3a_prof);

        
        $__internal_b7ac41ef1ee437b2709d77f4b994c4504ff72dcebe9a5b32110ec4cb86583e4e->leave($__internal_b7ac41ef1ee437b2709d77f4b994c4504ff72dcebe9a5b32110ec4cb86583e4e_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_e0ba1d787ff078d517291ae319b999d9ee61912d04af4354460709f6b6f3dafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ba1d787ff078d517291ae319b999d9ee61912d04af4354460709f6b6f3dafe->enter($__internal_e0ba1d787ff078d517291ae319b999d9ee61912d04af4354460709f6b6f3dafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_35dd11be726a82a8e558cbf5487a5c252e753488d09f9427af993a92ea921549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35dd11be726a82a8e558cbf5487a5c252e753488d09f9427af993a92ea921549->enter($__internal_35dd11be726a82a8e558cbf5487a5c252e753488d09f9427af993a92ea921549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_35dd11be726a82a8e558cbf5487a5c252e753488d09f9427af993a92ea921549->leave($__internal_35dd11be726a82a8e558cbf5487a5c252e753488d09f9427af993a92ea921549_prof);

        
        $__internal_e0ba1d787ff078d517291ae319b999d9ee61912d04af4354460709f6b6f3dafe->leave($__internal_e0ba1d787ff078d517291ae319b999d9ee61912d04af4354460709f6b6f3dafe_prof);

    }

    // line 48
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_027b600cb17e1655216515c317f0bf4a70e152a70ce60527e55960fd4357aae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027b600cb17e1655216515c317f0bf4a70e152a70ce60527e55960fd4357aae0->enter($__internal_027b600cb17e1655216515c317f0bf4a70e152a70ce60527e55960fd4357aae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_d5ba83d278c2f8e5c701557c35046d9a01edf7d871f8a1087430ba747eec6d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ba83d278c2f8e5c701557c35046d9a01edf7d871f8a1087430ba747eec6d08->enter($__internal_d5ba83d278c2f8e5c701557c35046d9a01edf7d871f8a1087430ba747eec6d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_d5ba83d278c2f8e5c701557c35046d9a01edf7d871f8a1087430ba747eec6d08->leave($__internal_d5ba83d278c2f8e5c701557c35046d9a01edf7d871f8a1087430ba747eec6d08_prof);

        
        $__internal_027b600cb17e1655216515c317f0bf4a70e152a70ce60527e55960fd4357aae0->leave($__internal_027b600cb17e1655216515c317f0bf4a70e152a70ce60527e55960fd4357aae0_prof);

    }

    // line 54
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_64cf78056ed1a54cff990742762a63e956cf53a32ece3cdc06eb7972c639a432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64cf78056ed1a54cff990742762a63e956cf53a32ece3cdc06eb7972c639a432->enter($__internal_64cf78056ed1a54cff990742762a63e956cf53a32ece3cdc06eb7972c639a432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_85cffc4441a492303c6a7bd9b9cb2fe27076a1ae90351671694113b92795f668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cffc4441a492303c6a7bd9b9cb2fe27076a1ae90351671694113b92795f668->enter($__internal_85cffc4441a492303c6a7bd9b9cb2fe27076a1ae90351671694113b92795f668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_85cffc4441a492303c6a7bd9b9cb2fe27076a1ae90351671694113b92795f668->leave($__internal_85cffc4441a492303c6a7bd9b9cb2fe27076a1ae90351671694113b92795f668_prof);

        
        $__internal_64cf78056ed1a54cff990742762a63e956cf53a32ece3cdc06eb7972c639a432->leave($__internal_64cf78056ed1a54cff990742762a63e956cf53a32ece3cdc06eb7972c639a432_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aecc205452d5c5b07feceea5e66294deb3dfda15a900093472805f59a9f1d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aecc205452d5c5b07feceea5e66294deb3dfda15a900093472805f59a9f1d73->enter($__internal_4aecc205452d5c5b07feceea5e66294deb3dfda15a900093472805f59a9f1d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e4952792a6ebd9ca0cb964e876fa63e972ce8dfcb098afd4857d702dd7793b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4952792a6ebd9ca0cb964e876fa63e972ce8dfcb098afd4857d702dd7793b0->enter($__internal_6e4952792a6ebd9ca0cb964e876fa63e972ce8dfcb098afd4857d702dd7793b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "
    ";
        
        $__internal_6e4952792a6ebd9ca0cb964e876fa63e972ce8dfcb098afd4857d702dd7793b0->leave($__internal_6e4952792a6ebd9ca0cb964e876fa63e972ce8dfcb098afd4857d702dd7793b0_prof);

        
        $__internal_4aecc205452d5c5b07feceea5e66294deb3dfda15a900093472805f59a9f1d73->leave($__internal_4aecc205452d5c5b07feceea5e66294deb3dfda15a900093472805f59a9f1d73_prof);

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
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

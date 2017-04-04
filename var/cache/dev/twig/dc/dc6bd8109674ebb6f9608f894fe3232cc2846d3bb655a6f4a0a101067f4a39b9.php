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
        $__internal_4cc4659da7849c04fc67ff272dc79c022dd7c420a664e1bcc34ce01334946160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc4659da7849c04fc67ff272dc79c022dd7c420a664e1bcc34ce01334946160->enter($__internal_4cc4659da7849c04fc67ff272dc79c022dd7c420a664e1bcc34ce01334946160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_3354975529ea80756c821c4a02218c00b2f2f7078cd2bddcc41601547ffc4647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3354975529ea80756c821c4a02218c00b2f2f7078cd2bddcc41601547ffc4647->enter($__internal_3354975529ea80756c821c4a02218c00b2f2f7078cd2bddcc41601547ffc4647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        
        $__internal_4cc4659da7849c04fc67ff272dc79c022dd7c420a664e1bcc34ce01334946160->leave($__internal_4cc4659da7849c04fc67ff272dc79c022dd7c420a664e1bcc34ce01334946160_prof);

        
        $__internal_3354975529ea80756c821c4a02218c00b2f2f7078cd2bddcc41601547ffc4647->leave($__internal_3354975529ea80756c821c4a02218c00b2f2f7078cd2bddcc41601547ffc4647_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_3afe438a9e09006f07350bf86c61962e1f943ba6a3eb7565ae321edc86dafc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afe438a9e09006f07350bf86c61962e1f943ba6a3eb7565ae321edc86dafc5d->enter($__internal_3afe438a9e09006f07350bf86c61962e1f943ba6a3eb7565ae321edc86dafc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_654651f1c47e5de472e4d65733ca71693220c675e7d14572cf13c7c8986bed7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654651f1c47e5de472e4d65733ca71693220c675e7d14572cf13c7c8986bed7a->enter($__internal_654651f1c47e5de472e4d65733ca71693220c675e7d14572cf13c7c8986bed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_654651f1c47e5de472e4d65733ca71693220c675e7d14572cf13c7c8986bed7a->leave($__internal_654651f1c47e5de472e4d65733ca71693220c675e7d14572cf13c7c8986bed7a_prof);

        
        $__internal_3afe438a9e09006f07350bf86c61962e1f943ba6a3eb7565ae321edc86dafc5d->leave($__internal_3afe438a9e09006f07350bf86c61962e1f943ba6a3eb7565ae321edc86dafc5d_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_65bfa9d78c958527d554a75d5e7ec2849ac403e8a4f294bc8bac5eacd154e86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bfa9d78c958527d554a75d5e7ec2849ac403e8a4f294bc8bac5eacd154e86e->enter($__internal_65bfa9d78c958527d554a75d5e7ec2849ac403e8a4f294bc8bac5eacd154e86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_5a06548902a30be340d67abf525819c951ea296ed30dc5dbaa63985e0d6c7835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a06548902a30be340d67abf525819c951ea296ed30dc5dbaa63985e0d6c7835->enter($__internal_5a06548902a30be340d67abf525819c951ea296ed30dc5dbaa63985e0d6c7835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_5a06548902a30be340d67abf525819c951ea296ed30dc5dbaa63985e0d6c7835->leave($__internal_5a06548902a30be340d67abf525819c951ea296ed30dc5dbaa63985e0d6c7835_prof);

        
        $__internal_65bfa9d78c958527d554a75d5e7ec2849ac403e8a4f294bc8bac5eacd154e86e->leave($__internal_65bfa9d78c958527d554a75d5e7ec2849ac403e8a4f294bc8bac5eacd154e86e_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_8ea9d78b81bd51f4f7f899cbdac1ca49c017e6afa0d30bfbc0ff372d9ec21b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea9d78b81bd51f4f7f899cbdac1ca49c017e6afa0d30bfbc0ff372d9ec21b8e->enter($__internal_8ea9d78b81bd51f4f7f899cbdac1ca49c017e6afa0d30bfbc0ff372d9ec21b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_6a1b512857f125fbc54002151969c08009499d67fa02c65b5403d1a8e4f96a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1b512857f125fbc54002151969c08009499d67fa02c65b5403d1a8e4f96a72->enter($__internal_6a1b512857f125fbc54002151969c08009499d67fa02c65b5403d1a8e4f96a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_6a1b512857f125fbc54002151969c08009499d67fa02c65b5403d1a8e4f96a72->leave($__internal_6a1b512857f125fbc54002151969c08009499d67fa02c65b5403d1a8e4f96a72_prof);

        
        $__internal_8ea9d78b81bd51f4f7f899cbdac1ca49c017e6afa0d30bfbc0ff372d9ec21b8e->leave($__internal_8ea9d78b81bd51f4f7f899cbdac1ca49c017e6afa0d30bfbc0ff372d9ec21b8e_prof);

    }

    // line 46
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_e02f873790ef558788fd76f12c09ca4df0e20887a455d5464be7b33b14946b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02f873790ef558788fd76f12c09ca4df0e20887a455d5464be7b33b14946b4d->enter($__internal_e02f873790ef558788fd76f12c09ca4df0e20887a455d5464be7b33b14946b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_886bfdcd52c4d5f3304122a778c3d7b05624b991a87c402467776d06d549f693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886bfdcd52c4d5f3304122a778c3d7b05624b991a87c402467776d06d549f693->enter($__internal_886bfdcd52c4d5f3304122a778c3d7b05624b991a87c402467776d06d549f693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_886bfdcd52c4d5f3304122a778c3d7b05624b991a87c402467776d06d549f693->leave($__internal_886bfdcd52c4d5f3304122a778c3d7b05624b991a87c402467776d06d549f693_prof);

        
        $__internal_e02f873790ef558788fd76f12c09ca4df0e20887a455d5464be7b33b14946b4d->leave($__internal_e02f873790ef558788fd76f12c09ca4df0e20887a455d5464be7b33b14946b4d_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_44255cb0554924478426c5177b817c84d8395872df51ed8929f095cbc54d427a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44255cb0554924478426c5177b817c84d8395872df51ed8929f095cbc54d427a->enter($__internal_44255cb0554924478426c5177b817c84d8395872df51ed8929f095cbc54d427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_cbfd2000eb61b71958ba605bf95f6bca6558219723a2a5b5cea520110165993c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfd2000eb61b71958ba605bf95f6bca6558219723a2a5b5cea520110165993c->enter($__internal_cbfd2000eb61b71958ba605bf95f6bca6558219723a2a5b5cea520110165993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_cbfd2000eb61b71958ba605bf95f6bca6558219723a2a5b5cea520110165993c->leave($__internal_cbfd2000eb61b71958ba605bf95f6bca6558219723a2a5b5cea520110165993c_prof);

        
        $__internal_44255cb0554924478426c5177b817c84d8395872df51ed8929f095cbc54d427a->leave($__internal_44255cb0554924478426c5177b817c84d8395872df51ed8929f095cbc54d427a_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a5d45e3d284e46ba83785fc7a38f5c94160bbd5b76e7d5105617e27b275d3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5d45e3d284e46ba83785fc7a38f5c94160bbd5b76e7d5105617e27b275d3ef->enter($__internal_7a5d45e3d284e46ba83785fc7a38f5c94160bbd5b76e7d5105617e27b275d3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb1cfd61e9ba977ded079feb5417db7b01fea2bdb8df1ee52729d4446b77987b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1cfd61e9ba977ded079feb5417db7b01fea2bdb8df1ee52729d4446b77987b->enter($__internal_eb1cfd61e9ba977ded079feb5417db7b01fea2bdb8df1ee52729d4446b77987b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_eb1cfd61e9ba977ded079feb5417db7b01fea2bdb8df1ee52729d4446b77987b->leave($__internal_eb1cfd61e9ba977ded079feb5417db7b01fea2bdb8df1ee52729d4446b77987b_prof);

        
        $__internal_7a5d45e3d284e46ba83785fc7a38f5c94160bbd5b76e7d5105617e27b275d3ef->leave($__internal_7a5d45e3d284e46ba83785fc7a38f5c94160bbd5b76e7d5105617e27b275d3ef_prof);

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

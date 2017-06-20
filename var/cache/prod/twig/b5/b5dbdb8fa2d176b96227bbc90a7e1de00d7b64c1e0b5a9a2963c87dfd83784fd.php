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
            'ongletArticle' => array($this, 'block_ongletArticle'),
            'ongletAbout' => array($this, 'block_ongletAbout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57ec6c1b4d2175f12966a08df6c717796000eaf5482d4f0111198dda3275068a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ec6c1b4d2175f12966a08df6c717796000eaf5482d4f0111198dda3275068a->enter($__internal_57ec6c1b4d2175f12966a08df6c717796000eaf5482d4f0111198dda3275068a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
   <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">
    <title>Festival de cinéma amateur</title>
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
        echo "    <title>PTUT</title>

    <!--[if lt IE 9]>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/images/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"bundles/ptutplatform/images/ico/favicon.ico\">
    
    <script src=\"";
        // line 27
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
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_homepage");
        echo "\"><img height=\"50\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/images/logo.png"), "html", null, true);
        echo "\"></a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 48
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_homepage");
        echo "\">Accueil</a></li>
                <li class=\"dropdown ";
        // line 49
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view_id", array("id" => 1));
        echo "\">Actualités</a></li>
\t\t\t\t<!--<li class=\"";
        // line 50
        $this->displayBlock('ongletArticle', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view", array("id" => 2));
        echo "\">Articles</a></li>-->
                <li class=\"";
        // line 51
        $this->displayBlock('ongletAbout', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_about");
        echo "\">A propos</a></li>
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
        <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <a class=\"icon-twitter icon-md\" href=\"http://twitter.com\"></a>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Twitter Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <a class=\"icon-facebook icon-md\" href=\"http://facebook.com\"></a>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Facebook Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <a class=\"icon-google-plus icon-md\" href=\"http://plus.google.com\"></a>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Google Plus Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
            <center>
                <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
                <a id=\"gototop\" class=\"gototop pull-right\" href=\"#\"><i class=\"icon-chevron-up\"></i></a>
            </center>
        </div>
        </section>
    </footer>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_57ec6c1b4d2175f12966a08df6c717796000eaf5482d4f0111198dda3275068a->leave($__internal_57ec6c1b4d2175f12966a08df6c717796000eaf5482d4f0111198dda3275068a_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_bef48bed1969342f0cba6b5910e3b36d4097eaa405ea47905c7540b53a3e50af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef48bed1969342f0cba6b5910e3b36d4097eaa405ea47905c7540b53a3e50af->enter($__internal_bef48bed1969342f0cba6b5910e3b36d4097eaa405ea47905c7540b53a3e50af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_bef48bed1969342f0cba6b5910e3b36d4097eaa405ea47905c7540b53a3e50af->leave($__internal_bef48bed1969342f0cba6b5910e3b36d4097eaa405ea47905c7540b53a3e50af_prof);

    }

    // line 48
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_448942fb648dbc5e0dda54a7fddc0101239cb1e0ef5b432c5872afa3c49407fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448942fb648dbc5e0dda54a7fddc0101239cb1e0ef5b432c5872afa3c49407fd->enter($__internal_448942fb648dbc5e0dda54a7fddc0101239cb1e0ef5b432c5872afa3c49407fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_448942fb648dbc5e0dda54a7fddc0101239cb1e0ef5b432c5872afa3c49407fd->leave($__internal_448942fb648dbc5e0dda54a7fddc0101239cb1e0ef5b432c5872afa3c49407fd_prof);

    }

    // line 49
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_9a240e37d9cd029298f0fe9bdf879bb9ec2a8af4039e3aca9a0deec37edde21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a240e37d9cd029298f0fe9bdf879bb9ec2a8af4039e3aca9a0deec37edde21f->enter($__internal_9a240e37d9cd029298f0fe9bdf879bb9ec2a8af4039e3aca9a0deec37edde21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_9a240e37d9cd029298f0fe9bdf879bb9ec2a8af4039e3aca9a0deec37edde21f->leave($__internal_9a240e37d9cd029298f0fe9bdf879bb9ec2a8af4039e3aca9a0deec37edde21f_prof);

    }

    // line 50
    public function block_ongletArticle($context, array $blocks = array())
    {
        $__internal_31fda5152464120db5b038dc6605aa28df5820036c57a390be68c480189ff563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fda5152464120db5b038dc6605aa28df5820036c57a390be68c480189ff563->enter($__internal_31fda5152464120db5b038dc6605aa28df5820036c57a390be68c480189ff563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        echo " ";
        
        $__internal_31fda5152464120db5b038dc6605aa28df5820036c57a390be68c480189ff563->leave($__internal_31fda5152464120db5b038dc6605aa28df5820036c57a390be68c480189ff563_prof);

    }

    // line 51
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_5e0ac7e005543b76b5f13bbe780eb4b9b4763ce9392bc01a6254b60b6d10ea44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0ac7e005543b76b5f13bbe780eb4b9b4763ce9392bc01a6254b60b6d10ea44->enter($__internal_5e0ac7e005543b76b5f13bbe780eb4b9b4763ce9392bc01a6254b60b6d10ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_5e0ac7e005543b76b5f13bbe780eb4b9b4763ce9392bc01a6254b60b6d10ea44->leave($__internal_5e0ac7e005543b76b5f13bbe780eb4b9b4763ce9392bc01a6254b60b6d10ea44_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dede111699f04d302c6f472305e0388ad750f1e99fd1aa23dec9d9c31cde4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dede111699f04d302c6f472305e0388ad750f1e99fd1aa23dec9d9c31cde4f1->enter($__internal_1dede111699f04d302c6f472305e0388ad750f1e99fd1aa23dec9d9c31cde4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
    ";
        
        $__internal_1dede111699f04d302c6f472305e0388ad750f1e99fd1aa23dec9d9c31cde4f1->leave($__internal_1dede111699f04d302c6f472305e0388ad750f1e99fd1aa23dec9d9c31cde4f1_prof);

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
        return array (  285 => 59,  279 => 58,  267 => 51,  255 => 50,  243 => 49,  231 => 48,  219 => 16,  209 => 112,  205 => 111,  201 => 110,  197 => 109,  193 => 108,  144 => 61,  142 => 58,  130 => 51,  124 => 50,  118 => 49,  112 => 48,  102 => 43,  83 => 27,  77 => 24,  71 => 21,  67 => 20,  62 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  28 => 1,);
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
    <title>Festival de cinéma amateur</title>
    <link href=\"{{ asset('bundles/ptutplatform/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/prettyPhoto.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/animate.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/ptutplatform/css/main.css')}}\" rel=\"stylesheet\">
    {% block include %} {% endblock %}
    <title>PTUT</title>

    <!--[if lt IE 9]>
    <script src=\"{{ asset('bundles/ptutplatform/js/html5shiv.js')}}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/respond.min.js')}}\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/ptutplatform/images/ico/favicon.ico') }}\">
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
                
              <a class=\"navbar-brand\" href=\"{{ path('ptut_platform_homepage') }}\"><img height=\"50\" src=\"{{ asset('bundles/ptutplatform/images/logo.png')}}\"></a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"{{ path('ptut_platform_homepage') }}\">Accueil</a></li>
                <li class=\"dropdown {% block ongletEditions %} {% endblock %}\"><a href=\"{{path('ptut_platform_view_id', {'id': 1})}}\">Actualités</a></li>
\t\t\t\t<!--<li class=\"{% block ongletArticle %} {% endblock %}\"><a href=\"{{path('ptut_platform_view', {'id': 2})}}\">Articles</a></li>-->
                <li class=\"{% block ongletAbout %} {% endblock %}\"><a href=\"{{ path('ptut_platform_about') }}\">A propos</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
    
    {% block body %}

    {% endblock %}
    
        
    <footer id=\"footer\" class=\"midnight-blue\">
        <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <a class=\"icon-twitter icon-md\" href=\"http://twitter.com\"></a>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Twitter Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <a class=\"icon-facebook icon-md\" href=\"http://facebook.com\"></a>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Facebook Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <a class=\"icon-google-plus icon-md\" href=\"http://plus.google.com\"></a>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Google Plus Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
            <center>
                <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
                <a id=\"gototop\" class=\"gototop pull-right\" href=\"#\"><i class=\"icon-chevron-up\"></i></a>
            </center>
        </div>
        </section>
    </footer>
    <script src=\"{{ asset('bundles/ptutplatform/js/jquery.js') }}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/jquery-ui.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/jquery.prettyPhoto.js') }}\"></script>
    <script src=\"{{ asset('bundles/ptutplatform/js/main.js') }}\"></script>
</body>
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

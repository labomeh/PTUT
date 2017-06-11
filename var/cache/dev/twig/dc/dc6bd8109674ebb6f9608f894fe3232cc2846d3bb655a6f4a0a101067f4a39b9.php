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
            'ongletArticle' => array($this, 'block_ongletArticle'),
            'ongletAbout' => array($this, 'block_ongletAbout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ba2f70f607b5b9b67965535203a51d9821d5626edb86228ad687bb2e78bc16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba2f70f607b5b9b67965535203a51d9821d5626edb86228ad687bb2e78bc16e->enter($__internal_6ba2f70f607b5b9b67965535203a51d9821d5626edb86228ad687bb2e78bc16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_74225e2803ca23f2f856c9b238ebb26e2704de5e0f5acb7284366f36e0706a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74225e2803ca23f2f856c9b238ebb26e2704de5e0f5acb7284366f36e0706a07->enter($__internal_74225e2803ca23f2f856c9b238ebb26e2704de5e0f5acb7284366f36e0706a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        echo "\">PTUT S2</a>
              <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_homepage");
        echo "\">Festival de cinéma amateur</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 49
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_homepage");
        echo "\">Accueil</a></li>
                <li class=\"dropdown ";
        // line 50
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view_id", array("id" => 1));
        echo "\">Actualités</a></li>
\t\t\t\t<li class=\"";
        // line 51
        $this->displayBlock('ongletArticle', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptut_platform_view", array("id" => 2));
        echo "\">Articles</a></li>
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
        <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"media\">
                        <div class=\"pull-left\">
                            <i class=\"icon-twitter icon-md\"></i>
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
                            <i class=\"icon-facebook icon-md\"></i>
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
                            <i class=\"icon-google-plus icon-md\"></i>
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
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_6ba2f70f607b5b9b67965535203a51d9821d5626edb86228ad687bb2e78bc16e->leave($__internal_6ba2f70f607b5b9b67965535203a51d9821d5626edb86228ad687bb2e78bc16e_prof);

        
        $__internal_74225e2803ca23f2f856c9b238ebb26e2704de5e0f5acb7284366f36e0706a07->leave($__internal_74225e2803ca23f2f856c9b238ebb26e2704de5e0f5acb7284366f36e0706a07_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_6b84696448ab182488c837dcac09ea9bb15d9e1243aaa026064fe929f307f2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b84696448ab182488c837dcac09ea9bb15d9e1243aaa026064fe929f307f2e1->enter($__internal_6b84696448ab182488c837dcac09ea9bb15d9e1243aaa026064fe929f307f2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_ed9f150505aa77afedd1e6033867e0f5cbc0197350767d1b422a3827fe71e36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9f150505aa77afedd1e6033867e0f5cbc0197350767d1b422a3827fe71e36b->enter($__internal_ed9f150505aa77afedd1e6033867e0f5cbc0197350767d1b422a3827fe71e36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_ed9f150505aa77afedd1e6033867e0f5cbc0197350767d1b422a3827fe71e36b->leave($__internal_ed9f150505aa77afedd1e6033867e0f5cbc0197350767d1b422a3827fe71e36b_prof);

        
        $__internal_6b84696448ab182488c837dcac09ea9bb15d9e1243aaa026064fe929f307f2e1->leave($__internal_6b84696448ab182488c837dcac09ea9bb15d9e1243aaa026064fe929f307f2e1_prof);

    }

    // line 49
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_bcae9a7cf9ced02feb3da1b3eef2d963783436433feb4aabbf2faa486ecfb7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcae9a7cf9ced02feb3da1b3eef2d963783436433feb4aabbf2faa486ecfb7db->enter($__internal_bcae9a7cf9ced02feb3da1b3eef2d963783436433feb4aabbf2faa486ecfb7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_4e7d0b01d4a00e66bc5b83651a04e15897b11862e0a7b9d86a171d88408a98a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7d0b01d4a00e66bc5b83651a04e15897b11862e0a7b9d86a171d88408a98a7->enter($__internal_4e7d0b01d4a00e66bc5b83651a04e15897b11862e0a7b9d86a171d88408a98a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_4e7d0b01d4a00e66bc5b83651a04e15897b11862e0a7b9d86a171d88408a98a7->leave($__internal_4e7d0b01d4a00e66bc5b83651a04e15897b11862e0a7b9d86a171d88408a98a7_prof);

        
        $__internal_bcae9a7cf9ced02feb3da1b3eef2d963783436433feb4aabbf2faa486ecfb7db->leave($__internal_bcae9a7cf9ced02feb3da1b3eef2d963783436433feb4aabbf2faa486ecfb7db_prof);

    }

    // line 50
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_3822850943824f88dd8390213722e1c770577ff931d7b79f2e1eb15639252f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3822850943824f88dd8390213722e1c770577ff931d7b79f2e1eb15639252f5e->enter($__internal_3822850943824f88dd8390213722e1c770577ff931d7b79f2e1eb15639252f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_a3277b91d48a258904f1cc7e39bae0eda23e75569a7ff8239cd592149ecf1965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3277b91d48a258904f1cc7e39bae0eda23e75569a7ff8239cd592149ecf1965->enter($__internal_a3277b91d48a258904f1cc7e39bae0eda23e75569a7ff8239cd592149ecf1965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_a3277b91d48a258904f1cc7e39bae0eda23e75569a7ff8239cd592149ecf1965->leave($__internal_a3277b91d48a258904f1cc7e39bae0eda23e75569a7ff8239cd592149ecf1965_prof);

        
        $__internal_3822850943824f88dd8390213722e1c770577ff931d7b79f2e1eb15639252f5e->leave($__internal_3822850943824f88dd8390213722e1c770577ff931d7b79f2e1eb15639252f5e_prof);

    }

    // line 51
    public function block_ongletArticle($context, array $blocks = array())
    {
        $__internal_c7067dc104e5af480ebb377fb629a8956e69f0bba2a407ddc574b9bba9e0b3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7067dc104e5af480ebb377fb629a8956e69f0bba2a407ddc574b9bba9e0b3cf->enter($__internal_c7067dc104e5af480ebb377fb629a8956e69f0bba2a407ddc574b9bba9e0b3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        $__internal_c5cfdbcf20465668f229624ae9991b4f676c8a89d88f240950af5c2afe60edb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cfdbcf20465668f229624ae9991b4f676c8a89d88f240950af5c2afe60edb1->enter($__internal_c5cfdbcf20465668f229624ae9991b4f676c8a89d88f240950af5c2afe60edb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        echo " ";
        
        $__internal_c5cfdbcf20465668f229624ae9991b4f676c8a89d88f240950af5c2afe60edb1->leave($__internal_c5cfdbcf20465668f229624ae9991b4f676c8a89d88f240950af5c2afe60edb1_prof);

        
        $__internal_c7067dc104e5af480ebb377fb629a8956e69f0bba2a407ddc574b9bba9e0b3cf->leave($__internal_c7067dc104e5af480ebb377fb629a8956e69f0bba2a407ddc574b9bba9e0b3cf_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_3f99ed72c98cfb8ab6671efd4862d962636d4979b020f0cb58db16ceb5c71dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f99ed72c98cfb8ab6671efd4862d962636d4979b020f0cb58db16ceb5c71dad->enter($__internal_3f99ed72c98cfb8ab6671efd4862d962636d4979b020f0cb58db16ceb5c71dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_5992456619a66edb561c82b2eb154656ec049a93a8a1ac9c9507cfc6cf058843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5992456619a66edb561c82b2eb154656ec049a93a8a1ac9c9507cfc6cf058843->enter($__internal_5992456619a66edb561c82b2eb154656ec049a93a8a1ac9c9507cfc6cf058843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_5992456619a66edb561c82b2eb154656ec049a93a8a1ac9c9507cfc6cf058843->leave($__internal_5992456619a66edb561c82b2eb154656ec049a93a8a1ac9c9507cfc6cf058843_prof);

        
        $__internal_3f99ed72c98cfb8ab6671efd4862d962636d4979b020f0cb58db16ceb5c71dad->leave($__internal_3f99ed72c98cfb8ab6671efd4862d962636d4979b020f0cb58db16ceb5c71dad_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_0885d7d97a03e9c0afa0604a4f1d6fb761a3dd4afdeea426c857d8f0348f630a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0885d7d97a03e9c0afa0604a4f1d6fb761a3dd4afdeea426c857d8f0348f630a->enter($__internal_0885d7d97a03e9c0afa0604a4f1d6fb761a3dd4afdeea426c857d8f0348f630a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6509f5dcf7f86052030766b244ea1fb2041754e0964bba4bbc69112c2e47765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6509f5dcf7f86052030766b244ea1fb2041754e0964bba4bbc69112c2e47765->enter($__internal_b6509f5dcf7f86052030766b244ea1fb2041754e0964bba4bbc69112c2e47765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_b6509f5dcf7f86052030766b244ea1fb2041754e0964bba4bbc69112c2e47765->leave($__internal_b6509f5dcf7f86052030766b244ea1fb2041754e0964bba4bbc69112c2e47765_prof);

        
        $__internal_0885d7d97a03e9c0afa0604a4f1d6fb761a3dd4afdeea426c857d8f0348f630a->leave($__internal_0885d7d97a03e9c0afa0604a4f1d6fb761a3dd4afdeea426c857d8f0348f630a_prof);

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
        return array (  324 => 60,  315 => 59,  297 => 52,  279 => 51,  261 => 50,  243 => 49,  225 => 16,  212 => 113,  208 => 112,  204 => 111,  200 => 110,  196 => 109,  147 => 62,  145 => 59,  135 => 52,  129 => 51,  123 => 50,  117 => 49,  109 => 44,  105 => 43,  86 => 27,  80 => 24,  74 => 21,  70 => 20,  65 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  31 => 1,);
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
                
              <a class=\"navbar-brand\" href=\"{{ path('ptut_platform_homepage') }}\">PTUT S2</a>
              <a class=\"navbar-brand\" href=\"{{path('ptut_platform_homepage')}}\">Festival de cinéma amateur</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"{{ path('ptut_platform_homepage') }}\">Accueil</a></li>
                <li class=\"dropdown {% block ongletEditions %} {% endblock %}\"><a href=\"{{path('ptut_platform_view_id', {'id': 1})}}\">Actualités</a></li>
\t\t\t\t<li class=\"{% block ongletArticle %} {% endblock %}\"><a href=\"{{path('ptut_platform_view', {'id': 2})}}\">Articles</a></li>
                <li class=\"{% block ongletAbout %} {% endblock %}\"><a href=\"#about\">About</a></li>
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
                            <i class=\"icon-twitter icon-md\"></i>
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
                            <i class=\"icon-facebook icon-md\"></i>
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
                            <i class=\"icon-google-plus icon-md\"></i>
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
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

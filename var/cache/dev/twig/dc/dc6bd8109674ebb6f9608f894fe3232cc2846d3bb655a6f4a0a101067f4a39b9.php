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
        $__internal_bdf78393996047df7b9c39ce4a46a56649c4c4806e3cd4dcd6c1e42a19bbdce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf78393996047df7b9c39ce4a46a56649c4c4806e3cd4dcd6c1e42a19bbdce8->enter($__internal_bdf78393996047df7b9c39ce4a46a56649c4c4806e3cd4dcd6c1e42a19bbdce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_acf238a472e0dd033808343622e4c6cf1e37a44552f652eafcfd5d7bd9c462f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf238a472e0dd033808343622e4c6cf1e37a44552f652eafcfd5d7bd9c462f6->enter($__internal_acf238a472e0dd033808343622e4c6cf1e37a44552f652eafcfd5d7bd9c462f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        
        $__internal_bdf78393996047df7b9c39ce4a46a56649c4c4806e3cd4dcd6c1e42a19bbdce8->leave($__internal_bdf78393996047df7b9c39ce4a46a56649c4c4806e3cd4dcd6c1e42a19bbdce8_prof);

        
        $__internal_acf238a472e0dd033808343622e4c6cf1e37a44552f652eafcfd5d7bd9c462f6->leave($__internal_acf238a472e0dd033808343622e4c6cf1e37a44552f652eafcfd5d7bd9c462f6_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_395fcb51f36317c74686b5a3465790037ce87fdb0b88fe1df35dcd6469ffaf82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395fcb51f36317c74686b5a3465790037ce87fdb0b88fe1df35dcd6469ffaf82->enter($__internal_395fcb51f36317c74686b5a3465790037ce87fdb0b88fe1df35dcd6469ffaf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_4a81362ed5154eaca16693027b88f9e1856244f7f8c6edfebd15df9608a83659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a81362ed5154eaca16693027b88f9e1856244f7f8c6edfebd15df9608a83659->enter($__internal_4a81362ed5154eaca16693027b88f9e1856244f7f8c6edfebd15df9608a83659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_4a81362ed5154eaca16693027b88f9e1856244f7f8c6edfebd15df9608a83659->leave($__internal_4a81362ed5154eaca16693027b88f9e1856244f7f8c6edfebd15df9608a83659_prof);

        
        $__internal_395fcb51f36317c74686b5a3465790037ce87fdb0b88fe1df35dcd6469ffaf82->leave($__internal_395fcb51f36317c74686b5a3465790037ce87fdb0b88fe1df35dcd6469ffaf82_prof);

    }

    // line 48
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_865e088b1ee503e78e74dde9fba99852d292fa355d4ea11cd1e116d07897a2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865e088b1ee503e78e74dde9fba99852d292fa355d4ea11cd1e116d07897a2e4->enter($__internal_865e088b1ee503e78e74dde9fba99852d292fa355d4ea11cd1e116d07897a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_c4e5dd9912990ffbf45d7d87ff6bb68db1e7351b1189fca5470ec79df8b99fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e5dd9912990ffbf45d7d87ff6bb68db1e7351b1189fca5470ec79df8b99fed->enter($__internal_c4e5dd9912990ffbf45d7d87ff6bb68db1e7351b1189fca5470ec79df8b99fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_c4e5dd9912990ffbf45d7d87ff6bb68db1e7351b1189fca5470ec79df8b99fed->leave($__internal_c4e5dd9912990ffbf45d7d87ff6bb68db1e7351b1189fca5470ec79df8b99fed_prof);

        
        $__internal_865e088b1ee503e78e74dde9fba99852d292fa355d4ea11cd1e116d07897a2e4->leave($__internal_865e088b1ee503e78e74dde9fba99852d292fa355d4ea11cd1e116d07897a2e4_prof);

    }

    // line 49
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_bb6de38497f052c34c5377d8db3fc5a8157d94ec27a7c92228164e2a6fb289c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6de38497f052c34c5377d8db3fc5a8157d94ec27a7c92228164e2a6fb289c4->enter($__internal_bb6de38497f052c34c5377d8db3fc5a8157d94ec27a7c92228164e2a6fb289c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_77b168c7f31236aef88d8ba4ebb27d6201bc73ad3ca75e73d2822708724f8198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b168c7f31236aef88d8ba4ebb27d6201bc73ad3ca75e73d2822708724f8198->enter($__internal_77b168c7f31236aef88d8ba4ebb27d6201bc73ad3ca75e73d2822708724f8198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_77b168c7f31236aef88d8ba4ebb27d6201bc73ad3ca75e73d2822708724f8198->leave($__internal_77b168c7f31236aef88d8ba4ebb27d6201bc73ad3ca75e73d2822708724f8198_prof);

        
        $__internal_bb6de38497f052c34c5377d8db3fc5a8157d94ec27a7c92228164e2a6fb289c4->leave($__internal_bb6de38497f052c34c5377d8db3fc5a8157d94ec27a7c92228164e2a6fb289c4_prof);

    }

    // line 50
    public function block_ongletArticle($context, array $blocks = array())
    {
        $__internal_6b2c83d38f0b657fbab933e2dc378c42ade372a1f90df1ca83df4c81f144da19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2c83d38f0b657fbab933e2dc378c42ade372a1f90df1ca83df4c81f144da19->enter($__internal_6b2c83d38f0b657fbab933e2dc378c42ade372a1f90df1ca83df4c81f144da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        $__internal_cc2438ea6cd8528a85e8f568b86f9f6f1a11364e701ad76ab8d66bc1ab5cd997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2438ea6cd8528a85e8f568b86f9f6f1a11364e701ad76ab8d66bc1ab5cd997->enter($__internal_cc2438ea6cd8528a85e8f568b86f9f6f1a11364e701ad76ab8d66bc1ab5cd997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        echo " ";
        
        $__internal_cc2438ea6cd8528a85e8f568b86f9f6f1a11364e701ad76ab8d66bc1ab5cd997->leave($__internal_cc2438ea6cd8528a85e8f568b86f9f6f1a11364e701ad76ab8d66bc1ab5cd997_prof);

        
        $__internal_6b2c83d38f0b657fbab933e2dc378c42ade372a1f90df1ca83df4c81f144da19->leave($__internal_6b2c83d38f0b657fbab933e2dc378c42ade372a1f90df1ca83df4c81f144da19_prof);

    }

    // line 51
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_05a343d2016b24d6aa0d3395a2532dc76c18daaa29d133c10ef33868fc512d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a343d2016b24d6aa0d3395a2532dc76c18daaa29d133c10ef33868fc512d31->enter($__internal_05a343d2016b24d6aa0d3395a2532dc76c18daaa29d133c10ef33868fc512d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_c9b30f78a1972d465aef15d4541265f5a3c7449728e91f85a261ab73fd9033a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b30f78a1972d465aef15d4541265f5a3c7449728e91f85a261ab73fd9033a0->enter($__internal_c9b30f78a1972d465aef15d4541265f5a3c7449728e91f85a261ab73fd9033a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_c9b30f78a1972d465aef15d4541265f5a3c7449728e91f85a261ab73fd9033a0->leave($__internal_c9b30f78a1972d465aef15d4541265f5a3c7449728e91f85a261ab73fd9033a0_prof);

        
        $__internal_05a343d2016b24d6aa0d3395a2532dc76c18daaa29d133c10ef33868fc512d31->leave($__internal_05a343d2016b24d6aa0d3395a2532dc76c18daaa29d133c10ef33868fc512d31_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_21ff7331dc63ba137de91ccd9816fe5f5eeac831dfec1dbc6cbe840c2b2e32fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ff7331dc63ba137de91ccd9816fe5f5eeac831dfec1dbc6cbe840c2b2e32fd->enter($__internal_21ff7331dc63ba137de91ccd9816fe5f5eeac831dfec1dbc6cbe840c2b2e32fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6e8cc6f698dacb498cc7692e1c896e290690d61570136b09274e2c0b30ca59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e8cc6f698dacb498cc7692e1c896e290690d61570136b09274e2c0b30ca59f->enter($__internal_a6e8cc6f698dacb498cc7692e1c896e290690d61570136b09274e2c0b30ca59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
    ";
        
        $__internal_a6e8cc6f698dacb498cc7692e1c896e290690d61570136b09274e2c0b30ca59f->leave($__internal_a6e8cc6f698dacb498cc7692e1c896e290690d61570136b09274e2c0b30ca59f_prof);

        
        $__internal_21ff7331dc63ba137de91ccd9816fe5f5eeac831dfec1dbc6cbe840c2b2e32fd->leave($__internal_21ff7331dc63ba137de91ccd9816fe5f5eeac831dfec1dbc6cbe840c2b2e32fd_prof);

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
        return array (  324 => 59,  315 => 58,  297 => 51,  279 => 50,  261 => 49,  243 => 48,  225 => 16,  212 => 112,  208 => 111,  204 => 110,  200 => 109,  196 => 108,  147 => 61,  145 => 58,  133 => 51,  127 => 50,  121 => 49,  115 => 48,  105 => 43,  86 => 27,  80 => 24,  74 => 21,  70 => 20,  65 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  31 => 1,);
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
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

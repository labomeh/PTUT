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
        $__internal_c5e40716e0b60e057a90f12ba8b97ce0f28d0d8caca3a037dafaf0fddd82f50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e40716e0b60e057a90f12ba8b97ce0f28d0d8caca3a037dafaf0fddd82f50a->enter($__internal_c5e40716e0b60e057a90f12ba8b97ce0f28d0d8caca3a037dafaf0fddd82f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_697646a123ebfaf6d437070309d96b47407bcd19a356296c87aadfe09885388d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697646a123ebfaf6d437070309d96b47407bcd19a356296c87aadfe09885388d->enter($__internal_697646a123ebfaf6d437070309d96b47407bcd19a356296c87aadfe09885388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        
        $__internal_c5e40716e0b60e057a90f12ba8b97ce0f28d0d8caca3a037dafaf0fddd82f50a->leave($__internal_c5e40716e0b60e057a90f12ba8b97ce0f28d0d8caca3a037dafaf0fddd82f50a_prof);

        
        $__internal_697646a123ebfaf6d437070309d96b47407bcd19a356296c87aadfe09885388d->leave($__internal_697646a123ebfaf6d437070309d96b47407bcd19a356296c87aadfe09885388d_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_1d7f54666805c3db9437db433e1c84da4d9d1bdc64b93d9aceb1c752a093731a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7f54666805c3db9437db433e1c84da4d9d1bdc64b93d9aceb1c752a093731a->enter($__internal_1d7f54666805c3db9437db433e1c84da4d9d1bdc64b93d9aceb1c752a093731a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_607b40bdcca8c2714fb434b0b6d299e9908c38c389becdab364734fada20d209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607b40bdcca8c2714fb434b0b6d299e9908c38c389becdab364734fada20d209->enter($__internal_607b40bdcca8c2714fb434b0b6d299e9908c38c389becdab364734fada20d209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_607b40bdcca8c2714fb434b0b6d299e9908c38c389becdab364734fada20d209->leave($__internal_607b40bdcca8c2714fb434b0b6d299e9908c38c389becdab364734fada20d209_prof);

        
        $__internal_1d7f54666805c3db9437db433e1c84da4d9d1bdc64b93d9aceb1c752a093731a->leave($__internal_1d7f54666805c3db9437db433e1c84da4d9d1bdc64b93d9aceb1c752a093731a_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_88964f9bac59409370cbd0ed7ed5d4ae425ea212b32e6d8bbdeeb78197b96c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88964f9bac59409370cbd0ed7ed5d4ae425ea212b32e6d8bbdeeb78197b96c44->enter($__internal_88964f9bac59409370cbd0ed7ed5d4ae425ea212b32e6d8bbdeeb78197b96c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_a8b35d2149c4aabeaf8401e251c48aad4ec5a25fef3da4ae08708c3af9af9e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b35d2149c4aabeaf8401e251c48aad4ec5a25fef3da4ae08708c3af9af9e92->enter($__internal_a8b35d2149c4aabeaf8401e251c48aad4ec5a25fef3da4ae08708c3af9af9e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_a8b35d2149c4aabeaf8401e251c48aad4ec5a25fef3da4ae08708c3af9af9e92->leave($__internal_a8b35d2149c4aabeaf8401e251c48aad4ec5a25fef3da4ae08708c3af9af9e92_prof);

        
        $__internal_88964f9bac59409370cbd0ed7ed5d4ae425ea212b32e6d8bbdeeb78197b96c44->leave($__internal_88964f9bac59409370cbd0ed7ed5d4ae425ea212b32e6d8bbdeeb78197b96c44_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_1e70e59b8f5551f64dd2de93173bbc7380063b4c26e32ea0dc390c350aab6db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e70e59b8f5551f64dd2de93173bbc7380063b4c26e32ea0dc390c350aab6db8->enter($__internal_1e70e59b8f5551f64dd2de93173bbc7380063b4c26e32ea0dc390c350aab6db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_59231cd866ea4d896d01608125529f4d0e0ec2458dab1792f1109161bd21f51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59231cd866ea4d896d01608125529f4d0e0ec2458dab1792f1109161bd21f51f->enter($__internal_59231cd866ea4d896d01608125529f4d0e0ec2458dab1792f1109161bd21f51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_59231cd866ea4d896d01608125529f4d0e0ec2458dab1792f1109161bd21f51f->leave($__internal_59231cd866ea4d896d01608125529f4d0e0ec2458dab1792f1109161bd21f51f_prof);

        
        $__internal_1e70e59b8f5551f64dd2de93173bbc7380063b4c26e32ea0dc390c350aab6db8->leave($__internal_1e70e59b8f5551f64dd2de93173bbc7380063b4c26e32ea0dc390c350aab6db8_prof);

    }

    // line 46
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_7457e762d529e525382868ddaa0ffe05d7ea1ee8c3e2a5e2361e1ffe0459286c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7457e762d529e525382868ddaa0ffe05d7ea1ee8c3e2a5e2361e1ffe0459286c->enter($__internal_7457e762d529e525382868ddaa0ffe05d7ea1ee8c3e2a5e2361e1ffe0459286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_1b663206cbb11bda29e4a7e009c86000c196ea1a61afb234ae07f6a84b87cfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b663206cbb11bda29e4a7e009c86000c196ea1a61afb234ae07f6a84b87cfd6->enter($__internal_1b663206cbb11bda29e4a7e009c86000c196ea1a61afb234ae07f6a84b87cfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_1b663206cbb11bda29e4a7e009c86000c196ea1a61afb234ae07f6a84b87cfd6->leave($__internal_1b663206cbb11bda29e4a7e009c86000c196ea1a61afb234ae07f6a84b87cfd6_prof);

        
        $__internal_7457e762d529e525382868ddaa0ffe05d7ea1ee8c3e2a5e2361e1ffe0459286c->leave($__internal_7457e762d529e525382868ddaa0ffe05d7ea1ee8c3e2a5e2361e1ffe0459286c_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_05b530cab1487400588ca58c72b2205bade283019c9aacdbb25ab0b26b501529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b530cab1487400588ca58c72b2205bade283019c9aacdbb25ab0b26b501529->enter($__internal_05b530cab1487400588ca58c72b2205bade283019c9aacdbb25ab0b26b501529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_3d194718d4bc18fd7238f5e9a525858172e046fa2bd4d2a1825146382426b1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d194718d4bc18fd7238f5e9a525858172e046fa2bd4d2a1825146382426b1b0->enter($__internal_3d194718d4bc18fd7238f5e9a525858172e046fa2bd4d2a1825146382426b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_3d194718d4bc18fd7238f5e9a525858172e046fa2bd4d2a1825146382426b1b0->leave($__internal_3d194718d4bc18fd7238f5e9a525858172e046fa2bd4d2a1825146382426b1b0_prof);

        
        $__internal_05b530cab1487400588ca58c72b2205bade283019c9aacdbb25ab0b26b501529->leave($__internal_05b530cab1487400588ca58c72b2205bade283019c9aacdbb25ab0b26b501529_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_16a92be6ecc801a873915f20074be1cb408fcc4faa3c4109d9857fb2b0b08655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a92be6ecc801a873915f20074be1cb408fcc4faa3c4109d9857fb2b0b08655->enter($__internal_16a92be6ecc801a873915f20074be1cb408fcc4faa3c4109d9857fb2b0b08655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d43426485c2298ff200e7dc8ccaef3bc70668e8920da4372f9bd9b26e55a615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d43426485c2298ff200e7dc8ccaef3bc70668e8920da4372f9bd9b26e55a615->enter($__internal_7d43426485c2298ff200e7dc8ccaef3bc70668e8920da4372f9bd9b26e55a615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_7d43426485c2298ff200e7dc8ccaef3bc70668e8920da4372f9bd9b26e55a615->leave($__internal_7d43426485c2298ff200e7dc8ccaef3bc70668e8920da4372f9bd9b26e55a615_prof);

        
        $__internal_16a92be6ecc801a873915f20074be1cb408fcc4faa3c4109d9857fb2b0b08655->leave($__internal_16a92be6ecc801a873915f20074be1cb408fcc4faa3c4109d9857fb2b0b08655_prof);

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

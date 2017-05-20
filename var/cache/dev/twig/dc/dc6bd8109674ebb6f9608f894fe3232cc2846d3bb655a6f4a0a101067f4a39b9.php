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
        $__internal_05b3a0abbc863a6c0a73e35debadb461b26926e45e0a0dc2db64623f0805fff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b3a0abbc863a6c0a73e35debadb461b26926e45e0a0dc2db64623f0805fff7->enter($__internal_05b3a0abbc863a6c0a73e35debadb461b26926e45e0a0dc2db64623f0805fff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_6b8a452c44806e67d8e141f839f865f0e9c98086f15f55e17c0fbbaabc548066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8a452c44806e67d8e141f839f865f0e9c98086f15f55e17c0fbbaabc548066->enter($__internal_6b8a452c44806e67d8e141f839f865f0e9c98086f15f55e17c0fbbaabc548066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        
        $__internal_05b3a0abbc863a6c0a73e35debadb461b26926e45e0a0dc2db64623f0805fff7->leave($__internal_05b3a0abbc863a6c0a73e35debadb461b26926e45e0a0dc2db64623f0805fff7_prof);

        
        $__internal_6b8a452c44806e67d8e141f839f865f0e9c98086f15f55e17c0fbbaabc548066->leave($__internal_6b8a452c44806e67d8e141f839f865f0e9c98086f15f55e17c0fbbaabc548066_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_e08b437ea902ed5954fde6e5fac7fc3d223266fdd9486165be7be1551cf46880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08b437ea902ed5954fde6e5fac7fc3d223266fdd9486165be7be1551cf46880->enter($__internal_e08b437ea902ed5954fde6e5fac7fc3d223266fdd9486165be7be1551cf46880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_9146511e6879c2e64f769be21d28dd2420211314b0e7c993956464380a3cfd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9146511e6879c2e64f769be21d28dd2420211314b0e7c993956464380a3cfd23->enter($__internal_9146511e6879c2e64f769be21d28dd2420211314b0e7c993956464380a3cfd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_9146511e6879c2e64f769be21d28dd2420211314b0e7c993956464380a3cfd23->leave($__internal_9146511e6879c2e64f769be21d28dd2420211314b0e7c993956464380a3cfd23_prof);

        
        $__internal_e08b437ea902ed5954fde6e5fac7fc3d223266fdd9486165be7be1551cf46880->leave($__internal_e08b437ea902ed5954fde6e5fac7fc3d223266fdd9486165be7be1551cf46880_prof);

    }

    // line 49
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_45b01f98fc5f9e4851b4b6ba39e54204f9066bf7d445fe490a941298a55e0a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b01f98fc5f9e4851b4b6ba39e54204f9066bf7d445fe490a941298a55e0a54->enter($__internal_45b01f98fc5f9e4851b4b6ba39e54204f9066bf7d445fe490a941298a55e0a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_53f6cfef74103a7934989fe3c30094dde70a15fae2eb373453ecb70cd5cea920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f6cfef74103a7934989fe3c30094dde70a15fae2eb373453ecb70cd5cea920->enter($__internal_53f6cfef74103a7934989fe3c30094dde70a15fae2eb373453ecb70cd5cea920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_53f6cfef74103a7934989fe3c30094dde70a15fae2eb373453ecb70cd5cea920->leave($__internal_53f6cfef74103a7934989fe3c30094dde70a15fae2eb373453ecb70cd5cea920_prof);

        
        $__internal_45b01f98fc5f9e4851b4b6ba39e54204f9066bf7d445fe490a941298a55e0a54->leave($__internal_45b01f98fc5f9e4851b4b6ba39e54204f9066bf7d445fe490a941298a55e0a54_prof);

    }

    // line 50
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_63ea88052f1cbb0906872c141c12da902958223f52e162b1b984b894aa6532c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ea88052f1cbb0906872c141c12da902958223f52e162b1b984b894aa6532c4->enter($__internal_63ea88052f1cbb0906872c141c12da902958223f52e162b1b984b894aa6532c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_ebb436606e62a35597649ed4407098695ec3b7bc66537977246e79b87f1e3baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb436606e62a35597649ed4407098695ec3b7bc66537977246e79b87f1e3baf->enter($__internal_ebb436606e62a35597649ed4407098695ec3b7bc66537977246e79b87f1e3baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_ebb436606e62a35597649ed4407098695ec3b7bc66537977246e79b87f1e3baf->leave($__internal_ebb436606e62a35597649ed4407098695ec3b7bc66537977246e79b87f1e3baf_prof);

        
        $__internal_63ea88052f1cbb0906872c141c12da902958223f52e162b1b984b894aa6532c4->leave($__internal_63ea88052f1cbb0906872c141c12da902958223f52e162b1b984b894aa6532c4_prof);

    }

    // line 51
    public function block_ongletArticle($context, array $blocks = array())
    {
        $__internal_fb14cc19fb68bb95c15824e05e988cb1a71a1fd69037c486a6355d9e7b3232fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb14cc19fb68bb95c15824e05e988cb1a71a1fd69037c486a6355d9e7b3232fa->enter($__internal_fb14cc19fb68bb95c15824e05e988cb1a71a1fd69037c486a6355d9e7b3232fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        $__internal_47f414217aeac6cc2543fadf4bf74cb6fcd04383a5e059dc35016501a3f1567d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f414217aeac6cc2543fadf4bf74cb6fcd04383a5e059dc35016501a3f1567d->enter($__internal_47f414217aeac6cc2543fadf4bf74cb6fcd04383a5e059dc35016501a3f1567d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        echo " ";
        
        $__internal_47f414217aeac6cc2543fadf4bf74cb6fcd04383a5e059dc35016501a3f1567d->leave($__internal_47f414217aeac6cc2543fadf4bf74cb6fcd04383a5e059dc35016501a3f1567d_prof);

        
        $__internal_fb14cc19fb68bb95c15824e05e988cb1a71a1fd69037c486a6355d9e7b3232fa->leave($__internal_fb14cc19fb68bb95c15824e05e988cb1a71a1fd69037c486a6355d9e7b3232fa_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_473603f424384aeffa37404ade0bda2cab9524214ef1e90709197a933f7d7d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473603f424384aeffa37404ade0bda2cab9524214ef1e90709197a933f7d7d9e->enter($__internal_473603f424384aeffa37404ade0bda2cab9524214ef1e90709197a933f7d7d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_b7adb1a5b7e41dafff17bec7f73f2d7b141625acaf4e5a16b9c55971d083c18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7adb1a5b7e41dafff17bec7f73f2d7b141625acaf4e5a16b9c55971d083c18a->enter($__internal_b7adb1a5b7e41dafff17bec7f73f2d7b141625acaf4e5a16b9c55971d083c18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_b7adb1a5b7e41dafff17bec7f73f2d7b141625acaf4e5a16b9c55971d083c18a->leave($__internal_b7adb1a5b7e41dafff17bec7f73f2d7b141625acaf4e5a16b9c55971d083c18a_prof);

        
        $__internal_473603f424384aeffa37404ade0bda2cab9524214ef1e90709197a933f7d7d9e->leave($__internal_473603f424384aeffa37404ade0bda2cab9524214ef1e90709197a933f7d7d9e_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a54c9ccafda79513bdb40261d25a66d0c38d5492590bb3ed1f462b24d352a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a54c9ccafda79513bdb40261d25a66d0c38d5492590bb3ed1f462b24d352a5->enter($__internal_52a54c9ccafda79513bdb40261d25a66d0c38d5492590bb3ed1f462b24d352a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3772ba6469ff6b195a86a8f417183d3e5dcbced442394bc4842a3c0ac673d5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3772ba6469ff6b195a86a8f417183d3e5dcbced442394bc4842a3c0ac673d5cd->enter($__internal_3772ba6469ff6b195a86a8f417183d3e5dcbced442394bc4842a3c0ac673d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_3772ba6469ff6b195a86a8f417183d3e5dcbced442394bc4842a3c0ac673d5cd->leave($__internal_3772ba6469ff6b195a86a8f417183d3e5dcbced442394bc4842a3c0ac673d5cd_prof);

        
        $__internal_52a54c9ccafda79513bdb40261d25a66d0c38d5492590bb3ed1f462b24d352a5->leave($__internal_52a54c9ccafda79513bdb40261d25a66d0c38d5492590bb3ed1f462b24d352a5_prof);

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
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

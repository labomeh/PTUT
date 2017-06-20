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
            'ongletArticle' => array($this, 'block_ongletArticle'),
            'ongletAbout' => array($this, 'block_ongletAbout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5508542c2a9caa5ee80782195640411a597a0f60cade003f6f183659c00db347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5508542c2a9caa5ee80782195640411a597a0f60cade003f6f183659c00db347->enter($__internal_5508542c2a9caa5ee80782195640411a597a0f60cade003f6f183659c00db347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_a40be397813b6e57d21c0b281d7af15ac6479ef340ddcd4a467efc96aad2334d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40be397813b6e57d21c0b281d7af15ac6479ef340ddcd4a467efc96aad2334d->enter($__internal_a40be397813b6e57d21c0b281d7af15ac6479ef340ddcd4a467efc96aad2334d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        
        $__internal_5508542c2a9caa5ee80782195640411a597a0f60cade003f6f183659c00db347->leave($__internal_5508542c2a9caa5ee80782195640411a597a0f60cade003f6f183659c00db347_prof);

        
        $__internal_a40be397813b6e57d21c0b281d7af15ac6479ef340ddcd4a467efc96aad2334d->leave($__internal_a40be397813b6e57d21c0b281d7af15ac6479ef340ddcd4a467efc96aad2334d_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_753fad40f95e07b25ab52c361e8a165d6044c02ec664be1c8bdecd22fa733398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753fad40f95e07b25ab52c361e8a165d6044c02ec664be1c8bdecd22fa733398->enter($__internal_753fad40f95e07b25ab52c361e8a165d6044c02ec664be1c8bdecd22fa733398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_e66fe0a4f5e7026ef56ec4b56d5f51b9df407528fbf9d0718f75bfc8df04dd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66fe0a4f5e7026ef56ec4b56d5f51b9df407528fbf9d0718f75bfc8df04dd49->enter($__internal_e66fe0a4f5e7026ef56ec4b56d5f51b9df407528fbf9d0718f75bfc8df04dd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_e66fe0a4f5e7026ef56ec4b56d5f51b9df407528fbf9d0718f75bfc8df04dd49->leave($__internal_e66fe0a4f5e7026ef56ec4b56d5f51b9df407528fbf9d0718f75bfc8df04dd49_prof);

        
        $__internal_753fad40f95e07b25ab52c361e8a165d6044c02ec664be1c8bdecd22fa733398->leave($__internal_753fad40f95e07b25ab52c361e8a165d6044c02ec664be1c8bdecd22fa733398_prof);

    }

    // line 48
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_c1c66c0606200ba56dc4b69c9b8dac4ef5987dd47aba1bc2b432daadd7d1ed5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c66c0606200ba56dc4b69c9b8dac4ef5987dd47aba1bc2b432daadd7d1ed5b->enter($__internal_c1c66c0606200ba56dc4b69c9b8dac4ef5987dd47aba1bc2b432daadd7d1ed5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_d19d475b0dcb7ebbff4668605160a816e38ed2cac2a467d4130cb01e29f4a321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19d475b0dcb7ebbff4668605160a816e38ed2cac2a467d4130cb01e29f4a321->enter($__internal_d19d475b0dcb7ebbff4668605160a816e38ed2cac2a467d4130cb01e29f4a321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_d19d475b0dcb7ebbff4668605160a816e38ed2cac2a467d4130cb01e29f4a321->leave($__internal_d19d475b0dcb7ebbff4668605160a816e38ed2cac2a467d4130cb01e29f4a321_prof);

        
        $__internal_c1c66c0606200ba56dc4b69c9b8dac4ef5987dd47aba1bc2b432daadd7d1ed5b->leave($__internal_c1c66c0606200ba56dc4b69c9b8dac4ef5987dd47aba1bc2b432daadd7d1ed5b_prof);

    }

    // line 49
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_e3e6e88e4dc41648911b8adb7f985201b6d3d12894cad7a1a660b3a21182359b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e6e88e4dc41648911b8adb7f985201b6d3d12894cad7a1a660b3a21182359b->enter($__internal_e3e6e88e4dc41648911b8adb7f985201b6d3d12894cad7a1a660b3a21182359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_454f502c9ebaf81c3f44432dd307c7b7081d3a57cb929bb54f8397fcec929145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454f502c9ebaf81c3f44432dd307c7b7081d3a57cb929bb54f8397fcec929145->enter($__internal_454f502c9ebaf81c3f44432dd307c7b7081d3a57cb929bb54f8397fcec929145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_454f502c9ebaf81c3f44432dd307c7b7081d3a57cb929bb54f8397fcec929145->leave($__internal_454f502c9ebaf81c3f44432dd307c7b7081d3a57cb929bb54f8397fcec929145_prof);

        
        $__internal_e3e6e88e4dc41648911b8adb7f985201b6d3d12894cad7a1a660b3a21182359b->leave($__internal_e3e6e88e4dc41648911b8adb7f985201b6d3d12894cad7a1a660b3a21182359b_prof);

    }

    // line 50
    public function block_ongletArticle($context, array $blocks = array())
    {
        $__internal_6fa8366904a036380e525dcb488334898155c2ac40d235ea48a9b72c447f86ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa8366904a036380e525dcb488334898155c2ac40d235ea48a9b72c447f86ad->enter($__internal_6fa8366904a036380e525dcb488334898155c2ac40d235ea48a9b72c447f86ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        $__internal_92f6de41fa20120cf078f5dffa8da5e6bc7ce1e08d3748b8345aedb1f705d7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f6de41fa20120cf078f5dffa8da5e6bc7ce1e08d3748b8345aedb1f705d7e4->enter($__internal_92f6de41fa20120cf078f5dffa8da5e6bc7ce1e08d3748b8345aedb1f705d7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        echo " ";
        
        $__internal_92f6de41fa20120cf078f5dffa8da5e6bc7ce1e08d3748b8345aedb1f705d7e4->leave($__internal_92f6de41fa20120cf078f5dffa8da5e6bc7ce1e08d3748b8345aedb1f705d7e4_prof);

        
        $__internal_6fa8366904a036380e525dcb488334898155c2ac40d235ea48a9b72c447f86ad->leave($__internal_6fa8366904a036380e525dcb488334898155c2ac40d235ea48a9b72c447f86ad_prof);

    }

    // line 51
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_e6123b1ccefdb03fd3c0cfe43124362c65f096778d1e9195426928ac0488d452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6123b1ccefdb03fd3c0cfe43124362c65f096778d1e9195426928ac0488d452->enter($__internal_e6123b1ccefdb03fd3c0cfe43124362c65f096778d1e9195426928ac0488d452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_00213a67ea9caa978f771364de30005fc30c10a89f29f1b488d965410c7e8cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00213a67ea9caa978f771364de30005fc30c10a89f29f1b488d965410c7e8cec->enter($__internal_00213a67ea9caa978f771364de30005fc30c10a89f29f1b488d965410c7e8cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_00213a67ea9caa978f771364de30005fc30c10a89f29f1b488d965410c7e8cec->leave($__internal_00213a67ea9caa978f771364de30005fc30c10a89f29f1b488d965410c7e8cec_prof);

        
        $__internal_e6123b1ccefdb03fd3c0cfe43124362c65f096778d1e9195426928ac0488d452->leave($__internal_e6123b1ccefdb03fd3c0cfe43124362c65f096778d1e9195426928ac0488d452_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_66fd86e26f0e8f58bebf58474ad196231a9777ded36bcd818c3097e09bd413c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fd86e26f0e8f58bebf58474ad196231a9777ded36bcd818c3097e09bd413c6->enter($__internal_66fd86e26f0e8f58bebf58474ad196231a9777ded36bcd818c3097e09bd413c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bffba042058b0431fd9bff9c2cffff7d28a79278b493775f76ac7b3193b39529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffba042058b0431fd9bff9c2cffff7d28a79278b493775f76ac7b3193b39529->enter($__internal_bffba042058b0431fd9bff9c2cffff7d28a79278b493775f76ac7b3193b39529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
    ";
        
        $__internal_bffba042058b0431fd9bff9c2cffff7d28a79278b493775f76ac7b3193b39529->leave($__internal_bffba042058b0431fd9bff9c2cffff7d28a79278b493775f76ac7b3193b39529_prof);

        
        $__internal_66fd86e26f0e8f58bebf58474ad196231a9777ded36bcd818c3097e09bd413c6->leave($__internal_66fd86e26f0e8f58bebf58474ad196231a9777ded36bcd818c3097e09bd413c6_prof);

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
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

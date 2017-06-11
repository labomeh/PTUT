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
        $__internal_74d24af8801522d5bf4ca849494ef655fa9a5039311f698195e59840004e1271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d24af8801522d5bf4ca849494ef655fa9a5039311f698195e59840004e1271->enter($__internal_74d24af8801522d5bf4ca849494ef655fa9a5039311f698195e59840004e1271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_d372846b707ef39896f8629c68972310363bd074d1e7f957cc6d60c94b9255a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d372846b707ef39896f8629c68972310363bd074d1e7f957cc6d60c94b9255a8->enter($__internal_d372846b707ef39896f8629c68972310363bd074d1e7f957cc6d60c94b9255a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        
        $__internal_74d24af8801522d5bf4ca849494ef655fa9a5039311f698195e59840004e1271->leave($__internal_74d24af8801522d5bf4ca849494ef655fa9a5039311f698195e59840004e1271_prof);

        
        $__internal_d372846b707ef39896f8629c68972310363bd074d1e7f957cc6d60c94b9255a8->leave($__internal_d372846b707ef39896f8629c68972310363bd074d1e7f957cc6d60c94b9255a8_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_cd95313d00ffece386a04ce8ed8bc3f4023de58fc040ac83f657c4d98ae8f868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd95313d00ffece386a04ce8ed8bc3f4023de58fc040ac83f657c4d98ae8f868->enter($__internal_cd95313d00ffece386a04ce8ed8bc3f4023de58fc040ac83f657c4d98ae8f868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_18a2c709a9d889c97fcdcfac97cb74359d166b8f16fc32213692de3e58bc83f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a2c709a9d889c97fcdcfac97cb74359d166b8f16fc32213692de3e58bc83f0->enter($__internal_18a2c709a9d889c97fcdcfac97cb74359d166b8f16fc32213692de3e58bc83f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_18a2c709a9d889c97fcdcfac97cb74359d166b8f16fc32213692de3e58bc83f0->leave($__internal_18a2c709a9d889c97fcdcfac97cb74359d166b8f16fc32213692de3e58bc83f0_prof);

        
        $__internal_cd95313d00ffece386a04ce8ed8bc3f4023de58fc040ac83f657c4d98ae8f868->leave($__internal_cd95313d00ffece386a04ce8ed8bc3f4023de58fc040ac83f657c4d98ae8f868_prof);

    }

    // line 49
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_35c92e6ec5f9cc1a0b0f5bcc4dcc20c81a23bca852e37d41d8b338c5f97bf6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c92e6ec5f9cc1a0b0f5bcc4dcc20c81a23bca852e37d41d8b338c5f97bf6a4->enter($__internal_35c92e6ec5f9cc1a0b0f5bcc4dcc20c81a23bca852e37d41d8b338c5f97bf6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_8b1aad7903af0834b4447ec84496be8aff419654dd89067395fa897faa2d4398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1aad7903af0834b4447ec84496be8aff419654dd89067395fa897faa2d4398->enter($__internal_8b1aad7903af0834b4447ec84496be8aff419654dd89067395fa897faa2d4398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_8b1aad7903af0834b4447ec84496be8aff419654dd89067395fa897faa2d4398->leave($__internal_8b1aad7903af0834b4447ec84496be8aff419654dd89067395fa897faa2d4398_prof);

        
        $__internal_35c92e6ec5f9cc1a0b0f5bcc4dcc20c81a23bca852e37d41d8b338c5f97bf6a4->leave($__internal_35c92e6ec5f9cc1a0b0f5bcc4dcc20c81a23bca852e37d41d8b338c5f97bf6a4_prof);

    }

    // line 50
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_12e8e77874977aa21ab7f3439aea9dcd51ac4401d6ed40ab44a068e04e18a082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e8e77874977aa21ab7f3439aea9dcd51ac4401d6ed40ab44a068e04e18a082->enter($__internal_12e8e77874977aa21ab7f3439aea9dcd51ac4401d6ed40ab44a068e04e18a082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_db46bf293aa9b5d1ebe38810b98bdbe1ff04675e3f198c114803019c7144aca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db46bf293aa9b5d1ebe38810b98bdbe1ff04675e3f198c114803019c7144aca9->enter($__internal_db46bf293aa9b5d1ebe38810b98bdbe1ff04675e3f198c114803019c7144aca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_db46bf293aa9b5d1ebe38810b98bdbe1ff04675e3f198c114803019c7144aca9->leave($__internal_db46bf293aa9b5d1ebe38810b98bdbe1ff04675e3f198c114803019c7144aca9_prof);

        
        $__internal_12e8e77874977aa21ab7f3439aea9dcd51ac4401d6ed40ab44a068e04e18a082->leave($__internal_12e8e77874977aa21ab7f3439aea9dcd51ac4401d6ed40ab44a068e04e18a082_prof);

    }

    // line 51
    public function block_ongletArticle($context, array $blocks = array())
    {
        $__internal_7803db00d0b3a473e0236d3df32626b067be6079ac9103aae2b606c6141c8663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7803db00d0b3a473e0236d3df32626b067be6079ac9103aae2b606c6141c8663->enter($__internal_7803db00d0b3a473e0236d3df32626b067be6079ac9103aae2b606c6141c8663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        $__internal_a1d003cef621240f4751ff273c20cf79fec9a880ef897db1cf0911aecb144327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d003cef621240f4751ff273c20cf79fec9a880ef897db1cf0911aecb144327->enter($__internal_a1d003cef621240f4751ff273c20cf79fec9a880ef897db1cf0911aecb144327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        echo " ";
        
        $__internal_a1d003cef621240f4751ff273c20cf79fec9a880ef897db1cf0911aecb144327->leave($__internal_a1d003cef621240f4751ff273c20cf79fec9a880ef897db1cf0911aecb144327_prof);

        
        $__internal_7803db00d0b3a473e0236d3df32626b067be6079ac9103aae2b606c6141c8663->leave($__internal_7803db00d0b3a473e0236d3df32626b067be6079ac9103aae2b606c6141c8663_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_dfdb78b204fa52d29bc8146b5066f8ccc486bc6c2e1652795a15c01162eb7904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdb78b204fa52d29bc8146b5066f8ccc486bc6c2e1652795a15c01162eb7904->enter($__internal_dfdb78b204fa52d29bc8146b5066f8ccc486bc6c2e1652795a15c01162eb7904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_0f423192b5abe278590756f126547e69539a0fccd79a9587fe276be3bbd4031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f423192b5abe278590756f126547e69539a0fccd79a9587fe276be3bbd4031f->enter($__internal_0f423192b5abe278590756f126547e69539a0fccd79a9587fe276be3bbd4031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_0f423192b5abe278590756f126547e69539a0fccd79a9587fe276be3bbd4031f->leave($__internal_0f423192b5abe278590756f126547e69539a0fccd79a9587fe276be3bbd4031f_prof);

        
        $__internal_dfdb78b204fa52d29bc8146b5066f8ccc486bc6c2e1652795a15c01162eb7904->leave($__internal_dfdb78b204fa52d29bc8146b5066f8ccc486bc6c2e1652795a15c01162eb7904_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_34e6e4b66cb76f6ccb1d145dd3fe75b2167e28dade78d2ba42bed819a5cda520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e6e4b66cb76f6ccb1d145dd3fe75b2167e28dade78d2ba42bed819a5cda520->enter($__internal_34e6e4b66cb76f6ccb1d145dd3fe75b2167e28dade78d2ba42bed819a5cda520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8220d2e7cedfb83d379d5ee4c835378a3310042dc2c562dd37c225d975e59fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8220d2e7cedfb83d379d5ee4c835378a3310042dc2c562dd37c225d975e59fa7->enter($__internal_8220d2e7cedfb83d379d5ee4c835378a3310042dc2c562dd37c225d975e59fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_8220d2e7cedfb83d379d5ee4c835378a3310042dc2c562dd37c225d975e59fa7->leave($__internal_8220d2e7cedfb83d379d5ee4c835378a3310042dc2c562dd37c225d975e59fa7_prof);

        
        $__internal_34e6e4b66cb76f6ccb1d145dd3fe75b2167e28dade78d2ba42bed819a5cda520->leave($__internal_34e6e4b66cb76f6ccb1d145dd3fe75b2167e28dade78d2ba42bed819a5cda520_prof);

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
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

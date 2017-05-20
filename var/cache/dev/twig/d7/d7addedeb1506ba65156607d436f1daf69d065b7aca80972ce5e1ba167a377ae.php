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
        $__internal_6d249e273836355d04f6d94ba23afdc4360d8def7c012b64f43edbe0a23c22d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d249e273836355d04f6d94ba23afdc4360d8def7c012b64f43edbe0a23c22d1->enter($__internal_6d249e273836355d04f6d94ba23afdc4360d8def7c012b64f43edbe0a23c22d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_bf6dcd52b7ba9c5bb046fe33c5130c3ac882ecef768a90e803514e71f2e8341f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6dcd52b7ba9c5bb046fe33c5130c3ac882ecef768a90e803514e71f2e8341f->enter($__internal_bf6dcd52b7ba9c5bb046fe33c5130c3ac882ecef768a90e803514e71f2e8341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        
        $__internal_6d249e273836355d04f6d94ba23afdc4360d8def7c012b64f43edbe0a23c22d1->leave($__internal_6d249e273836355d04f6d94ba23afdc4360d8def7c012b64f43edbe0a23c22d1_prof);

        
        $__internal_bf6dcd52b7ba9c5bb046fe33c5130c3ac882ecef768a90e803514e71f2e8341f->leave($__internal_bf6dcd52b7ba9c5bb046fe33c5130c3ac882ecef768a90e803514e71f2e8341f_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_8c8b22a4d5e3dba7cdbcc1415a1f60cc4fa233c67d0bb2ed3b30fa8ab5ef9d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8b22a4d5e3dba7cdbcc1415a1f60cc4fa233c67d0bb2ed3b30fa8ab5ef9d1b->enter($__internal_8c8b22a4d5e3dba7cdbcc1415a1f60cc4fa233c67d0bb2ed3b30fa8ab5ef9d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_56f33452ae7eb5310a833ac93cff2cbe1105c964a498c8d40c3ee4cb95875036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f33452ae7eb5310a833ac93cff2cbe1105c964a498c8d40c3ee4cb95875036->enter($__internal_56f33452ae7eb5310a833ac93cff2cbe1105c964a498c8d40c3ee4cb95875036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_56f33452ae7eb5310a833ac93cff2cbe1105c964a498c8d40c3ee4cb95875036->leave($__internal_56f33452ae7eb5310a833ac93cff2cbe1105c964a498c8d40c3ee4cb95875036_prof);

        
        $__internal_8c8b22a4d5e3dba7cdbcc1415a1f60cc4fa233c67d0bb2ed3b30fa8ab5ef9d1b->leave($__internal_8c8b22a4d5e3dba7cdbcc1415a1f60cc4fa233c67d0bb2ed3b30fa8ab5ef9d1b_prof);

    }

    // line 49
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_b02485d4ab8237541465543501e39c57ee57448dc5d66a629a93300ef7045a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02485d4ab8237541465543501e39c57ee57448dc5d66a629a93300ef7045a78->enter($__internal_b02485d4ab8237541465543501e39c57ee57448dc5d66a629a93300ef7045a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_12e1b5865ab5c4e7f5cdc6226246005d74b8baf6ec3c92e223f81aa4a9263b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e1b5865ab5c4e7f5cdc6226246005d74b8baf6ec3c92e223f81aa4a9263b15->enter($__internal_12e1b5865ab5c4e7f5cdc6226246005d74b8baf6ec3c92e223f81aa4a9263b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_12e1b5865ab5c4e7f5cdc6226246005d74b8baf6ec3c92e223f81aa4a9263b15->leave($__internal_12e1b5865ab5c4e7f5cdc6226246005d74b8baf6ec3c92e223f81aa4a9263b15_prof);

        
        $__internal_b02485d4ab8237541465543501e39c57ee57448dc5d66a629a93300ef7045a78->leave($__internal_b02485d4ab8237541465543501e39c57ee57448dc5d66a629a93300ef7045a78_prof);

    }

    // line 50
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_6608815211b822f888b470b5861ac6a3460445490af9215d9014da4dcf460b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6608815211b822f888b470b5861ac6a3460445490af9215d9014da4dcf460b05->enter($__internal_6608815211b822f888b470b5861ac6a3460445490af9215d9014da4dcf460b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_b65c5eb4abf141a10888dbbd099d3468341759d4981d9dc2926205373a05368a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65c5eb4abf141a10888dbbd099d3468341759d4981d9dc2926205373a05368a->enter($__internal_b65c5eb4abf141a10888dbbd099d3468341759d4981d9dc2926205373a05368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_b65c5eb4abf141a10888dbbd099d3468341759d4981d9dc2926205373a05368a->leave($__internal_b65c5eb4abf141a10888dbbd099d3468341759d4981d9dc2926205373a05368a_prof);

        
        $__internal_6608815211b822f888b470b5861ac6a3460445490af9215d9014da4dcf460b05->leave($__internal_6608815211b822f888b470b5861ac6a3460445490af9215d9014da4dcf460b05_prof);

    }

    // line 51
    public function block_ongletArticle($context, array $blocks = array())
    {
        $__internal_a01ad95f377284f9745ad153bc0a9d68c621fc87a7ac265709fa5e01b33d43de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01ad95f377284f9745ad153bc0a9d68c621fc87a7ac265709fa5e01b33d43de->enter($__internal_a01ad95f377284f9745ad153bc0a9d68c621fc87a7ac265709fa5e01b33d43de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        $__internal_11f14d82e9f2f069e68ac62cb1389e1ac97657eaf3e11ce1379ebfc7ebd430ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f14d82e9f2f069e68ac62cb1389e1ac97657eaf3e11ce1379ebfc7ebd430ef->enter($__internal_11f14d82e9f2f069e68ac62cb1389e1ac97657eaf3e11ce1379ebfc7ebd430ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletArticle"));

        echo " ";
        
        $__internal_11f14d82e9f2f069e68ac62cb1389e1ac97657eaf3e11ce1379ebfc7ebd430ef->leave($__internal_11f14d82e9f2f069e68ac62cb1389e1ac97657eaf3e11ce1379ebfc7ebd430ef_prof);

        
        $__internal_a01ad95f377284f9745ad153bc0a9d68c621fc87a7ac265709fa5e01b33d43de->leave($__internal_a01ad95f377284f9745ad153bc0a9d68c621fc87a7ac265709fa5e01b33d43de_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_fc029f05d1c520b1f9f7691a7f6793b117df1d384a11b3427c5d2124c782ee14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc029f05d1c520b1f9f7691a7f6793b117df1d384a11b3427c5d2124c782ee14->enter($__internal_fc029f05d1c520b1f9f7691a7f6793b117df1d384a11b3427c5d2124c782ee14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_b86fd9a463b3229da123aa8175b9f1549c0429c581919ef2d22f4c16c5f0e3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86fd9a463b3229da123aa8175b9f1549c0429c581919ef2d22f4c16c5f0e3f5->enter($__internal_b86fd9a463b3229da123aa8175b9f1549c0429c581919ef2d22f4c16c5f0e3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_b86fd9a463b3229da123aa8175b9f1549c0429c581919ef2d22f4c16c5f0e3f5->leave($__internal_b86fd9a463b3229da123aa8175b9f1549c0429c581919ef2d22f4c16c5f0e3f5_prof);

        
        $__internal_fc029f05d1c520b1f9f7691a7f6793b117df1d384a11b3427c5d2124c782ee14->leave($__internal_fc029f05d1c520b1f9f7691a7f6793b117df1d384a11b3427c5d2124c782ee14_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2ee9780213c18fa0aeac2762c326c8b86832bdcac2a82db1a7ad70ededbc95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ee9780213c18fa0aeac2762c326c8b86832bdcac2a82db1a7ad70ededbc95e->enter($__internal_a2ee9780213c18fa0aeac2762c326c8b86832bdcac2a82db1a7ad70ededbc95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_504223e4ef2fd9d313d7696ed640cd4e095ccc61cbcf5e52b3f9ae2904a8fa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504223e4ef2fd9d313d7696ed640cd4e095ccc61cbcf5e52b3f9ae2904a8fa6f->enter($__internal_504223e4ef2fd9d313d7696ed640cd4e095ccc61cbcf5e52b3f9ae2904a8fa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_504223e4ef2fd9d313d7696ed640cd4e095ccc61cbcf5e52b3f9ae2904a8fa6f->leave($__internal_504223e4ef2fd9d313d7696ed640cd4e095ccc61cbcf5e52b3f9ae2904a8fa6f_prof);

        
        $__internal_a2ee9780213c18fa0aeac2762c326c8b86832bdcac2a82db1a7ad70ededbc95e->leave($__internal_a2ee9780213c18fa0aeac2762c326c8b86832bdcac2a82db1a7ad70ededbc95e_prof);

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
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

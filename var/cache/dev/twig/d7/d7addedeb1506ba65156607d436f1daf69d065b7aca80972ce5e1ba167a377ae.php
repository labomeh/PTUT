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
        $__internal_b850f0070519cb5faaa891dad57579fdbb30250d9ca879e129f4de5cccfc1be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b850f0070519cb5faaa891dad57579fdbb30250d9ca879e129f4de5cccfc1be4->enter($__internal_b850f0070519cb5faaa891dad57579fdbb30250d9ca879e129f4de5cccfc1be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_73d62fd6474f61b1cf1fb66bcb1ceb4f0279ba20587551d99a64f508a97b5d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d62fd6474f61b1cf1fb66bcb1ceb4f0279ba20587551d99a64f508a97b5d8f->enter($__internal_73d62fd6474f61b1cf1fb66bcb1ceb4f0279ba20587551d99a64f508a97b5d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
   <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">
    ";
        // line 10
        $this->displayBlock('include', $context, $blocks);
        // line 11
        echo "    <title>PTUT</title>
    <link href=\"bundles/ptutplatform/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/animate.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/main.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"bundles/ptutplatform/images/ico/favicon.ico\">
    
    <script src=\"../ckeditor/ckeditor.js\"></script>

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
                
              <a class=\"navbar-brand\" href=\"#\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 45
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"#\">Home</a></li>
                <li class=\"";
        // line 46
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"./plateform/article_creator\">Editions</a></li>
                <li class=\"dropdown ";
        // line 47
        $this->displayBlock('ongletCompte', $context, $blocks);
        echo "\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle = \"dropdown\" role=\"button\">Mon compte<span class=\"icon-angle-down\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Se connecter</a></li>
                        <li><a href=\"#\">S'inscrire</a></li>
                    </ul>
                </li>
                <li class=\"";
        // line 53
        $this->displayBlock('ongletAbout', $context, $blocks);
        echo "\"><a href=\"#about\">About</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
    
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        
    <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"col-sm-6\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
        </div>
        <div class=\"col-sm-6\">
                    <ul class=\"pull-right\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                        <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
                    </ul>
                </div>
    </footer> 
    <script src=\"bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"bundles/ptutplatform/js/main.js\"></script>
</body>
</html>";
        
        $__internal_b850f0070519cb5faaa891dad57579fdbb30250d9ca879e129f4de5cccfc1be4->leave($__internal_b850f0070519cb5faaa891dad57579fdbb30250d9ca879e129f4de5cccfc1be4_prof);

        
        $__internal_73d62fd6474f61b1cf1fb66bcb1ceb4f0279ba20587551d99a64f508a97b5d8f->leave($__internal_73d62fd6474f61b1cf1fb66bcb1ceb4f0279ba20587551d99a64f508a97b5d8f_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_2dbb9e9d1a84225afedd2008b36eed74c7116b09596086099bc65842c4995d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dbb9e9d1a84225afedd2008b36eed74c7116b09596086099bc65842c4995d81->enter($__internal_2dbb9e9d1a84225afedd2008b36eed74c7116b09596086099bc65842c4995d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_9ff11b7e386e8fd2df1457307dccfa9110d6edcfa2895d01dbcff4bdec412562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff11b7e386e8fd2df1457307dccfa9110d6edcfa2895d01dbcff4bdec412562->enter($__internal_9ff11b7e386e8fd2df1457307dccfa9110d6edcfa2895d01dbcff4bdec412562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_9ff11b7e386e8fd2df1457307dccfa9110d6edcfa2895d01dbcff4bdec412562->leave($__internal_9ff11b7e386e8fd2df1457307dccfa9110d6edcfa2895d01dbcff4bdec412562_prof);

        
        $__internal_2dbb9e9d1a84225afedd2008b36eed74c7116b09596086099bc65842c4995d81->leave($__internal_2dbb9e9d1a84225afedd2008b36eed74c7116b09596086099bc65842c4995d81_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_e28d0df03dd6d08011d50e4bf0d2ce9e4b1b132b49dbf9e1bce342dcc3b4001c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28d0df03dd6d08011d50e4bf0d2ce9e4b1b132b49dbf9e1bce342dcc3b4001c->enter($__internal_e28d0df03dd6d08011d50e4bf0d2ce9e4b1b132b49dbf9e1bce342dcc3b4001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_f692b1f4b5329a43e94acffda7250ee91edf2c79d219ff827b22b29437810030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f692b1f4b5329a43e94acffda7250ee91edf2c79d219ff827b22b29437810030->enter($__internal_f692b1f4b5329a43e94acffda7250ee91edf2c79d219ff827b22b29437810030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_f692b1f4b5329a43e94acffda7250ee91edf2c79d219ff827b22b29437810030->leave($__internal_f692b1f4b5329a43e94acffda7250ee91edf2c79d219ff827b22b29437810030_prof);

        
        $__internal_e28d0df03dd6d08011d50e4bf0d2ce9e4b1b132b49dbf9e1bce342dcc3b4001c->leave($__internal_e28d0df03dd6d08011d50e4bf0d2ce9e4b1b132b49dbf9e1bce342dcc3b4001c_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_7c8d1e88d8a2cbe3f8b067b40c5527488ca13c16246d9098ae82e02075103ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8d1e88d8a2cbe3f8b067b40c5527488ca13c16246d9098ae82e02075103ae5->enter($__internal_7c8d1e88d8a2cbe3f8b067b40c5527488ca13c16246d9098ae82e02075103ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_ebcecc22dad3b471d81b4caf31d501a1aa8efd14eb5e5d88ba5a3540d9ff058e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebcecc22dad3b471d81b4caf31d501a1aa8efd14eb5e5d88ba5a3540d9ff058e->enter($__internal_ebcecc22dad3b471d81b4caf31d501a1aa8efd14eb5e5d88ba5a3540d9ff058e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_ebcecc22dad3b471d81b4caf31d501a1aa8efd14eb5e5d88ba5a3540d9ff058e->leave($__internal_ebcecc22dad3b471d81b4caf31d501a1aa8efd14eb5e5d88ba5a3540d9ff058e_prof);

        
        $__internal_7c8d1e88d8a2cbe3f8b067b40c5527488ca13c16246d9098ae82e02075103ae5->leave($__internal_7c8d1e88d8a2cbe3f8b067b40c5527488ca13c16246d9098ae82e02075103ae5_prof);

    }

    // line 47
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_ae428ea91de6767af91c166e4a2e405307599ce35d448a69b52224236f048e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae428ea91de6767af91c166e4a2e405307599ce35d448a69b52224236f048e08->enter($__internal_ae428ea91de6767af91c166e4a2e405307599ce35d448a69b52224236f048e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_5afabae8ea6c17b18e315e13fc43a793beda2a7cc162e643461d5335c403f6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afabae8ea6c17b18e315e13fc43a793beda2a7cc162e643461d5335c403f6fc->enter($__internal_5afabae8ea6c17b18e315e13fc43a793beda2a7cc162e643461d5335c403f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_5afabae8ea6c17b18e315e13fc43a793beda2a7cc162e643461d5335c403f6fc->leave($__internal_5afabae8ea6c17b18e315e13fc43a793beda2a7cc162e643461d5335c403f6fc_prof);

        
        $__internal_ae428ea91de6767af91c166e4a2e405307599ce35d448a69b52224236f048e08->leave($__internal_ae428ea91de6767af91c166e4a2e405307599ce35d448a69b52224236f048e08_prof);

    }

    // line 53
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_286e9f96d04c53ce7a2c88237e9986aaf74d3c0f172a90c07930161b35e967a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286e9f96d04c53ce7a2c88237e9986aaf74d3c0f172a90c07930161b35e967a5->enter($__internal_286e9f96d04c53ce7a2c88237e9986aaf74d3c0f172a90c07930161b35e967a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_41527e041af430b1d4c3fb4a4db24eaf3c74a572e3d6ce83f491dc4f87639b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41527e041af430b1d4c3fb4a4db24eaf3c74a572e3d6ce83f491dc4f87639b96->enter($__internal_41527e041af430b1d4c3fb4a4db24eaf3c74a572e3d6ce83f491dc4f87639b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_41527e041af430b1d4c3fb4a4db24eaf3c74a572e3d6ce83f491dc4f87639b96->leave($__internal_41527e041af430b1d4c3fb4a4db24eaf3c74a572e3d6ce83f491dc4f87639b96_prof);

        
        $__internal_286e9f96d04c53ce7a2c88237e9986aaf74d3c0f172a90c07930161b35e967a5->leave($__internal_286e9f96d04c53ce7a2c88237e9986aaf74d3c0f172a90c07930161b35e967a5_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e31d519b95e4dbf2dd0a2ef2865f450481c3aab3e3bbf1880e5183583d34021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e31d519b95e4dbf2dd0a2ef2865f450481c3aab3e3bbf1880e5183583d34021->enter($__internal_7e31d519b95e4dbf2dd0a2ef2865f450481c3aab3e3bbf1880e5183583d34021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17b1f1bb07504cb6fb576814b26d189bb6bdfc2ef6955d7239953198f3a973ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b1f1bb07504cb6fb576814b26d189bb6bdfc2ef6955d7239953198f3a973ad->enter($__internal_17b1f1bb07504cb6fb576814b26d189bb6bdfc2ef6955d7239953198f3a973ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    ";
        
        $__internal_17b1f1bb07504cb6fb576814b26d189bb6bdfc2ef6955d7239953198f3a973ad->leave($__internal_17b1f1bb07504cb6fb576814b26d189bb6bdfc2ef6955d7239953198f3a973ad_prof);

        
        $__internal_7e31d519b95e4dbf2dd0a2ef2865f450481c3aab3e3bbf1880e5183583d34021->leave($__internal_7e31d519b95e4dbf2dd0a2ef2865f450481c3aab3e3bbf1880e5183583d34021_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 61,  229 => 60,  211 => 53,  193 => 47,  175 => 46,  157 => 45,  139 => 10,  109 => 63,  107 => 60,  97 => 53,  88 => 47,  84 => 46,  80 => 45,  44 => 11,  42 => 10,  31 => 1,);
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
    {% block include %} {% endblock %}
    <title>PTUT</title>
    <link href=\"bundles/ptutplatform/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/animate.css\" rel=\"stylesheet\">
    <link href=\"bundles/ptutplatform/css/main.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"bundles/ptutplatform/images/ico/favicon.ico\">
    
    <script src=\"../ckeditor/ckeditor.js\"></script>

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
                
              <a class=\"navbar-brand\" href=\"#\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"#\">Home</a></li>
                <li class=\"{% block ongletEditions %} {% endblock %}\"><a href=\"./plateform/article_creator\">Editions</a></li>
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
        <div class=\"col-sm-6\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
        </div>
        <div class=\"col-sm-6\">
                    <ul class=\"pull-right\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                        <li><a id=\"gototop\" class=\"gototop\" href=\"#\"><i class=\"icon-chevron-up\"></i></a></li><!--#gototop-->
                    </ul>
                </div>
    </footer> 
    <script src=\"bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"bundles/ptutplatform/js/main.js\"></script>
</body>
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

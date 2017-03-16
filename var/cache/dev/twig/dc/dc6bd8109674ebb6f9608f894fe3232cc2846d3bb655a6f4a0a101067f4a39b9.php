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
        $__internal_fa64dd846720998be683f84bbe2edfaff24773d47b9080db23ff77d7ae0db45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa64dd846720998be683f84bbe2edfaff24773d47b9080db23ff77d7ae0db45a->enter($__internal_fa64dd846720998be683f84bbe2edfaff24773d47b9080db23ff77d7ae0db45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_0e7abc6c939d9c26055878dced14fd6a813455d7ff9bdeeafe475bcee800efed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7abc6c939d9c26055878dced14fd6a813455d7ff9bdeeafe475bcee800efed->enter($__internal_0e7abc6c939d9c26055878dced14fd6a813455d7ff9bdeeafe475bcee800efed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        
        $__internal_fa64dd846720998be683f84bbe2edfaff24773d47b9080db23ff77d7ae0db45a->leave($__internal_fa64dd846720998be683f84bbe2edfaff24773d47b9080db23ff77d7ae0db45a_prof);

        
        $__internal_0e7abc6c939d9c26055878dced14fd6a813455d7ff9bdeeafe475bcee800efed->leave($__internal_0e7abc6c939d9c26055878dced14fd6a813455d7ff9bdeeafe475bcee800efed_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_5be62ac39d8c39e25f31654ff48d051bebbe944231d865dfc51d23166b0517bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be62ac39d8c39e25f31654ff48d051bebbe944231d865dfc51d23166b0517bd->enter($__internal_5be62ac39d8c39e25f31654ff48d051bebbe944231d865dfc51d23166b0517bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_e8a98145573fb8be6cf62bad5391cc8d36f364b29d6cd87499ad08f8ef90c162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a98145573fb8be6cf62bad5391cc8d36f364b29d6cd87499ad08f8ef90c162->enter($__internal_e8a98145573fb8be6cf62bad5391cc8d36f364b29d6cd87499ad08f8ef90c162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_e8a98145573fb8be6cf62bad5391cc8d36f364b29d6cd87499ad08f8ef90c162->leave($__internal_e8a98145573fb8be6cf62bad5391cc8d36f364b29d6cd87499ad08f8ef90c162_prof);

        
        $__internal_5be62ac39d8c39e25f31654ff48d051bebbe944231d865dfc51d23166b0517bd->leave($__internal_5be62ac39d8c39e25f31654ff48d051bebbe944231d865dfc51d23166b0517bd_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_91051a8d2c40e7224a51a194e7b7f07230dff5f055523daf69d3a890cb996f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91051a8d2c40e7224a51a194e7b7f07230dff5f055523daf69d3a890cb996f76->enter($__internal_91051a8d2c40e7224a51a194e7b7f07230dff5f055523daf69d3a890cb996f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_7400f9822aa6c352b4fd7d7f088a5c001f6fee857916db256486d232b2d81ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7400f9822aa6c352b4fd7d7f088a5c001f6fee857916db256486d232b2d81ac9->enter($__internal_7400f9822aa6c352b4fd7d7f088a5c001f6fee857916db256486d232b2d81ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_7400f9822aa6c352b4fd7d7f088a5c001f6fee857916db256486d232b2d81ac9->leave($__internal_7400f9822aa6c352b4fd7d7f088a5c001f6fee857916db256486d232b2d81ac9_prof);

        
        $__internal_91051a8d2c40e7224a51a194e7b7f07230dff5f055523daf69d3a890cb996f76->leave($__internal_91051a8d2c40e7224a51a194e7b7f07230dff5f055523daf69d3a890cb996f76_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_093e8064f1e660e074638c264525ebd5d2ce4a84c70b22b7959aca151161d00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093e8064f1e660e074638c264525ebd5d2ce4a84c70b22b7959aca151161d00c->enter($__internal_093e8064f1e660e074638c264525ebd5d2ce4a84c70b22b7959aca151161d00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_4d2505e9c04df9d2fb046067b87ab651c2cebf32de4cb978a0e56fd27151efbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2505e9c04df9d2fb046067b87ab651c2cebf32de4cb978a0e56fd27151efbd->enter($__internal_4d2505e9c04df9d2fb046067b87ab651c2cebf32de4cb978a0e56fd27151efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_4d2505e9c04df9d2fb046067b87ab651c2cebf32de4cb978a0e56fd27151efbd->leave($__internal_4d2505e9c04df9d2fb046067b87ab651c2cebf32de4cb978a0e56fd27151efbd_prof);

        
        $__internal_093e8064f1e660e074638c264525ebd5d2ce4a84c70b22b7959aca151161d00c->leave($__internal_093e8064f1e660e074638c264525ebd5d2ce4a84c70b22b7959aca151161d00c_prof);

    }

    // line 47
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_573fecd8d3b1e19fee7c0c2aa951184c81d18e2890a57f7b454434cefe1a475b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573fecd8d3b1e19fee7c0c2aa951184c81d18e2890a57f7b454434cefe1a475b->enter($__internal_573fecd8d3b1e19fee7c0c2aa951184c81d18e2890a57f7b454434cefe1a475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_9b03f607dca1afffc28bf0efa4127009b2a92dfc8601d0dd01fa4ed5a52c241f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b03f607dca1afffc28bf0efa4127009b2a92dfc8601d0dd01fa4ed5a52c241f->enter($__internal_9b03f607dca1afffc28bf0efa4127009b2a92dfc8601d0dd01fa4ed5a52c241f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_9b03f607dca1afffc28bf0efa4127009b2a92dfc8601d0dd01fa4ed5a52c241f->leave($__internal_9b03f607dca1afffc28bf0efa4127009b2a92dfc8601d0dd01fa4ed5a52c241f_prof);

        
        $__internal_573fecd8d3b1e19fee7c0c2aa951184c81d18e2890a57f7b454434cefe1a475b->leave($__internal_573fecd8d3b1e19fee7c0c2aa951184c81d18e2890a57f7b454434cefe1a475b_prof);

    }

    // line 53
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_393fd25cdd0628480b5da2a8f2125223d9d30bb41540f51a7972f97001b8a319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393fd25cdd0628480b5da2a8f2125223d9d30bb41540f51a7972f97001b8a319->enter($__internal_393fd25cdd0628480b5da2a8f2125223d9d30bb41540f51a7972f97001b8a319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_a8943b5dddd31c0dfd388e9324f6003a6586bc03ae3c6bd5fd5ea97c8e3e15f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8943b5dddd31c0dfd388e9324f6003a6586bc03ae3c6bd5fd5ea97c8e3e15f3->enter($__internal_a8943b5dddd31c0dfd388e9324f6003a6586bc03ae3c6bd5fd5ea97c8e3e15f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_a8943b5dddd31c0dfd388e9324f6003a6586bc03ae3c6bd5fd5ea97c8e3e15f3->leave($__internal_a8943b5dddd31c0dfd388e9324f6003a6586bc03ae3c6bd5fd5ea97c8e3e15f3_prof);

        
        $__internal_393fd25cdd0628480b5da2a8f2125223d9d30bb41540f51a7972f97001b8a319->leave($__internal_393fd25cdd0628480b5da2a8f2125223d9d30bb41540f51a7972f97001b8a319_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_b01e7cba96ee57ccdf7516de06e968236450c3cffae5f05f57a1edf31c86907c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01e7cba96ee57ccdf7516de06e968236450c3cffae5f05f57a1edf31c86907c->enter($__internal_b01e7cba96ee57ccdf7516de06e968236450c3cffae5f05f57a1edf31c86907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d841a8c2d200c23af55c4755b7dc7e4da9cffeec097c260a3d6190fc887c8a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d841a8c2d200c23af55c4755b7dc7e4da9cffeec097c260a3d6190fc887c8a95->enter($__internal_d841a8c2d200c23af55c4755b7dc7e4da9cffeec097c260a3d6190fc887c8a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    ";
        
        $__internal_d841a8c2d200c23af55c4755b7dc7e4da9cffeec097c260a3d6190fc887c8a95->leave($__internal_d841a8c2d200c23af55c4755b7dc7e4da9cffeec097c260a3d6190fc887c8a95_prof);

        
        $__internal_b01e7cba96ee57ccdf7516de06e968236450c3cffae5f05f57a1edf31c86907c->leave($__internal_b01e7cba96ee57ccdf7516de06e968236450c3cffae5f05f57a1edf31c86907c_prof);

    }

    public function getTemplateName()
    {
        return "@PTUTPlatform/Platform/layout.html.twig";
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
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

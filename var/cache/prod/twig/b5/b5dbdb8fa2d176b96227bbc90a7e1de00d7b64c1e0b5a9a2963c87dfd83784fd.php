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
            'ongletCompte' => array($this, 'block_ongletCompte'),
            'ongletAbout' => array($this, 'block_ongletAbout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c2cfda3acec8066a106f9e8ac8becf84a25399d2d609e0af3d157acaabaf056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2cfda3acec8066a106f9e8ac8becf84a25399d2d609e0af3d157acaabaf056->enter($__internal_7c2cfda3acec8066a106f9e8ac8becf84a25399d2d609e0af3d157acaabaf056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
                
              <a class=\"navbar-brand\" href=\"home\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 45
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"home\">Home</a></li>
                <li class=\"";
        // line 46
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"article_creator\">Editions</a></li>
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
        <div class=\"col-sm-7\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
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
    <script src=\"bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"bundles/ptutplatform/js/main.js\"></script>
</body>
</html>";
        
        $__internal_7c2cfda3acec8066a106f9e8ac8becf84a25399d2d609e0af3d157acaabaf056->leave($__internal_7c2cfda3acec8066a106f9e8ac8becf84a25399d2d609e0af3d157acaabaf056_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_e2518eec93bf56937f8da0bae8b6f61add493db6380a7985d6a4968c7f4afcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2518eec93bf56937f8da0bae8b6f61add493db6380a7985d6a4968c7f4afcd2->enter($__internal_e2518eec93bf56937f8da0bae8b6f61add493db6380a7985d6a4968c7f4afcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_e2518eec93bf56937f8da0bae8b6f61add493db6380a7985d6a4968c7f4afcd2->leave($__internal_e2518eec93bf56937f8da0bae8b6f61add493db6380a7985d6a4968c7f4afcd2_prof);

    }

    // line 45
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_9d098cbeae9c7435cfe46fa1ea66cbfb8d8bb95e6e2d3a9ae772908133cc1500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d098cbeae9c7435cfe46fa1ea66cbfb8d8bb95e6e2d3a9ae772908133cc1500->enter($__internal_9d098cbeae9c7435cfe46fa1ea66cbfb8d8bb95e6e2d3a9ae772908133cc1500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_9d098cbeae9c7435cfe46fa1ea66cbfb8d8bb95e6e2d3a9ae772908133cc1500->leave($__internal_9d098cbeae9c7435cfe46fa1ea66cbfb8d8bb95e6e2d3a9ae772908133cc1500_prof);

    }

    // line 46
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_6fc35ba6569428e92ca63bf68279410e449256a3a0a62c88590324639b1d8891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc35ba6569428e92ca63bf68279410e449256a3a0a62c88590324639b1d8891->enter($__internal_6fc35ba6569428e92ca63bf68279410e449256a3a0a62c88590324639b1d8891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_6fc35ba6569428e92ca63bf68279410e449256a3a0a62c88590324639b1d8891->leave($__internal_6fc35ba6569428e92ca63bf68279410e449256a3a0a62c88590324639b1d8891_prof);

    }

    // line 47
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_475656f1eafa87f4e6d88268a92eae3b51e19a22dfccc85325813a8228e3ad27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475656f1eafa87f4e6d88268a92eae3b51e19a22dfccc85325813a8228e3ad27->enter($__internal_475656f1eafa87f4e6d88268a92eae3b51e19a22dfccc85325813a8228e3ad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_475656f1eafa87f4e6d88268a92eae3b51e19a22dfccc85325813a8228e3ad27->leave($__internal_475656f1eafa87f4e6d88268a92eae3b51e19a22dfccc85325813a8228e3ad27_prof);

    }

    // line 53
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_62dc515f35fc3cd5a0e5e43c58be40d0cca6463239ba88aeb1da13dbbaa3ed6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dc515f35fc3cd5a0e5e43c58be40d0cca6463239ba88aeb1da13dbbaa3ed6a->enter($__internal_62dc515f35fc3cd5a0e5e43c58be40d0cca6463239ba88aeb1da13dbbaa3ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_62dc515f35fc3cd5a0e5e43c58be40d0cca6463239ba88aeb1da13dbbaa3ed6a->leave($__internal_62dc515f35fc3cd5a0e5e43c58be40d0cca6463239ba88aeb1da13dbbaa3ed6a_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_91bcafc71868b74a5eff0b1cde05180e4f5ad3f2826624bc08262869813bee29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91bcafc71868b74a5eff0b1cde05180e4f5ad3f2826624bc08262869813bee29->enter($__internal_91bcafc71868b74a5eff0b1cde05180e4f5ad3f2826624bc08262869813bee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    ";
        
        $__internal_91bcafc71868b74a5eff0b1cde05180e4f5ad3f2826624bc08262869813bee29->leave($__internal_91bcafc71868b74a5eff0b1cde05180e4f5ad3f2826624bc08262869813bee29_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 61,  193 => 60,  181 => 53,  169 => 47,  157 => 46,  145 => 45,  133 => 10,  106 => 63,  104 => 60,  94 => 53,  85 => 47,  81 => 46,  77 => 45,  41 => 11,  39 => 10,  28 => 1,);
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
                
              <a class=\"navbar-brand\" href=\"home\">PTUT S2</a>
                
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"{% block ongletHome %} {% endblock %}\"><a href=\"home\">Home</a></li>
                <li class=\"{% block ongletEditions %} {% endblock %}\"><a href=\"article_creator\">Editions</a></li>
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
        <div class=\"col-sm-7\">
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
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
    <script src=\"bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"bundles/ptutplatform/js/main.js\"></script>
</body>
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

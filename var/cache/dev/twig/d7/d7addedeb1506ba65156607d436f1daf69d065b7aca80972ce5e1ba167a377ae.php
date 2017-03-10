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
        $__internal_8101f04ae739171bc6c0e898b7ff87584b4611a621d88f0c00d5dafcbe43142a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8101f04ae739171bc6c0e898b7ff87584b4611a621d88f0c00d5dafcbe43142a->enter($__internal_8101f04ae739171bc6c0e898b7ff87584b4611a621d88f0c00d5dafcbe43142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_0dd613fdc0a6f7cd093d2a9e94ec32c63030e6026fbc7d05473e32cbdb19d2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd613fdc0a6f7cd093d2a9e94ec32c63030e6026fbc7d05473e32cbdb19d2a4->enter($__internal_0dd613fdc0a6f7cd093d2a9e94ec32c63030e6026fbc7d05473e32cbdb19d2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
    <link href=\"../../web/bundles/ptutplatform/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/animate.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/main.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"../../web/bundles/ptutplatform/images/ico/favicon.ico\">

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
        // line 43
        $this->displayBlock('ongletHome', $context, $blocks);
        echo "\"><a href=\"#\">Home</a></li>
                <li class=\"";
        // line 44
        $this->displayBlock('ongletEditions', $context, $blocks);
        echo "\"><a href=\"#Editions\">Editions</a></li>
                <li class=\"dropdown ";
        // line 45
        $this->displayBlock('ongletCompte', $context, $blocks);
        echo "\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle = \"dropdown\" role=\"button\">Mon compte<span class=\"icon-angle-down\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Se connecter</a></li>
                        <li><a href=\"#\">S'inscrire</a></li>
                    </ul>
                </li>
                <li class=\"";
        // line 51
        $this->displayBlock('ongletAbout', $context, $blocks);
        echo "\"><a href=\"#about\">About</a></li>
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
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
    </footer> 
    <script src=\"../../web/bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/main.js\"></script>
</body>
</html>";
        
        $__internal_8101f04ae739171bc6c0e898b7ff87584b4611a621d88f0c00d5dafcbe43142a->leave($__internal_8101f04ae739171bc6c0e898b7ff87584b4611a621d88f0c00d5dafcbe43142a_prof);

        
        $__internal_0dd613fdc0a6f7cd093d2a9e94ec32c63030e6026fbc7d05473e32cbdb19d2a4->leave($__internal_0dd613fdc0a6f7cd093d2a9e94ec32c63030e6026fbc7d05473e32cbdb19d2a4_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_bf7cdf442f20a3709e112ed1ca68d7c05fd595e11923a6989fb71da91745c485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7cdf442f20a3709e112ed1ca68d7c05fd595e11923a6989fb71da91745c485->enter($__internal_bf7cdf442f20a3709e112ed1ca68d7c05fd595e11923a6989fb71da91745c485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_0c0be05738a581f181382cb50380dc4cb6015d45c193b007ee2563428ddcba01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0be05738a581f181382cb50380dc4cb6015d45c193b007ee2563428ddcba01->enter($__internal_0c0be05738a581f181382cb50380dc4cb6015d45c193b007ee2563428ddcba01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_0c0be05738a581f181382cb50380dc4cb6015d45c193b007ee2563428ddcba01->leave($__internal_0c0be05738a581f181382cb50380dc4cb6015d45c193b007ee2563428ddcba01_prof);

        
        $__internal_bf7cdf442f20a3709e112ed1ca68d7c05fd595e11923a6989fb71da91745c485->leave($__internal_bf7cdf442f20a3709e112ed1ca68d7c05fd595e11923a6989fb71da91745c485_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_9389536463e9a3bf93be20c3c54f609eef6bd40804c92a97a3e850871baf3c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9389536463e9a3bf93be20c3c54f609eef6bd40804c92a97a3e850871baf3c2a->enter($__internal_9389536463e9a3bf93be20c3c54f609eef6bd40804c92a97a3e850871baf3c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_8eee015c85f9efb92cf1919b6ac33bcc59b914c1328ec8cd524e8c136e402250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eee015c85f9efb92cf1919b6ac33bcc59b914c1328ec8cd524e8c136e402250->enter($__internal_8eee015c85f9efb92cf1919b6ac33bcc59b914c1328ec8cd524e8c136e402250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_8eee015c85f9efb92cf1919b6ac33bcc59b914c1328ec8cd524e8c136e402250->leave($__internal_8eee015c85f9efb92cf1919b6ac33bcc59b914c1328ec8cd524e8c136e402250_prof);

        
        $__internal_9389536463e9a3bf93be20c3c54f609eef6bd40804c92a97a3e850871baf3c2a->leave($__internal_9389536463e9a3bf93be20c3c54f609eef6bd40804c92a97a3e850871baf3c2a_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_a2c6796e70f7e9509407bddc6e7acab51de32d1aa9494adfd29e8075a2af3173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c6796e70f7e9509407bddc6e7acab51de32d1aa9494adfd29e8075a2af3173->enter($__internal_a2c6796e70f7e9509407bddc6e7acab51de32d1aa9494adfd29e8075a2af3173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_6717900b6067296b37a058580731e30858a76c81bac4414e5cf1bfbfd5a2ff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6717900b6067296b37a058580731e30858a76c81bac4414e5cf1bfbfd5a2ff4c->enter($__internal_6717900b6067296b37a058580731e30858a76c81bac4414e5cf1bfbfd5a2ff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_6717900b6067296b37a058580731e30858a76c81bac4414e5cf1bfbfd5a2ff4c->leave($__internal_6717900b6067296b37a058580731e30858a76c81bac4414e5cf1bfbfd5a2ff4c_prof);

        
        $__internal_a2c6796e70f7e9509407bddc6e7acab51de32d1aa9494adfd29e8075a2af3173->leave($__internal_a2c6796e70f7e9509407bddc6e7acab51de32d1aa9494adfd29e8075a2af3173_prof);

    }

    // line 45
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_5dd46c3c3311f7b236c790def77aafa0f8eb67589fb65094906dce7e62ec07a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd46c3c3311f7b236c790def77aafa0f8eb67589fb65094906dce7e62ec07a1->enter($__internal_5dd46c3c3311f7b236c790def77aafa0f8eb67589fb65094906dce7e62ec07a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_a3bf45c268d86e2f69b8d7affa90629593c800596acec75839935e22f844a7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bf45c268d86e2f69b8d7affa90629593c800596acec75839935e22f844a7d2->enter($__internal_a3bf45c268d86e2f69b8d7affa90629593c800596acec75839935e22f844a7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_a3bf45c268d86e2f69b8d7affa90629593c800596acec75839935e22f844a7d2->leave($__internal_a3bf45c268d86e2f69b8d7affa90629593c800596acec75839935e22f844a7d2_prof);

        
        $__internal_5dd46c3c3311f7b236c790def77aafa0f8eb67589fb65094906dce7e62ec07a1->leave($__internal_5dd46c3c3311f7b236c790def77aafa0f8eb67589fb65094906dce7e62ec07a1_prof);

    }

    // line 51
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_25bde5d6f254e207002435d30697ae37757aa3afde203f46c3fe8676be9dad37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bde5d6f254e207002435d30697ae37757aa3afde203f46c3fe8676be9dad37->enter($__internal_25bde5d6f254e207002435d30697ae37757aa3afde203f46c3fe8676be9dad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_861d2d5e7e528e232cff5b7f8f370c1f8d8510414e3a1cee0dfc3d1f2e3487fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861d2d5e7e528e232cff5b7f8f370c1f8d8510414e3a1cee0dfc3d1f2e3487fd->enter($__internal_861d2d5e7e528e232cff5b7f8f370c1f8d8510414e3a1cee0dfc3d1f2e3487fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_861d2d5e7e528e232cff5b7f8f370c1f8d8510414e3a1cee0dfc3d1f2e3487fd->leave($__internal_861d2d5e7e528e232cff5b7f8f370c1f8d8510414e3a1cee0dfc3d1f2e3487fd_prof);

        
        $__internal_25bde5d6f254e207002435d30697ae37757aa3afde203f46c3fe8676be9dad37->leave($__internal_25bde5d6f254e207002435d30697ae37757aa3afde203f46c3fe8676be9dad37_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_488b55f64b3dcfacccd76231a123f2b7ee45017c5a57287aca8a759ceab74e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488b55f64b3dcfacccd76231a123f2b7ee45017c5a57287aca8a759ceab74e3a->enter($__internal_488b55f64b3dcfacccd76231a123f2b7ee45017c5a57287aca8a759ceab74e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4a2dfc6214dc65575a9f0e7273306b71dbc5fb0a58f72908292058a4dbd2a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a2dfc6214dc65575a9f0e7273306b71dbc5fb0a58f72908292058a4dbd2a1c->enter($__internal_b4a2dfc6214dc65575a9f0e7273306b71dbc5fb0a58f72908292058a4dbd2a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
    ";
        
        $__internal_b4a2dfc6214dc65575a9f0e7273306b71dbc5fb0a58f72908292058a4dbd2a1c->leave($__internal_b4a2dfc6214dc65575a9f0e7273306b71dbc5fb0a58f72908292058a4dbd2a1c_prof);

        
        $__internal_488b55f64b3dcfacccd76231a123f2b7ee45017c5a57287aca8a759ceab74e3a->leave($__internal_488b55f64b3dcfacccd76231a123f2b7ee45017c5a57287aca8a759ceab74e3a_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 59,  216 => 58,  198 => 51,  180 => 45,  162 => 44,  144 => 43,  126 => 10,  107 => 61,  105 => 58,  95 => 51,  86 => 45,  82 => 44,  78 => 43,  44 => 11,  42 => 10,  31 => 1,);
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
    <link href=\"../../web/bundles/ptutplatform/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/animate.css\" rel=\"stylesheet\">
    <link href=\"../../web/bundles/ptutplatform/css/main.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"../../web/bundles/ptutplatform/js/html5shiv.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/respond.min.js\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"../../web/bundles/ptutplatform/images/ico/favicon.ico\">

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
                <li class=\"{% block ongletEditions %} {% endblock %}\"><a href=\"#Editions\">Editions</a></li>
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
        <span class=\"text-muted\">PTUT Manon Rajaonarivelo, Sunny Nguyen, Simon Pasquereau, Mehdi Labourdette, Antonin Guyot - IUT Informatique Lyon 1</span>
    </footer> 
    <script src=\"../../web/bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/main.js\"></script>
</body>
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

<?php

/* PTUTPlatformBundle:Platform:layout.html.twig */
class __TwigTemplate_822b686bddc1b90932045eb9b07f498116a6ace0e187e98f63050f10a10313ff extends Twig_Template
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
        $__internal_8451553347d0f919fbbac6a4711b424492cc0437d3e7538f27dee684eafd0197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8451553347d0f919fbbac6a4711b424492cc0437d3e7538f27dee684eafd0197->enter($__internal_8451553347d0f919fbbac6a4711b424492cc0437d3e7538f27dee684eafd0197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_a675e9bc7ff473413774a4f7d5849c8bb450c684016f4e2235cb6be4a0450839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a675e9bc7ff473413774a4f7d5849c8bb450c684016f4e2235cb6be4a0450839->enter($__internal_a675e9bc7ff473413774a4f7d5849c8bb450c684016f4e2235cb6be4a0450839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
    <script src=\"../../web/bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/main.js\"></script>
</body>
</html>";
        
        $__internal_8451553347d0f919fbbac6a4711b424492cc0437d3e7538f27dee684eafd0197->leave($__internal_8451553347d0f919fbbac6a4711b424492cc0437d3e7538f27dee684eafd0197_prof);

        
        $__internal_a675e9bc7ff473413774a4f7d5849c8bb450c684016f4e2235cb6be4a0450839->leave($__internal_a675e9bc7ff473413774a4f7d5849c8bb450c684016f4e2235cb6be4a0450839_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_f2f74317438bfb5eb29e18d97c1917484955d7e3ccfe332b275d5868ab64e093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f74317438bfb5eb29e18d97c1917484955d7e3ccfe332b275d5868ab64e093->enter($__internal_f2f74317438bfb5eb29e18d97c1917484955d7e3ccfe332b275d5868ab64e093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_a629d8e272c4d8f27a6bf9c5acbc181eecb9ac25187e1886c9b46627059211b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a629d8e272c4d8f27a6bf9c5acbc181eecb9ac25187e1886c9b46627059211b2->enter($__internal_a629d8e272c4d8f27a6bf9c5acbc181eecb9ac25187e1886c9b46627059211b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_a629d8e272c4d8f27a6bf9c5acbc181eecb9ac25187e1886c9b46627059211b2->leave($__internal_a629d8e272c4d8f27a6bf9c5acbc181eecb9ac25187e1886c9b46627059211b2_prof);

        
        $__internal_f2f74317438bfb5eb29e18d97c1917484955d7e3ccfe332b275d5868ab64e093->leave($__internal_f2f74317438bfb5eb29e18d97c1917484955d7e3ccfe332b275d5868ab64e093_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_0bc0dac67c8f2529eb6a9e23cc3f54f4bf05c0e24b0a0905d1600a3072900c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc0dac67c8f2529eb6a9e23cc3f54f4bf05c0e24b0a0905d1600a3072900c0f->enter($__internal_0bc0dac67c8f2529eb6a9e23cc3f54f4bf05c0e24b0a0905d1600a3072900c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_14d6fcea192615085ad45c864879e5721e8d226938823e896be9bc9fbc1ce5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d6fcea192615085ad45c864879e5721e8d226938823e896be9bc9fbc1ce5ee->enter($__internal_14d6fcea192615085ad45c864879e5721e8d226938823e896be9bc9fbc1ce5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_14d6fcea192615085ad45c864879e5721e8d226938823e896be9bc9fbc1ce5ee->leave($__internal_14d6fcea192615085ad45c864879e5721e8d226938823e896be9bc9fbc1ce5ee_prof);

        
        $__internal_0bc0dac67c8f2529eb6a9e23cc3f54f4bf05c0e24b0a0905d1600a3072900c0f->leave($__internal_0bc0dac67c8f2529eb6a9e23cc3f54f4bf05c0e24b0a0905d1600a3072900c0f_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_c4157112d757b79201421cc66d23fee198948d64ad90116c6600554aa7c4d15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4157112d757b79201421cc66d23fee198948d64ad90116c6600554aa7c4d15b->enter($__internal_c4157112d757b79201421cc66d23fee198948d64ad90116c6600554aa7c4d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_5c27c376de7dd38a96001f43b4c5a224df2132820616a40b3f88d431e3979ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c27c376de7dd38a96001f43b4c5a224df2132820616a40b3f88d431e3979ad7->enter($__internal_5c27c376de7dd38a96001f43b4c5a224df2132820616a40b3f88d431e3979ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_5c27c376de7dd38a96001f43b4c5a224df2132820616a40b3f88d431e3979ad7->leave($__internal_5c27c376de7dd38a96001f43b4c5a224df2132820616a40b3f88d431e3979ad7_prof);

        
        $__internal_c4157112d757b79201421cc66d23fee198948d64ad90116c6600554aa7c4d15b->leave($__internal_c4157112d757b79201421cc66d23fee198948d64ad90116c6600554aa7c4d15b_prof);

    }

    // line 45
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_d9bb4cd8ec2fe1f88f44afc12cbc0762d83715261eaa85ccb69fdfd97c617d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bb4cd8ec2fe1f88f44afc12cbc0762d83715261eaa85ccb69fdfd97c617d91->enter($__internal_d9bb4cd8ec2fe1f88f44afc12cbc0762d83715261eaa85ccb69fdfd97c617d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_51156b84fb7bf7b1c26696d01e4cd070bca3571cfed395eb22095206f4dbaab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51156b84fb7bf7b1c26696d01e4cd070bca3571cfed395eb22095206f4dbaab6->enter($__internal_51156b84fb7bf7b1c26696d01e4cd070bca3571cfed395eb22095206f4dbaab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_51156b84fb7bf7b1c26696d01e4cd070bca3571cfed395eb22095206f4dbaab6->leave($__internal_51156b84fb7bf7b1c26696d01e4cd070bca3571cfed395eb22095206f4dbaab6_prof);

        
        $__internal_d9bb4cd8ec2fe1f88f44afc12cbc0762d83715261eaa85ccb69fdfd97c617d91->leave($__internal_d9bb4cd8ec2fe1f88f44afc12cbc0762d83715261eaa85ccb69fdfd97c617d91_prof);

    }

    // line 51
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_060219d527cfc93be491183d852f8594aa55b3588442652d903dea7e14aea592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060219d527cfc93be491183d852f8594aa55b3588442652d903dea7e14aea592->enter($__internal_060219d527cfc93be491183d852f8594aa55b3588442652d903dea7e14aea592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_7594c61bed839135b953c09444e3bb1c1732e3cf1b5bba03a9953a801e21a7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7594c61bed839135b953c09444e3bb1c1732e3cf1b5bba03a9953a801e21a7f6->enter($__internal_7594c61bed839135b953c09444e3bb1c1732e3cf1b5bba03a9953a801e21a7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_7594c61bed839135b953c09444e3bb1c1732e3cf1b5bba03a9953a801e21a7f6->leave($__internal_7594c61bed839135b953c09444e3bb1c1732e3cf1b5bba03a9953a801e21a7f6_prof);

        
        $__internal_060219d527cfc93be491183d852f8594aa55b3588442652d903dea7e14aea592->leave($__internal_060219d527cfc93be491183d852f8594aa55b3588442652d903dea7e14aea592_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_457826cdcdad86a880133c1ce4291f462797b3bd6b2adc1198990e2233e5e435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457826cdcdad86a880133c1ce4291f462797b3bd6b2adc1198990e2233e5e435->enter($__internal_457826cdcdad86a880133c1ce4291f462797b3bd6b2adc1198990e2233e5e435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dc9f5e4c2f5b62fafd33a41f00b9d22b9dafbff6637a87f4683709e6ed28bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc9f5e4c2f5b62fafd33a41f00b9d22b9dafbff6637a87f4683709e6ed28bcc->enter($__internal_2dc9f5e4c2f5b62fafd33a41f00b9d22b9dafbff6637a87f4683709e6ed28bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
    ";
        
        $__internal_2dc9f5e4c2f5b62fafd33a41f00b9d22b9dafbff6637a87f4683709e6ed28bcc->leave($__internal_2dc9f5e4c2f5b62fafd33a41f00b9d22b9dafbff6637a87f4683709e6ed28bcc_prof);

        
        $__internal_457826cdcdad86a880133c1ce4291f462797b3bd6b2adc1198990e2233e5e435->leave($__internal_457826cdcdad86a880133c1ce4291f462797b3bd6b2adc1198990e2233e5e435_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 59,  227 => 58,  209 => 51,  191 => 45,  173 => 44,  155 => 43,  137 => 10,  107 => 61,  105 => 58,  95 => 51,  86 => 45,  82 => 44,  78 => 43,  44 => 11,  42 => 10,  31 => 1,);
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
    <script src=\"../../web/bundles/ptutplatform/js/jquery.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/bootstrap.min.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/jquery.prettyPhoto.js\"></script>
    <script src=\"../../web/bundles/ptutplatform/js/main.js\"></script>
</body>
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

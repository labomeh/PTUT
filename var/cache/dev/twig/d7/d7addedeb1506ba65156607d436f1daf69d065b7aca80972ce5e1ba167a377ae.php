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
        $__internal_6c39b768382292d50a22f3c0b910fda6963cde30495f1b424a2ca57b4df06fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c39b768382292d50a22f3c0b910fda6963cde30495f1b424a2ca57b4df06fc8->enter($__internal_6c39b768382292d50a22f3c0b910fda6963cde30495f1b424a2ca57b4df06fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

        $__internal_a33f341d2cd9205b900cea1283b2ca82f7089db98f16d57ae9dc1a85cee5a8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33f341d2cd9205b900cea1283b2ca82f7089db98f16d57ae9dc1a85cee5a8af->enter($__internal_a33f341d2cd9205b900cea1283b2ca82f7089db98f16d57ae9dc1a85cee5a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:layout.html.twig"));

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
        
        $__internal_6c39b768382292d50a22f3c0b910fda6963cde30495f1b424a2ca57b4df06fc8->leave($__internal_6c39b768382292d50a22f3c0b910fda6963cde30495f1b424a2ca57b4df06fc8_prof);

        
        $__internal_a33f341d2cd9205b900cea1283b2ca82f7089db98f16d57ae9dc1a85cee5a8af->leave($__internal_a33f341d2cd9205b900cea1283b2ca82f7089db98f16d57ae9dc1a85cee5a8af_prof);

    }

    // line 16
    public function block_include($context, array $blocks = array())
    {
        $__internal_7916bb03f2e80585dc70b2c04bc2667b8cd7794279f910f68cf2f83fd6a7d324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7916bb03f2e80585dc70b2c04bc2667b8cd7794279f910f68cf2f83fd6a7d324->enter($__internal_7916bb03f2e80585dc70b2c04bc2667b8cd7794279f910f68cf2f83fd6a7d324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_21bafbfbf92917a52263dfb3ea33bed79305c36cc6812de5ee0a1ae89aa1c193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bafbfbf92917a52263dfb3ea33bed79305c36cc6812de5ee0a1ae89aa1c193->enter($__internal_21bafbfbf92917a52263dfb3ea33bed79305c36cc6812de5ee0a1ae89aa1c193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_21bafbfbf92917a52263dfb3ea33bed79305c36cc6812de5ee0a1ae89aa1c193->leave($__internal_21bafbfbf92917a52263dfb3ea33bed79305c36cc6812de5ee0a1ae89aa1c193_prof);

        
        $__internal_7916bb03f2e80585dc70b2c04bc2667b8cd7794279f910f68cf2f83fd6a7d324->leave($__internal_7916bb03f2e80585dc70b2c04bc2667b8cd7794279f910f68cf2f83fd6a7d324_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_24b356e736f66505276068b9566182f4a76e016e63bce761e0ce6331468733e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b356e736f66505276068b9566182f4a76e016e63bce761e0ce6331468733e1->enter($__internal_24b356e736f66505276068b9566182f4a76e016e63bce761e0ce6331468733e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_10947f49bf38330de155cc6d3a51bfc5ac21f61e26a289124d7562003298e3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10947f49bf38330de155cc6d3a51bfc5ac21f61e26a289124d7562003298e3fe->enter($__internal_10947f49bf38330de155cc6d3a51bfc5ac21f61e26a289124d7562003298e3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_10947f49bf38330de155cc6d3a51bfc5ac21f61e26a289124d7562003298e3fe->leave($__internal_10947f49bf38330de155cc6d3a51bfc5ac21f61e26a289124d7562003298e3fe_prof);

        
        $__internal_24b356e736f66505276068b9566182f4a76e016e63bce761e0ce6331468733e1->leave($__internal_24b356e736f66505276068b9566182f4a76e016e63bce761e0ce6331468733e1_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_8f7bc3b41064a250f559c388cc41210ce10f2fb186c595853df4415687b5f9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7bc3b41064a250f559c388cc41210ce10f2fb186c595853df4415687b5f9c0->enter($__internal_8f7bc3b41064a250f559c388cc41210ce10f2fb186c595853df4415687b5f9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_58b5863656eece6015d3dbbfa51a85d6bdc10a16de9db21395949f705a64a1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b5863656eece6015d3dbbfa51a85d6bdc10a16de9db21395949f705a64a1a3->enter($__internal_58b5863656eece6015d3dbbfa51a85d6bdc10a16de9db21395949f705a64a1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_58b5863656eece6015d3dbbfa51a85d6bdc10a16de9db21395949f705a64a1a3->leave($__internal_58b5863656eece6015d3dbbfa51a85d6bdc10a16de9db21395949f705a64a1a3_prof);

        
        $__internal_8f7bc3b41064a250f559c388cc41210ce10f2fb186c595853df4415687b5f9c0->leave($__internal_8f7bc3b41064a250f559c388cc41210ce10f2fb186c595853df4415687b5f9c0_prof);

    }

    // line 46
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_6e8985a8aec4efd8d2427cfcc119e6d50787efe9c626e9f6989218ede498d540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8985a8aec4efd8d2427cfcc119e6d50787efe9c626e9f6989218ede498d540->enter($__internal_6e8985a8aec4efd8d2427cfcc119e6d50787efe9c626e9f6989218ede498d540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_cbf7ff6af0e3a50a67bea7239fdb75d877ba7d4e4b89d66873433d5de059e52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf7ff6af0e3a50a67bea7239fdb75d877ba7d4e4b89d66873433d5de059e52c->enter($__internal_cbf7ff6af0e3a50a67bea7239fdb75d877ba7d4e4b89d66873433d5de059e52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_cbf7ff6af0e3a50a67bea7239fdb75d877ba7d4e4b89d66873433d5de059e52c->leave($__internal_cbf7ff6af0e3a50a67bea7239fdb75d877ba7d4e4b89d66873433d5de059e52c_prof);

        
        $__internal_6e8985a8aec4efd8d2427cfcc119e6d50787efe9c626e9f6989218ede498d540->leave($__internal_6e8985a8aec4efd8d2427cfcc119e6d50787efe9c626e9f6989218ede498d540_prof);

    }

    // line 52
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_ea44c31b74062f585a01025ca514d01b88c352edcc139a7ac5c0ef6329653722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea44c31b74062f585a01025ca514d01b88c352edcc139a7ac5c0ef6329653722->enter($__internal_ea44c31b74062f585a01025ca514d01b88c352edcc139a7ac5c0ef6329653722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_cd78cae803d170af77ae70dbe64e9d0caae139a67471d2587c0281b831d805fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd78cae803d170af77ae70dbe64e9d0caae139a67471d2587c0281b831d805fd->enter($__internal_cd78cae803d170af77ae70dbe64e9d0caae139a67471d2587c0281b831d805fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_cd78cae803d170af77ae70dbe64e9d0caae139a67471d2587c0281b831d805fd->leave($__internal_cd78cae803d170af77ae70dbe64e9d0caae139a67471d2587c0281b831d805fd_prof);

        
        $__internal_ea44c31b74062f585a01025ca514d01b88c352edcc139a7ac5c0ef6329653722->leave($__internal_ea44c31b74062f585a01025ca514d01b88c352edcc139a7ac5c0ef6329653722_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4998ec345f5435053646e64b0933bc7e95e7cb45708fe2b77e5cc7f18732e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4998ec345f5435053646e64b0933bc7e95e7cb45708fe2b77e5cc7f18732e6c->enter($__internal_a4998ec345f5435053646e64b0933bc7e95e7cb45708fe2b77e5cc7f18732e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0820b7e64c6a19026c5dc39909bbb022f71ed506ab8142d717209203a694c754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0820b7e64c6a19026c5dc39909bbb022f71ed506ab8142d717209203a694c754->enter($__internal_0820b7e64c6a19026c5dc39909bbb022f71ed506ab8142d717209203a694c754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
    ";
        
        $__internal_0820b7e64c6a19026c5dc39909bbb022f71ed506ab8142d717209203a694c754->leave($__internal_0820b7e64c6a19026c5dc39909bbb022f71ed506ab8142d717209203a694c754_prof);

        
        $__internal_a4998ec345f5435053646e64b0933bc7e95e7cb45708fe2b77e5cc7f18732e6c->leave($__internal_a4998ec345f5435053646e64b0933bc7e95e7cb45708fe2b77e5cc7f18732e6c_prof);

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
</html>", "PTUTPlatformBundle:Platform:layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/layout.html.twig");
    }
}

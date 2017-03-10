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
        $__internal_09c8c6adbd17ba449b70c73ae9154f2937cc8de4c67009b590b7a84a26178c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c8c6adbd17ba449b70c73ae9154f2937cc8de4c67009b590b7a84a26178c62->enter($__internal_09c8c6adbd17ba449b70c73ae9154f2937cc8de4c67009b590b7a84a26178c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

        $__internal_4aaa9ae07359b48442e9819d24d0d763306a1d1a9a78b214439812548d91fb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aaa9ae07359b48442e9819d24d0d763306a1d1a9a78b214439812548d91fb46->enter($__internal_4aaa9ae07359b48442e9819d24d0d763306a1d1a9a78b214439812548d91fb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/layout.html.twig"));

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
        
        $__internal_09c8c6adbd17ba449b70c73ae9154f2937cc8de4c67009b590b7a84a26178c62->leave($__internal_09c8c6adbd17ba449b70c73ae9154f2937cc8de4c67009b590b7a84a26178c62_prof);

        
        $__internal_4aaa9ae07359b48442e9819d24d0d763306a1d1a9a78b214439812548d91fb46->leave($__internal_4aaa9ae07359b48442e9819d24d0d763306a1d1a9a78b214439812548d91fb46_prof);

    }

    // line 10
    public function block_include($context, array $blocks = array())
    {
        $__internal_41b2dbc5ca037b7d158bbb227a1c8b2c4e97a0f5b2da93066450cb3e79133fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b2dbc5ca037b7d158bbb227a1c8b2c4e97a0f5b2da93066450cb3e79133fdb->enter($__internal_41b2dbc5ca037b7d158bbb227a1c8b2c4e97a0f5b2da93066450cb3e79133fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_454066f90158ac7e0a5141432908966a120a40be273470ca0c4e9457d9257a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454066f90158ac7e0a5141432908966a120a40be273470ca0c4e9457d9257a90->enter($__internal_454066f90158ac7e0a5141432908966a120a40be273470ca0c4e9457d9257a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        echo " ";
        
        $__internal_454066f90158ac7e0a5141432908966a120a40be273470ca0c4e9457d9257a90->leave($__internal_454066f90158ac7e0a5141432908966a120a40be273470ca0c4e9457d9257a90_prof);

        
        $__internal_41b2dbc5ca037b7d158bbb227a1c8b2c4e97a0f5b2da93066450cb3e79133fdb->leave($__internal_41b2dbc5ca037b7d158bbb227a1c8b2c4e97a0f5b2da93066450cb3e79133fdb_prof);

    }

    // line 43
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_b6759d778bb589999eaa57fb6987560666c753983f1af6d546425669f3e9a26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6759d778bb589999eaa57fb6987560666c753983f1af6d546425669f3e9a26d->enter($__internal_b6759d778bb589999eaa57fb6987560666c753983f1af6d546425669f3e9a26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_bd28333b32a09ef59d431b48f6e9d1f72ecd3541d267932e243909675d60c3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd28333b32a09ef59d431b48f6e9d1f72ecd3541d267932e243909675d60c3eb->enter($__internal_bd28333b32a09ef59d431b48f6e9d1f72ecd3541d267932e243909675d60c3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo " ";
        
        $__internal_bd28333b32a09ef59d431b48f6e9d1f72ecd3541d267932e243909675d60c3eb->leave($__internal_bd28333b32a09ef59d431b48f6e9d1f72ecd3541d267932e243909675d60c3eb_prof);

        
        $__internal_b6759d778bb589999eaa57fb6987560666c753983f1af6d546425669f3e9a26d->leave($__internal_b6759d778bb589999eaa57fb6987560666c753983f1af6d546425669f3e9a26d_prof);

    }

    // line 44
    public function block_ongletEditions($context, array $blocks = array())
    {
        $__internal_ace56ef1679f4f6cb6f6b023221b1cf08cadb8f7869e091d6d78684fd9e58aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace56ef1679f4f6cb6f6b023221b1cf08cadb8f7869e091d6d78684fd9e58aee->enter($__internal_ace56ef1679f4f6cb6f6b023221b1cf08cadb8f7869e091d6d78684fd9e58aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        $__internal_0fc28f1062a0f87b1994132bf474ce135633fa560f7397a74f2d2f4b7a0c0bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc28f1062a0f87b1994132bf474ce135633fa560f7397a74f2d2f4b7a0c0bf0->enter($__internal_0fc28f1062a0f87b1994132bf474ce135633fa560f7397a74f2d2f4b7a0c0bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletEditions"));

        echo " ";
        
        $__internal_0fc28f1062a0f87b1994132bf474ce135633fa560f7397a74f2d2f4b7a0c0bf0->leave($__internal_0fc28f1062a0f87b1994132bf474ce135633fa560f7397a74f2d2f4b7a0c0bf0_prof);

        
        $__internal_ace56ef1679f4f6cb6f6b023221b1cf08cadb8f7869e091d6d78684fd9e58aee->leave($__internal_ace56ef1679f4f6cb6f6b023221b1cf08cadb8f7869e091d6d78684fd9e58aee_prof);

    }

    // line 45
    public function block_ongletCompte($context, array $blocks = array())
    {
        $__internal_32a35000ad9b9a610b88acbcfdbac159ee1f82da203d12bd8d8bb4b57151fc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a35000ad9b9a610b88acbcfdbac159ee1f82da203d12bd8d8bb4b57151fc4e->enter($__internal_32a35000ad9b9a610b88acbcfdbac159ee1f82da203d12bd8d8bb4b57151fc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        $__internal_19c24faab025cf548152d9469a0485bbe615348f9dcb21c6a10f67f6c73d22e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c24faab025cf548152d9469a0485bbe615348f9dcb21c6a10f67f6c73d22e9->enter($__internal_19c24faab025cf548152d9469a0485bbe615348f9dcb21c6a10f67f6c73d22e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletCompte"));

        echo " ";
        
        $__internal_19c24faab025cf548152d9469a0485bbe615348f9dcb21c6a10f67f6c73d22e9->leave($__internal_19c24faab025cf548152d9469a0485bbe615348f9dcb21c6a10f67f6c73d22e9_prof);

        
        $__internal_32a35000ad9b9a610b88acbcfdbac159ee1f82da203d12bd8d8bb4b57151fc4e->leave($__internal_32a35000ad9b9a610b88acbcfdbac159ee1f82da203d12bd8d8bb4b57151fc4e_prof);

    }

    // line 51
    public function block_ongletAbout($context, array $blocks = array())
    {
        $__internal_a5635f7f032baa1c0d2f54a3b7e18ebdc700dac866aba10caf440c9e078563d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5635f7f032baa1c0d2f54a3b7e18ebdc700dac866aba10caf440c9e078563d3->enter($__internal_a5635f7f032baa1c0d2f54a3b7e18ebdc700dac866aba10caf440c9e078563d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        $__internal_147450a7b0f8e3a3cde34a01f196fb44a4547d3b6c0500ab3194f46336bb4169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147450a7b0f8e3a3cde34a01f196fb44a4547d3b6c0500ab3194f46336bb4169->enter($__internal_147450a7b0f8e3a3cde34a01f196fb44a4547d3b6c0500ab3194f46336bb4169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletAbout"));

        echo " ";
        
        $__internal_147450a7b0f8e3a3cde34a01f196fb44a4547d3b6c0500ab3194f46336bb4169->leave($__internal_147450a7b0f8e3a3cde34a01f196fb44a4547d3b6c0500ab3194f46336bb4169_prof);

        
        $__internal_a5635f7f032baa1c0d2f54a3b7e18ebdc700dac866aba10caf440c9e078563d3->leave($__internal_a5635f7f032baa1c0d2f54a3b7e18ebdc700dac866aba10caf440c9e078563d3_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a2b7ce8927e815cd85e11177901cf8a0eccb1bbe2f7248a1c0a06f3ee9610a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2b7ce8927e815cd85e11177901cf8a0eccb1bbe2f7248a1c0a06f3ee9610a6->enter($__internal_1a2b7ce8927e815cd85e11177901cf8a0eccb1bbe2f7248a1c0a06f3ee9610a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cff1226f3424959433dc83c14e87a82271aaba536dd58a5e77a04b904886ce85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff1226f3424959433dc83c14e87a82271aaba536dd58a5e77a04b904886ce85->enter($__internal_cff1226f3424959433dc83c14e87a82271aaba536dd58a5e77a04b904886ce85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
    ";
        
        $__internal_cff1226f3424959433dc83c14e87a82271aaba536dd58a5e77a04b904886ce85->leave($__internal_cff1226f3424959433dc83c14e87a82271aaba536dd58a5e77a04b904886ce85_prof);

        
        $__internal_1a2b7ce8927e815cd85e11177901cf8a0eccb1bbe2f7248a1c0a06f3ee9610a6->leave($__internal_1a2b7ce8927e815cd85e11177901cf8a0eccb1bbe2f7248a1c0a06f3ee9610a6_prof);

    }

    public function getTemplateName()
    {
        return "@PTUTPlatform/Platform/layout.html.twig";
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
</html>", "@PTUTPlatform/Platform/layout.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\layout.html.twig");
    }
}

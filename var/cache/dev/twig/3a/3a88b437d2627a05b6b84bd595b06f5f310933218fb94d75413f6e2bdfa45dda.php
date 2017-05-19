<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f8a90c47d2234f76036c7e982dce4cf05e8a2e7913cfe18e55e8ac172593459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8a90c47d2234f76036c7e982dce4cf05e8a2e7913cfe18e55e8ac172593459->enter($__internal_1f8a90c47d2234f76036c7e982dce4cf05e8a2e7913cfe18e55e8ac172593459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3916b6448caa4153eb876f86c1bed19abe57b7f343911b7299e2dacce7c0ace4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3916b6448caa4153eb876f86c1bed19abe57b7f343911b7299e2dacce7c0ace4->enter($__internal_3916b6448caa4153eb876f86c1bed19abe57b7f343911b7299e2dacce7c0ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1f8a90c47d2234f76036c7e982dce4cf05e8a2e7913cfe18e55e8ac172593459->leave($__internal_1f8a90c47d2234f76036c7e982dce4cf05e8a2e7913cfe18e55e8ac172593459_prof);

        
        $__internal_3916b6448caa4153eb876f86c1bed19abe57b7f343911b7299e2dacce7c0ace4->leave($__internal_3916b6448caa4153eb876f86c1bed19abe57b7f343911b7299e2dacce7c0ace4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d62a13668e548871ee476a53f4ddc39f72d5e10ca32ab405e6c7d2b92a0ab6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62a13668e548871ee476a53f4ddc39f72d5e10ca32ab405e6c7d2b92a0ab6e0->enter($__internal_d62a13668e548871ee476a53f4ddc39f72d5e10ca32ab405e6c7d2b92a0ab6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f560af8c3159247e7ab261aca38980fdba3ba435838242952cb60d0f8ca72e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f560af8c3159247e7ab261aca38980fdba3ba435838242952cb60d0f8ca72e9b->enter($__internal_f560af8c3159247e7ab261aca38980fdba3ba435838242952cb60d0f8ca72e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f560af8c3159247e7ab261aca38980fdba3ba435838242952cb60d0f8ca72e9b->leave($__internal_f560af8c3159247e7ab261aca38980fdba3ba435838242952cb60d0f8ca72e9b_prof);

        
        $__internal_d62a13668e548871ee476a53f4ddc39f72d5e10ca32ab405e6c7d2b92a0ab6e0->leave($__internal_d62a13668e548871ee476a53f4ddc39f72d5e10ca32ab405e6c7d2b92a0ab6e0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a4adaa03dc9d84a10ecfba3cc7b05617ec69b1e2fa74fb9d3ac00447ad28d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4adaa03dc9d84a10ecfba3cc7b05617ec69b1e2fa74fb9d3ac00447ad28d82->enter($__internal_9a4adaa03dc9d84a10ecfba3cc7b05617ec69b1e2fa74fb9d3ac00447ad28d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_32bbcea4969ecebc8a9621c90152272af984eb58ecab69e412f0be314b55cbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bbcea4969ecebc8a9621c90152272af984eb58ecab69e412f0be314b55cbe0->enter($__internal_32bbcea4969ecebc8a9621c90152272af984eb58ecab69e412f0be314b55cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32bbcea4969ecebc8a9621c90152272af984eb58ecab69e412f0be314b55cbe0->leave($__internal_32bbcea4969ecebc8a9621c90152272af984eb58ecab69e412f0be314b55cbe0_prof);

        
        $__internal_9a4adaa03dc9d84a10ecfba3cc7b05617ec69b1e2fa74fb9d3ac00447ad28d82->leave($__internal_9a4adaa03dc9d84a10ecfba3cc7b05617ec69b1e2fa74fb9d3ac00447ad28d82_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e28e58d81c1f77d9160aa018741887cb12fd82ba3b9c41e3e75fe6fef050a259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28e58d81c1f77d9160aa018741887cb12fd82ba3b9c41e3e75fe6fef050a259->enter($__internal_e28e58d81c1f77d9160aa018741887cb12fd82ba3b9c41e3e75fe6fef050a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58a6529bc26a65a344406f3869a3dc230bb20dafa09878a32c299d5030381653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a6529bc26a65a344406f3869a3dc230bb20dafa09878a32c299d5030381653->enter($__internal_58a6529bc26a65a344406f3869a3dc230bb20dafa09878a32c299d5030381653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58a6529bc26a65a344406f3869a3dc230bb20dafa09878a32c299d5030381653->leave($__internal_58a6529bc26a65a344406f3869a3dc230bb20dafa09878a32c299d5030381653_prof);

        
        $__internal_e28e58d81c1f77d9160aa018741887cb12fd82ba3b9c41e3e75fe6fef050a259->leave($__internal_e28e58d81c1f77d9160aa018741887cb12fd82ba3b9c41e3e75fe6fef050a259_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efcda34a285ca1199dc4417feaa030dca979380c4190b4e545137910e37db2bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcda34a285ca1199dc4417feaa030dca979380c4190b4e545137910e37db2bb->enter($__internal_efcda34a285ca1199dc4417feaa030dca979380c4190b4e545137910e37db2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_73799b392cc274056a7429a49feff88570c2ac2a5a8f6b70795aff1630782115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73799b392cc274056a7429a49feff88570c2ac2a5a8f6b70795aff1630782115->enter($__internal_73799b392cc274056a7429a49feff88570c2ac2a5a8f6b70795aff1630782115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73799b392cc274056a7429a49feff88570c2ac2a5a8f6b70795aff1630782115->leave($__internal_73799b392cc274056a7429a49feff88570c2ac2a5a8f6b70795aff1630782115_prof);

        
        $__internal_efcda34a285ca1199dc4417feaa030dca979380c4190b4e545137910e37db2bb->leave($__internal_efcda34a285ca1199dc4417feaa030dca979380c4190b4e545137910e37db2bb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\ptut\\app\\Resources\\views\\base.html.twig");
    }
}

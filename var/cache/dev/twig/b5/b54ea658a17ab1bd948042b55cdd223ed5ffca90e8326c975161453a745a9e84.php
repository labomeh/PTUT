<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f40736bf8191373bcae91d8ced9c0bde76cd8c067731c9662de141e0e1871de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e342d8572207a02f058dd025197c70088ac2b9fdd5720c0e666a739f539c40eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e342d8572207a02f058dd025197c70088ac2b9fdd5720c0e666a739f539c40eb->enter($__internal_e342d8572207a02f058dd025197c70088ac2b9fdd5720c0e666a739f539c40eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0c467a06a625d2676d70d8f0ad347170c008717ca17ebb487d63a621e89864ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c467a06a625d2676d70d8f0ad347170c008717ca17ebb487d63a621e89864ea->enter($__internal_0c467a06a625d2676d70d8f0ad347170c008717ca17ebb487d63a621e89864ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e342d8572207a02f058dd025197c70088ac2b9fdd5720c0e666a739f539c40eb->leave($__internal_e342d8572207a02f058dd025197c70088ac2b9fdd5720c0e666a739f539c40eb_prof);

        
        $__internal_0c467a06a625d2676d70d8f0ad347170c008717ca17ebb487d63a621e89864ea->leave($__internal_0c467a06a625d2676d70d8f0ad347170c008717ca17ebb487d63a621e89864ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd8c6b0dfb94a3c57ffda814fda72051346a0ddc287de7ea834eb06eb2f34a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8c6b0dfb94a3c57ffda814fda72051346a0ddc287de7ea834eb06eb2f34a66->enter($__internal_bd8c6b0dfb94a3c57ffda814fda72051346a0ddc287de7ea834eb06eb2f34a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5e1d933f43037b87a9186eb64fd90eed37953771b898309093935313abcaf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e1d933f43037b87a9186eb64fd90eed37953771b898309093935313abcaf00->enter($__internal_c5e1d933f43037b87a9186eb64fd90eed37953771b898309093935313abcaf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c5e1d933f43037b87a9186eb64fd90eed37953771b898309093935313abcaf00->leave($__internal_c5e1d933f43037b87a9186eb64fd90eed37953771b898309093935313abcaf00_prof);

        
        $__internal_bd8c6b0dfb94a3c57ffda814fda72051346a0ddc287de7ea834eb06eb2f34a66->leave($__internal_bd8c6b0dfb94a3c57ffda814fda72051346a0ddc287de7ea834eb06eb2f34a66_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_643877903e2b40f01843d2e9b5182bad4c826171664202d4c2099ffb3d8a040b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643877903e2b40f01843d2e9b5182bad4c826171664202d4c2099ffb3d8a040b->enter($__internal_643877903e2b40f01843d2e9b5182bad4c826171664202d4c2099ffb3d8a040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_988e85382755253d0d08238c8147bf49f534a1a881bc5f1c88a742af1840d3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988e85382755253d0d08238c8147bf49f534a1a881bc5f1c88a742af1840d3e7->enter($__internal_988e85382755253d0d08238c8147bf49f534a1a881bc5f1c88a742af1840d3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_988e85382755253d0d08238c8147bf49f534a1a881bc5f1c88a742af1840d3e7->leave($__internal_988e85382755253d0d08238c8147bf49f534a1a881bc5f1c88a742af1840d3e7_prof);

        
        $__internal_643877903e2b40f01843d2e9b5182bad4c826171664202d4c2099ffb3d8a040b->leave($__internal_643877903e2b40f01843d2e9b5182bad4c826171664202d4c2099ffb3d8a040b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

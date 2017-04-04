<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_17c5cdf1c0d665c42a758eb9df8aeb1a047e9429f2f285c16d81c9c9ee531f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e1e258f1c5be79024366a1033a4d37ba22f68f0da2d42d9afa12c5810d2ee41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1e258f1c5be79024366a1033a4d37ba22f68f0da2d42d9afa12c5810d2ee41->enter($__internal_1e1e258f1c5be79024366a1033a4d37ba22f68f0da2d42d9afa12c5810d2ee41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_534f088816a1a1a598eddc04f4b80906a5780c9e24c8681ffab411efea103730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534f088816a1a1a598eddc04f4b80906a5780c9e24c8681ffab411efea103730->enter($__internal_534f088816a1a1a598eddc04f4b80906a5780c9e24c8681ffab411efea103730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e1e258f1c5be79024366a1033a4d37ba22f68f0da2d42d9afa12c5810d2ee41->leave($__internal_1e1e258f1c5be79024366a1033a4d37ba22f68f0da2d42d9afa12c5810d2ee41_prof);

        
        $__internal_534f088816a1a1a598eddc04f4b80906a5780c9e24c8681ffab411efea103730->leave($__internal_534f088816a1a1a598eddc04f4b80906a5780c9e24c8681ffab411efea103730_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_69c8301e5943312660e42d6ca0fea4374d67f2a3f40b2055c811cb1d4aec3c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c8301e5943312660e42d6ca0fea4374d67f2a3f40b2055c811cb1d4aec3c6c->enter($__internal_69c8301e5943312660e42d6ca0fea4374d67f2a3f40b2055c811cb1d4aec3c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e7a002d89f38845b9a161b2a51d0e17e9e0f09b0d3be74a70143c97e26d74fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a002d89f38845b9a161b2a51d0e17e9e0f09b0d3be74a70143c97e26d74fa7->enter($__internal_e7a002d89f38845b9a161b2a51d0e17e9e0f09b0d3be74a70143c97e26d74fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e7a002d89f38845b9a161b2a51d0e17e9e0f09b0d3be74a70143c97e26d74fa7->leave($__internal_e7a002d89f38845b9a161b2a51d0e17e9e0f09b0d3be74a70143c97e26d74fa7_prof);

        
        $__internal_69c8301e5943312660e42d6ca0fea4374d67f2a3f40b2055c811cb1d4aec3c6c->leave($__internal_69c8301e5943312660e42d6ca0fea4374d67f2a3f40b2055c811cb1d4aec3c6c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47879a189e8f02075498a8346dbe4b9dd0b718b3b5ec63424f284490d0c6e4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47879a189e8f02075498a8346dbe4b9dd0b718b3b5ec63424f284490d0c6e4e0->enter($__internal_47879a189e8f02075498a8346dbe4b9dd0b718b3b5ec63424f284490d0c6e4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_357a98b1b69ab5740cbc3dc3b482a0bfc9260256acd38f8327d962287edb9fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357a98b1b69ab5740cbc3dc3b482a0bfc9260256acd38f8327d962287edb9fcf->enter($__internal_357a98b1b69ab5740cbc3dc3b482a0bfc9260256acd38f8327d962287edb9fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_357a98b1b69ab5740cbc3dc3b482a0bfc9260256acd38f8327d962287edb9fcf->leave($__internal_357a98b1b69ab5740cbc3dc3b482a0bfc9260256acd38f8327d962287edb9fcf_prof);

        
        $__internal_47879a189e8f02075498a8346dbe4b9dd0b718b3b5ec63424f284490d0c6e4e0->leave($__internal_47879a189e8f02075498a8346dbe4b9dd0b718b3b5ec63424f284490d0c6e4e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

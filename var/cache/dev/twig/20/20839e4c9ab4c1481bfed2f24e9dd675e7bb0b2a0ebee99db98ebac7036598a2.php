<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9cf4ecfd74a1037bf1f0d06394a435916895ee5ce6b501033ff54a9c01b03044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_4751aaa0ef276f64b8b18d7b28a52414a45a50f2d7a0e83acf1e87a90889f19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4751aaa0ef276f64b8b18d7b28a52414a45a50f2d7a0e83acf1e87a90889f19e->enter($__internal_4751aaa0ef276f64b8b18d7b28a52414a45a50f2d7a0e83acf1e87a90889f19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e8c6308d69046374b9e042d928243514a4d1abff9c8983c038136249821b2fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c6308d69046374b9e042d928243514a4d1abff9c8983c038136249821b2fff->enter($__internal_e8c6308d69046374b9e042d928243514a4d1abff9c8983c038136249821b2fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4751aaa0ef276f64b8b18d7b28a52414a45a50f2d7a0e83acf1e87a90889f19e->leave($__internal_4751aaa0ef276f64b8b18d7b28a52414a45a50f2d7a0e83acf1e87a90889f19e_prof);

        
        $__internal_e8c6308d69046374b9e042d928243514a4d1abff9c8983c038136249821b2fff->leave($__internal_e8c6308d69046374b9e042d928243514a4d1abff9c8983c038136249821b2fff_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ed0e4d03d0a106452530da1cf40dd538b9ca1fe9117e642078cc89878929a413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0e4d03d0a106452530da1cf40dd538b9ca1fe9117e642078cc89878929a413->enter($__internal_ed0e4d03d0a106452530da1cf40dd538b9ca1fe9117e642078cc89878929a413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4edb1aaa45bfb536a0857fb812890a75d5ce439e409da5f829a98a33f71cc5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edb1aaa45bfb536a0857fb812890a75d5ce439e409da5f829a98a33f71cc5ce->enter($__internal_4edb1aaa45bfb536a0857fb812890a75d5ce439e409da5f829a98a33f71cc5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4edb1aaa45bfb536a0857fb812890a75d5ce439e409da5f829a98a33f71cc5ce->leave($__internal_4edb1aaa45bfb536a0857fb812890a75d5ce439e409da5f829a98a33f71cc5ce_prof);

        
        $__internal_ed0e4d03d0a106452530da1cf40dd538b9ca1fe9117e642078cc89878929a413->leave($__internal_ed0e4d03d0a106452530da1cf40dd538b9ca1fe9117e642078cc89878929a413_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_898c232d847ac51dbd0e3574d68e030211b6aaf65be362daaf8c25431980032f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898c232d847ac51dbd0e3574d68e030211b6aaf65be362daaf8c25431980032f->enter($__internal_898c232d847ac51dbd0e3574d68e030211b6aaf65be362daaf8c25431980032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18cc4b2324e107a58a8df2531c25470fed3e75b56a986d4126e60d4ac316461d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cc4b2324e107a58a8df2531c25470fed3e75b56a986d4126e60d4ac316461d->enter($__internal_18cc4b2324e107a58a8df2531c25470fed3e75b56a986d4126e60d4ac316461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_18cc4b2324e107a58a8df2531c25470fed3e75b56a986d4126e60d4ac316461d->leave($__internal_18cc4b2324e107a58a8df2531c25470fed3e75b56a986d4126e60d4ac316461d_prof);

        
        $__internal_898c232d847ac51dbd0e3574d68e030211b6aaf65be362daaf8c25431980032f->leave($__internal_898c232d847ac51dbd0e3574d68e030211b6aaf65be362daaf8c25431980032f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

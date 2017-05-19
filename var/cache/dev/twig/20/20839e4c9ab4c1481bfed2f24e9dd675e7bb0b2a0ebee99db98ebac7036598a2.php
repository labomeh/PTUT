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
        $__internal_4b5e66ad2cc2a1c88908c94cc4b61b3c2919aa3bc371454ef701a4972cafad4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5e66ad2cc2a1c88908c94cc4b61b3c2919aa3bc371454ef701a4972cafad4a->enter($__internal_4b5e66ad2cc2a1c88908c94cc4b61b3c2919aa3bc371454ef701a4972cafad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_757364f3ab25042c22692762ca0f5c7f0e444eb2fdbd96ca8ef17af6fff10e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757364f3ab25042c22692762ca0f5c7f0e444eb2fdbd96ca8ef17af6fff10e2f->enter($__internal_757364f3ab25042c22692762ca0f5c7f0e444eb2fdbd96ca8ef17af6fff10e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b5e66ad2cc2a1c88908c94cc4b61b3c2919aa3bc371454ef701a4972cafad4a->leave($__internal_4b5e66ad2cc2a1c88908c94cc4b61b3c2919aa3bc371454ef701a4972cafad4a_prof);

        
        $__internal_757364f3ab25042c22692762ca0f5c7f0e444eb2fdbd96ca8ef17af6fff10e2f->leave($__internal_757364f3ab25042c22692762ca0f5c7f0e444eb2fdbd96ca8ef17af6fff10e2f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_222c9da8bfa4fff22742e91b526353046ccd441a3056bf9bf97c5a89323a36b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222c9da8bfa4fff22742e91b526353046ccd441a3056bf9bf97c5a89323a36b8->enter($__internal_222c9da8bfa4fff22742e91b526353046ccd441a3056bf9bf97c5a89323a36b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_849be1866bea71c98d25c37bdc6b9fa8f073b4208c6daae064a674873a77053a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849be1866bea71c98d25c37bdc6b9fa8f073b4208c6daae064a674873a77053a->enter($__internal_849be1866bea71c98d25c37bdc6b9fa8f073b4208c6daae064a674873a77053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_849be1866bea71c98d25c37bdc6b9fa8f073b4208c6daae064a674873a77053a->leave($__internal_849be1866bea71c98d25c37bdc6b9fa8f073b4208c6daae064a674873a77053a_prof);

        
        $__internal_222c9da8bfa4fff22742e91b526353046ccd441a3056bf9bf97c5a89323a36b8->leave($__internal_222c9da8bfa4fff22742e91b526353046ccd441a3056bf9bf97c5a89323a36b8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cce7ddf4dfbb95822e7aa910f06621545324a250345990b727beb6a4b0d60acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce7ddf4dfbb95822e7aa910f06621545324a250345990b727beb6a4b0d60acd->enter($__internal_cce7ddf4dfbb95822e7aa910f06621545324a250345990b727beb6a4b0d60acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c83707ed7d878e0e115ff77cebcbe559f5ce4427a87533744020a01286f5ee7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83707ed7d878e0e115ff77cebcbe559f5ce4427a87533744020a01286f5ee7a->enter($__internal_c83707ed7d878e0e115ff77cebcbe559f5ce4427a87533744020a01286f5ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c83707ed7d878e0e115ff77cebcbe559f5ce4427a87533744020a01286f5ee7a->leave($__internal_c83707ed7d878e0e115ff77cebcbe559f5ce4427a87533744020a01286f5ee7a_prof);

        
        $__internal_cce7ddf4dfbb95822e7aa910f06621545324a250345990b727beb6a4b0d60acd->leave($__internal_cce7ddf4dfbb95822e7aa910f06621545324a250345990b727beb6a4b0d60acd_prof);

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

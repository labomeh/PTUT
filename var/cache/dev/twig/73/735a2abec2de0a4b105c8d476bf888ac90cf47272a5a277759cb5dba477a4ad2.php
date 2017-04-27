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
        $__internal_1f66e210722c5f6fb586d85fad0741b2f36da6ae235756f2d3d68327b6de0a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f66e210722c5f6fb586d85fad0741b2f36da6ae235756f2d3d68327b6de0a12->enter($__internal_1f66e210722c5f6fb586d85fad0741b2f36da6ae235756f2d3d68327b6de0a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ae49bf8a5a3460ee41cdd91c286767a0e3480e96d705afe399277e0a72f6220d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae49bf8a5a3460ee41cdd91c286767a0e3480e96d705afe399277e0a72f6220d->enter($__internal_ae49bf8a5a3460ee41cdd91c286767a0e3480e96d705afe399277e0a72f6220d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f66e210722c5f6fb586d85fad0741b2f36da6ae235756f2d3d68327b6de0a12->leave($__internal_1f66e210722c5f6fb586d85fad0741b2f36da6ae235756f2d3d68327b6de0a12_prof);

        
        $__internal_ae49bf8a5a3460ee41cdd91c286767a0e3480e96d705afe399277e0a72f6220d->leave($__internal_ae49bf8a5a3460ee41cdd91c286767a0e3480e96d705afe399277e0a72f6220d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0dedbfb0916ce294373be56f401461bae92482c2a0085f05f53906140ff5bca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dedbfb0916ce294373be56f401461bae92482c2a0085f05f53906140ff5bca9->enter($__internal_0dedbfb0916ce294373be56f401461bae92482c2a0085f05f53906140ff5bca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_037e93781608e9c4713b036f78d66889a92f839c472083c8782fbcce1304e898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037e93781608e9c4713b036f78d66889a92f839c472083c8782fbcce1304e898->enter($__internal_037e93781608e9c4713b036f78d66889a92f839c472083c8782fbcce1304e898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_037e93781608e9c4713b036f78d66889a92f839c472083c8782fbcce1304e898->leave($__internal_037e93781608e9c4713b036f78d66889a92f839c472083c8782fbcce1304e898_prof);

        
        $__internal_0dedbfb0916ce294373be56f401461bae92482c2a0085f05f53906140ff5bca9->leave($__internal_0dedbfb0916ce294373be56f401461bae92482c2a0085f05f53906140ff5bca9_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e31d5f811939ec7a3566dd93e339173770885cc8fc69370bea24c72d8deaa0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31d5f811939ec7a3566dd93e339173770885cc8fc69370bea24c72d8deaa0a4->enter($__internal_e31d5f811939ec7a3566dd93e339173770885cc8fc69370bea24c72d8deaa0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5f334c0c15a7776df138e5b9ba012b3926c9b13095e0487543eb7e2a0c61cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f334c0c15a7776df138e5b9ba012b3926c9b13095e0487543eb7e2a0c61cf6->enter($__internal_e5f334c0c15a7776df138e5b9ba012b3926c9b13095e0487543eb7e2a0c61cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e5f334c0c15a7776df138e5b9ba012b3926c9b13095e0487543eb7e2a0c61cf6->leave($__internal_e5f334c0c15a7776df138e5b9ba012b3926c9b13095e0487543eb7e2a0c61cf6_prof);

        
        $__internal_e31d5f811939ec7a3566dd93e339173770885cc8fc69370bea24c72d8deaa0a4->leave($__internal_e31d5f811939ec7a3566dd93e339173770885cc8fc69370bea24c72d8deaa0a4_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

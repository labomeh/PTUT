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
        $__internal_7716a7772ccc2caf93d38d2bf5df2c6eb2cd11f5a7a0757c3ad03f6a6e929b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7716a7772ccc2caf93d38d2bf5df2c6eb2cd11f5a7a0757c3ad03f6a6e929b67->enter($__internal_7716a7772ccc2caf93d38d2bf5df2c6eb2cd11f5a7a0757c3ad03f6a6e929b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1384e31e3edb12ee535f27736bdf6544d935b1dad32d4f1fc6b94b53d1d39499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1384e31e3edb12ee535f27736bdf6544d935b1dad32d4f1fc6b94b53d1d39499->enter($__internal_1384e31e3edb12ee535f27736bdf6544d935b1dad32d4f1fc6b94b53d1d39499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7716a7772ccc2caf93d38d2bf5df2c6eb2cd11f5a7a0757c3ad03f6a6e929b67->leave($__internal_7716a7772ccc2caf93d38d2bf5df2c6eb2cd11f5a7a0757c3ad03f6a6e929b67_prof);

        
        $__internal_1384e31e3edb12ee535f27736bdf6544d935b1dad32d4f1fc6b94b53d1d39499->leave($__internal_1384e31e3edb12ee535f27736bdf6544d935b1dad32d4f1fc6b94b53d1d39499_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3e09cd9baea139bc22035785bb7bd275f37c6e2e8d02c5df6e3d099f1a4a5292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e09cd9baea139bc22035785bb7bd275f37c6e2e8d02c5df6e3d099f1a4a5292->enter($__internal_3e09cd9baea139bc22035785bb7bd275f37c6e2e8d02c5df6e3d099f1a4a5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a0ebc88f7d4d35d37c000205aaf669d3012237d8194a5b2265c29d9506fab7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ebc88f7d4d35d37c000205aaf669d3012237d8194a5b2265c29d9506fab7a9->enter($__internal_a0ebc88f7d4d35d37c000205aaf669d3012237d8194a5b2265c29d9506fab7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a0ebc88f7d4d35d37c000205aaf669d3012237d8194a5b2265c29d9506fab7a9->leave($__internal_a0ebc88f7d4d35d37c000205aaf669d3012237d8194a5b2265c29d9506fab7a9_prof);

        
        $__internal_3e09cd9baea139bc22035785bb7bd275f37c6e2e8d02c5df6e3d099f1a4a5292->leave($__internal_3e09cd9baea139bc22035785bb7bd275f37c6e2e8d02c5df6e3d099f1a4a5292_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b5c8a97b873bb360d3de0adc6dbac5f44146937fe0dd5a002eb40519efee5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5c8a97b873bb360d3de0adc6dbac5f44146937fe0dd5a002eb40519efee5f7->enter($__internal_8b5c8a97b873bb360d3de0adc6dbac5f44146937fe0dd5a002eb40519efee5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3fc2703e15d43f9ea10b236cef977bfb1b3afe62df016e94ee200dd7086f622f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc2703e15d43f9ea10b236cef977bfb1b3afe62df016e94ee200dd7086f622f->enter($__internal_3fc2703e15d43f9ea10b236cef977bfb1b3afe62df016e94ee200dd7086f622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3fc2703e15d43f9ea10b236cef977bfb1b3afe62df016e94ee200dd7086f622f->leave($__internal_3fc2703e15d43f9ea10b236cef977bfb1b3afe62df016e94ee200dd7086f622f_prof);

        
        $__internal_8b5c8a97b873bb360d3de0adc6dbac5f44146937fe0dd5a002eb40519efee5f7->leave($__internal_8b5c8a97b873bb360d3de0adc6dbac5f44146937fe0dd5a002eb40519efee5f7_prof);

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

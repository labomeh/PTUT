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
        $__internal_59515edb44d85407264d78cf7ffc5576a15bb2ffb070fe9f550d3f2f9291580d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59515edb44d85407264d78cf7ffc5576a15bb2ffb070fe9f550d3f2f9291580d->enter($__internal_59515edb44d85407264d78cf7ffc5576a15bb2ffb070fe9f550d3f2f9291580d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0f4184e1338bebf0ad30bbd162357f4b51a8de065c8ea1619ed474ec3be1b5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4184e1338bebf0ad30bbd162357f4b51a8de065c8ea1619ed474ec3be1b5ac->enter($__internal_0f4184e1338bebf0ad30bbd162357f4b51a8de065c8ea1619ed474ec3be1b5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59515edb44d85407264d78cf7ffc5576a15bb2ffb070fe9f550d3f2f9291580d->leave($__internal_59515edb44d85407264d78cf7ffc5576a15bb2ffb070fe9f550d3f2f9291580d_prof);

        
        $__internal_0f4184e1338bebf0ad30bbd162357f4b51a8de065c8ea1619ed474ec3be1b5ac->leave($__internal_0f4184e1338bebf0ad30bbd162357f4b51a8de065c8ea1619ed474ec3be1b5ac_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_09d0b80399f3f8d9c9f0822385512efe864965d707792dbd4e9ec77b12574360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d0b80399f3f8d9c9f0822385512efe864965d707792dbd4e9ec77b12574360->enter($__internal_09d0b80399f3f8d9c9f0822385512efe864965d707792dbd4e9ec77b12574360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5b92c453fe1920cb7a27b8724c00cffdd8ffc48d31f67c70b9a471615082dc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b92c453fe1920cb7a27b8724c00cffdd8ffc48d31f67c70b9a471615082dc9b->enter($__internal_5b92c453fe1920cb7a27b8724c00cffdd8ffc48d31f67c70b9a471615082dc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5b92c453fe1920cb7a27b8724c00cffdd8ffc48d31f67c70b9a471615082dc9b->leave($__internal_5b92c453fe1920cb7a27b8724c00cffdd8ffc48d31f67c70b9a471615082dc9b_prof);

        
        $__internal_09d0b80399f3f8d9c9f0822385512efe864965d707792dbd4e9ec77b12574360->leave($__internal_09d0b80399f3f8d9c9f0822385512efe864965d707792dbd4e9ec77b12574360_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f072eb7c3c546b54c586b358b36096557beabbdfe7f60de83ec1283dd90512b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f072eb7c3c546b54c586b358b36096557beabbdfe7f60de83ec1283dd90512b->enter($__internal_2f072eb7c3c546b54c586b358b36096557beabbdfe7f60de83ec1283dd90512b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc1bcdbe08c580350f9d89202de5d09f69a3408367e76a9291149314844e6d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1bcdbe08c580350f9d89202de5d09f69a3408367e76a9291149314844e6d72->enter($__internal_cc1bcdbe08c580350f9d89202de5d09f69a3408367e76a9291149314844e6d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_cc1bcdbe08c580350f9d89202de5d09f69a3408367e76a9291149314844e6d72->leave($__internal_cc1bcdbe08c580350f9d89202de5d09f69a3408367e76a9291149314844e6d72_prof);

        
        $__internal_2f072eb7c3c546b54c586b358b36096557beabbdfe7f60de83ec1283dd90512b->leave($__internal_2f072eb7c3c546b54c586b358b36096557beabbdfe7f60de83ec1283dd90512b_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

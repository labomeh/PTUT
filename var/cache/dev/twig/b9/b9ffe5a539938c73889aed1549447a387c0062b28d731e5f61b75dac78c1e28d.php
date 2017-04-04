<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8178611cfe1588befd15597a7302315c603d9142b388a25151f7b30e2f73da3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8178611cfe1588befd15597a7302315c603d9142b388a25151f7b30e2f73da3f->enter($__internal_8178611cfe1588befd15597a7302315c603d9142b388a25151f7b30e2f73da3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a0da6eb23dc9b61699cbe41b0240d68ad833e6e7d319f8e6ece283c827384ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0da6eb23dc9b61699cbe41b0240d68ad833e6e7d319f8e6ece283c827384ef5->enter($__internal_a0da6eb23dc9b61699cbe41b0240d68ad833e6e7d319f8e6ece283c827384ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8178611cfe1588befd15597a7302315c603d9142b388a25151f7b30e2f73da3f->leave($__internal_8178611cfe1588befd15597a7302315c603d9142b388a25151f7b30e2f73da3f_prof);

        
        $__internal_a0da6eb23dc9b61699cbe41b0240d68ad833e6e7d319f8e6ece283c827384ef5->leave($__internal_a0da6eb23dc9b61699cbe41b0240d68ad833e6e7d319f8e6ece283c827384ef5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2574228f591d1034ae180c48f3ff2822ec9607c2629d5df71c89fa5864d357c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2574228f591d1034ae180c48f3ff2822ec9607c2629d5df71c89fa5864d357c8->enter($__internal_2574228f591d1034ae180c48f3ff2822ec9607c2629d5df71c89fa5864d357c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0d66469dbd614741b3955bc7a4ca680424ab7647484f6b80e0faffd5fe62b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d66469dbd614741b3955bc7a4ca680424ab7647484f6b80e0faffd5fe62b7a->enter($__internal_c0d66469dbd614741b3955bc7a4ca680424ab7647484f6b80e0faffd5fe62b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c0d66469dbd614741b3955bc7a4ca680424ab7647484f6b80e0faffd5fe62b7a->leave($__internal_c0d66469dbd614741b3955bc7a4ca680424ab7647484f6b80e0faffd5fe62b7a_prof);

        
        $__internal_2574228f591d1034ae180c48f3ff2822ec9607c2629d5df71c89fa5864d357c8->leave($__internal_2574228f591d1034ae180c48f3ff2822ec9607c2629d5df71c89fa5864d357c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_750aaa9c398d10a52e06a814bedc27a4c5bda132f9e033fd4d3ca826990ffe8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750aaa9c398d10a52e06a814bedc27a4c5bda132f9e033fd4d3ca826990ffe8a->enter($__internal_750aaa9c398d10a52e06a814bedc27a4c5bda132f9e033fd4d3ca826990ffe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_304afe209ef535c57c97593a03aac324b7c0f742ed11cbdc21f9150b870e12a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304afe209ef535c57c97593a03aac324b7c0f742ed11cbdc21f9150b870e12a5->enter($__internal_304afe209ef535c57c97593a03aac324b7c0f742ed11cbdc21f9150b870e12a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_304afe209ef535c57c97593a03aac324b7c0f742ed11cbdc21f9150b870e12a5->leave($__internal_304afe209ef535c57c97593a03aac324b7c0f742ed11cbdc21f9150b870e12a5_prof);

        
        $__internal_750aaa9c398d10a52e06a814bedc27a4c5bda132f9e033fd4d3ca826990ffe8a->leave($__internal_750aaa9c398d10a52e06a814bedc27a4c5bda132f9e033fd4d3ca826990ffe8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

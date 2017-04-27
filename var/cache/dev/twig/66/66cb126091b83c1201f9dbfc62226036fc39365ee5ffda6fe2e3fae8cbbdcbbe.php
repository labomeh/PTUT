<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_35dda62958d97826c4833b58a9730c1920fe21417245577fcb1517daec7743bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_446e9888df322e0b6a8026c99a274b3bda3b80e52a7179e366ca8daf2c2f51bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446e9888df322e0b6a8026c99a274b3bda3b80e52a7179e366ca8daf2c2f51bc->enter($__internal_446e9888df322e0b6a8026c99a274b3bda3b80e52a7179e366ca8daf2c2f51bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1020321c1f9da465eb4406ad491acd5a401b199466e4e73c971df4c09ca2f0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1020321c1f9da465eb4406ad491acd5a401b199466e4e73c971df4c09ca2f0a7->enter($__internal_1020321c1f9da465eb4406ad491acd5a401b199466e4e73c971df4c09ca2f0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446e9888df322e0b6a8026c99a274b3bda3b80e52a7179e366ca8daf2c2f51bc->leave($__internal_446e9888df322e0b6a8026c99a274b3bda3b80e52a7179e366ca8daf2c2f51bc_prof);

        
        $__internal_1020321c1f9da465eb4406ad491acd5a401b199466e4e73c971df4c09ca2f0a7->leave($__internal_1020321c1f9da465eb4406ad491acd5a401b199466e4e73c971df4c09ca2f0a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_093886b95b840acb72e2452825103fff5353ba90b475bdc0d05dd0b7e263dd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093886b95b840acb72e2452825103fff5353ba90b475bdc0d05dd0b7e263dd26->enter($__internal_093886b95b840acb72e2452825103fff5353ba90b475bdc0d05dd0b7e263dd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6891c90e510dd1e4831b935306bc3606e847ef6ad5f9bc0d58e554ed5eccc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6891c90e510dd1e4831b935306bc3606e847ef6ad5f9bc0d58e554ed5eccc4f->enter($__internal_d6891c90e510dd1e4831b935306bc3606e847ef6ad5f9bc0d58e554ed5eccc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d6891c90e510dd1e4831b935306bc3606e847ef6ad5f9bc0d58e554ed5eccc4f->leave($__internal_d6891c90e510dd1e4831b935306bc3606e847ef6ad5f9bc0d58e554ed5eccc4f_prof);

        
        $__internal_093886b95b840acb72e2452825103fff5353ba90b475bdc0d05dd0b7e263dd26->leave($__internal_093886b95b840acb72e2452825103fff5353ba90b475bdc0d05dd0b7e263dd26_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb10e7d0f5d5429352be107873838a4020abec1849de0fd1ecf6d83d1e431394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb10e7d0f5d5429352be107873838a4020abec1849de0fd1ecf6d83d1e431394->enter($__internal_eb10e7d0f5d5429352be107873838a4020abec1849de0fd1ecf6d83d1e431394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52ccfb81b4f2acf6dc77de80ecb62c63fbed7fc128847750f844e3742b784fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ccfb81b4f2acf6dc77de80ecb62c63fbed7fc128847750f844e3742b784fba->enter($__internal_52ccfb81b4f2acf6dc77de80ecb62c63fbed7fc128847750f844e3742b784fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52ccfb81b4f2acf6dc77de80ecb62c63fbed7fc128847750f844e3742b784fba->leave($__internal_52ccfb81b4f2acf6dc77de80ecb62c63fbed7fc128847750f844e3742b784fba_prof);

        
        $__internal_eb10e7d0f5d5429352be107873838a4020abec1849de0fd1ecf6d83d1e431394->leave($__internal_eb10e7d0f5d5429352be107873838a4020abec1849de0fd1ecf6d83d1e431394_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

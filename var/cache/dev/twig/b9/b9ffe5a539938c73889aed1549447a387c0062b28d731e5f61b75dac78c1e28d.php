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
        $__internal_46d3ed5fd2a07151bf6111e68447d66aa03c61bd6acfa0355e38a52a527ec19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d3ed5fd2a07151bf6111e68447d66aa03c61bd6acfa0355e38a52a527ec19d->enter($__internal_46d3ed5fd2a07151bf6111e68447d66aa03c61bd6acfa0355e38a52a527ec19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_89db515470f8ed9a72b088f243283dcac940314ea09a454c306e76d2bc0d40b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89db515470f8ed9a72b088f243283dcac940314ea09a454c306e76d2bc0d40b6->enter($__internal_89db515470f8ed9a72b088f243283dcac940314ea09a454c306e76d2bc0d40b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d3ed5fd2a07151bf6111e68447d66aa03c61bd6acfa0355e38a52a527ec19d->leave($__internal_46d3ed5fd2a07151bf6111e68447d66aa03c61bd6acfa0355e38a52a527ec19d_prof);

        
        $__internal_89db515470f8ed9a72b088f243283dcac940314ea09a454c306e76d2bc0d40b6->leave($__internal_89db515470f8ed9a72b088f243283dcac940314ea09a454c306e76d2bc0d40b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_585706b85a10cf621f36c4026020f939a830b171e3e5e709f250f0c63a2504ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585706b85a10cf621f36c4026020f939a830b171e3e5e709f250f0c63a2504ee->enter($__internal_585706b85a10cf621f36c4026020f939a830b171e3e5e709f250f0c63a2504ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdbe5e511689efb26844ba2f67b2a27c4acc00bb6f721d694727ca0b8bef7a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbe5e511689efb26844ba2f67b2a27c4acc00bb6f721d694727ca0b8bef7a08->enter($__internal_fdbe5e511689efb26844ba2f67b2a27c4acc00bb6f721d694727ca0b8bef7a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fdbe5e511689efb26844ba2f67b2a27c4acc00bb6f721d694727ca0b8bef7a08->leave($__internal_fdbe5e511689efb26844ba2f67b2a27c4acc00bb6f721d694727ca0b8bef7a08_prof);

        
        $__internal_585706b85a10cf621f36c4026020f939a830b171e3e5e709f250f0c63a2504ee->leave($__internal_585706b85a10cf621f36c4026020f939a830b171e3e5e709f250f0c63a2504ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d0c81216452886d53f1ff4db1de93819ec9640463c49b88adb4936697aa2fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0c81216452886d53f1ff4db1de93819ec9640463c49b88adb4936697aa2fca->enter($__internal_1d0c81216452886d53f1ff4db1de93819ec9640463c49b88adb4936697aa2fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02ca55f2a806ab767dcfa037aa9954c36066da00ab4e7044dfeb5b5509e1e158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ca55f2a806ab767dcfa037aa9954c36066da00ab4e7044dfeb5b5509e1e158->enter($__internal_02ca55f2a806ab767dcfa037aa9954c36066da00ab4e7044dfeb5b5509e1e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02ca55f2a806ab767dcfa037aa9954c36066da00ab4e7044dfeb5b5509e1e158->leave($__internal_02ca55f2a806ab767dcfa037aa9954c36066da00ab4e7044dfeb5b5509e1e158_prof);

        
        $__internal_1d0c81216452886d53f1ff4db1de93819ec9640463c49b88adb4936697aa2fca->leave($__internal_1d0c81216452886d53f1ff4db1de93819ec9640463c49b88adb4936697aa2fca_prof);

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

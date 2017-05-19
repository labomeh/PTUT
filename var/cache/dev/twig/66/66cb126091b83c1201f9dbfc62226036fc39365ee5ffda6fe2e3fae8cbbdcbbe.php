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
        $__internal_cb93f268ba595fa3285a1d5956bcb5ed5777c1bca576d70cc18512c2cc86da93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb93f268ba595fa3285a1d5956bcb5ed5777c1bca576d70cc18512c2cc86da93->enter($__internal_cb93f268ba595fa3285a1d5956bcb5ed5777c1bca576d70cc18512c2cc86da93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f5cbe491dc688d586a733a4bf5d6bc7ad76e5662164689b9bb83f43e2ab91646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cbe491dc688d586a733a4bf5d6bc7ad76e5662164689b9bb83f43e2ab91646->enter($__internal_f5cbe491dc688d586a733a4bf5d6bc7ad76e5662164689b9bb83f43e2ab91646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb93f268ba595fa3285a1d5956bcb5ed5777c1bca576d70cc18512c2cc86da93->leave($__internal_cb93f268ba595fa3285a1d5956bcb5ed5777c1bca576d70cc18512c2cc86da93_prof);

        
        $__internal_f5cbe491dc688d586a733a4bf5d6bc7ad76e5662164689b9bb83f43e2ab91646->leave($__internal_f5cbe491dc688d586a733a4bf5d6bc7ad76e5662164689b9bb83f43e2ab91646_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e6b96f87b57c42252dfe0896a250e71a1dae9aa378e45b18c017117ab9f3a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6b96f87b57c42252dfe0896a250e71a1dae9aa378e45b18c017117ab9f3a00->enter($__internal_2e6b96f87b57c42252dfe0896a250e71a1dae9aa378e45b18c017117ab9f3a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20e28f6286f7c0b598b8ccf0bbc4201bba33a9d46ee3d5e34512f1a79476edce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e28f6286f7c0b598b8ccf0bbc4201bba33a9d46ee3d5e34512f1a79476edce->enter($__internal_20e28f6286f7c0b598b8ccf0bbc4201bba33a9d46ee3d5e34512f1a79476edce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_20e28f6286f7c0b598b8ccf0bbc4201bba33a9d46ee3d5e34512f1a79476edce->leave($__internal_20e28f6286f7c0b598b8ccf0bbc4201bba33a9d46ee3d5e34512f1a79476edce_prof);

        
        $__internal_2e6b96f87b57c42252dfe0896a250e71a1dae9aa378e45b18c017117ab9f3a00->leave($__internal_2e6b96f87b57c42252dfe0896a250e71a1dae9aa378e45b18c017117ab9f3a00_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f090adda1e87f81d77786000517ab019d7c7bf3b4213c4b81900c88034f6cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f090adda1e87f81d77786000517ab019d7c7bf3b4213c4b81900c88034f6cff->enter($__internal_5f090adda1e87f81d77786000517ab019d7c7bf3b4213c4b81900c88034f6cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_babe57f94d86bda9884b8ab58df722fb8ac52dbc09d88bdad281c91ea333fa47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babe57f94d86bda9884b8ab58df722fb8ac52dbc09d88bdad281c91ea333fa47->enter($__internal_babe57f94d86bda9884b8ab58df722fb8ac52dbc09d88bdad281c91ea333fa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_babe57f94d86bda9884b8ab58df722fb8ac52dbc09d88bdad281c91ea333fa47->leave($__internal_babe57f94d86bda9884b8ab58df722fb8ac52dbc09d88bdad281c91ea333fa47_prof);

        
        $__internal_5f090adda1e87f81d77786000517ab019d7c7bf3b4213c4b81900c88034f6cff->leave($__internal_5f090adda1e87f81d77786000517ab019d7c7bf3b4213c4b81900c88034f6cff_prof);

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

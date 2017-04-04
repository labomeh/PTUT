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
        $__internal_6037dfa773ddadd53e021526121ec586838561f8705b6453727c2d8b5d828b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6037dfa773ddadd53e021526121ec586838561f8705b6453727c2d8b5d828b6e->enter($__internal_6037dfa773ddadd53e021526121ec586838561f8705b6453727c2d8b5d828b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c87e15f6ee5729a3d6fa5c279207d973e8576ad34ba133f349b5270f42990dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87e15f6ee5729a3d6fa5c279207d973e8576ad34ba133f349b5270f42990dd0->enter($__internal_c87e15f6ee5729a3d6fa5c279207d973e8576ad34ba133f349b5270f42990dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6037dfa773ddadd53e021526121ec586838561f8705b6453727c2d8b5d828b6e->leave($__internal_6037dfa773ddadd53e021526121ec586838561f8705b6453727c2d8b5d828b6e_prof);

        
        $__internal_c87e15f6ee5729a3d6fa5c279207d973e8576ad34ba133f349b5270f42990dd0->leave($__internal_c87e15f6ee5729a3d6fa5c279207d973e8576ad34ba133f349b5270f42990dd0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d44919e4a4448243fc6bcf14d4e96e6ce222c060e8338f379e208641cfb3734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d44919e4a4448243fc6bcf14d4e96e6ce222c060e8338f379e208641cfb3734->enter($__internal_2d44919e4a4448243fc6bcf14d4e96e6ce222c060e8338f379e208641cfb3734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9cedf9569efb09704ade94fc95445652183c862661dd515ed3747d6502d035ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cedf9569efb09704ade94fc95445652183c862661dd515ed3747d6502d035ea->enter($__internal_9cedf9569efb09704ade94fc95445652183c862661dd515ed3747d6502d035ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9cedf9569efb09704ade94fc95445652183c862661dd515ed3747d6502d035ea->leave($__internal_9cedf9569efb09704ade94fc95445652183c862661dd515ed3747d6502d035ea_prof);

        
        $__internal_2d44919e4a4448243fc6bcf14d4e96e6ce222c060e8338f379e208641cfb3734->leave($__internal_2d44919e4a4448243fc6bcf14d4e96e6ce222c060e8338f379e208641cfb3734_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_95ccb95ac20ac7794befc080faea5d4def71df1e9a5e2b2464ce6e408bd824e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ccb95ac20ac7794befc080faea5d4def71df1e9a5e2b2464ce6e408bd824e4->enter($__internal_95ccb95ac20ac7794befc080faea5d4def71df1e9a5e2b2464ce6e408bd824e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ab2a9ecf2f53f1a8fbf3f7e4f1186014a2ba24f42f0a9af28ff5666075647ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab2a9ecf2f53f1a8fbf3f7e4f1186014a2ba24f42f0a9af28ff5666075647ad->enter($__internal_4ab2a9ecf2f53f1a8fbf3f7e4f1186014a2ba24f42f0a9af28ff5666075647ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ab2a9ecf2f53f1a8fbf3f7e4f1186014a2ba24f42f0a9af28ff5666075647ad->leave($__internal_4ab2a9ecf2f53f1a8fbf3f7e4f1186014a2ba24f42f0a9af28ff5666075647ad_prof);

        
        $__internal_95ccb95ac20ac7794befc080faea5d4def71df1e9a5e2b2464ce6e408bd824e4->leave($__internal_95ccb95ac20ac7794befc080faea5d4def71df1e9a5e2b2464ce6e408bd824e4_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

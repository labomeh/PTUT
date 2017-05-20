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
        $__internal_772d60b230b5f2faa4d8b49c0514cd7fa1b0722b4c57868c2aadad5fe5f70c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772d60b230b5f2faa4d8b49c0514cd7fa1b0722b4c57868c2aadad5fe5f70c7f->enter($__internal_772d60b230b5f2faa4d8b49c0514cd7fa1b0722b4c57868c2aadad5fe5f70c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f0f9b82c44a5407bb6735582e21a298a8fc2a5ad5f1f4cc8f9093a8d3c03d99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f9b82c44a5407bb6735582e21a298a8fc2a5ad5f1f4cc8f9093a8d3c03d99c->enter($__internal_f0f9b82c44a5407bb6735582e21a298a8fc2a5ad5f1f4cc8f9093a8d3c03d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772d60b230b5f2faa4d8b49c0514cd7fa1b0722b4c57868c2aadad5fe5f70c7f->leave($__internal_772d60b230b5f2faa4d8b49c0514cd7fa1b0722b4c57868c2aadad5fe5f70c7f_prof);

        
        $__internal_f0f9b82c44a5407bb6735582e21a298a8fc2a5ad5f1f4cc8f9093a8d3c03d99c->leave($__internal_f0f9b82c44a5407bb6735582e21a298a8fc2a5ad5f1f4cc8f9093a8d3c03d99c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3801c60b00d6a8e43c1fd854495a2dbbb0f95954883f68fa1dca1c6fe24759b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3801c60b00d6a8e43c1fd854495a2dbbb0f95954883f68fa1dca1c6fe24759b->enter($__internal_c3801c60b00d6a8e43c1fd854495a2dbbb0f95954883f68fa1dca1c6fe24759b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8a366d4a5c1953599a67a59a0a96c051129ec288c1eea0317aebedca0e10bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a366d4a5c1953599a67a59a0a96c051129ec288c1eea0317aebedca0e10bda->enter($__internal_a8a366d4a5c1953599a67a59a0a96c051129ec288c1eea0317aebedca0e10bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a8a366d4a5c1953599a67a59a0a96c051129ec288c1eea0317aebedca0e10bda->leave($__internal_a8a366d4a5c1953599a67a59a0a96c051129ec288c1eea0317aebedca0e10bda_prof);

        
        $__internal_c3801c60b00d6a8e43c1fd854495a2dbbb0f95954883f68fa1dca1c6fe24759b->leave($__internal_c3801c60b00d6a8e43c1fd854495a2dbbb0f95954883f68fa1dca1c6fe24759b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c8d88f3bb6195680460cbd881408b98a3700ed0535d874026a54c598f6388ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8d88f3bb6195680460cbd881408b98a3700ed0535d874026a54c598f6388ae->enter($__internal_6c8d88f3bb6195680460cbd881408b98a3700ed0535d874026a54c598f6388ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3c3a40b812aba2cea545f096ea030a9c8724aebee76d3a71e11ac6842524525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c3a40b812aba2cea545f096ea030a9c8724aebee76d3a71e11ac6842524525->enter($__internal_e3c3a40b812aba2cea545f096ea030a9c8724aebee76d3a71e11ac6842524525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e3c3a40b812aba2cea545f096ea030a9c8724aebee76d3a71e11ac6842524525->leave($__internal_e3c3a40b812aba2cea545f096ea030a9c8724aebee76d3a71e11ac6842524525_prof);

        
        $__internal_6c8d88f3bb6195680460cbd881408b98a3700ed0535d874026a54c598f6388ae->leave($__internal_6c8d88f3bb6195680460cbd881408b98a3700ed0535d874026a54c598f6388ae_prof);

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

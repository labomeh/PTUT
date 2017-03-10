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
        $__internal_bb35c651aafc35c2fe54d5db3bc88e12cca0d37be605bb0e546040c913f7bcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb35c651aafc35c2fe54d5db3bc88e12cca0d37be605bb0e546040c913f7bcc8->enter($__internal_bb35c651aafc35c2fe54d5db3bc88e12cca0d37be605bb0e546040c913f7bcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1645b8fb096d4b2293130d112b03a28b012b4fcb65527ef00679b51234967e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1645b8fb096d4b2293130d112b03a28b012b4fcb65527ef00679b51234967e1f->enter($__internal_1645b8fb096d4b2293130d112b03a28b012b4fcb65527ef00679b51234967e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb35c651aafc35c2fe54d5db3bc88e12cca0d37be605bb0e546040c913f7bcc8->leave($__internal_bb35c651aafc35c2fe54d5db3bc88e12cca0d37be605bb0e546040c913f7bcc8_prof);

        
        $__internal_1645b8fb096d4b2293130d112b03a28b012b4fcb65527ef00679b51234967e1f->leave($__internal_1645b8fb096d4b2293130d112b03a28b012b4fcb65527ef00679b51234967e1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_916a1c9d9f1cd99ee749440d199e2a91bd3abf3f9b4f84c0a23dd0efdda4e5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916a1c9d9f1cd99ee749440d199e2a91bd3abf3f9b4f84c0a23dd0efdda4e5b8->enter($__internal_916a1c9d9f1cd99ee749440d199e2a91bd3abf3f9b4f84c0a23dd0efdda4e5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86fe50c2b9b40d9d8970ea5d4b0bc237fe044ca59c0a960bf1dd5eb759d465a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fe50c2b9b40d9d8970ea5d4b0bc237fe044ca59c0a960bf1dd5eb759d465a5->enter($__internal_86fe50c2b9b40d9d8970ea5d4b0bc237fe044ca59c0a960bf1dd5eb759d465a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_86fe50c2b9b40d9d8970ea5d4b0bc237fe044ca59c0a960bf1dd5eb759d465a5->leave($__internal_86fe50c2b9b40d9d8970ea5d4b0bc237fe044ca59c0a960bf1dd5eb759d465a5_prof);

        
        $__internal_916a1c9d9f1cd99ee749440d199e2a91bd3abf3f9b4f84c0a23dd0efdda4e5b8->leave($__internal_916a1c9d9f1cd99ee749440d199e2a91bd3abf3f9b4f84c0a23dd0efdda4e5b8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_88dd9a79808681cb820fdc8ebfa56aba31a8d0c0a10e3e95e4529e286cd5aafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88dd9a79808681cb820fdc8ebfa56aba31a8d0c0a10e3e95e4529e286cd5aafa->enter($__internal_88dd9a79808681cb820fdc8ebfa56aba31a8d0c0a10e3e95e4529e286cd5aafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7e8ad6ac5a5fa34ae5032ae91b2fae2f343632c4c69ecc849948d8a3935b4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e8ad6ac5a5fa34ae5032ae91b2fae2f343632c4c69ecc849948d8a3935b4e9->enter($__internal_d7e8ad6ac5a5fa34ae5032ae91b2fae2f343632c4c69ecc849948d8a3935b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d7e8ad6ac5a5fa34ae5032ae91b2fae2f343632c4c69ecc849948d8a3935b4e9->leave($__internal_d7e8ad6ac5a5fa34ae5032ae91b2fae2f343632c4c69ecc849948d8a3935b4e9_prof);

        
        $__internal_88dd9a79808681cb820fdc8ebfa56aba31a8d0c0a10e3e95e4529e286cd5aafa->leave($__internal_88dd9a79808681cb820fdc8ebfa56aba31a8d0c0a10e3e95e4529e286cd5aafa_prof);

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

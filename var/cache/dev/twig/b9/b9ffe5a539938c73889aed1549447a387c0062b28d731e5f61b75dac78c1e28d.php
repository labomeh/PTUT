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
        $__internal_32962c01fed07af9d2bdd1e8e8fd4097a14b2e62d5c162df6558a451e0ab53e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32962c01fed07af9d2bdd1e8e8fd4097a14b2e62d5c162df6558a451e0ab53e4->enter($__internal_32962c01fed07af9d2bdd1e8e8fd4097a14b2e62d5c162df6558a451e0ab53e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4a7bbb72dac6a0110354554b0f863a0076095769a916e7acf8d32fa414b9592e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7bbb72dac6a0110354554b0f863a0076095769a916e7acf8d32fa414b9592e->enter($__internal_4a7bbb72dac6a0110354554b0f863a0076095769a916e7acf8d32fa414b9592e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32962c01fed07af9d2bdd1e8e8fd4097a14b2e62d5c162df6558a451e0ab53e4->leave($__internal_32962c01fed07af9d2bdd1e8e8fd4097a14b2e62d5c162df6558a451e0ab53e4_prof);

        
        $__internal_4a7bbb72dac6a0110354554b0f863a0076095769a916e7acf8d32fa414b9592e->leave($__internal_4a7bbb72dac6a0110354554b0f863a0076095769a916e7acf8d32fa414b9592e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d16834073a7bf3a0144d729f88bcb310d2b5160d9125caebec5efa0081aece1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16834073a7bf3a0144d729f88bcb310d2b5160d9125caebec5efa0081aece1e->enter($__internal_d16834073a7bf3a0144d729f88bcb310d2b5160d9125caebec5efa0081aece1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84961ad25f5c9786c8e6a281371db881630064cce93f1cb560257901f269756b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84961ad25f5c9786c8e6a281371db881630064cce93f1cb560257901f269756b->enter($__internal_84961ad25f5c9786c8e6a281371db881630064cce93f1cb560257901f269756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_84961ad25f5c9786c8e6a281371db881630064cce93f1cb560257901f269756b->leave($__internal_84961ad25f5c9786c8e6a281371db881630064cce93f1cb560257901f269756b_prof);

        
        $__internal_d16834073a7bf3a0144d729f88bcb310d2b5160d9125caebec5efa0081aece1e->leave($__internal_d16834073a7bf3a0144d729f88bcb310d2b5160d9125caebec5efa0081aece1e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d897a916486ce3f5fdc791a52e1040e8ca214b0a3cee8f477f8fc4fa01a45dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d897a916486ce3f5fdc791a52e1040e8ca214b0a3cee8f477f8fc4fa01a45dfe->enter($__internal_d897a916486ce3f5fdc791a52e1040e8ca214b0a3cee8f477f8fc4fa01a45dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dd942b99051534983e01d94870e6aff973c57aae05d3246a44e659dc93c93d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd942b99051534983e01d94870e6aff973c57aae05d3246a44e659dc93c93d1->enter($__internal_2dd942b99051534983e01d94870e6aff973c57aae05d3246a44e659dc93c93d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2dd942b99051534983e01d94870e6aff973c57aae05d3246a44e659dc93c93d1->leave($__internal_2dd942b99051534983e01d94870e6aff973c57aae05d3246a44e659dc93c93d1_prof);

        
        $__internal_d897a916486ce3f5fdc791a52e1040e8ca214b0a3cee8f477f8fc4fa01a45dfe->leave($__internal_d897a916486ce3f5fdc791a52e1040e8ca214b0a3cee8f477f8fc4fa01a45dfe_prof);

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

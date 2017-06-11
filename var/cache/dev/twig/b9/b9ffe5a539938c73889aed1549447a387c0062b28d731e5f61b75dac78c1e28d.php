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
        $__internal_2e311cfeae2c3e833364c9eda99db131a73866ef895c3df242787a70ea84b40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e311cfeae2c3e833364c9eda99db131a73866ef895c3df242787a70ea84b40e->enter($__internal_2e311cfeae2c3e833364c9eda99db131a73866ef895c3df242787a70ea84b40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5340b24f3d9cb3296ac4515170447e308d4038ec7db3eb3b14f903be93743144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5340b24f3d9cb3296ac4515170447e308d4038ec7db3eb3b14f903be93743144->enter($__internal_5340b24f3d9cb3296ac4515170447e308d4038ec7db3eb3b14f903be93743144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e311cfeae2c3e833364c9eda99db131a73866ef895c3df242787a70ea84b40e->leave($__internal_2e311cfeae2c3e833364c9eda99db131a73866ef895c3df242787a70ea84b40e_prof);

        
        $__internal_5340b24f3d9cb3296ac4515170447e308d4038ec7db3eb3b14f903be93743144->leave($__internal_5340b24f3d9cb3296ac4515170447e308d4038ec7db3eb3b14f903be93743144_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d07e9c7bbaedc5f92dc6fbc778bdb255ee1509260688048dba5f843630dbfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d07e9c7bbaedc5f92dc6fbc778bdb255ee1509260688048dba5f843630dbfa4->enter($__internal_8d07e9c7bbaedc5f92dc6fbc778bdb255ee1509260688048dba5f843630dbfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19de9829a944a0398b019b9ec0b097ec4d28dc65013abf19196ceadf49c49034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19de9829a944a0398b019b9ec0b097ec4d28dc65013abf19196ceadf49c49034->enter($__internal_19de9829a944a0398b019b9ec0b097ec4d28dc65013abf19196ceadf49c49034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_19de9829a944a0398b019b9ec0b097ec4d28dc65013abf19196ceadf49c49034->leave($__internal_19de9829a944a0398b019b9ec0b097ec4d28dc65013abf19196ceadf49c49034_prof);

        
        $__internal_8d07e9c7bbaedc5f92dc6fbc778bdb255ee1509260688048dba5f843630dbfa4->leave($__internal_8d07e9c7bbaedc5f92dc6fbc778bdb255ee1509260688048dba5f843630dbfa4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b20f3d9a15003003ed5f887bfc62f7fd63cc06a60268bef8fdef538b78fa5bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20f3d9a15003003ed5f887bfc62f7fd63cc06a60268bef8fdef538b78fa5bec->enter($__internal_b20f3d9a15003003ed5f887bfc62f7fd63cc06a60268bef8fdef538b78fa5bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acff6daaa2451aa8409dbe43af305f64ccb4d707bcc7055d7162f68690a51f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acff6daaa2451aa8409dbe43af305f64ccb4d707bcc7055d7162f68690a51f35->enter($__internal_acff6daaa2451aa8409dbe43af305f64ccb4d707bcc7055d7162f68690a51f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acff6daaa2451aa8409dbe43af305f64ccb4d707bcc7055d7162f68690a51f35->leave($__internal_acff6daaa2451aa8409dbe43af305f64ccb4d707bcc7055d7162f68690a51f35_prof);

        
        $__internal_b20f3d9a15003003ed5f887bfc62f7fd63cc06a60268bef8fdef538b78fa5bec->leave($__internal_b20f3d9a15003003ed5f887bfc62f7fd63cc06a60268bef8fdef538b78fa5bec_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

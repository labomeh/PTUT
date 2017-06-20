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
        $__internal_b9605ef4629fc1a73386c713c767cb1a10c76838ebe75e0b0e80a0c117617aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9605ef4629fc1a73386c713c767cb1a10c76838ebe75e0b0e80a0c117617aa7->enter($__internal_b9605ef4629fc1a73386c713c767cb1a10c76838ebe75e0b0e80a0c117617aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_89c4999abb83676b41abd03d95bd2f17057c75ee2fa160839db51321f8884dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c4999abb83676b41abd03d95bd2f17057c75ee2fa160839db51321f8884dd2->enter($__internal_89c4999abb83676b41abd03d95bd2f17057c75ee2fa160839db51321f8884dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9605ef4629fc1a73386c713c767cb1a10c76838ebe75e0b0e80a0c117617aa7->leave($__internal_b9605ef4629fc1a73386c713c767cb1a10c76838ebe75e0b0e80a0c117617aa7_prof);

        
        $__internal_89c4999abb83676b41abd03d95bd2f17057c75ee2fa160839db51321f8884dd2->leave($__internal_89c4999abb83676b41abd03d95bd2f17057c75ee2fa160839db51321f8884dd2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b5c139431ff7136ed5e040f7d1b16abdfe9abba0454eeaafd42c05c59a86569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5c139431ff7136ed5e040f7d1b16abdfe9abba0454eeaafd42c05c59a86569->enter($__internal_1b5c139431ff7136ed5e040f7d1b16abdfe9abba0454eeaafd42c05c59a86569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_589e74bfcd51eca791361668a95fd0c3e87be96e2a710a52a2e2a57f96c1ede9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589e74bfcd51eca791361668a95fd0c3e87be96e2a710a52a2e2a57f96c1ede9->enter($__internal_589e74bfcd51eca791361668a95fd0c3e87be96e2a710a52a2e2a57f96c1ede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_589e74bfcd51eca791361668a95fd0c3e87be96e2a710a52a2e2a57f96c1ede9->leave($__internal_589e74bfcd51eca791361668a95fd0c3e87be96e2a710a52a2e2a57f96c1ede9_prof);

        
        $__internal_1b5c139431ff7136ed5e040f7d1b16abdfe9abba0454eeaafd42c05c59a86569->leave($__internal_1b5c139431ff7136ed5e040f7d1b16abdfe9abba0454eeaafd42c05c59a86569_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f59e5778e62392611ca963375abb50a8d019e9309b668f38ef2f62021e6dfa1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59e5778e62392611ca963375abb50a8d019e9309b668f38ef2f62021e6dfa1c->enter($__internal_f59e5778e62392611ca963375abb50a8d019e9309b668f38ef2f62021e6dfa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1cfebe4820f8a69441ba494ca6854e0a6bab27e507d65d127d3c5e8a0d76556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cfebe4820f8a69441ba494ca6854e0a6bab27e507d65d127d3c5e8a0d76556->enter($__internal_a1cfebe4820f8a69441ba494ca6854e0a6bab27e507d65d127d3c5e8a0d76556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1cfebe4820f8a69441ba494ca6854e0a6bab27e507d65d127d3c5e8a0d76556->leave($__internal_a1cfebe4820f8a69441ba494ca6854e0a6bab27e507d65d127d3c5e8a0d76556_prof);

        
        $__internal_f59e5778e62392611ca963375abb50a8d019e9309b668f38ef2f62021e6dfa1c->leave($__internal_f59e5778e62392611ca963375abb50a8d019e9309b668f38ef2f62021e6dfa1c_prof);

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

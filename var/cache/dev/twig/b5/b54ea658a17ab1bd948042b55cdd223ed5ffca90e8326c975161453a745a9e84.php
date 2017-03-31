<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f40736bf8191373bcae91d8ced9c0bde76cd8c067731c9662de141e0e1871de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93e55649c5ce3a47ee30eded7c228149c29ace2747133be7c73bf3da6134b0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e55649c5ce3a47ee30eded7c228149c29ace2747133be7c73bf3da6134b0e9->enter($__internal_93e55649c5ce3a47ee30eded7c228149c29ace2747133be7c73bf3da6134b0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4fa9ae0cae9ab5dcb8e4684b8716b56e21715ee064719722ab5900836815fc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa9ae0cae9ab5dcb8e4684b8716b56e21715ee064719722ab5900836815fc70->enter($__internal_4fa9ae0cae9ab5dcb8e4684b8716b56e21715ee064719722ab5900836815fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e55649c5ce3a47ee30eded7c228149c29ace2747133be7c73bf3da6134b0e9->leave($__internal_93e55649c5ce3a47ee30eded7c228149c29ace2747133be7c73bf3da6134b0e9_prof);

        
        $__internal_4fa9ae0cae9ab5dcb8e4684b8716b56e21715ee064719722ab5900836815fc70->leave($__internal_4fa9ae0cae9ab5dcb8e4684b8716b56e21715ee064719722ab5900836815fc70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdf3b095e06555365446da7fd725b215d810d18d4dd69f6bfe656c7b3da705da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf3b095e06555365446da7fd725b215d810d18d4dd69f6bfe656c7b3da705da->enter($__internal_cdf3b095e06555365446da7fd725b215d810d18d4dd69f6bfe656c7b3da705da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9197b88b1cd92131d7a0ef65a9556335363cd1c9d5111914a286c8804c661302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9197b88b1cd92131d7a0ef65a9556335363cd1c9d5111914a286c8804c661302->enter($__internal_9197b88b1cd92131d7a0ef65a9556335363cd1c9d5111914a286c8804c661302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9197b88b1cd92131d7a0ef65a9556335363cd1c9d5111914a286c8804c661302->leave($__internal_9197b88b1cd92131d7a0ef65a9556335363cd1c9d5111914a286c8804c661302_prof);

        
        $__internal_cdf3b095e06555365446da7fd725b215d810d18d4dd69f6bfe656c7b3da705da->leave($__internal_cdf3b095e06555365446da7fd725b215d810d18d4dd69f6bfe656c7b3da705da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7d781344b04f992263584f63943f2355b4cd1aff3180762f3ff9a844bb822d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d781344b04f992263584f63943f2355b4cd1aff3180762f3ff9a844bb822d3->enter($__internal_a7d781344b04f992263584f63943f2355b4cd1aff3180762f3ff9a844bb822d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_223b0714271c3e45b05da1b8cb4481d13b73198f10670c70c42ac06dddf72049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223b0714271c3e45b05da1b8cb4481d13b73198f10670c70c42ac06dddf72049->enter($__internal_223b0714271c3e45b05da1b8cb4481d13b73198f10670c70c42ac06dddf72049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_223b0714271c3e45b05da1b8cb4481d13b73198f10670c70c42ac06dddf72049->leave($__internal_223b0714271c3e45b05da1b8cb4481d13b73198f10670c70c42ac06dddf72049_prof);

        
        $__internal_a7d781344b04f992263584f63943f2355b4cd1aff3180762f3ff9a844bb822d3->leave($__internal_a7d781344b04f992263584f63943f2355b4cd1aff3180762f3ff9a844bb822d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

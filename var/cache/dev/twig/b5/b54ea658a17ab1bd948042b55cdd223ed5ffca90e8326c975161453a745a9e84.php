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
        $__internal_73c58e9021c8d4df980fb8995531e5588854f37f80b308d5d59dc7292f2bfe54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c58e9021c8d4df980fb8995531e5588854f37f80b308d5d59dc7292f2bfe54->enter($__internal_73c58e9021c8d4df980fb8995531e5588854f37f80b308d5d59dc7292f2bfe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_fc05d5fae4b4bb5cac73d611c45e4339bc214b4ee65b1ac5f8760e53f1e91578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc05d5fae4b4bb5cac73d611c45e4339bc214b4ee65b1ac5f8760e53f1e91578->enter($__internal_fc05d5fae4b4bb5cac73d611c45e4339bc214b4ee65b1ac5f8760e53f1e91578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c58e9021c8d4df980fb8995531e5588854f37f80b308d5d59dc7292f2bfe54->leave($__internal_73c58e9021c8d4df980fb8995531e5588854f37f80b308d5d59dc7292f2bfe54_prof);

        
        $__internal_fc05d5fae4b4bb5cac73d611c45e4339bc214b4ee65b1ac5f8760e53f1e91578->leave($__internal_fc05d5fae4b4bb5cac73d611c45e4339bc214b4ee65b1ac5f8760e53f1e91578_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c77ebc2e8a59ac3e3bc3c2af77c4960d147e55c3fff282db61607f6051cd302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c77ebc2e8a59ac3e3bc3c2af77c4960d147e55c3fff282db61607f6051cd302->enter($__internal_8c77ebc2e8a59ac3e3bc3c2af77c4960d147e55c3fff282db61607f6051cd302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fb51ea5661769d5c06e9fcc61e64c1a93c16e80234d541bfe5a890fdc343d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb51ea5661769d5c06e9fcc61e64c1a93c16e80234d541bfe5a890fdc343d3c->enter($__internal_8fb51ea5661769d5c06e9fcc61e64c1a93c16e80234d541bfe5a890fdc343d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8fb51ea5661769d5c06e9fcc61e64c1a93c16e80234d541bfe5a890fdc343d3c->leave($__internal_8fb51ea5661769d5c06e9fcc61e64c1a93c16e80234d541bfe5a890fdc343d3c_prof);

        
        $__internal_8c77ebc2e8a59ac3e3bc3c2af77c4960d147e55c3fff282db61607f6051cd302->leave($__internal_8c77ebc2e8a59ac3e3bc3c2af77c4960d147e55c3fff282db61607f6051cd302_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7df62b90c2a1046849ce630305c5fb808af1e71d98a7c37d079da397ff59796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7df62b90c2a1046849ce630305c5fb808af1e71d98a7c37d079da397ff59796->enter($__internal_d7df62b90c2a1046849ce630305c5fb808af1e71d98a7c37d079da397ff59796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bdcef0742e0b03b61ca4ab2e00c15b8de2634e3ef723a46efd4c9c1708779a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdcef0742e0b03b61ca4ab2e00c15b8de2634e3ef723a46efd4c9c1708779a3->enter($__internal_9bdcef0742e0b03b61ca4ab2e00c15b8de2634e3ef723a46efd4c9c1708779a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9bdcef0742e0b03b61ca4ab2e00c15b8de2634e3ef723a46efd4c9c1708779a3->leave($__internal_9bdcef0742e0b03b61ca4ab2e00c15b8de2634e3ef723a46efd4c9c1708779a3_prof);

        
        $__internal_d7df62b90c2a1046849ce630305c5fb808af1e71d98a7c37d079da397ff59796->leave($__internal_d7df62b90c2a1046849ce630305c5fb808af1e71d98a7c37d079da397ff59796_prof);

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

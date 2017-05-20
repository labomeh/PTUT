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
        $__internal_45060339097a25f2fd91054a46c7b4434b5a3a57146061364aba45cfe0aa5043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45060339097a25f2fd91054a46c7b4434b5a3a57146061364aba45cfe0aa5043->enter($__internal_45060339097a25f2fd91054a46c7b4434b5a3a57146061364aba45cfe0aa5043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_57155fe24cc793b0311174c2e519008b2f1a9bb3fd0e5ba668e36245e89cec49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57155fe24cc793b0311174c2e519008b2f1a9bb3fd0e5ba668e36245e89cec49->enter($__internal_57155fe24cc793b0311174c2e519008b2f1a9bb3fd0e5ba668e36245e89cec49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45060339097a25f2fd91054a46c7b4434b5a3a57146061364aba45cfe0aa5043->leave($__internal_45060339097a25f2fd91054a46c7b4434b5a3a57146061364aba45cfe0aa5043_prof);

        
        $__internal_57155fe24cc793b0311174c2e519008b2f1a9bb3fd0e5ba668e36245e89cec49->leave($__internal_57155fe24cc793b0311174c2e519008b2f1a9bb3fd0e5ba668e36245e89cec49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9a7b0e4efb8189de6c6e0ac3a0f98edb4fd59a3a0bb11f131283f83f8ec0217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a7b0e4efb8189de6c6e0ac3a0f98edb4fd59a3a0bb11f131283f83f8ec0217->enter($__internal_a9a7b0e4efb8189de6c6e0ac3a0f98edb4fd59a3a0bb11f131283f83f8ec0217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0242eefbc4156efaa0697a555035895cc3bb65f6a02c92fe51b826ef8b07d0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0242eefbc4156efaa0697a555035895cc3bb65f6a02c92fe51b826ef8b07d0a9->enter($__internal_0242eefbc4156efaa0697a555035895cc3bb65f6a02c92fe51b826ef8b07d0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0242eefbc4156efaa0697a555035895cc3bb65f6a02c92fe51b826ef8b07d0a9->leave($__internal_0242eefbc4156efaa0697a555035895cc3bb65f6a02c92fe51b826ef8b07d0a9_prof);

        
        $__internal_a9a7b0e4efb8189de6c6e0ac3a0f98edb4fd59a3a0bb11f131283f83f8ec0217->leave($__internal_a9a7b0e4efb8189de6c6e0ac3a0f98edb4fd59a3a0bb11f131283f83f8ec0217_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8757047b0f6432fd98f7b0682885eef4a0de35434bfeff65fc02ef1e47821ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8757047b0f6432fd98f7b0682885eef4a0de35434bfeff65fc02ef1e47821ed->enter($__internal_a8757047b0f6432fd98f7b0682885eef4a0de35434bfeff65fc02ef1e47821ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2643e73b3a906e733d184b50b75a3c9156a36a13f4b9cc10718d87d487ad74f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2643e73b3a906e733d184b50b75a3c9156a36a13f4b9cc10718d87d487ad74f6->enter($__internal_2643e73b3a906e733d184b50b75a3c9156a36a13f4b9cc10718d87d487ad74f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2643e73b3a906e733d184b50b75a3c9156a36a13f4b9cc10718d87d487ad74f6->leave($__internal_2643e73b3a906e733d184b50b75a3c9156a36a13f4b9cc10718d87d487ad74f6_prof);

        
        $__internal_a8757047b0f6432fd98f7b0682885eef4a0de35434bfeff65fc02ef1e47821ed->leave($__internal_a8757047b0f6432fd98f7b0682885eef4a0de35434bfeff65fc02ef1e47821ed_prof);

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

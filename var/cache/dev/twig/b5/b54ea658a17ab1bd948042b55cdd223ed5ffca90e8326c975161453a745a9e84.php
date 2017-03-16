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
        $__internal_f626628c2f3353284a34df89fb4a55c499344723f86006a53493a71b97b53f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f626628c2f3353284a34df89fb4a55c499344723f86006a53493a71b97b53f56->enter($__internal_f626628c2f3353284a34df89fb4a55c499344723f86006a53493a71b97b53f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7b8a150356b3b683972387173b31fca96efda0f24440b929e006de2822dfb35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8a150356b3b683972387173b31fca96efda0f24440b929e006de2822dfb35e->enter($__internal_7b8a150356b3b683972387173b31fca96efda0f24440b929e006de2822dfb35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f626628c2f3353284a34df89fb4a55c499344723f86006a53493a71b97b53f56->leave($__internal_f626628c2f3353284a34df89fb4a55c499344723f86006a53493a71b97b53f56_prof);

        
        $__internal_7b8a150356b3b683972387173b31fca96efda0f24440b929e006de2822dfb35e->leave($__internal_7b8a150356b3b683972387173b31fca96efda0f24440b929e006de2822dfb35e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fdcafff6ddbf9ced49a16e70ad44d518115ea09cef7c2f0ac8f3ce9be34fe2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdcafff6ddbf9ced49a16e70ad44d518115ea09cef7c2f0ac8f3ce9be34fe2b->enter($__internal_6fdcafff6ddbf9ced49a16e70ad44d518115ea09cef7c2f0ac8f3ce9be34fe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17c6890d96d66787062e1702519b94bfbcb77a655d680e404abe685f673c48f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c6890d96d66787062e1702519b94bfbcb77a655d680e404abe685f673c48f7->enter($__internal_17c6890d96d66787062e1702519b94bfbcb77a655d680e404abe685f673c48f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_17c6890d96d66787062e1702519b94bfbcb77a655d680e404abe685f673c48f7->leave($__internal_17c6890d96d66787062e1702519b94bfbcb77a655d680e404abe685f673c48f7_prof);

        
        $__internal_6fdcafff6ddbf9ced49a16e70ad44d518115ea09cef7c2f0ac8f3ce9be34fe2b->leave($__internal_6fdcafff6ddbf9ced49a16e70ad44d518115ea09cef7c2f0ac8f3ce9be34fe2b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a989de00eea9df3d7b6649714ea0bea9e58b54962a9f084353b8f93b30715a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a989de00eea9df3d7b6649714ea0bea9e58b54962a9f084353b8f93b30715a5->enter($__internal_0a989de00eea9df3d7b6649714ea0bea9e58b54962a9f084353b8f93b30715a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4fb99e4f01c18f9d2e3137aec85f6fb31ab01312d19509ec1807878ef63152c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fb99e4f01c18f9d2e3137aec85f6fb31ab01312d19509ec1807878ef63152c->enter($__internal_b4fb99e4f01c18f9d2e3137aec85f6fb31ab01312d19509ec1807878ef63152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4fb99e4f01c18f9d2e3137aec85f6fb31ab01312d19509ec1807878ef63152c->leave($__internal_b4fb99e4f01c18f9d2e3137aec85f6fb31ab01312d19509ec1807878ef63152c_prof);

        
        $__internal_0a989de00eea9df3d7b6649714ea0bea9e58b54962a9f084353b8f93b30715a5->leave($__internal_0a989de00eea9df3d7b6649714ea0bea9e58b54962a9f084353b8f93b30715a5_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

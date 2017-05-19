<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4605bf05efe8f32a08493f79fd99b767097142122862dfe55af220441a895efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_17a177ac6a919219c6d7a79759f9737992267a852f96d2e0d072732299cb56a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a177ac6a919219c6d7a79759f9737992267a852f96d2e0d072732299cb56a6->enter($__internal_17a177ac6a919219c6d7a79759f9737992267a852f96d2e0d072732299cb56a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_94c7b555ab6997fde6fb95fdeb80e91b76f7a73b181e227bd30022dcc5c8bf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c7b555ab6997fde6fb95fdeb80e91b76f7a73b181e227bd30022dcc5c8bf14->enter($__internal_94c7b555ab6997fde6fb95fdeb80e91b76f7a73b181e227bd30022dcc5c8bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a177ac6a919219c6d7a79759f9737992267a852f96d2e0d072732299cb56a6->leave($__internal_17a177ac6a919219c6d7a79759f9737992267a852f96d2e0d072732299cb56a6_prof);

        
        $__internal_94c7b555ab6997fde6fb95fdeb80e91b76f7a73b181e227bd30022dcc5c8bf14->leave($__internal_94c7b555ab6997fde6fb95fdeb80e91b76f7a73b181e227bd30022dcc5c8bf14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edf8144740221692c1f457052339affcbc5d4e8a79d6d52d02cabe304351153e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf8144740221692c1f457052339affcbc5d4e8a79d6d52d02cabe304351153e->enter($__internal_edf8144740221692c1f457052339affcbc5d4e8a79d6d52d02cabe304351153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d1070d136691869831f122479d46477b031a1ea946eeac1207a09a0f4a2380a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1070d136691869831f122479d46477b031a1ea946eeac1207a09a0f4a2380a->enter($__internal_5d1070d136691869831f122479d46477b031a1ea946eeac1207a09a0f4a2380a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5d1070d136691869831f122479d46477b031a1ea946eeac1207a09a0f4a2380a->leave($__internal_5d1070d136691869831f122479d46477b031a1ea946eeac1207a09a0f4a2380a_prof);

        
        $__internal_edf8144740221692c1f457052339affcbc5d4e8a79d6d52d02cabe304351153e->leave($__internal_edf8144740221692c1f457052339affcbc5d4e8a79d6d52d02cabe304351153e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c6bcbbb8af415d3069a189d04c6bd4a56565ac51d771803f8d98ed2a4d0ebd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6bcbbb8af415d3069a189d04c6bd4a56565ac51d771803f8d98ed2a4d0ebd9->enter($__internal_9c6bcbbb8af415d3069a189d04c6bd4a56565ac51d771803f8d98ed2a4d0ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a849b89c279eaf733822c34a9feb8a2f1dae286df564f06e835e03f82f73b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a849b89c279eaf733822c34a9feb8a2f1dae286df564f06e835e03f82f73b91->enter($__internal_6a849b89c279eaf733822c34a9feb8a2f1dae286df564f06e835e03f82f73b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a849b89c279eaf733822c34a9feb8a2f1dae286df564f06e835e03f82f73b91->leave($__internal_6a849b89c279eaf733822c34a9feb8a2f1dae286df564f06e835e03f82f73b91_prof);

        
        $__internal_9c6bcbbb8af415d3069a189d04c6bd4a56565ac51d771803f8d98ed2a4d0ebd9->leave($__internal_9c6bcbbb8af415d3069a189d04c6bd4a56565ac51d771803f8d98ed2a4d0ebd9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

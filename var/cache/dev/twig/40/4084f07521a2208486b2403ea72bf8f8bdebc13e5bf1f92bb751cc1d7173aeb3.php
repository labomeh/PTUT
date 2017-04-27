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
        $__internal_5682782c9863a983fcd5a3929595ffc0d494e98e43ed955b1317dbc4a9463520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5682782c9863a983fcd5a3929595ffc0d494e98e43ed955b1317dbc4a9463520->enter($__internal_5682782c9863a983fcd5a3929595ffc0d494e98e43ed955b1317dbc4a9463520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b66b86f0b7c2ae1c6e5bfdbebc695d445c54879931f8496f19b1c489e7ba411b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66b86f0b7c2ae1c6e5bfdbebc695d445c54879931f8496f19b1c489e7ba411b->enter($__internal_b66b86f0b7c2ae1c6e5bfdbebc695d445c54879931f8496f19b1c489e7ba411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5682782c9863a983fcd5a3929595ffc0d494e98e43ed955b1317dbc4a9463520->leave($__internal_5682782c9863a983fcd5a3929595ffc0d494e98e43ed955b1317dbc4a9463520_prof);

        
        $__internal_b66b86f0b7c2ae1c6e5bfdbebc695d445c54879931f8496f19b1c489e7ba411b->leave($__internal_b66b86f0b7c2ae1c6e5bfdbebc695d445c54879931f8496f19b1c489e7ba411b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbe789856911bd5990b93805d4c6f8d154c35d2d1eac9457570b555dc5cce294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe789856911bd5990b93805d4c6f8d154c35d2d1eac9457570b555dc5cce294->enter($__internal_dbe789856911bd5990b93805d4c6f8d154c35d2d1eac9457570b555dc5cce294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e784e495c98efab8ae8fdce7028737ad811fd90fdcc7905832fcfbeac9faaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e784e495c98efab8ae8fdce7028737ad811fd90fdcc7905832fcfbeac9faaf7->enter($__internal_0e784e495c98efab8ae8fdce7028737ad811fd90fdcc7905832fcfbeac9faaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0e784e495c98efab8ae8fdce7028737ad811fd90fdcc7905832fcfbeac9faaf7->leave($__internal_0e784e495c98efab8ae8fdce7028737ad811fd90fdcc7905832fcfbeac9faaf7_prof);

        
        $__internal_dbe789856911bd5990b93805d4c6f8d154c35d2d1eac9457570b555dc5cce294->leave($__internal_dbe789856911bd5990b93805d4c6f8d154c35d2d1eac9457570b555dc5cce294_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_28a26a95234efa8e36a97264d480c1cc514e8c8dd3f98cbc08672103bf643992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a26a95234efa8e36a97264d480c1cc514e8c8dd3f98cbc08672103bf643992->enter($__internal_28a26a95234efa8e36a97264d480c1cc514e8c8dd3f98cbc08672103bf643992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acd79042f0095a4667efc089eecb80af4d1d5c2f80b04c737faa347a23c07952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd79042f0095a4667efc089eecb80af4d1d5c2f80b04c737faa347a23c07952->enter($__internal_acd79042f0095a4667efc089eecb80af4d1d5c2f80b04c737faa347a23c07952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acd79042f0095a4667efc089eecb80af4d1d5c2f80b04c737faa347a23c07952->leave($__internal_acd79042f0095a4667efc089eecb80af4d1d5c2f80b04c737faa347a23c07952_prof);

        
        $__internal_28a26a95234efa8e36a97264d480c1cc514e8c8dd3f98cbc08672103bf643992->leave($__internal_28a26a95234efa8e36a97264d480c1cc514e8c8dd3f98cbc08672103bf643992_prof);

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

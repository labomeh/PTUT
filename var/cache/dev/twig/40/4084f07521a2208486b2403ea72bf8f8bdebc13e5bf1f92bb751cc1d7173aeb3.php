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
        $__internal_bf3d1e043fba525fcafb263cd3a76939eaea869ebb4115349d918de77c24b7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3d1e043fba525fcafb263cd3a76939eaea869ebb4115349d918de77c24b7b0->enter($__internal_bf3d1e043fba525fcafb263cd3a76939eaea869ebb4115349d918de77c24b7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f302eef79fbdba614c6d09c0ec199fabf0f76beba74f1c87347d557a0237b6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f302eef79fbdba614c6d09c0ec199fabf0f76beba74f1c87347d557a0237b6df->enter($__internal_f302eef79fbdba614c6d09c0ec199fabf0f76beba74f1c87347d557a0237b6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3d1e043fba525fcafb263cd3a76939eaea869ebb4115349d918de77c24b7b0->leave($__internal_bf3d1e043fba525fcafb263cd3a76939eaea869ebb4115349d918de77c24b7b0_prof);

        
        $__internal_f302eef79fbdba614c6d09c0ec199fabf0f76beba74f1c87347d557a0237b6df->leave($__internal_f302eef79fbdba614c6d09c0ec199fabf0f76beba74f1c87347d557a0237b6df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39a1c54f83227f69eb2203c7b47edea73da77f6084011b70d5dc901fe03611b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a1c54f83227f69eb2203c7b47edea73da77f6084011b70d5dc901fe03611b5->enter($__internal_39a1c54f83227f69eb2203c7b47edea73da77f6084011b70d5dc901fe03611b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dfed58603e4720e35f22be7e5cbd3b285b04ff15b550155f7b8d46bf1fa39d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfed58603e4720e35f22be7e5cbd3b285b04ff15b550155f7b8d46bf1fa39d1d->enter($__internal_dfed58603e4720e35f22be7e5cbd3b285b04ff15b550155f7b8d46bf1fa39d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dfed58603e4720e35f22be7e5cbd3b285b04ff15b550155f7b8d46bf1fa39d1d->leave($__internal_dfed58603e4720e35f22be7e5cbd3b285b04ff15b550155f7b8d46bf1fa39d1d_prof);

        
        $__internal_39a1c54f83227f69eb2203c7b47edea73da77f6084011b70d5dc901fe03611b5->leave($__internal_39a1c54f83227f69eb2203c7b47edea73da77f6084011b70d5dc901fe03611b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9ce6b3e8658254192537210f149d300aae9e03b6453f1b2e01afcba84e393c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ce6b3e8658254192537210f149d300aae9e03b6453f1b2e01afcba84e393c3->enter($__internal_e9ce6b3e8658254192537210f149d300aae9e03b6453f1b2e01afcba84e393c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1da76b8134925a89b6057255a6b475d705c8256a2ce75952adf8c6831e6ecfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da76b8134925a89b6057255a6b475d705c8256a2ce75952adf8c6831e6ecfd8->enter($__internal_1da76b8134925a89b6057255a6b475d705c8256a2ce75952adf8c6831e6ecfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1da76b8134925a89b6057255a6b475d705c8256a2ce75952adf8c6831e6ecfd8->leave($__internal_1da76b8134925a89b6057255a6b475d705c8256a2ce75952adf8c6831e6ecfd8_prof);

        
        $__internal_e9ce6b3e8658254192537210f149d300aae9e03b6453f1b2e01afcba84e393c3->leave($__internal_e9ce6b3e8658254192537210f149d300aae9e03b6453f1b2e01afcba84e393c3_prof);

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

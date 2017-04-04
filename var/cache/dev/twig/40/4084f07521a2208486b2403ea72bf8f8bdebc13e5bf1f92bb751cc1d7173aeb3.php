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
        $__internal_e6847547e8175747ddb297729b1a54c4bc41010da49da4492d523c5d8cb6afe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6847547e8175747ddb297729b1a54c4bc41010da49da4492d523c5d8cb6afe2->enter($__internal_e6847547e8175747ddb297729b1a54c4bc41010da49da4492d523c5d8cb6afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ae525e9f7e04b16000442463007bfd2e8769e8535f9fe5f950f38b7fa50b8a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae525e9f7e04b16000442463007bfd2e8769e8535f9fe5f950f38b7fa50b8a83->enter($__internal_ae525e9f7e04b16000442463007bfd2e8769e8535f9fe5f950f38b7fa50b8a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6847547e8175747ddb297729b1a54c4bc41010da49da4492d523c5d8cb6afe2->leave($__internal_e6847547e8175747ddb297729b1a54c4bc41010da49da4492d523c5d8cb6afe2_prof);

        
        $__internal_ae525e9f7e04b16000442463007bfd2e8769e8535f9fe5f950f38b7fa50b8a83->leave($__internal_ae525e9f7e04b16000442463007bfd2e8769e8535f9fe5f950f38b7fa50b8a83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3a79d4724ba4b60db2a4155f7757b3c3a811f81ed53949027a14a2c386b2548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a79d4724ba4b60db2a4155f7757b3c3a811f81ed53949027a14a2c386b2548->enter($__internal_e3a79d4724ba4b60db2a4155f7757b3c3a811f81ed53949027a14a2c386b2548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f7004c39efa2bf47bf4cf37b02a78c39ed2c8999c0c6bc06826e61712281848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7004c39efa2bf47bf4cf37b02a78c39ed2c8999c0c6bc06826e61712281848->enter($__internal_0f7004c39efa2bf47bf4cf37b02a78c39ed2c8999c0c6bc06826e61712281848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0f7004c39efa2bf47bf4cf37b02a78c39ed2c8999c0c6bc06826e61712281848->leave($__internal_0f7004c39efa2bf47bf4cf37b02a78c39ed2c8999c0c6bc06826e61712281848_prof);

        
        $__internal_e3a79d4724ba4b60db2a4155f7757b3c3a811f81ed53949027a14a2c386b2548->leave($__internal_e3a79d4724ba4b60db2a4155f7757b3c3a811f81ed53949027a14a2c386b2548_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57c4ba8e832779704d6fa30a6eacf107a22f879eaff41718a5faf4c024af4663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c4ba8e832779704d6fa30a6eacf107a22f879eaff41718a5faf4c024af4663->enter($__internal_57c4ba8e832779704d6fa30a6eacf107a22f879eaff41718a5faf4c024af4663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d13298c44f07abdb70f814cd87c627456a9f0a0d6a215c70fdf43b35934b5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d13298c44f07abdb70f814cd87c627456a9f0a0d6a215c70fdf43b35934b5c1->enter($__internal_7d13298c44f07abdb70f814cd87c627456a9f0a0d6a215c70fdf43b35934b5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7d13298c44f07abdb70f814cd87c627456a9f0a0d6a215c70fdf43b35934b5c1->leave($__internal_7d13298c44f07abdb70f814cd87c627456a9f0a0d6a215c70fdf43b35934b5c1_prof);

        
        $__internal_57c4ba8e832779704d6fa30a6eacf107a22f879eaff41718a5faf4c024af4663->leave($__internal_57c4ba8e832779704d6fa30a6eacf107a22f879eaff41718a5faf4c024af4663_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

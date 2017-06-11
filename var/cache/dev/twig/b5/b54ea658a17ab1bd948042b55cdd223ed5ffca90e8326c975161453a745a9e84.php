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
        $__internal_b8c15f5d8be02dfb02cf50039f76da33631145e16126e847287aef25f29ce7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c15f5d8be02dfb02cf50039f76da33631145e16126e847287aef25f29ce7eb->enter($__internal_b8c15f5d8be02dfb02cf50039f76da33631145e16126e847287aef25f29ce7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_74cc8001a4f1b76244f6fd7456decbcf94a72906d136cf194f996729f85e120e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cc8001a4f1b76244f6fd7456decbcf94a72906d136cf194f996729f85e120e->enter($__internal_74cc8001a4f1b76244f6fd7456decbcf94a72906d136cf194f996729f85e120e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c15f5d8be02dfb02cf50039f76da33631145e16126e847287aef25f29ce7eb->leave($__internal_b8c15f5d8be02dfb02cf50039f76da33631145e16126e847287aef25f29ce7eb_prof);

        
        $__internal_74cc8001a4f1b76244f6fd7456decbcf94a72906d136cf194f996729f85e120e->leave($__internal_74cc8001a4f1b76244f6fd7456decbcf94a72906d136cf194f996729f85e120e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38af505c11aefd993c4e4f6d3b88860fd67f3cfb89c587ffe041c2c04acb7d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38af505c11aefd993c4e4f6d3b88860fd67f3cfb89c587ffe041c2c04acb7d2e->enter($__internal_38af505c11aefd993c4e4f6d3b88860fd67f3cfb89c587ffe041c2c04acb7d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60711998203b4f7107cb69298b9d1fa04175fa7c91df6a2d2e38c47f99a75418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60711998203b4f7107cb69298b9d1fa04175fa7c91df6a2d2e38c47f99a75418->enter($__internal_60711998203b4f7107cb69298b9d1fa04175fa7c91df6a2d2e38c47f99a75418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_60711998203b4f7107cb69298b9d1fa04175fa7c91df6a2d2e38c47f99a75418->leave($__internal_60711998203b4f7107cb69298b9d1fa04175fa7c91df6a2d2e38c47f99a75418_prof);

        
        $__internal_38af505c11aefd993c4e4f6d3b88860fd67f3cfb89c587ffe041c2c04acb7d2e->leave($__internal_38af505c11aefd993c4e4f6d3b88860fd67f3cfb89c587ffe041c2c04acb7d2e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74e697d140c53d0dcaf32af076eed345e5fc0c646e55e433bf65bd5f5f8c4503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e697d140c53d0dcaf32af076eed345e5fc0c646e55e433bf65bd5f5f8c4503->enter($__internal_74e697d140c53d0dcaf32af076eed345e5fc0c646e55e433bf65bd5f5f8c4503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48f1b14fdf1168d1fa441dc5ee44491b59d6d74dc08cb8563dd6c15a3fe814a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f1b14fdf1168d1fa441dc5ee44491b59d6d74dc08cb8563dd6c15a3fe814a5->enter($__internal_48f1b14fdf1168d1fa441dc5ee44491b59d6d74dc08cb8563dd6c15a3fe814a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48f1b14fdf1168d1fa441dc5ee44491b59d6d74dc08cb8563dd6c15a3fe814a5->leave($__internal_48f1b14fdf1168d1fa441dc5ee44491b59d6d74dc08cb8563dd6c15a3fe814a5_prof);

        
        $__internal_74e697d140c53d0dcaf32af076eed345e5fc0c646e55e433bf65bd5f5f8c4503->leave($__internal_74e697d140c53d0dcaf32af076eed345e5fc0c646e55e433bf65bd5f5f8c4503_prof);

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

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
        $__internal_ad0ce78c52c54f63baec651a50d0483447ca109ab6dfc09fff4813272ab2f4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0ce78c52c54f63baec651a50d0483447ca109ab6dfc09fff4813272ab2f4c1->enter($__internal_ad0ce78c52c54f63baec651a50d0483447ca109ab6dfc09fff4813272ab2f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_027a78a4bb46a763d2459a36bb9b0a0fae0e3b5c96e0ef3a3e563635604b1a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027a78a4bb46a763d2459a36bb9b0a0fae0e3b5c96e0ef3a3e563635604b1a92->enter($__internal_027a78a4bb46a763d2459a36bb9b0a0fae0e3b5c96e0ef3a3e563635604b1a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad0ce78c52c54f63baec651a50d0483447ca109ab6dfc09fff4813272ab2f4c1->leave($__internal_ad0ce78c52c54f63baec651a50d0483447ca109ab6dfc09fff4813272ab2f4c1_prof);

        
        $__internal_027a78a4bb46a763d2459a36bb9b0a0fae0e3b5c96e0ef3a3e563635604b1a92->leave($__internal_027a78a4bb46a763d2459a36bb9b0a0fae0e3b5c96e0ef3a3e563635604b1a92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32ff3f6e417fd4329655a388a38b6f76bc271c95ef8ba8a2f343bbff471c66e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ff3f6e417fd4329655a388a38b6f76bc271c95ef8ba8a2f343bbff471c66e9->enter($__internal_32ff3f6e417fd4329655a388a38b6f76bc271c95ef8ba8a2f343bbff471c66e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a38f8bee2b55bb6841962ec1e13c1f8f28f331a54f0a5c4f14c5140b0a7386b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a38f8bee2b55bb6841962ec1e13c1f8f28f331a54f0a5c4f14c5140b0a7386b->enter($__internal_5a38f8bee2b55bb6841962ec1e13c1f8f28f331a54f0a5c4f14c5140b0a7386b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5a38f8bee2b55bb6841962ec1e13c1f8f28f331a54f0a5c4f14c5140b0a7386b->leave($__internal_5a38f8bee2b55bb6841962ec1e13c1f8f28f331a54f0a5c4f14c5140b0a7386b_prof);

        
        $__internal_32ff3f6e417fd4329655a388a38b6f76bc271c95ef8ba8a2f343bbff471c66e9->leave($__internal_32ff3f6e417fd4329655a388a38b6f76bc271c95ef8ba8a2f343bbff471c66e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d49636fe85caf731d505912895044b98a6ebb7ff58c2837f0baacfec32f427df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49636fe85caf731d505912895044b98a6ebb7ff58c2837f0baacfec32f427df->enter($__internal_d49636fe85caf731d505912895044b98a6ebb7ff58c2837f0baacfec32f427df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99d57301b7cab4079701460b77050b5cf8975446ddf260e164bb9a3ca3f7d792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d57301b7cab4079701460b77050b5cf8975446ddf260e164bb9a3ca3f7d792->enter($__internal_99d57301b7cab4079701460b77050b5cf8975446ddf260e164bb9a3ca3f7d792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99d57301b7cab4079701460b77050b5cf8975446ddf260e164bb9a3ca3f7d792->leave($__internal_99d57301b7cab4079701460b77050b5cf8975446ddf260e164bb9a3ca3f7d792_prof);

        
        $__internal_d49636fe85caf731d505912895044b98a6ebb7ff58c2837f0baacfec32f427df->leave($__internal_d49636fe85caf731d505912895044b98a6ebb7ff58c2837f0baacfec32f427df_prof);

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

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
        $__internal_34d3650342dd802db9d3971f1cffdf427011237dbf79eb35ff9a8892036929f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d3650342dd802db9d3971f1cffdf427011237dbf79eb35ff9a8892036929f8->enter($__internal_34d3650342dd802db9d3971f1cffdf427011237dbf79eb35ff9a8892036929f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c983b1780bf7d5360d0e245831bcab2d36672cefe08644b1cac26df16203ff32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c983b1780bf7d5360d0e245831bcab2d36672cefe08644b1cac26df16203ff32->enter($__internal_c983b1780bf7d5360d0e245831bcab2d36672cefe08644b1cac26df16203ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d3650342dd802db9d3971f1cffdf427011237dbf79eb35ff9a8892036929f8->leave($__internal_34d3650342dd802db9d3971f1cffdf427011237dbf79eb35ff9a8892036929f8_prof);

        
        $__internal_c983b1780bf7d5360d0e245831bcab2d36672cefe08644b1cac26df16203ff32->leave($__internal_c983b1780bf7d5360d0e245831bcab2d36672cefe08644b1cac26df16203ff32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd0ea86f6c8ae466bff7e171b0d91fcf8b5d9e2e42f46399c7ff11d23e983ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0ea86f6c8ae466bff7e171b0d91fcf8b5d9e2e42f46399c7ff11d23e983ca7->enter($__internal_cd0ea86f6c8ae466bff7e171b0d91fcf8b5d9e2e42f46399c7ff11d23e983ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a2a9f9b54ff8381e5505b3aaefedc79ac8ec815bd62c513025153c58baaff1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2a9f9b54ff8381e5505b3aaefedc79ac8ec815bd62c513025153c58baaff1a->enter($__internal_6a2a9f9b54ff8381e5505b3aaefedc79ac8ec815bd62c513025153c58baaff1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6a2a9f9b54ff8381e5505b3aaefedc79ac8ec815bd62c513025153c58baaff1a->leave($__internal_6a2a9f9b54ff8381e5505b3aaefedc79ac8ec815bd62c513025153c58baaff1a_prof);

        
        $__internal_cd0ea86f6c8ae466bff7e171b0d91fcf8b5d9e2e42f46399c7ff11d23e983ca7->leave($__internal_cd0ea86f6c8ae466bff7e171b0d91fcf8b5d9e2e42f46399c7ff11d23e983ca7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf75e8ea470901d900236734a90dd98f79a999e8b55b2c349539ee799949f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf75e8ea470901d900236734a90dd98f79a999e8b55b2c349539ee799949f5e->enter($__internal_3cf75e8ea470901d900236734a90dd98f79a999e8b55b2c349539ee799949f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d55060bece61a425e22c791f3c0a00507412311437756a70be8756665a3ca41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d55060bece61a425e22c791f3c0a00507412311437756a70be8756665a3ca41->enter($__internal_5d55060bece61a425e22c791f3c0a00507412311437756a70be8756665a3ca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d55060bece61a425e22c791f3c0a00507412311437756a70be8756665a3ca41->leave($__internal_5d55060bece61a425e22c791f3c0a00507412311437756a70be8756665a3ca41_prof);

        
        $__internal_3cf75e8ea470901d900236734a90dd98f79a999e8b55b2c349539ee799949f5e->leave($__internal_3cf75e8ea470901d900236734a90dd98f79a999e8b55b2c349539ee799949f5e_prof);

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

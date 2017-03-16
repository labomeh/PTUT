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
        $__internal_0f030cc18e268d20fa877c57f82727716729216156e4184ae7fdfe37c7fc6456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f030cc18e268d20fa877c57f82727716729216156e4184ae7fdfe37c7fc6456->enter($__internal_0f030cc18e268d20fa877c57f82727716729216156e4184ae7fdfe37c7fc6456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_450c932c0eef09ecafcbd14af269ab9d6c389cd6bfdb38a4015cdfcfdf57345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450c932c0eef09ecafcbd14af269ab9d6c389cd6bfdb38a4015cdfcfdf57345f->enter($__internal_450c932c0eef09ecafcbd14af269ab9d6c389cd6bfdb38a4015cdfcfdf57345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f030cc18e268d20fa877c57f82727716729216156e4184ae7fdfe37c7fc6456->leave($__internal_0f030cc18e268d20fa877c57f82727716729216156e4184ae7fdfe37c7fc6456_prof);

        
        $__internal_450c932c0eef09ecafcbd14af269ab9d6c389cd6bfdb38a4015cdfcfdf57345f->leave($__internal_450c932c0eef09ecafcbd14af269ab9d6c389cd6bfdb38a4015cdfcfdf57345f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8fb2829a7f7f80172c2a9f2e78afff9078d864997a0d59a38b7b95a3cbfcbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fb2829a7f7f80172c2a9f2e78afff9078d864997a0d59a38b7b95a3cbfcbc3->enter($__internal_b8fb2829a7f7f80172c2a9f2e78afff9078d864997a0d59a38b7b95a3cbfcbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c5c0beeaad74358c99c2b4e3eb7e71009e842d36bfb0982c572bd3138a1519c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5c0beeaad74358c99c2b4e3eb7e71009e842d36bfb0982c572bd3138a1519c->enter($__internal_3c5c0beeaad74358c99c2b4e3eb7e71009e842d36bfb0982c572bd3138a1519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c5c0beeaad74358c99c2b4e3eb7e71009e842d36bfb0982c572bd3138a1519c->leave($__internal_3c5c0beeaad74358c99c2b4e3eb7e71009e842d36bfb0982c572bd3138a1519c_prof);

        
        $__internal_b8fb2829a7f7f80172c2a9f2e78afff9078d864997a0d59a38b7b95a3cbfcbc3->leave($__internal_b8fb2829a7f7f80172c2a9f2e78afff9078d864997a0d59a38b7b95a3cbfcbc3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_06f6d6abccae9d6e9a9fbf948678327954a3b80664e7f12d841dd4e42936a67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f6d6abccae9d6e9a9fbf948678327954a3b80664e7f12d841dd4e42936a67a->enter($__internal_06f6d6abccae9d6e9a9fbf948678327954a3b80664e7f12d841dd4e42936a67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eca15f200a3500143517f530be5b9781f81adc96ce37891307cabc8593f49b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca15f200a3500143517f530be5b9781f81adc96ce37891307cabc8593f49b04->enter($__internal_eca15f200a3500143517f530be5b9781f81adc96ce37891307cabc8593f49b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eca15f200a3500143517f530be5b9781f81adc96ce37891307cabc8593f49b04->leave($__internal_eca15f200a3500143517f530be5b9781f81adc96ce37891307cabc8593f49b04_prof);

        
        $__internal_06f6d6abccae9d6e9a9fbf948678327954a3b80664e7f12d841dd4e42936a67a->leave($__internal_06f6d6abccae9d6e9a9fbf948678327954a3b80664e7f12d841dd4e42936a67a_prof);

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

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
        $__internal_bfacba1a2a714262a2610ac59700e884c11e0cde11506a91d8ebaf2ac5ed1d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfacba1a2a714262a2610ac59700e884c11e0cde11506a91d8ebaf2ac5ed1d1e->enter($__internal_bfacba1a2a714262a2610ac59700e884c11e0cde11506a91d8ebaf2ac5ed1d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_518cf186b094613f5a19a1bd4f06c295df87f0c55955520f6291c8a08d1809b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518cf186b094613f5a19a1bd4f06c295df87f0c55955520f6291c8a08d1809b8->enter($__internal_518cf186b094613f5a19a1bd4f06c295df87f0c55955520f6291c8a08d1809b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfacba1a2a714262a2610ac59700e884c11e0cde11506a91d8ebaf2ac5ed1d1e->leave($__internal_bfacba1a2a714262a2610ac59700e884c11e0cde11506a91d8ebaf2ac5ed1d1e_prof);

        
        $__internal_518cf186b094613f5a19a1bd4f06c295df87f0c55955520f6291c8a08d1809b8->leave($__internal_518cf186b094613f5a19a1bd4f06c295df87f0c55955520f6291c8a08d1809b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79356e69ad40a5d457d988f34bb606d855ddfe60eb94bd314808222ed763f103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79356e69ad40a5d457d988f34bb606d855ddfe60eb94bd314808222ed763f103->enter($__internal_79356e69ad40a5d457d988f34bb606d855ddfe60eb94bd314808222ed763f103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0cd455ff8c0dc64de5c8d0900bf1674db6db4413a630cb3503e6d21ddbd7300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cd455ff8c0dc64de5c8d0900bf1674db6db4413a630cb3503e6d21ddbd7300->enter($__internal_a0cd455ff8c0dc64de5c8d0900bf1674db6db4413a630cb3503e6d21ddbd7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a0cd455ff8c0dc64de5c8d0900bf1674db6db4413a630cb3503e6d21ddbd7300->leave($__internal_a0cd455ff8c0dc64de5c8d0900bf1674db6db4413a630cb3503e6d21ddbd7300_prof);

        
        $__internal_79356e69ad40a5d457d988f34bb606d855ddfe60eb94bd314808222ed763f103->leave($__internal_79356e69ad40a5d457d988f34bb606d855ddfe60eb94bd314808222ed763f103_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1f0d40a6d319e8d347170175c717dfe0fc8f855226654183b34a0daf72e136b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f0d40a6d319e8d347170175c717dfe0fc8f855226654183b34a0daf72e136b->enter($__internal_e1f0d40a6d319e8d347170175c717dfe0fc8f855226654183b34a0daf72e136b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c86e02dc1d1077801a5ad79440731f69988486d8c38c32bcb87417e0076e71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c86e02dc1d1077801a5ad79440731f69988486d8c38c32bcb87417e0076e71d->enter($__internal_0c86e02dc1d1077801a5ad79440731f69988486d8c38c32bcb87417e0076e71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c86e02dc1d1077801a5ad79440731f69988486d8c38c32bcb87417e0076e71d->leave($__internal_0c86e02dc1d1077801a5ad79440731f69988486d8c38c32bcb87417e0076e71d_prof);

        
        $__internal_e1f0d40a6d319e8d347170175c717dfe0fc8f855226654183b34a0daf72e136b->leave($__internal_e1f0d40a6d319e8d347170175c717dfe0fc8f855226654183b34a0daf72e136b_prof);

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

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
        $__internal_2061c3ff231529d565bb7252288119a5fdd13426d8db82dd7b44f92ad3927dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2061c3ff231529d565bb7252288119a5fdd13426d8db82dd7b44f92ad3927dc4->enter($__internal_2061c3ff231529d565bb7252288119a5fdd13426d8db82dd7b44f92ad3927dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_10e8f24fe59a8ea5dbe6b0097f3650003868b7e5b961e507ffef37164b2aa73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e8f24fe59a8ea5dbe6b0097f3650003868b7e5b961e507ffef37164b2aa73a->enter($__internal_10e8f24fe59a8ea5dbe6b0097f3650003868b7e5b961e507ffef37164b2aa73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2061c3ff231529d565bb7252288119a5fdd13426d8db82dd7b44f92ad3927dc4->leave($__internal_2061c3ff231529d565bb7252288119a5fdd13426d8db82dd7b44f92ad3927dc4_prof);

        
        $__internal_10e8f24fe59a8ea5dbe6b0097f3650003868b7e5b961e507ffef37164b2aa73a->leave($__internal_10e8f24fe59a8ea5dbe6b0097f3650003868b7e5b961e507ffef37164b2aa73a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9010feffb2086cd9ae58db89e9e8dd74dfa4c1c50ffc1b8c4ebb5fe4d0680c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9010feffb2086cd9ae58db89e9e8dd74dfa4c1c50ffc1b8c4ebb5fe4d0680c9d->enter($__internal_9010feffb2086cd9ae58db89e9e8dd74dfa4c1c50ffc1b8c4ebb5fe4d0680c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab6f3dc9a41ed9cba69512c252ad80a7bf361ca9a7ba2b35488e66023856561a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6f3dc9a41ed9cba69512c252ad80a7bf361ca9a7ba2b35488e66023856561a->enter($__internal_ab6f3dc9a41ed9cba69512c252ad80a7bf361ca9a7ba2b35488e66023856561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab6f3dc9a41ed9cba69512c252ad80a7bf361ca9a7ba2b35488e66023856561a->leave($__internal_ab6f3dc9a41ed9cba69512c252ad80a7bf361ca9a7ba2b35488e66023856561a_prof);

        
        $__internal_9010feffb2086cd9ae58db89e9e8dd74dfa4c1c50ffc1b8c4ebb5fe4d0680c9d->leave($__internal_9010feffb2086cd9ae58db89e9e8dd74dfa4c1c50ffc1b8c4ebb5fe4d0680c9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9424068fef91818a6e804c882f52ce198cc3a7e59c17f95b7fda4baa42b51829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9424068fef91818a6e804c882f52ce198cc3a7e59c17f95b7fda4baa42b51829->enter($__internal_9424068fef91818a6e804c882f52ce198cc3a7e59c17f95b7fda4baa42b51829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e26f507d80d55fb62c4a4ae995488f01339274c914fe686a45af4f9b920db78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e26f507d80d55fb62c4a4ae995488f01339274c914fe686a45af4f9b920db78->enter($__internal_3e26f507d80d55fb62c4a4ae995488f01339274c914fe686a45af4f9b920db78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e26f507d80d55fb62c4a4ae995488f01339274c914fe686a45af4f9b920db78->leave($__internal_3e26f507d80d55fb62c4a4ae995488f01339274c914fe686a45af4f9b920db78_prof);

        
        $__internal_9424068fef91818a6e804c882f52ce198cc3a7e59c17f95b7fda4baa42b51829->leave($__internal_9424068fef91818a6e804c882f52ce198cc3a7e59c17f95b7fda4baa42b51829_prof);

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

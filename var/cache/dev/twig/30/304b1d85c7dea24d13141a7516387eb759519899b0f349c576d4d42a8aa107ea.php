<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e60a21b9f9abb1c8179ac1ee78bb1d1e6bcfe8114974a74ab2d5e0a66993d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a33cab92b9c26b4d7ed55cd5e38966f85e337330a3a2d84ee4bfe59cde94607a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33cab92b9c26b4d7ed55cd5e38966f85e337330a3a2d84ee4bfe59cde94607a->enter($__internal_a33cab92b9c26b4d7ed55cd5e38966f85e337330a3a2d84ee4bfe59cde94607a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3be9ba1ebcf133eacaacd4c18cd8f8f4e0d117a8f6da79f5b130c9ff633b10e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be9ba1ebcf133eacaacd4c18cd8f8f4e0d117a8f6da79f5b130c9ff633b10e1->enter($__internal_3be9ba1ebcf133eacaacd4c18cd8f8f4e0d117a8f6da79f5b130c9ff633b10e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33cab92b9c26b4d7ed55cd5e38966f85e337330a3a2d84ee4bfe59cde94607a->leave($__internal_a33cab92b9c26b4d7ed55cd5e38966f85e337330a3a2d84ee4bfe59cde94607a_prof);

        
        $__internal_3be9ba1ebcf133eacaacd4c18cd8f8f4e0d117a8f6da79f5b130c9ff633b10e1->leave($__internal_3be9ba1ebcf133eacaacd4c18cd8f8f4e0d117a8f6da79f5b130c9ff633b10e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_076a631cb2f1d96560aaa6be4cc60a096cd8f30c6cf9404e886010f57977d94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076a631cb2f1d96560aaa6be4cc60a096cd8f30c6cf9404e886010f57977d94d->enter($__internal_076a631cb2f1d96560aaa6be4cc60a096cd8f30c6cf9404e886010f57977d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d768464360898ac6ec32c58163a2cec119d3489bd459d5b1c59ac2270083a96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d768464360898ac6ec32c58163a2cec119d3489bd459d5b1c59ac2270083a96a->enter($__internal_d768464360898ac6ec32c58163a2cec119d3489bd459d5b1c59ac2270083a96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d768464360898ac6ec32c58163a2cec119d3489bd459d5b1c59ac2270083a96a->leave($__internal_d768464360898ac6ec32c58163a2cec119d3489bd459d5b1c59ac2270083a96a_prof);

        
        $__internal_076a631cb2f1d96560aaa6be4cc60a096cd8f30c6cf9404e886010f57977d94d->leave($__internal_076a631cb2f1d96560aaa6be4cc60a096cd8f30c6cf9404e886010f57977d94d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f03ef35131ac5e335e16b60dab0d761bec79435072ca65b73babe3caa031588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f03ef35131ac5e335e16b60dab0d761bec79435072ca65b73babe3caa031588->enter($__internal_3f03ef35131ac5e335e16b60dab0d761bec79435072ca65b73babe3caa031588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_407edf1bbfed635d9a146c6e268a7a4d9a06bcc759c4c0d5d92d594cb355b7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407edf1bbfed635d9a146c6e268a7a4d9a06bcc759c4c0d5d92d594cb355b7da->enter($__internal_407edf1bbfed635d9a146c6e268a7a4d9a06bcc759c4c0d5d92d594cb355b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_407edf1bbfed635d9a146c6e268a7a4d9a06bcc759c4c0d5d92d594cb355b7da->leave($__internal_407edf1bbfed635d9a146c6e268a7a4d9a06bcc759c4c0d5d92d594cb355b7da_prof);

        
        $__internal_3f03ef35131ac5e335e16b60dab0d761bec79435072ca65b73babe3caa031588->leave($__internal_3f03ef35131ac5e335e16b60dab0d761bec79435072ca65b73babe3caa031588_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0d86cd126e0b94a07da68b55efdeaf3f35f23f01b1a7dd61a68a94a6376680a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d86cd126e0b94a07da68b55efdeaf3f35f23f01b1a7dd61a68a94a6376680a->enter($__internal_c0d86cd126e0b94a07da68b55efdeaf3f35f23f01b1a7dd61a68a94a6376680a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83b0a44d5c95391b02436061e06437e750d30b08030a3b5d8a2d4067ca0f9ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b0a44d5c95391b02436061e06437e750d30b08030a3b5d8a2d4067ca0f9ae5->enter($__internal_83b0a44d5c95391b02436061e06437e750d30b08030a3b5d8a2d4067ca0f9ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_83b0a44d5c95391b02436061e06437e750d30b08030a3b5d8a2d4067ca0f9ae5->leave($__internal_83b0a44d5c95391b02436061e06437e750d30b08030a3b5d8a2d4067ca0f9ae5_prof);

        
        $__internal_c0d86cd126e0b94a07da68b55efdeaf3f35f23f01b1a7dd61a68a94a6376680a->leave($__internal_c0d86cd126e0b94a07da68b55efdeaf3f35f23f01b1a7dd61a68a94a6376680a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ee65568d3486289d8004e5fc062b6485e38bbf0c200ea38993a4976dcc950153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee65568d3486289d8004e5fc062b6485e38bbf0c200ea38993a4976dcc950153->enter($__internal_ee65568d3486289d8004e5fc062b6485e38bbf0c200ea38993a4976dcc950153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_37f143ef5ce04b02d52fa6be1fff90500a76dc6eb380ed089792603cafd78f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f143ef5ce04b02d52fa6be1fff90500a76dc6eb380ed089792603cafd78f16->enter($__internal_37f143ef5ce04b02d52fa6be1fff90500a76dc6eb380ed089792603cafd78f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee65568d3486289d8004e5fc062b6485e38bbf0c200ea38993a4976dcc950153->leave($__internal_ee65568d3486289d8004e5fc062b6485e38bbf0c200ea38993a4976dcc950153_prof);

        
        $__internal_37f143ef5ce04b02d52fa6be1fff90500a76dc6eb380ed089792603cafd78f16->leave($__internal_37f143ef5ce04b02d52fa6be1fff90500a76dc6eb380ed089792603cafd78f16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf566033db6ba1e5f7e1f301966afe7d1e3fbc9b72804eee737a852735cd6507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf566033db6ba1e5f7e1f301966afe7d1e3fbc9b72804eee737a852735cd6507->enter($__internal_cf566033db6ba1e5f7e1f301966afe7d1e3fbc9b72804eee737a852735cd6507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef2fcd27622902f5f85ab53118cb091eeaecd6746cbb64b11d95f1ef29ae03a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2fcd27622902f5f85ab53118cb091eeaecd6746cbb64b11d95f1ef29ae03a8->enter($__internal_ef2fcd27622902f5f85ab53118cb091eeaecd6746cbb64b11d95f1ef29ae03a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef2fcd27622902f5f85ab53118cb091eeaecd6746cbb64b11d95f1ef29ae03a8->leave($__internal_ef2fcd27622902f5f85ab53118cb091eeaecd6746cbb64b11d95f1ef29ae03a8_prof);

        
        $__internal_cf566033db6ba1e5f7e1f301966afe7d1e3fbc9b72804eee737a852735cd6507->leave($__internal_cf566033db6ba1e5f7e1f301966afe7d1e3fbc9b72804eee737a852735cd6507_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59eace2048e06745be9dd3e470a0fc5f91653cb3d701cf1a9dd806cbd4f41d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59eace2048e06745be9dd3e470a0fc5f91653cb3d701cf1a9dd806cbd4f41d19->enter($__internal_59eace2048e06745be9dd3e470a0fc5f91653cb3d701cf1a9dd806cbd4f41d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_527cca2a169f23dac69990082a56aa05e1d5bf6f1cfe380e96009d710cd3337f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527cca2a169f23dac69990082a56aa05e1d5bf6f1cfe380e96009d710cd3337f->enter($__internal_527cca2a169f23dac69990082a56aa05e1d5bf6f1cfe380e96009d710cd3337f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_527cca2a169f23dac69990082a56aa05e1d5bf6f1cfe380e96009d710cd3337f->leave($__internal_527cca2a169f23dac69990082a56aa05e1d5bf6f1cfe380e96009d710cd3337f_prof);

        
        $__internal_59eace2048e06745be9dd3e470a0fc5f91653cb3d701cf1a9dd806cbd4f41d19->leave($__internal_59eace2048e06745be9dd3e470a0fc5f91653cb3d701cf1a9dd806cbd4f41d19_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57cea92b2dd08c6882ad97da98cc511223850303d5acec6f351b0eb867910524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cea92b2dd08c6882ad97da98cc511223850303d5acec6f351b0eb867910524->enter($__internal_57cea92b2dd08c6882ad97da98cc511223850303d5acec6f351b0eb867910524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_462ff71b787ea9bcb8efb7d62eb56cb01ea70038a0189caec0d0237de7b4e525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462ff71b787ea9bcb8efb7d62eb56cb01ea70038a0189caec0d0237de7b4e525->enter($__internal_462ff71b787ea9bcb8efb7d62eb56cb01ea70038a0189caec0d0237de7b4e525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_462ff71b787ea9bcb8efb7d62eb56cb01ea70038a0189caec0d0237de7b4e525->leave($__internal_462ff71b787ea9bcb8efb7d62eb56cb01ea70038a0189caec0d0237de7b4e525_prof);

        
        $__internal_57cea92b2dd08c6882ad97da98cc511223850303d5acec6f351b0eb867910524->leave($__internal_57cea92b2dd08c6882ad97da98cc511223850303d5acec6f351b0eb867910524_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

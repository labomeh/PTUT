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
        $__internal_969d32ca941e5987cc90f0a6bf8d2642cfe2accf6238ddae8b0b1c93e7a0609d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969d32ca941e5987cc90f0a6bf8d2642cfe2accf6238ddae8b0b1c93e7a0609d->enter($__internal_969d32ca941e5987cc90f0a6bf8d2642cfe2accf6238ddae8b0b1c93e7a0609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_02a2d2b83554e896fe1aa608b230489f3ffe19d6343099f986534b68ac3c67a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a2d2b83554e896fe1aa608b230489f3ffe19d6343099f986534b68ac3c67a4->enter($__internal_02a2d2b83554e896fe1aa608b230489f3ffe19d6343099f986534b68ac3c67a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969d32ca941e5987cc90f0a6bf8d2642cfe2accf6238ddae8b0b1c93e7a0609d->leave($__internal_969d32ca941e5987cc90f0a6bf8d2642cfe2accf6238ddae8b0b1c93e7a0609d_prof);

        
        $__internal_02a2d2b83554e896fe1aa608b230489f3ffe19d6343099f986534b68ac3c67a4->leave($__internal_02a2d2b83554e896fe1aa608b230489f3ffe19d6343099f986534b68ac3c67a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_406bca6e0ffc3e588f14dae157a350f329daefaf0f9993080b66ec2418e8900e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406bca6e0ffc3e588f14dae157a350f329daefaf0f9993080b66ec2418e8900e->enter($__internal_406bca6e0ffc3e588f14dae157a350f329daefaf0f9993080b66ec2418e8900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7ac33975ff782280c4abffec57d2e8f59653402381972378a625ab424387d14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac33975ff782280c4abffec57d2e8f59653402381972378a625ab424387d14f->enter($__internal_7ac33975ff782280c4abffec57d2e8f59653402381972378a625ab424387d14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ac33975ff782280c4abffec57d2e8f59653402381972378a625ab424387d14f->leave($__internal_7ac33975ff782280c4abffec57d2e8f59653402381972378a625ab424387d14f_prof);

        
        $__internal_406bca6e0ffc3e588f14dae157a350f329daefaf0f9993080b66ec2418e8900e->leave($__internal_406bca6e0ffc3e588f14dae157a350f329daefaf0f9993080b66ec2418e8900e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf31c08ee41d1f36396ea05b4eeae24429f2ea16bba59cc50c10a9a578bc2bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf31c08ee41d1f36396ea05b4eeae24429f2ea16bba59cc50c10a9a578bc2bee->enter($__internal_cf31c08ee41d1f36396ea05b4eeae24429f2ea16bba59cc50c10a9a578bc2bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69d8a6e4029e524012eee687417be98261e837491bd5efe224f4f0ae0b737d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d8a6e4029e524012eee687417be98261e837491bd5efe224f4f0ae0b737d18->enter($__internal_69d8a6e4029e524012eee687417be98261e837491bd5efe224f4f0ae0b737d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69d8a6e4029e524012eee687417be98261e837491bd5efe224f4f0ae0b737d18->leave($__internal_69d8a6e4029e524012eee687417be98261e837491bd5efe224f4f0ae0b737d18_prof);

        
        $__internal_cf31c08ee41d1f36396ea05b4eeae24429f2ea16bba59cc50c10a9a578bc2bee->leave($__internal_cf31c08ee41d1f36396ea05b4eeae24429f2ea16bba59cc50c10a9a578bc2bee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d02ab60f876b1d4037f3892be1379e00f7ea0baff7005fc50b27ad3652c5f24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02ab60f876b1d4037f3892be1379e00f7ea0baff7005fc50b27ad3652c5f24d->enter($__internal_d02ab60f876b1d4037f3892be1379e00f7ea0baff7005fc50b27ad3652c5f24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_753a56245ab813334643966ae6387b9d959192887b9d9ddd213a9301f12a0d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753a56245ab813334643966ae6387b9d959192887b9d9ddd213a9301f12a0d69->enter($__internal_753a56245ab813334643966ae6387b9d959192887b9d9ddd213a9301f12a0d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_753a56245ab813334643966ae6387b9d959192887b9d9ddd213a9301f12a0d69->leave($__internal_753a56245ab813334643966ae6387b9d959192887b9d9ddd213a9301f12a0d69_prof);

        
        $__internal_d02ab60f876b1d4037f3892be1379e00f7ea0baff7005fc50b27ad3652c5f24d->leave($__internal_d02ab60f876b1d4037f3892be1379e00f7ea0baff7005fc50b27ad3652c5f24d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

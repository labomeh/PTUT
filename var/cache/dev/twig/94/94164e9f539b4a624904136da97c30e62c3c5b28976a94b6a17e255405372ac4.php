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
        $__internal_3f2609efb3b06fc6d624376708b84a8d04a698db051efa23f15d161e8d7ad3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2609efb3b06fc6d624376708b84a8d04a698db051efa23f15d161e8d7ad3f0->enter($__internal_3f2609efb3b06fc6d624376708b84a8d04a698db051efa23f15d161e8d7ad3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_845d684eb8fe54b107df309f23a3f175f841bebb088c6ef54405fb70826ccb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845d684eb8fe54b107df309f23a3f175f841bebb088c6ef54405fb70826ccb06->enter($__internal_845d684eb8fe54b107df309f23a3f175f841bebb088c6ef54405fb70826ccb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f2609efb3b06fc6d624376708b84a8d04a698db051efa23f15d161e8d7ad3f0->leave($__internal_3f2609efb3b06fc6d624376708b84a8d04a698db051efa23f15d161e8d7ad3f0_prof);

        
        $__internal_845d684eb8fe54b107df309f23a3f175f841bebb088c6ef54405fb70826ccb06->leave($__internal_845d684eb8fe54b107df309f23a3f175f841bebb088c6ef54405fb70826ccb06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bdd43dff3fe1e70c426ff0ff7f4005047caf54b0534a762ad93df032f210abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bdd43dff3fe1e70c426ff0ff7f4005047caf54b0534a762ad93df032f210abb->enter($__internal_7bdd43dff3fe1e70c426ff0ff7f4005047caf54b0534a762ad93df032f210abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0451340f7370920a530e688ad8c03ba28ad813aeea6a9f407399d904d99cc86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0451340f7370920a530e688ad8c03ba28ad813aeea6a9f407399d904d99cc86c->enter($__internal_0451340f7370920a530e688ad8c03ba28ad813aeea6a9f407399d904d99cc86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0451340f7370920a530e688ad8c03ba28ad813aeea6a9f407399d904d99cc86c->leave($__internal_0451340f7370920a530e688ad8c03ba28ad813aeea6a9f407399d904d99cc86c_prof);

        
        $__internal_7bdd43dff3fe1e70c426ff0ff7f4005047caf54b0534a762ad93df032f210abb->leave($__internal_7bdd43dff3fe1e70c426ff0ff7f4005047caf54b0534a762ad93df032f210abb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7be377274509c31554a4631bb4cee93b4cf5da243974063ac05f3cf32a523e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be377274509c31554a4631bb4cee93b4cf5da243974063ac05f3cf32a523e6b->enter($__internal_7be377274509c31554a4631bb4cee93b4cf5da243974063ac05f3cf32a523e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6a5b04ca52eeee32d22567b97921e31a13a5980565ef3125619febf811125d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5b04ca52eeee32d22567b97921e31a13a5980565ef3125619febf811125d4c->enter($__internal_6a5b04ca52eeee32d22567b97921e31a13a5980565ef3125619febf811125d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a5b04ca52eeee32d22567b97921e31a13a5980565ef3125619febf811125d4c->leave($__internal_6a5b04ca52eeee32d22567b97921e31a13a5980565ef3125619febf811125d4c_prof);

        
        $__internal_7be377274509c31554a4631bb4cee93b4cf5da243974063ac05f3cf32a523e6b->leave($__internal_7be377274509c31554a4631bb4cee93b4cf5da243974063ac05f3cf32a523e6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6631e5356646b99a11aa829ff7f12236568bd994250af5070924494e4a8e05e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6631e5356646b99a11aa829ff7f12236568bd994250af5070924494e4a8e05e6->enter($__internal_6631e5356646b99a11aa829ff7f12236568bd994250af5070924494e4a8e05e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8ec38d11b2b0db769a0f956094ff6c17a1fb704b0a28a9e8d5056640116aa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ec38d11b2b0db769a0f956094ff6c17a1fb704b0a28a9e8d5056640116aa36->enter($__internal_f8ec38d11b2b0db769a0f956094ff6c17a1fb704b0a28a9e8d5056640116aa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f8ec38d11b2b0db769a0f956094ff6c17a1fb704b0a28a9e8d5056640116aa36->leave($__internal_f8ec38d11b2b0db769a0f956094ff6c17a1fb704b0a28a9e8d5056640116aa36_prof);

        
        $__internal_6631e5356646b99a11aa829ff7f12236568bd994250af5070924494e4a8e05e6->leave($__internal_6631e5356646b99a11aa829ff7f12236568bd994250af5070924494e4a8e05e6_prof);

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

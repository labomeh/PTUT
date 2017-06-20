<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5ff570be1c5c6e7af495e8210b8a7e5537374b531076715f1a7f740a74714af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff570be1c5c6e7af495e8210b8a7e5537374b531076715f1a7f740a74714af8->enter($__internal_5ff570be1c5c6e7af495e8210b8a7e5537374b531076715f1a7f740a74714af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f725404332f28d2706c7cbf66d69da2007952df2fa37cfe1dc25efd185134466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f725404332f28d2706c7cbf66d69da2007952df2fa37cfe1dc25efd185134466->enter($__internal_f725404332f28d2706c7cbf66d69da2007952df2fa37cfe1dc25efd185134466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff570be1c5c6e7af495e8210b8a7e5537374b531076715f1a7f740a74714af8->leave($__internal_5ff570be1c5c6e7af495e8210b8a7e5537374b531076715f1a7f740a74714af8_prof);

        
        $__internal_f725404332f28d2706c7cbf66d69da2007952df2fa37cfe1dc25efd185134466->leave($__internal_f725404332f28d2706c7cbf66d69da2007952df2fa37cfe1dc25efd185134466_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f78f7e591ffec7c53cd40ce06a4a673eb26e8f1c6449c099891ee98f919a1ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78f7e591ffec7c53cd40ce06a4a673eb26e8f1c6449c099891ee98f919a1ac5->enter($__internal_f78f7e591ffec7c53cd40ce06a4a673eb26e8f1c6449c099891ee98f919a1ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e430fe198135472969f78b5c085bba7660a176042068d79a79bf6e6f3db24fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e430fe198135472969f78b5c085bba7660a176042068d79a79bf6e6f3db24fc3->enter($__internal_e430fe198135472969f78b5c085bba7660a176042068d79a79bf6e6f3db24fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e430fe198135472969f78b5c085bba7660a176042068d79a79bf6e6f3db24fc3->leave($__internal_e430fe198135472969f78b5c085bba7660a176042068d79a79bf6e6f3db24fc3_prof);

        
        $__internal_f78f7e591ffec7c53cd40ce06a4a673eb26e8f1c6449c099891ee98f919a1ac5->leave($__internal_f78f7e591ffec7c53cd40ce06a4a673eb26e8f1c6449c099891ee98f919a1ac5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5af2564fd3827622f790f2e60f5b1fa479b6b6f8d3ba5a53f11fda257ed25992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af2564fd3827622f790f2e60f5b1fa479b6b6f8d3ba5a53f11fda257ed25992->enter($__internal_5af2564fd3827622f790f2e60f5b1fa479b6b6f8d3ba5a53f11fda257ed25992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12ee8ac490c5d0b553da356d32d67ed7154242574ee998c7cc04978e167e16f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ee8ac490c5d0b553da356d32d67ed7154242574ee998c7cc04978e167e16f9->enter($__internal_12ee8ac490c5d0b553da356d32d67ed7154242574ee998c7cc04978e167e16f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_12ee8ac490c5d0b553da356d32d67ed7154242574ee998c7cc04978e167e16f9->leave($__internal_12ee8ac490c5d0b553da356d32d67ed7154242574ee998c7cc04978e167e16f9_prof);

        
        $__internal_5af2564fd3827622f790f2e60f5b1fa479b6b6f8d3ba5a53f11fda257ed25992->leave($__internal_5af2564fd3827622f790f2e60f5b1fa479b6b6f8d3ba5a53f11fda257ed25992_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a56715c279b1652cb8e469b4a8823bb30d0f42ccfbef076b820aafec6c6a886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a56715c279b1652cb8e469b4a8823bb30d0f42ccfbef076b820aafec6c6a886->enter($__internal_6a56715c279b1652cb8e469b4a8823bb30d0f42ccfbef076b820aafec6c6a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a7d5919b54d747029c5e6f966bb63f20834c24754e30f1ed1a75707e8dc56bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7d5919b54d747029c5e6f966bb63f20834c24754e30f1ed1a75707e8dc56bc->enter($__internal_0a7d5919b54d747029c5e6f966bb63f20834c24754e30f1ed1a75707e8dc56bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0a7d5919b54d747029c5e6f966bb63f20834c24754e30f1ed1a75707e8dc56bc->leave($__internal_0a7d5919b54d747029c5e6f966bb63f20834c24754e30f1ed1a75707e8dc56bc_prof);

        
        $__internal_6a56715c279b1652cb8e469b4a8823bb30d0f42ccfbef076b820aafec6c6a886->leave($__internal_6a56715c279b1652cb8e469b4a8823bb30d0f42ccfbef076b820aafec6c6a886_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

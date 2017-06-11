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
        $__internal_276e3330775d97d6347ed11d8bcbbb78f331d86159bbca89301382a9bb97e8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276e3330775d97d6347ed11d8bcbbb78f331d86159bbca89301382a9bb97e8d7->enter($__internal_276e3330775d97d6347ed11d8bcbbb78f331d86159bbca89301382a9bb97e8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_09946cce55d5dee5af3d099fe6c7933b4f656bf35b34b99527c179f19a45d27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09946cce55d5dee5af3d099fe6c7933b4f656bf35b34b99527c179f19a45d27c->enter($__internal_09946cce55d5dee5af3d099fe6c7933b4f656bf35b34b99527c179f19a45d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276e3330775d97d6347ed11d8bcbbb78f331d86159bbca89301382a9bb97e8d7->leave($__internal_276e3330775d97d6347ed11d8bcbbb78f331d86159bbca89301382a9bb97e8d7_prof);

        
        $__internal_09946cce55d5dee5af3d099fe6c7933b4f656bf35b34b99527c179f19a45d27c->leave($__internal_09946cce55d5dee5af3d099fe6c7933b4f656bf35b34b99527c179f19a45d27c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e47465c833891fa505b2311f0a79dea697f9f88345384038ad36a3468dee0478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47465c833891fa505b2311f0a79dea697f9f88345384038ad36a3468dee0478->enter($__internal_e47465c833891fa505b2311f0a79dea697f9f88345384038ad36a3468dee0478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e482f6ab94e211a67b72a29a3e5082fb7ee15f63be53d2406584874d16d79279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e482f6ab94e211a67b72a29a3e5082fb7ee15f63be53d2406584874d16d79279->enter($__internal_e482f6ab94e211a67b72a29a3e5082fb7ee15f63be53d2406584874d16d79279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e482f6ab94e211a67b72a29a3e5082fb7ee15f63be53d2406584874d16d79279->leave($__internal_e482f6ab94e211a67b72a29a3e5082fb7ee15f63be53d2406584874d16d79279_prof);

        
        $__internal_e47465c833891fa505b2311f0a79dea697f9f88345384038ad36a3468dee0478->leave($__internal_e47465c833891fa505b2311f0a79dea697f9f88345384038ad36a3468dee0478_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_901b01099b2cc8a155725e7126e40a58e18b3ae12165e1c201c97831549e4b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901b01099b2cc8a155725e7126e40a58e18b3ae12165e1c201c97831549e4b73->enter($__internal_901b01099b2cc8a155725e7126e40a58e18b3ae12165e1c201c97831549e4b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_430185820089187e87cd38b0a2ef804154123c29451890ae60a7dab74f329290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430185820089187e87cd38b0a2ef804154123c29451890ae60a7dab74f329290->enter($__internal_430185820089187e87cd38b0a2ef804154123c29451890ae60a7dab74f329290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_430185820089187e87cd38b0a2ef804154123c29451890ae60a7dab74f329290->leave($__internal_430185820089187e87cd38b0a2ef804154123c29451890ae60a7dab74f329290_prof);

        
        $__internal_901b01099b2cc8a155725e7126e40a58e18b3ae12165e1c201c97831549e4b73->leave($__internal_901b01099b2cc8a155725e7126e40a58e18b3ae12165e1c201c97831549e4b73_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44bcf0e3d0a84c1a15edd81724243201de041eef03dd492b99a4fc69270b226a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bcf0e3d0a84c1a15edd81724243201de041eef03dd492b99a4fc69270b226a->enter($__internal_44bcf0e3d0a84c1a15edd81724243201de041eef03dd492b99a4fc69270b226a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9380610499ab3008eaf97d29eecd9aebf2c214b3c19b5a775f7c29b83821b3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9380610499ab3008eaf97d29eecd9aebf2c214b3c19b5a775f7c29b83821b3b6->enter($__internal_9380610499ab3008eaf97d29eecd9aebf2c214b3c19b5a775f7c29b83821b3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9380610499ab3008eaf97d29eecd9aebf2c214b3c19b5a775f7c29b83821b3b6->leave($__internal_9380610499ab3008eaf97d29eecd9aebf2c214b3c19b5a775f7c29b83821b3b6_prof);

        
        $__internal_44bcf0e3d0a84c1a15edd81724243201de041eef03dd492b99a4fc69270b226a->leave($__internal_44bcf0e3d0a84c1a15edd81724243201de041eef03dd492b99a4fc69270b226a_prof);

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

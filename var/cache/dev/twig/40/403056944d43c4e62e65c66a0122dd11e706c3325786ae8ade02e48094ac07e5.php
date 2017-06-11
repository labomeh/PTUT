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
        $__internal_f9b4147a5cde8e48493c64aaf9bf7bf5998cf3432d3cebbc74449fe465084962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b4147a5cde8e48493c64aaf9bf7bf5998cf3432d3cebbc74449fe465084962->enter($__internal_f9b4147a5cde8e48493c64aaf9bf7bf5998cf3432d3cebbc74449fe465084962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5483e6c42da3502718f4321ac6ccb019f07f0a0f411fd15cc7a839385b0710cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5483e6c42da3502718f4321ac6ccb019f07f0a0f411fd15cc7a839385b0710cf->enter($__internal_5483e6c42da3502718f4321ac6ccb019f07f0a0f411fd15cc7a839385b0710cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b4147a5cde8e48493c64aaf9bf7bf5998cf3432d3cebbc74449fe465084962->leave($__internal_f9b4147a5cde8e48493c64aaf9bf7bf5998cf3432d3cebbc74449fe465084962_prof);

        
        $__internal_5483e6c42da3502718f4321ac6ccb019f07f0a0f411fd15cc7a839385b0710cf->leave($__internal_5483e6c42da3502718f4321ac6ccb019f07f0a0f411fd15cc7a839385b0710cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_633cb6e33515b956d6211e743454c3f84d9b954968e72cb3233b18816868e73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633cb6e33515b956d6211e743454c3f84d9b954968e72cb3233b18816868e73b->enter($__internal_633cb6e33515b956d6211e743454c3f84d9b954968e72cb3233b18816868e73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2de28caba33077dcbbdf4b12d398a4794224b60c3f4f5973439bfd6b0aa8b849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de28caba33077dcbbdf4b12d398a4794224b60c3f4f5973439bfd6b0aa8b849->enter($__internal_2de28caba33077dcbbdf4b12d398a4794224b60c3f4f5973439bfd6b0aa8b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2de28caba33077dcbbdf4b12d398a4794224b60c3f4f5973439bfd6b0aa8b849->leave($__internal_2de28caba33077dcbbdf4b12d398a4794224b60c3f4f5973439bfd6b0aa8b849_prof);

        
        $__internal_633cb6e33515b956d6211e743454c3f84d9b954968e72cb3233b18816868e73b->leave($__internal_633cb6e33515b956d6211e743454c3f84d9b954968e72cb3233b18816868e73b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf29c739e7b60f73aa2336355f988a4a62f070adbf57135a5ba951fddf6fbfbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf29c739e7b60f73aa2336355f988a4a62f070adbf57135a5ba951fddf6fbfbe->enter($__internal_bf29c739e7b60f73aa2336355f988a4a62f070adbf57135a5ba951fddf6fbfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ac8904ea261cacf681b3ee029f83b311d30189613c236d4545137edb3c87508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac8904ea261cacf681b3ee029f83b311d30189613c236d4545137edb3c87508->enter($__internal_3ac8904ea261cacf681b3ee029f83b311d30189613c236d4545137edb3c87508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3ac8904ea261cacf681b3ee029f83b311d30189613c236d4545137edb3c87508->leave($__internal_3ac8904ea261cacf681b3ee029f83b311d30189613c236d4545137edb3c87508_prof);

        
        $__internal_bf29c739e7b60f73aa2336355f988a4a62f070adbf57135a5ba951fddf6fbfbe->leave($__internal_bf29c739e7b60f73aa2336355f988a4a62f070adbf57135a5ba951fddf6fbfbe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b23f8eb5f0aa55457a60fef8ce0c025aa7aa479b0acb0d5c6350858a94be6050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23f8eb5f0aa55457a60fef8ce0c025aa7aa479b0acb0d5c6350858a94be6050->enter($__internal_b23f8eb5f0aa55457a60fef8ce0c025aa7aa479b0acb0d5c6350858a94be6050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b484a4048ff760e848ca8d95b9f9cf85d69cc0fe971caf0b442e16f4075d773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b484a4048ff760e848ca8d95b9f9cf85d69cc0fe971caf0b442e16f4075d773->enter($__internal_3b484a4048ff760e848ca8d95b9f9cf85d69cc0fe971caf0b442e16f4075d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3b484a4048ff760e848ca8d95b9f9cf85d69cc0fe971caf0b442e16f4075d773->leave($__internal_3b484a4048ff760e848ca8d95b9f9cf85d69cc0fe971caf0b442e16f4075d773_prof);

        
        $__internal_b23f8eb5f0aa55457a60fef8ce0c025aa7aa479b0acb0d5c6350858a94be6050->leave($__internal_b23f8eb5f0aa55457a60fef8ce0c025aa7aa479b0acb0d5c6350858a94be6050_prof);

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

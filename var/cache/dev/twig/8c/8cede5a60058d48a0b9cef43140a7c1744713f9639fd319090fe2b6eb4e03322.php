<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5145ff72f6a3e76e148ff39b58ac40e49140d53b1948a05da82a690f8b1e8636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_84df584c89fe5160fb9f53241c47fbba821a340cc0d902964fd693dd30fadd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84df584c89fe5160fb9f53241c47fbba821a340cc0d902964fd693dd30fadd10->enter($__internal_84df584c89fe5160fb9f53241c47fbba821a340cc0d902964fd693dd30fadd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c7c708f729d80d8d03e9445904145294ac451175321b39713c0ce50dcf4b0244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c708f729d80d8d03e9445904145294ac451175321b39713c0ce50dcf4b0244->enter($__internal_c7c708f729d80d8d03e9445904145294ac451175321b39713c0ce50dcf4b0244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84df584c89fe5160fb9f53241c47fbba821a340cc0d902964fd693dd30fadd10->leave($__internal_84df584c89fe5160fb9f53241c47fbba821a340cc0d902964fd693dd30fadd10_prof);

        
        $__internal_c7c708f729d80d8d03e9445904145294ac451175321b39713c0ce50dcf4b0244->leave($__internal_c7c708f729d80d8d03e9445904145294ac451175321b39713c0ce50dcf4b0244_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f35e95fc2626524d9d33b5319c0660a0d964d7494d9a146dd3b58342d2aab689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35e95fc2626524d9d33b5319c0660a0d964d7494d9a146dd3b58342d2aab689->enter($__internal_f35e95fc2626524d9d33b5319c0660a0d964d7494d9a146dd3b58342d2aab689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2bcdaf2871e7025059c2440fe78377bb99ffb0a536a73b70be3f918ce2cf4b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcdaf2871e7025059c2440fe78377bb99ffb0a536a73b70be3f918ce2cf4b3c->enter($__internal_2bcdaf2871e7025059c2440fe78377bb99ffb0a536a73b70be3f918ce2cf4b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2bcdaf2871e7025059c2440fe78377bb99ffb0a536a73b70be3f918ce2cf4b3c->leave($__internal_2bcdaf2871e7025059c2440fe78377bb99ffb0a536a73b70be3f918ce2cf4b3c_prof);

        
        $__internal_f35e95fc2626524d9d33b5319c0660a0d964d7494d9a146dd3b58342d2aab689->leave($__internal_f35e95fc2626524d9d33b5319c0660a0d964d7494d9a146dd3b58342d2aab689_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61fa8e865d15feb73db072784596d57cec30ccc97b74189849d0580fad27f1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fa8e865d15feb73db072784596d57cec30ccc97b74189849d0580fad27f1d6->enter($__internal_61fa8e865d15feb73db072784596d57cec30ccc97b74189849d0580fad27f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca7bd24f5a6d1d71ba51a36e2b9373596c2c87a58e5e76d21689ae6f0f53de0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7bd24f5a6d1d71ba51a36e2b9373596c2c87a58e5e76d21689ae6f0f53de0a->enter($__internal_ca7bd24f5a6d1d71ba51a36e2b9373596c2c87a58e5e76d21689ae6f0f53de0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ca7bd24f5a6d1d71ba51a36e2b9373596c2c87a58e5e76d21689ae6f0f53de0a->leave($__internal_ca7bd24f5a6d1d71ba51a36e2b9373596c2c87a58e5e76d21689ae6f0f53de0a_prof);

        
        $__internal_61fa8e865d15feb73db072784596d57cec30ccc97b74189849d0580fad27f1d6->leave($__internal_61fa8e865d15feb73db072784596d57cec30ccc97b74189849d0580fad27f1d6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a47bfb9c99727b8d0428b9e6e336229d569718e67f35fca1cd06c593d2ff3ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47bfb9c99727b8d0428b9e6e336229d569718e67f35fca1cd06c593d2ff3ce2->enter($__internal_a47bfb9c99727b8d0428b9e6e336229d569718e67f35fca1cd06c593d2ff3ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99063f178437b0bc2dc69ccba1f8cecbc3a2af6fcf7284cf0e0b61e49d430f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99063f178437b0bc2dc69ccba1f8cecbc3a2af6fcf7284cf0e0b61e49d430f8e->enter($__internal_99063f178437b0bc2dc69ccba1f8cecbc3a2af6fcf7284cf0e0b61e49d430f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_99063f178437b0bc2dc69ccba1f8cecbc3a2af6fcf7284cf0e0b61e49d430f8e->leave($__internal_99063f178437b0bc2dc69ccba1f8cecbc3a2af6fcf7284cf0e0b61e49d430f8e_prof);

        
        $__internal_a47bfb9c99727b8d0428b9e6e336229d569718e67f35fca1cd06c593d2ff3ce2->leave($__internal_a47bfb9c99727b8d0428b9e6e336229d569718e67f35fca1cd06c593d2ff3ce2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

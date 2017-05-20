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
        $__internal_021d2b13b5a2e354da1140b6a9a4bacd1ac0ef2cfca0cd1e5640b7d776ab707c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021d2b13b5a2e354da1140b6a9a4bacd1ac0ef2cfca0cd1e5640b7d776ab707c->enter($__internal_021d2b13b5a2e354da1140b6a9a4bacd1ac0ef2cfca0cd1e5640b7d776ab707c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9040801c16dfb3269a311820b1f036d6ad454a9c2816c2cd4a451333ea4833f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9040801c16dfb3269a311820b1f036d6ad454a9c2816c2cd4a451333ea4833f2->enter($__internal_9040801c16dfb3269a311820b1f036d6ad454a9c2816c2cd4a451333ea4833f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021d2b13b5a2e354da1140b6a9a4bacd1ac0ef2cfca0cd1e5640b7d776ab707c->leave($__internal_021d2b13b5a2e354da1140b6a9a4bacd1ac0ef2cfca0cd1e5640b7d776ab707c_prof);

        
        $__internal_9040801c16dfb3269a311820b1f036d6ad454a9c2816c2cd4a451333ea4833f2->leave($__internal_9040801c16dfb3269a311820b1f036d6ad454a9c2816c2cd4a451333ea4833f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f92e82db60f3c5bf5a17d597242b5788ff0eec8d96521aeec73261aca061170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f92e82db60f3c5bf5a17d597242b5788ff0eec8d96521aeec73261aca061170->enter($__internal_1f92e82db60f3c5bf5a17d597242b5788ff0eec8d96521aeec73261aca061170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0410d8364fcd6df9dfa41a038d5c050e3d29ede9d9051b12f5756ca421c70b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0410d8364fcd6df9dfa41a038d5c050e3d29ede9d9051b12f5756ca421c70b84->enter($__internal_0410d8364fcd6df9dfa41a038d5c050e3d29ede9d9051b12f5756ca421c70b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0410d8364fcd6df9dfa41a038d5c050e3d29ede9d9051b12f5756ca421c70b84->leave($__internal_0410d8364fcd6df9dfa41a038d5c050e3d29ede9d9051b12f5756ca421c70b84_prof);

        
        $__internal_1f92e82db60f3c5bf5a17d597242b5788ff0eec8d96521aeec73261aca061170->leave($__internal_1f92e82db60f3c5bf5a17d597242b5788ff0eec8d96521aeec73261aca061170_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e2f9e63fe776f1be0660530a8ea7b4c7e332b47fc00583be137526b79e379f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2f9e63fe776f1be0660530a8ea7b4c7e332b47fc00583be137526b79e379f9->enter($__internal_9e2f9e63fe776f1be0660530a8ea7b4c7e332b47fc00583be137526b79e379f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c1cdccec45c5e4c8fe4a1988a67a40227fb441008cf4e851c645f09510e2043c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cdccec45c5e4c8fe4a1988a67a40227fb441008cf4e851c645f09510e2043c->enter($__internal_c1cdccec45c5e4c8fe4a1988a67a40227fb441008cf4e851c645f09510e2043c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c1cdccec45c5e4c8fe4a1988a67a40227fb441008cf4e851c645f09510e2043c->leave($__internal_c1cdccec45c5e4c8fe4a1988a67a40227fb441008cf4e851c645f09510e2043c_prof);

        
        $__internal_9e2f9e63fe776f1be0660530a8ea7b4c7e332b47fc00583be137526b79e379f9->leave($__internal_9e2f9e63fe776f1be0660530a8ea7b4c7e332b47fc00583be137526b79e379f9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_668b736130e177ab57c4a7ff4ce2a3e9a0712e7e661fc6a5a790068e24856c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668b736130e177ab57c4a7ff4ce2a3e9a0712e7e661fc6a5a790068e24856c93->enter($__internal_668b736130e177ab57c4a7ff4ce2a3e9a0712e7e661fc6a5a790068e24856c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3232e29757241fd0c112e47c658b37fabd9bcbb810448e5e485a994da9774a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3232e29757241fd0c112e47c658b37fabd9bcbb810448e5e485a994da9774a4->enter($__internal_d3232e29757241fd0c112e47c658b37fabd9bcbb810448e5e485a994da9774a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d3232e29757241fd0c112e47c658b37fabd9bcbb810448e5e485a994da9774a4->leave($__internal_d3232e29757241fd0c112e47c658b37fabd9bcbb810448e5e485a994da9774a4_prof);

        
        $__internal_668b736130e177ab57c4a7ff4ce2a3e9a0712e7e661fc6a5a790068e24856c93->leave($__internal_668b736130e177ab57c4a7ff4ce2a3e9a0712e7e661fc6a5a790068e24856c93_prof);

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

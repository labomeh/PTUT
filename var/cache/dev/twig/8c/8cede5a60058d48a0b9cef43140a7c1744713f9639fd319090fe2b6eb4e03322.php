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
        $__internal_a3aa70ab049cdfd47dcf4a41766b0cb81101d97f3b4db1642586898f8fba3392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3aa70ab049cdfd47dcf4a41766b0cb81101d97f3b4db1642586898f8fba3392->enter($__internal_a3aa70ab049cdfd47dcf4a41766b0cb81101d97f3b4db1642586898f8fba3392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c77e6ed669f539c4202b9e47719ba60981edf09b9065781a396aab25fcd67625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77e6ed669f539c4202b9e47719ba60981edf09b9065781a396aab25fcd67625->enter($__internal_c77e6ed669f539c4202b9e47719ba60981edf09b9065781a396aab25fcd67625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3aa70ab049cdfd47dcf4a41766b0cb81101d97f3b4db1642586898f8fba3392->leave($__internal_a3aa70ab049cdfd47dcf4a41766b0cb81101d97f3b4db1642586898f8fba3392_prof);

        
        $__internal_c77e6ed669f539c4202b9e47719ba60981edf09b9065781a396aab25fcd67625->leave($__internal_c77e6ed669f539c4202b9e47719ba60981edf09b9065781a396aab25fcd67625_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbacc99d263473d149b3c450e840806f7d6a2ad9e116bd3db5846c001cb207bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbacc99d263473d149b3c450e840806f7d6a2ad9e116bd3db5846c001cb207bd->enter($__internal_cbacc99d263473d149b3c450e840806f7d6a2ad9e116bd3db5846c001cb207bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac0052e8a66a04ef015a37dfa5c78997ec41a8081a5d91e5f5badf4db5b49489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0052e8a66a04ef015a37dfa5c78997ec41a8081a5d91e5f5badf4db5b49489->enter($__internal_ac0052e8a66a04ef015a37dfa5c78997ec41a8081a5d91e5f5badf4db5b49489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ac0052e8a66a04ef015a37dfa5c78997ec41a8081a5d91e5f5badf4db5b49489->leave($__internal_ac0052e8a66a04ef015a37dfa5c78997ec41a8081a5d91e5f5badf4db5b49489_prof);

        
        $__internal_cbacc99d263473d149b3c450e840806f7d6a2ad9e116bd3db5846c001cb207bd->leave($__internal_cbacc99d263473d149b3c450e840806f7d6a2ad9e116bd3db5846c001cb207bd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd4618370dc7144395c4f4783606c52f9beb41c752940539d5de6c8ac6a190e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4618370dc7144395c4f4783606c52f9beb41c752940539d5de6c8ac6a190e7->enter($__internal_cd4618370dc7144395c4f4783606c52f9beb41c752940539d5de6c8ac6a190e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed5094b3fb2f9f44020d801102a7d6c35e2c891c527e8609a6e5bddb3b735677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5094b3fb2f9f44020d801102a7d6c35e2c891c527e8609a6e5bddb3b735677->enter($__internal_ed5094b3fb2f9f44020d801102a7d6c35e2c891c527e8609a6e5bddb3b735677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ed5094b3fb2f9f44020d801102a7d6c35e2c891c527e8609a6e5bddb3b735677->leave($__internal_ed5094b3fb2f9f44020d801102a7d6c35e2c891c527e8609a6e5bddb3b735677_prof);

        
        $__internal_cd4618370dc7144395c4f4783606c52f9beb41c752940539d5de6c8ac6a190e7->leave($__internal_cd4618370dc7144395c4f4783606c52f9beb41c752940539d5de6c8ac6a190e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74c215549a0b789c7f4d73504abe7109072e7da8152c6216b6fc5f35dac318ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c215549a0b789c7f4d73504abe7109072e7da8152c6216b6fc5f35dac318ca->enter($__internal_74c215549a0b789c7f4d73504abe7109072e7da8152c6216b6fc5f35dac318ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd3d3e443f42aa4437a95bff9fc53817867e9d9043bbe4e33ba6dfb7b14402f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3d3e443f42aa4437a95bff9fc53817867e9d9043bbe4e33ba6dfb7b14402f3->enter($__internal_bd3d3e443f42aa4437a95bff9fc53817867e9d9043bbe4e33ba6dfb7b14402f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bd3d3e443f42aa4437a95bff9fc53817867e9d9043bbe4e33ba6dfb7b14402f3->leave($__internal_bd3d3e443f42aa4437a95bff9fc53817867e9d9043bbe4e33ba6dfb7b14402f3_prof);

        
        $__internal_74c215549a0b789c7f4d73504abe7109072e7da8152c6216b6fc5f35dac318ca->leave($__internal_74c215549a0b789c7f4d73504abe7109072e7da8152c6216b6fc5f35dac318ca_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

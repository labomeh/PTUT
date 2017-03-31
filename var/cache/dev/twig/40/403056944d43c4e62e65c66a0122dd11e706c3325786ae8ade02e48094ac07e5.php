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
        $__internal_c775b75b0b81808bfa22b74dcc05165d3dcf6714ada575d26fda148b3bc0f5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c775b75b0b81808bfa22b74dcc05165d3dcf6714ada575d26fda148b3bc0f5d4->enter($__internal_c775b75b0b81808bfa22b74dcc05165d3dcf6714ada575d26fda148b3bc0f5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_301260c570946cacc6305bfe67b202698ad8f89d5b14c22fbbdc0732fac67251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301260c570946cacc6305bfe67b202698ad8f89d5b14c22fbbdc0732fac67251->enter($__internal_301260c570946cacc6305bfe67b202698ad8f89d5b14c22fbbdc0732fac67251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c775b75b0b81808bfa22b74dcc05165d3dcf6714ada575d26fda148b3bc0f5d4->leave($__internal_c775b75b0b81808bfa22b74dcc05165d3dcf6714ada575d26fda148b3bc0f5d4_prof);

        
        $__internal_301260c570946cacc6305bfe67b202698ad8f89d5b14c22fbbdc0732fac67251->leave($__internal_301260c570946cacc6305bfe67b202698ad8f89d5b14c22fbbdc0732fac67251_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9efc9ccf218931f3ab2f268428fe9683334686a7ecbd84923f01fa9904ddc808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efc9ccf218931f3ab2f268428fe9683334686a7ecbd84923f01fa9904ddc808->enter($__internal_9efc9ccf218931f3ab2f268428fe9683334686a7ecbd84923f01fa9904ddc808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49a71ae12293f9f9ff5cad386364dbfbae2869426032ae78cde46c9c2b46ee08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a71ae12293f9f9ff5cad386364dbfbae2869426032ae78cde46c9c2b46ee08->enter($__internal_49a71ae12293f9f9ff5cad386364dbfbae2869426032ae78cde46c9c2b46ee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_49a71ae12293f9f9ff5cad386364dbfbae2869426032ae78cde46c9c2b46ee08->leave($__internal_49a71ae12293f9f9ff5cad386364dbfbae2869426032ae78cde46c9c2b46ee08_prof);

        
        $__internal_9efc9ccf218931f3ab2f268428fe9683334686a7ecbd84923f01fa9904ddc808->leave($__internal_9efc9ccf218931f3ab2f268428fe9683334686a7ecbd84923f01fa9904ddc808_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1aa43256a407318db2e982924763aae1f0b0d44493476d328df8917b25af90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1aa43256a407318db2e982924763aae1f0b0d44493476d328df8917b25af90d->enter($__internal_c1aa43256a407318db2e982924763aae1f0b0d44493476d328df8917b25af90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af71abcade65e299f15bdc837a5f7b3941dd299e84bbdf123bad2f883f45a11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af71abcade65e299f15bdc837a5f7b3941dd299e84bbdf123bad2f883f45a11d->enter($__internal_af71abcade65e299f15bdc837a5f7b3941dd299e84bbdf123bad2f883f45a11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_af71abcade65e299f15bdc837a5f7b3941dd299e84bbdf123bad2f883f45a11d->leave($__internal_af71abcade65e299f15bdc837a5f7b3941dd299e84bbdf123bad2f883f45a11d_prof);

        
        $__internal_c1aa43256a407318db2e982924763aae1f0b0d44493476d328df8917b25af90d->leave($__internal_c1aa43256a407318db2e982924763aae1f0b0d44493476d328df8917b25af90d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fff83a90c93f35fdefdd84bf6f679b6d9ebb816eb3b57ec8f9d9ed0bffd10e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fff83a90c93f35fdefdd84bf6f679b6d9ebb816eb3b57ec8f9d9ed0bffd10e9->enter($__internal_1fff83a90c93f35fdefdd84bf6f679b6d9ebb816eb3b57ec8f9d9ed0bffd10e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b24b3f2bf3f680a8c4f296fa74a508e4d1c769368bb07cd2a83cc2acfcc53340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24b3f2bf3f680a8c4f296fa74a508e4d1c769368bb07cd2a83cc2acfcc53340->enter($__internal_b24b3f2bf3f680a8c4f296fa74a508e4d1c769368bb07cd2a83cc2acfcc53340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b24b3f2bf3f680a8c4f296fa74a508e4d1c769368bb07cd2a83cc2acfcc53340->leave($__internal_b24b3f2bf3f680a8c4f296fa74a508e4d1c769368bb07cd2a83cc2acfcc53340_prof);

        
        $__internal_1fff83a90c93f35fdefdd84bf6f679b6d9ebb816eb3b57ec8f9d9ed0bffd10e9->leave($__internal_1fff83a90c93f35fdefdd84bf6f679b6d9ebb816eb3b57ec8f9d9ed0bffd10e9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

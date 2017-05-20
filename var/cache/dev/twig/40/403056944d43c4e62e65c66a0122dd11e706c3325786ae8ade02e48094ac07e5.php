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
        $__internal_3c9bd70dbce632c5efdca1f2036f91009b761179b32c6006ebf03de6c43d50bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9bd70dbce632c5efdca1f2036f91009b761179b32c6006ebf03de6c43d50bd->enter($__internal_3c9bd70dbce632c5efdca1f2036f91009b761179b32c6006ebf03de6c43d50bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_94d1295e2311f2442172926ef243aadcdeaca4853d425704d52825541542a7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d1295e2311f2442172926ef243aadcdeaca4853d425704d52825541542a7e4->enter($__internal_94d1295e2311f2442172926ef243aadcdeaca4853d425704d52825541542a7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9bd70dbce632c5efdca1f2036f91009b761179b32c6006ebf03de6c43d50bd->leave($__internal_3c9bd70dbce632c5efdca1f2036f91009b761179b32c6006ebf03de6c43d50bd_prof);

        
        $__internal_94d1295e2311f2442172926ef243aadcdeaca4853d425704d52825541542a7e4->leave($__internal_94d1295e2311f2442172926ef243aadcdeaca4853d425704d52825541542a7e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86b47c798ff3a272849086372aed1f3918738b842031e57794840832893a65f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b47c798ff3a272849086372aed1f3918738b842031e57794840832893a65f8->enter($__internal_86b47c798ff3a272849086372aed1f3918738b842031e57794840832893a65f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_219a3b8b0d40809e424f82a1800691602e8b696ce569d75a84f9db776e868bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219a3b8b0d40809e424f82a1800691602e8b696ce569d75a84f9db776e868bc0->enter($__internal_219a3b8b0d40809e424f82a1800691602e8b696ce569d75a84f9db776e868bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_219a3b8b0d40809e424f82a1800691602e8b696ce569d75a84f9db776e868bc0->leave($__internal_219a3b8b0d40809e424f82a1800691602e8b696ce569d75a84f9db776e868bc0_prof);

        
        $__internal_86b47c798ff3a272849086372aed1f3918738b842031e57794840832893a65f8->leave($__internal_86b47c798ff3a272849086372aed1f3918738b842031e57794840832893a65f8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fa1075a25a8749871906e793a9c14b9fd40200ee698d268b54d3005a7357331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa1075a25a8749871906e793a9c14b9fd40200ee698d268b54d3005a7357331->enter($__internal_9fa1075a25a8749871906e793a9c14b9fd40200ee698d268b54d3005a7357331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e5229492dfd75e73fb7acbfdf960096374ebc7a9713fca0372606cfd3e7b0104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5229492dfd75e73fb7acbfdf960096374ebc7a9713fca0372606cfd3e7b0104->enter($__internal_e5229492dfd75e73fb7acbfdf960096374ebc7a9713fca0372606cfd3e7b0104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e5229492dfd75e73fb7acbfdf960096374ebc7a9713fca0372606cfd3e7b0104->leave($__internal_e5229492dfd75e73fb7acbfdf960096374ebc7a9713fca0372606cfd3e7b0104_prof);

        
        $__internal_9fa1075a25a8749871906e793a9c14b9fd40200ee698d268b54d3005a7357331->leave($__internal_9fa1075a25a8749871906e793a9c14b9fd40200ee698d268b54d3005a7357331_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a429396d33c0791850f28fbc2f44752ba912a7af90e6840b90e715c6822c23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a429396d33c0791850f28fbc2f44752ba912a7af90e6840b90e715c6822c23b->enter($__internal_6a429396d33c0791850f28fbc2f44752ba912a7af90e6840b90e715c6822c23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea6bae6381c6eb74185d2d7350bb335d3f7feae7b0dde6a2a78445213cbb3b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6bae6381c6eb74185d2d7350bb335d3f7feae7b0dde6a2a78445213cbb3b89->enter($__internal_ea6bae6381c6eb74185d2d7350bb335d3f7feae7b0dde6a2a78445213cbb3b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ea6bae6381c6eb74185d2d7350bb335d3f7feae7b0dde6a2a78445213cbb3b89->leave($__internal_ea6bae6381c6eb74185d2d7350bb335d3f7feae7b0dde6a2a78445213cbb3b89_prof);

        
        $__internal_6a429396d33c0791850f28fbc2f44752ba912a7af90e6840b90e715c6822c23b->leave($__internal_6a429396d33c0791850f28fbc2f44752ba912a7af90e6840b90e715c6822c23b_prof);

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

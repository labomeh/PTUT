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
        $__internal_f97e6bbba2b2c463916fe5503069c620da502107812346d75fc222ec697cd578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97e6bbba2b2c463916fe5503069c620da502107812346d75fc222ec697cd578->enter($__internal_f97e6bbba2b2c463916fe5503069c620da502107812346d75fc222ec697cd578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_80a21c965184532ba84557b9c147e764b45aa1f02c408095eb13063419b71bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a21c965184532ba84557b9c147e764b45aa1f02c408095eb13063419b71bc4->enter($__internal_80a21c965184532ba84557b9c147e764b45aa1f02c408095eb13063419b71bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f97e6bbba2b2c463916fe5503069c620da502107812346d75fc222ec697cd578->leave($__internal_f97e6bbba2b2c463916fe5503069c620da502107812346d75fc222ec697cd578_prof);

        
        $__internal_80a21c965184532ba84557b9c147e764b45aa1f02c408095eb13063419b71bc4->leave($__internal_80a21c965184532ba84557b9c147e764b45aa1f02c408095eb13063419b71bc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcad87fbede2547f6940abc5c916ed2950128d3303b85e70973d71474dcacd78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcad87fbede2547f6940abc5c916ed2950128d3303b85e70973d71474dcacd78->enter($__internal_dcad87fbede2547f6940abc5c916ed2950128d3303b85e70973d71474dcacd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f916d34900551ab82aa35a5a2ca51a8c2df168668e2f3ef8e060bfb4b32961ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f916d34900551ab82aa35a5a2ca51a8c2df168668e2f3ef8e060bfb4b32961ac->enter($__internal_f916d34900551ab82aa35a5a2ca51a8c2df168668e2f3ef8e060bfb4b32961ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f916d34900551ab82aa35a5a2ca51a8c2df168668e2f3ef8e060bfb4b32961ac->leave($__internal_f916d34900551ab82aa35a5a2ca51a8c2df168668e2f3ef8e060bfb4b32961ac_prof);

        
        $__internal_dcad87fbede2547f6940abc5c916ed2950128d3303b85e70973d71474dcacd78->leave($__internal_dcad87fbede2547f6940abc5c916ed2950128d3303b85e70973d71474dcacd78_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57476a27a1d63ba0e8fc1224f7a03dc79265063a5b549f64be66a78a212510a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57476a27a1d63ba0e8fc1224f7a03dc79265063a5b549f64be66a78a212510a2->enter($__internal_57476a27a1d63ba0e8fc1224f7a03dc79265063a5b549f64be66a78a212510a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81e6e9b8268391a5b2a4417d14a923dbbdb9885aa22b6f4c99ea07c1827e4822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e6e9b8268391a5b2a4417d14a923dbbdb9885aa22b6f4c99ea07c1827e4822->enter($__internal_81e6e9b8268391a5b2a4417d14a923dbbdb9885aa22b6f4c99ea07c1827e4822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_81e6e9b8268391a5b2a4417d14a923dbbdb9885aa22b6f4c99ea07c1827e4822->leave($__internal_81e6e9b8268391a5b2a4417d14a923dbbdb9885aa22b6f4c99ea07c1827e4822_prof);

        
        $__internal_57476a27a1d63ba0e8fc1224f7a03dc79265063a5b549f64be66a78a212510a2->leave($__internal_57476a27a1d63ba0e8fc1224f7a03dc79265063a5b549f64be66a78a212510a2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f38ee16bd05c0b575ee497e5a19835f2780c8f60d2d729b5e184e337ac7f3e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38ee16bd05c0b575ee497e5a19835f2780c8f60d2d729b5e184e337ac7f3e01->enter($__internal_f38ee16bd05c0b575ee497e5a19835f2780c8f60d2d729b5e184e337ac7f3e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_302c06934aa6e79af0c8f3a7afeb03ac79c12819dddf163d0cdc751352bb16a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302c06934aa6e79af0c8f3a7afeb03ac79c12819dddf163d0cdc751352bb16a7->enter($__internal_302c06934aa6e79af0c8f3a7afeb03ac79c12819dddf163d0cdc751352bb16a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_302c06934aa6e79af0c8f3a7afeb03ac79c12819dddf163d0cdc751352bb16a7->leave($__internal_302c06934aa6e79af0c8f3a7afeb03ac79c12819dddf163d0cdc751352bb16a7_prof);

        
        $__internal_f38ee16bd05c0b575ee497e5a19835f2780c8f60d2d729b5e184e337ac7f3e01->leave($__internal_f38ee16bd05c0b575ee497e5a19835f2780c8f60d2d729b5e184e337ac7f3e01_prof);

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

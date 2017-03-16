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
        $__internal_aba449bf4591ee92586e929e7a6db2bee6e60e105a79473dc1202f23031e7453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba449bf4591ee92586e929e7a6db2bee6e60e105a79473dc1202f23031e7453->enter($__internal_aba449bf4591ee92586e929e7a6db2bee6e60e105a79473dc1202f23031e7453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c1f94187703555ac0775e3b037a22d24418cdb4ee6ad7a2cc18585157ba9f807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f94187703555ac0775e3b037a22d24418cdb4ee6ad7a2cc18585157ba9f807->enter($__internal_c1f94187703555ac0775e3b037a22d24418cdb4ee6ad7a2cc18585157ba9f807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aba449bf4591ee92586e929e7a6db2bee6e60e105a79473dc1202f23031e7453->leave($__internal_aba449bf4591ee92586e929e7a6db2bee6e60e105a79473dc1202f23031e7453_prof);

        
        $__internal_c1f94187703555ac0775e3b037a22d24418cdb4ee6ad7a2cc18585157ba9f807->leave($__internal_c1f94187703555ac0775e3b037a22d24418cdb4ee6ad7a2cc18585157ba9f807_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86091ba46b25d8c6e2d823bd191efb2fdbd591eb260a7af6362f5dfab4791fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86091ba46b25d8c6e2d823bd191efb2fdbd591eb260a7af6362f5dfab4791fc0->enter($__internal_86091ba46b25d8c6e2d823bd191efb2fdbd591eb260a7af6362f5dfab4791fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22b271d9f2431e690cd04198a908956b19a29babcf186254140d229b286d9dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b271d9f2431e690cd04198a908956b19a29babcf186254140d229b286d9dcc->enter($__internal_22b271d9f2431e690cd04198a908956b19a29babcf186254140d229b286d9dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_22b271d9f2431e690cd04198a908956b19a29babcf186254140d229b286d9dcc->leave($__internal_22b271d9f2431e690cd04198a908956b19a29babcf186254140d229b286d9dcc_prof);

        
        $__internal_86091ba46b25d8c6e2d823bd191efb2fdbd591eb260a7af6362f5dfab4791fc0->leave($__internal_86091ba46b25d8c6e2d823bd191efb2fdbd591eb260a7af6362f5dfab4791fc0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ab48df108d8f7dad86e724803cdb2bd53db2d709f426fb08b1dd25d969eed11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab48df108d8f7dad86e724803cdb2bd53db2d709f426fb08b1dd25d969eed11->enter($__internal_8ab48df108d8f7dad86e724803cdb2bd53db2d709f426fb08b1dd25d969eed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_662999a6cd373f0e68ac12119060b934eb7defe8810a8e76cd125e48fe07a870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662999a6cd373f0e68ac12119060b934eb7defe8810a8e76cd125e48fe07a870->enter($__internal_662999a6cd373f0e68ac12119060b934eb7defe8810a8e76cd125e48fe07a870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_662999a6cd373f0e68ac12119060b934eb7defe8810a8e76cd125e48fe07a870->leave($__internal_662999a6cd373f0e68ac12119060b934eb7defe8810a8e76cd125e48fe07a870_prof);

        
        $__internal_8ab48df108d8f7dad86e724803cdb2bd53db2d709f426fb08b1dd25d969eed11->leave($__internal_8ab48df108d8f7dad86e724803cdb2bd53db2d709f426fb08b1dd25d969eed11_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7be714c83b2472083bfbb335f4a156322ae28bd343e5667bc43f4db2c083e4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be714c83b2472083bfbb335f4a156322ae28bd343e5667bc43f4db2c083e4a3->enter($__internal_7be714c83b2472083bfbb335f4a156322ae28bd343e5667bc43f4db2c083e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bca70ee698d5aa22654800b5fb202dfd24ed149da6345815fbc8b42f06f0a3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca70ee698d5aa22654800b5fb202dfd24ed149da6345815fbc8b42f06f0a3c0->enter($__internal_bca70ee698d5aa22654800b5fb202dfd24ed149da6345815fbc8b42f06f0a3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bca70ee698d5aa22654800b5fb202dfd24ed149da6345815fbc8b42f06f0a3c0->leave($__internal_bca70ee698d5aa22654800b5fb202dfd24ed149da6345815fbc8b42f06f0a3c0_prof);

        
        $__internal_7be714c83b2472083bfbb335f4a156322ae28bd343e5667bc43f4db2c083e4a3->leave($__internal_7be714c83b2472083bfbb335f4a156322ae28bd343e5667bc43f4db2c083e4a3_prof);

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

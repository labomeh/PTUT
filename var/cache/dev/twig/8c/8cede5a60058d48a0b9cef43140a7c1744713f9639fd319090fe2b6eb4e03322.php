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
        $__internal_00fb54af657806fa82fbfdb5ff30921e55de813aa26564e782caad5c9e9ce382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fb54af657806fa82fbfdb5ff30921e55de813aa26564e782caad5c9e9ce382->enter($__internal_00fb54af657806fa82fbfdb5ff30921e55de813aa26564e782caad5c9e9ce382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_921316875621d741f6332298c935226521e34c4d6ece368867077b10e9ce06bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921316875621d741f6332298c935226521e34c4d6ece368867077b10e9ce06bb->enter($__internal_921316875621d741f6332298c935226521e34c4d6ece368867077b10e9ce06bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00fb54af657806fa82fbfdb5ff30921e55de813aa26564e782caad5c9e9ce382->leave($__internal_00fb54af657806fa82fbfdb5ff30921e55de813aa26564e782caad5c9e9ce382_prof);

        
        $__internal_921316875621d741f6332298c935226521e34c4d6ece368867077b10e9ce06bb->leave($__internal_921316875621d741f6332298c935226521e34c4d6ece368867077b10e9ce06bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcc0008957af0ee4cc5bbba83a5bf53cc5497b109bcca289d4033dced1b74d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc0008957af0ee4cc5bbba83a5bf53cc5497b109bcca289d4033dced1b74d97->enter($__internal_fcc0008957af0ee4cc5bbba83a5bf53cc5497b109bcca289d4033dced1b74d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f66225f6d681d1d1dda5de7b010658c404f96b47b84a3155f6ad1412082605ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66225f6d681d1d1dda5de7b010658c404f96b47b84a3155f6ad1412082605ac->enter($__internal_f66225f6d681d1d1dda5de7b010658c404f96b47b84a3155f6ad1412082605ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f66225f6d681d1d1dda5de7b010658c404f96b47b84a3155f6ad1412082605ac->leave($__internal_f66225f6d681d1d1dda5de7b010658c404f96b47b84a3155f6ad1412082605ac_prof);

        
        $__internal_fcc0008957af0ee4cc5bbba83a5bf53cc5497b109bcca289d4033dced1b74d97->leave($__internal_fcc0008957af0ee4cc5bbba83a5bf53cc5497b109bcca289d4033dced1b74d97_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7baaf0d5e3b563dbd90bfeae58f51fa5824a2f41f16ba838feb2e1655ac80b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7baaf0d5e3b563dbd90bfeae58f51fa5824a2f41f16ba838feb2e1655ac80b0e->enter($__internal_7baaf0d5e3b563dbd90bfeae58f51fa5824a2f41f16ba838feb2e1655ac80b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bc9a79d14845efbec966f8365603a70fc2297d85694920b9ab0aae0d3fe1792e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9a79d14845efbec966f8365603a70fc2297d85694920b9ab0aae0d3fe1792e->enter($__internal_bc9a79d14845efbec966f8365603a70fc2297d85694920b9ab0aae0d3fe1792e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bc9a79d14845efbec966f8365603a70fc2297d85694920b9ab0aae0d3fe1792e->leave($__internal_bc9a79d14845efbec966f8365603a70fc2297d85694920b9ab0aae0d3fe1792e_prof);

        
        $__internal_7baaf0d5e3b563dbd90bfeae58f51fa5824a2f41f16ba838feb2e1655ac80b0e->leave($__internal_7baaf0d5e3b563dbd90bfeae58f51fa5824a2f41f16ba838feb2e1655ac80b0e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aac5108e9e70335d525cca9efd4d8c8dcb02ea3f3c10640afc45c9d94a8f7062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac5108e9e70335d525cca9efd4d8c8dcb02ea3f3c10640afc45c9d94a8f7062->enter($__internal_aac5108e9e70335d525cca9efd4d8c8dcb02ea3f3c10640afc45c9d94a8f7062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77cbbaa4d280d540960fd8277dbb834e3fa4f7b80ee178a93cfce84c464a0fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cbbaa4d280d540960fd8277dbb834e3fa4f7b80ee178a93cfce84c464a0fac->enter($__internal_77cbbaa4d280d540960fd8277dbb834e3fa4f7b80ee178a93cfce84c464a0fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_77cbbaa4d280d540960fd8277dbb834e3fa4f7b80ee178a93cfce84c464a0fac->leave($__internal_77cbbaa4d280d540960fd8277dbb834e3fa4f7b80ee178a93cfce84c464a0fac_prof);

        
        $__internal_aac5108e9e70335d525cca9efd4d8c8dcb02ea3f3c10640afc45c9d94a8f7062->leave($__internal_aac5108e9e70335d525cca9efd4d8c8dcb02ea3f3c10640afc45c9d94a8f7062_prof);

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

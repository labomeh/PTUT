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
        $__internal_6903818bbe905229556907196e3b2eee47e1217885e20fbcf73965f17f2516e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6903818bbe905229556907196e3b2eee47e1217885e20fbcf73965f17f2516e9->enter($__internal_6903818bbe905229556907196e3b2eee47e1217885e20fbcf73965f17f2516e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d093813fbaa330779eb71186aef824f27e23c2d54c78c5bbfe91ccb76fc31743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d093813fbaa330779eb71186aef824f27e23c2d54c78c5bbfe91ccb76fc31743->enter($__internal_d093813fbaa330779eb71186aef824f27e23c2d54c78c5bbfe91ccb76fc31743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6903818bbe905229556907196e3b2eee47e1217885e20fbcf73965f17f2516e9->leave($__internal_6903818bbe905229556907196e3b2eee47e1217885e20fbcf73965f17f2516e9_prof);

        
        $__internal_d093813fbaa330779eb71186aef824f27e23c2d54c78c5bbfe91ccb76fc31743->leave($__internal_d093813fbaa330779eb71186aef824f27e23c2d54c78c5bbfe91ccb76fc31743_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e83c9f31aad6f225f0b2447bd77449e367366ccdf5bb54d493f2038622744b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e83c9f31aad6f225f0b2447bd77449e367366ccdf5bb54d493f2038622744b4->enter($__internal_2e83c9f31aad6f225f0b2447bd77449e367366ccdf5bb54d493f2038622744b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7419da86eaa6e6394a4688ef204a2bae32acbfc61cbef04165df6d3a9edfbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7419da86eaa6e6394a4688ef204a2bae32acbfc61cbef04165df6d3a9edfbac->enter($__internal_a7419da86eaa6e6394a4688ef204a2bae32acbfc61cbef04165df6d3a9edfbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a7419da86eaa6e6394a4688ef204a2bae32acbfc61cbef04165df6d3a9edfbac->leave($__internal_a7419da86eaa6e6394a4688ef204a2bae32acbfc61cbef04165df6d3a9edfbac_prof);

        
        $__internal_2e83c9f31aad6f225f0b2447bd77449e367366ccdf5bb54d493f2038622744b4->leave($__internal_2e83c9f31aad6f225f0b2447bd77449e367366ccdf5bb54d493f2038622744b4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6693340d1489358ab2b09a5aa4d73e3fcef6590f258227337bd5b4184f8b4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6693340d1489358ab2b09a5aa4d73e3fcef6590f258227337bd5b4184f8b4df->enter($__internal_e6693340d1489358ab2b09a5aa4d73e3fcef6590f258227337bd5b4184f8b4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b66acd7c6e17d39880e8d70c91af8e0f6b5dfaf46cc26c1f7ebb8ffd37320ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66acd7c6e17d39880e8d70c91af8e0f6b5dfaf46cc26c1f7ebb8ffd37320ad8->enter($__internal_b66acd7c6e17d39880e8d70c91af8e0f6b5dfaf46cc26c1f7ebb8ffd37320ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b66acd7c6e17d39880e8d70c91af8e0f6b5dfaf46cc26c1f7ebb8ffd37320ad8->leave($__internal_b66acd7c6e17d39880e8d70c91af8e0f6b5dfaf46cc26c1f7ebb8ffd37320ad8_prof);

        
        $__internal_e6693340d1489358ab2b09a5aa4d73e3fcef6590f258227337bd5b4184f8b4df->leave($__internal_e6693340d1489358ab2b09a5aa4d73e3fcef6590f258227337bd5b4184f8b4df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ad9e7ed5e89504b678dd19d8e400bca8e0e537a899268e5809c391e617ab079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad9e7ed5e89504b678dd19d8e400bca8e0e537a899268e5809c391e617ab079->enter($__internal_3ad9e7ed5e89504b678dd19d8e400bca8e0e537a899268e5809c391e617ab079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5480aff76e0cbd746ed6b3454e206bc3cac7033b904be2ce7f85831010951bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5480aff76e0cbd746ed6b3454e206bc3cac7033b904be2ce7f85831010951bf6->enter($__internal_5480aff76e0cbd746ed6b3454e206bc3cac7033b904be2ce7f85831010951bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5480aff76e0cbd746ed6b3454e206bc3cac7033b904be2ce7f85831010951bf6->leave($__internal_5480aff76e0cbd746ed6b3454e206bc3cac7033b904be2ce7f85831010951bf6_prof);

        
        $__internal_3ad9e7ed5e89504b678dd19d8e400bca8e0e537a899268e5809c391e617ab079->leave($__internal_3ad9e7ed5e89504b678dd19d8e400bca8e0e537a899268e5809c391e617ab079_prof);

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

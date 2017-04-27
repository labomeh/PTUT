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
        $__internal_6f65036d654e3b8d94003e4e005f4acad7c62d3c87c768f2d34a4bf0dbdb5912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f65036d654e3b8d94003e4e005f4acad7c62d3c87c768f2d34a4bf0dbdb5912->enter($__internal_6f65036d654e3b8d94003e4e005f4acad7c62d3c87c768f2d34a4bf0dbdb5912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e612b855c07ad95ccc8a6e5380d3518666f6df3d62752886db1e910af3d0c1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e612b855c07ad95ccc8a6e5380d3518666f6df3d62752886db1e910af3d0c1f4->enter($__internal_e612b855c07ad95ccc8a6e5380d3518666f6df3d62752886db1e910af3d0c1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f65036d654e3b8d94003e4e005f4acad7c62d3c87c768f2d34a4bf0dbdb5912->leave($__internal_6f65036d654e3b8d94003e4e005f4acad7c62d3c87c768f2d34a4bf0dbdb5912_prof);

        
        $__internal_e612b855c07ad95ccc8a6e5380d3518666f6df3d62752886db1e910af3d0c1f4->leave($__internal_e612b855c07ad95ccc8a6e5380d3518666f6df3d62752886db1e910af3d0c1f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d168a54f21cb54b188b7c87ef31347804afc5131bc0f737d8ab7192c90aadf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d168a54f21cb54b188b7c87ef31347804afc5131bc0f737d8ab7192c90aadf91->enter($__internal_d168a54f21cb54b188b7c87ef31347804afc5131bc0f737d8ab7192c90aadf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d4afba430ff34fd296929d998909278e3dac2b54c5238af4f60b06422a4e8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4afba430ff34fd296929d998909278e3dac2b54c5238af4f60b06422a4e8a1->enter($__internal_6d4afba430ff34fd296929d998909278e3dac2b54c5238af4f60b06422a4e8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6d4afba430ff34fd296929d998909278e3dac2b54c5238af4f60b06422a4e8a1->leave($__internal_6d4afba430ff34fd296929d998909278e3dac2b54c5238af4f60b06422a4e8a1_prof);

        
        $__internal_d168a54f21cb54b188b7c87ef31347804afc5131bc0f737d8ab7192c90aadf91->leave($__internal_d168a54f21cb54b188b7c87ef31347804afc5131bc0f737d8ab7192c90aadf91_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72a4375723287acb8654a1a25c30f01962a07d87d326ebe568048117dd892169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a4375723287acb8654a1a25c30f01962a07d87d326ebe568048117dd892169->enter($__internal_72a4375723287acb8654a1a25c30f01962a07d87d326ebe568048117dd892169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cca6597c72fb6888f0be2b99c9be98737a47e8f8265bab57b3ed4a5b1a371cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca6597c72fb6888f0be2b99c9be98737a47e8f8265bab57b3ed4a5b1a371cb3->enter($__internal_cca6597c72fb6888f0be2b99c9be98737a47e8f8265bab57b3ed4a5b1a371cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cca6597c72fb6888f0be2b99c9be98737a47e8f8265bab57b3ed4a5b1a371cb3->leave($__internal_cca6597c72fb6888f0be2b99c9be98737a47e8f8265bab57b3ed4a5b1a371cb3_prof);

        
        $__internal_72a4375723287acb8654a1a25c30f01962a07d87d326ebe568048117dd892169->leave($__internal_72a4375723287acb8654a1a25c30f01962a07d87d326ebe568048117dd892169_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5bb02a0ddcb85fb2a6e0f1cb6a39fd10f0539a4303de799067018caa407f5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bb02a0ddcb85fb2a6e0f1cb6a39fd10f0539a4303de799067018caa407f5aa->enter($__internal_a5bb02a0ddcb85fb2a6e0f1cb6a39fd10f0539a4303de799067018caa407f5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f66112197a808822b9106889886be3e11a5474f60a342dfa42bad67ce6238549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66112197a808822b9106889886be3e11a5474f60a342dfa42bad67ce6238549->enter($__internal_f66112197a808822b9106889886be3e11a5474f60a342dfa42bad67ce6238549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f66112197a808822b9106889886be3e11a5474f60a342dfa42bad67ce6238549->leave($__internal_f66112197a808822b9106889886be3e11a5474f60a342dfa42bad67ce6238549_prof);

        
        $__internal_a5bb02a0ddcb85fb2a6e0f1cb6a39fd10f0539a4303de799067018caa407f5aa->leave($__internal_a5bb02a0ddcb85fb2a6e0f1cb6a39fd10f0539a4303de799067018caa407f5aa_prof);

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

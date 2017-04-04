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
        $__internal_3acb5d1acd6efac3049af040dc1fdb8d0e655155cbe936badfdba2e060ff2dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acb5d1acd6efac3049af040dc1fdb8d0e655155cbe936badfdba2e060ff2dcb->enter($__internal_3acb5d1acd6efac3049af040dc1fdb8d0e655155cbe936badfdba2e060ff2dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_6d4b516149281d963b07e1aff4d81f22c226dcdf9c1047a9c241dd298d7f57a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4b516149281d963b07e1aff4d81f22c226dcdf9c1047a9c241dd298d7f57a0->enter($__internal_6d4b516149281d963b07e1aff4d81f22c226dcdf9c1047a9c241dd298d7f57a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3acb5d1acd6efac3049af040dc1fdb8d0e655155cbe936badfdba2e060ff2dcb->leave($__internal_3acb5d1acd6efac3049af040dc1fdb8d0e655155cbe936badfdba2e060ff2dcb_prof);

        
        $__internal_6d4b516149281d963b07e1aff4d81f22c226dcdf9c1047a9c241dd298d7f57a0->leave($__internal_6d4b516149281d963b07e1aff4d81f22c226dcdf9c1047a9c241dd298d7f57a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16302a69380cff85d30337ddd06c09d44897201b080bfcce9c60de66c8bd13df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16302a69380cff85d30337ddd06c09d44897201b080bfcce9c60de66c8bd13df->enter($__internal_16302a69380cff85d30337ddd06c09d44897201b080bfcce9c60de66c8bd13df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf8a067443aaf6b137ab5a041cba5c04154a226bb80190f1e909b8a0294d46c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8a067443aaf6b137ab5a041cba5c04154a226bb80190f1e909b8a0294d46c2->enter($__internal_cf8a067443aaf6b137ab5a041cba5c04154a226bb80190f1e909b8a0294d46c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cf8a067443aaf6b137ab5a041cba5c04154a226bb80190f1e909b8a0294d46c2->leave($__internal_cf8a067443aaf6b137ab5a041cba5c04154a226bb80190f1e909b8a0294d46c2_prof);

        
        $__internal_16302a69380cff85d30337ddd06c09d44897201b080bfcce9c60de66c8bd13df->leave($__internal_16302a69380cff85d30337ddd06c09d44897201b080bfcce9c60de66c8bd13df_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60a5c419d6552a436aa5876e0d73faca2e6c307fad51fb49fea506e4bb79c213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a5c419d6552a436aa5876e0d73faca2e6c307fad51fb49fea506e4bb79c213->enter($__internal_60a5c419d6552a436aa5876e0d73faca2e6c307fad51fb49fea506e4bb79c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f256232c162613424b8021dd7f997e8851e43e7f774e730750b37d5353d57a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f256232c162613424b8021dd7f997e8851e43e7f774e730750b37d5353d57a00->enter($__internal_f256232c162613424b8021dd7f997e8851e43e7f774e730750b37d5353d57a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f256232c162613424b8021dd7f997e8851e43e7f774e730750b37d5353d57a00->leave($__internal_f256232c162613424b8021dd7f997e8851e43e7f774e730750b37d5353d57a00_prof);

        
        $__internal_60a5c419d6552a436aa5876e0d73faca2e6c307fad51fb49fea506e4bb79c213->leave($__internal_60a5c419d6552a436aa5876e0d73faca2e6c307fad51fb49fea506e4bb79c213_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a59b94c536a77e8df1833f0d2cfd077d2f53692b2d80bded687ac4508a98c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a59b94c536a77e8df1833f0d2cfd077d2f53692b2d80bded687ac4508a98c71->enter($__internal_6a59b94c536a77e8df1833f0d2cfd077d2f53692b2d80bded687ac4508a98c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f47156e178415702f6b46b1864d6477bc27a8f157eda4b26091b514e078f75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f47156e178415702f6b46b1864d6477bc27a8f157eda4b26091b514e078f75e->enter($__internal_7f47156e178415702f6b46b1864d6477bc27a8f157eda4b26091b514e078f75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7f47156e178415702f6b46b1864d6477bc27a8f157eda4b26091b514e078f75e->leave($__internal_7f47156e178415702f6b46b1864d6477bc27a8f157eda4b26091b514e078f75e_prof);

        
        $__internal_6a59b94c536a77e8df1833f0d2cfd077d2f53692b2d80bded687ac4508a98c71->leave($__internal_6a59b94c536a77e8df1833f0d2cfd077d2f53692b2d80bded687ac4508a98c71_prof);

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

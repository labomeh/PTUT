<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
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
        $__internal_d63c72218be66450f1b77f8ab8db433eeca028692f272d8f4119411621660a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63c72218be66450f1b77f8ab8db433eeca028692f272d8f4119411621660a79->enter($__internal_d63c72218be66450f1b77f8ab8db433eeca028692f272d8f4119411621660a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4ead7e641167ce73bb595350f381fa72458dedf9902de21ac3ef5a7f75a5a12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ead7e641167ce73bb595350f381fa72458dedf9902de21ac3ef5a7f75a5a12d->enter($__internal_4ead7e641167ce73bb595350f381fa72458dedf9902de21ac3ef5a7f75a5a12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63c72218be66450f1b77f8ab8db433eeca028692f272d8f4119411621660a79->leave($__internal_d63c72218be66450f1b77f8ab8db433eeca028692f272d8f4119411621660a79_prof);

        
        $__internal_4ead7e641167ce73bb595350f381fa72458dedf9902de21ac3ef5a7f75a5a12d->leave($__internal_4ead7e641167ce73bb595350f381fa72458dedf9902de21ac3ef5a7f75a5a12d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c09336eec8f6c1bc0f80af112147b652b6efe1dfeef0873cbcbe2ea3d3eeec19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09336eec8f6c1bc0f80af112147b652b6efe1dfeef0873cbcbe2ea3d3eeec19->enter($__internal_c09336eec8f6c1bc0f80af112147b652b6efe1dfeef0873cbcbe2ea3d3eeec19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bcdf5f902045792fcf29d167f20bc9993974ed6fc802a6a7af19cd538f01c6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdf5f902045792fcf29d167f20bc9993974ed6fc802a6a7af19cd538f01c6a4->enter($__internal_bcdf5f902045792fcf29d167f20bc9993974ed6fc802a6a7af19cd538f01c6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bcdf5f902045792fcf29d167f20bc9993974ed6fc802a6a7af19cd538f01c6a4->leave($__internal_bcdf5f902045792fcf29d167f20bc9993974ed6fc802a6a7af19cd538f01c6a4_prof);

        
        $__internal_c09336eec8f6c1bc0f80af112147b652b6efe1dfeef0873cbcbe2ea3d3eeec19->leave($__internal_c09336eec8f6c1bc0f80af112147b652b6efe1dfeef0873cbcbe2ea3d3eeec19_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69e92d3290673f30f2bff033568e8c54e22d2be5613ba0c7e034014f77e875a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e92d3290673f30f2bff033568e8c54e22d2be5613ba0c7e034014f77e875a6->enter($__internal_69e92d3290673f30f2bff033568e8c54e22d2be5613ba0c7e034014f77e875a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3fd44d521fd019c1e6e3da04607b4d51f7292eac62c7a1eeb7563d934ed38004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd44d521fd019c1e6e3da04607b4d51f7292eac62c7a1eeb7563d934ed38004->enter($__internal_3fd44d521fd019c1e6e3da04607b4d51f7292eac62c7a1eeb7563d934ed38004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3fd44d521fd019c1e6e3da04607b4d51f7292eac62c7a1eeb7563d934ed38004->leave($__internal_3fd44d521fd019c1e6e3da04607b4d51f7292eac62c7a1eeb7563d934ed38004_prof);

        
        $__internal_69e92d3290673f30f2bff033568e8c54e22d2be5613ba0c7e034014f77e875a6->leave($__internal_69e92d3290673f30f2bff033568e8c54e22d2be5613ba0c7e034014f77e875a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7f3368cdcd5ab30322584ee96fb6a5529c986af3418beb1694778e42469a993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f3368cdcd5ab30322584ee96fb6a5529c986af3418beb1694778e42469a993->enter($__internal_c7f3368cdcd5ab30322584ee96fb6a5529c986af3418beb1694778e42469a993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c2e21003fac781bb095a0091af7075145e2cfbbe9f14beb7630a0196918f3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2e21003fac781bb095a0091af7075145e2cfbbe9f14beb7630a0196918f3f5->enter($__internal_8c2e21003fac781bb095a0091af7075145e2cfbbe9f14beb7630a0196918f3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8c2e21003fac781bb095a0091af7075145e2cfbbe9f14beb7630a0196918f3f5->leave($__internal_8c2e21003fac781bb095a0091af7075145e2cfbbe9f14beb7630a0196918f3f5_prof);

        
        $__internal_c7f3368cdcd5ab30322584ee96fb6a5529c986af3418beb1694778e42469a993->leave($__internal_c7f3368cdcd5ab30322584ee96fb6a5529c986af3418beb1694778e42469a993_prof);

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

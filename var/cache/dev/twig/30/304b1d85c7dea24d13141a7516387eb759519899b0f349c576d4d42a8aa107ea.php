<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e60a21b9f9abb1c8179ac1ee78bb1d1e6bcfe8114974a74ab2d5e0a66993d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_91f5b08370c5827a6b9bf62d8d82afe2502a67b72b64fdd346f004d4afff42e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f5b08370c5827a6b9bf62d8d82afe2502a67b72b64fdd346f004d4afff42e1->enter($__internal_91f5b08370c5827a6b9bf62d8d82afe2502a67b72b64fdd346f004d4afff42e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3b3563e04415fa78b30029ee23be4be5194c908d010b419162350522c1592516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3563e04415fa78b30029ee23be4be5194c908d010b419162350522c1592516->enter($__internal_3b3563e04415fa78b30029ee23be4be5194c908d010b419162350522c1592516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f5b08370c5827a6b9bf62d8d82afe2502a67b72b64fdd346f004d4afff42e1->leave($__internal_91f5b08370c5827a6b9bf62d8d82afe2502a67b72b64fdd346f004d4afff42e1_prof);

        
        $__internal_3b3563e04415fa78b30029ee23be4be5194c908d010b419162350522c1592516->leave($__internal_3b3563e04415fa78b30029ee23be4be5194c908d010b419162350522c1592516_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9303afc1c59dd58ad760a0c37f6b530ef7f9b947204bbf91cff410bc1f2cdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9303afc1c59dd58ad760a0c37f6b530ef7f9b947204bbf91cff410bc1f2cdb6->enter($__internal_b9303afc1c59dd58ad760a0c37f6b530ef7f9b947204bbf91cff410bc1f2cdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0685342bf1749c4e7535c42c17831c63913e3b8695348a53a11ec9ddba856f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0685342bf1749c4e7535c42c17831c63913e3b8695348a53a11ec9ddba856f84->enter($__internal_0685342bf1749c4e7535c42c17831c63913e3b8695348a53a11ec9ddba856f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0685342bf1749c4e7535c42c17831c63913e3b8695348a53a11ec9ddba856f84->leave($__internal_0685342bf1749c4e7535c42c17831c63913e3b8695348a53a11ec9ddba856f84_prof);

        
        $__internal_b9303afc1c59dd58ad760a0c37f6b530ef7f9b947204bbf91cff410bc1f2cdb6->leave($__internal_b9303afc1c59dd58ad760a0c37f6b530ef7f9b947204bbf91cff410bc1f2cdb6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_adb7a879f521fe2cca30024eebbdf86f44abcc8898cc8b1908c5d9d61f0c68bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb7a879f521fe2cca30024eebbdf86f44abcc8898cc8b1908c5d9d61f0c68bd->enter($__internal_adb7a879f521fe2cca30024eebbdf86f44abcc8898cc8b1908c5d9d61f0c68bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe88083514d8e61430b810e28db5139695418e574fc2209a9a4fe107cf1f696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe88083514d8e61430b810e28db5139695418e574fc2209a9a4fe107cf1f696c->enter($__internal_fe88083514d8e61430b810e28db5139695418e574fc2209a9a4fe107cf1f696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe88083514d8e61430b810e28db5139695418e574fc2209a9a4fe107cf1f696c->leave($__internal_fe88083514d8e61430b810e28db5139695418e574fc2209a9a4fe107cf1f696c_prof);

        
        $__internal_adb7a879f521fe2cca30024eebbdf86f44abcc8898cc8b1908c5d9d61f0c68bd->leave($__internal_adb7a879f521fe2cca30024eebbdf86f44abcc8898cc8b1908c5d9d61f0c68bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a6f4df5f5a3c4e4b8ea75724c6fb9f55270e6a93ab7af5a5efdc81eca88cb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6f4df5f5a3c4e4b8ea75724c6fb9f55270e6a93ab7af5a5efdc81eca88cb61->enter($__internal_4a6f4df5f5a3c4e4b8ea75724c6fb9f55270e6a93ab7af5a5efdc81eca88cb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62d437223e5a3f33155f283b394b3bfcf66e3b97e6393a14a30f48f646b9bd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d437223e5a3f33155f283b394b3bfcf66e3b97e6393a14a30f48f646b9bd90->enter($__internal_62d437223e5a3f33155f283b394b3bfcf66e3b97e6393a14a30f48f646b9bd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62d437223e5a3f33155f283b394b3bfcf66e3b97e6393a14a30f48f646b9bd90->leave($__internal_62d437223e5a3f33155f283b394b3bfcf66e3b97e6393a14a30f48f646b9bd90_prof);

        
        $__internal_4a6f4df5f5a3c4e4b8ea75724c6fb9f55270e6a93ab7af5a5efdc81eca88cb61->leave($__internal_4a6f4df5f5a3c4e4b8ea75724c6fb9f55270e6a93ab7af5a5efdc81eca88cb61_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

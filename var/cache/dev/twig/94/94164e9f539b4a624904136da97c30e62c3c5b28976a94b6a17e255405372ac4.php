<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_554dd2a99cafb41fbaff8e6ea9d2c9a37ff8486e5273f2187fcddf35f17c4c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554dd2a99cafb41fbaff8e6ea9d2c9a37ff8486e5273f2187fcddf35f17c4c05->enter($__internal_554dd2a99cafb41fbaff8e6ea9d2c9a37ff8486e5273f2187fcddf35f17c4c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a3f36ab7fa91e30c5bd20af05b00a0933eac87a55ae2b013dbc6c0d0f9bb0183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f36ab7fa91e30c5bd20af05b00a0933eac87a55ae2b013dbc6c0d0f9bb0183->enter($__internal_a3f36ab7fa91e30c5bd20af05b00a0933eac87a55ae2b013dbc6c0d0f9bb0183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554dd2a99cafb41fbaff8e6ea9d2c9a37ff8486e5273f2187fcddf35f17c4c05->leave($__internal_554dd2a99cafb41fbaff8e6ea9d2c9a37ff8486e5273f2187fcddf35f17c4c05_prof);

        
        $__internal_a3f36ab7fa91e30c5bd20af05b00a0933eac87a55ae2b013dbc6c0d0f9bb0183->leave($__internal_a3f36ab7fa91e30c5bd20af05b00a0933eac87a55ae2b013dbc6c0d0f9bb0183_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_420c66f1c470e5d42ffb92c7e58ec9d0649af3fddae142fc85270ae26db92a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420c66f1c470e5d42ffb92c7e58ec9d0649af3fddae142fc85270ae26db92a67->enter($__internal_420c66f1c470e5d42ffb92c7e58ec9d0649af3fddae142fc85270ae26db92a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_86e7de2fce8861a04f0a4a55606ca833e2e1da2e29d5d8fb70dcde920ff78de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e7de2fce8861a04f0a4a55606ca833e2e1da2e29d5d8fb70dcde920ff78de1->enter($__internal_86e7de2fce8861a04f0a4a55606ca833e2e1da2e29d5d8fb70dcde920ff78de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86e7de2fce8861a04f0a4a55606ca833e2e1da2e29d5d8fb70dcde920ff78de1->leave($__internal_86e7de2fce8861a04f0a4a55606ca833e2e1da2e29d5d8fb70dcde920ff78de1_prof);

        
        $__internal_420c66f1c470e5d42ffb92c7e58ec9d0649af3fddae142fc85270ae26db92a67->leave($__internal_420c66f1c470e5d42ffb92c7e58ec9d0649af3fddae142fc85270ae26db92a67_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_623f309c65563c2ce231a9654ddab272856a92a4afa742f72cd034a2d16c0e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623f309c65563c2ce231a9654ddab272856a92a4afa742f72cd034a2d16c0e37->enter($__internal_623f309c65563c2ce231a9654ddab272856a92a4afa742f72cd034a2d16c0e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_563bb8df494cdba8db53f912af5975c85c4cac9b9bd45ee42c427263ef572351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563bb8df494cdba8db53f912af5975c85c4cac9b9bd45ee42c427263ef572351->enter($__internal_563bb8df494cdba8db53f912af5975c85c4cac9b9bd45ee42c427263ef572351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_563bb8df494cdba8db53f912af5975c85c4cac9b9bd45ee42c427263ef572351->leave($__internal_563bb8df494cdba8db53f912af5975c85c4cac9b9bd45ee42c427263ef572351_prof);

        
        $__internal_623f309c65563c2ce231a9654ddab272856a92a4afa742f72cd034a2d16c0e37->leave($__internal_623f309c65563c2ce231a9654ddab272856a92a4afa742f72cd034a2d16c0e37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c563b4185753ad305881f2872de927a8343d916ceb4028e601dfd781fbacb35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c563b4185753ad305881f2872de927a8343d916ceb4028e601dfd781fbacb35c->enter($__internal_c563b4185753ad305881f2872de927a8343d916ceb4028e601dfd781fbacb35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b19bf18b86ac58da9e0e06925ac3a8dae29fe23771a09b4a12b12806094f0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b19bf18b86ac58da9e0e06925ac3a8dae29fe23771a09b4a12b12806094f0a2->enter($__internal_1b19bf18b86ac58da9e0e06925ac3a8dae29fe23771a09b4a12b12806094f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b19bf18b86ac58da9e0e06925ac3a8dae29fe23771a09b4a12b12806094f0a2->leave($__internal_1b19bf18b86ac58da9e0e06925ac3a8dae29fe23771a09b4a12b12806094f0a2_prof);

        
        $__internal_c563b4185753ad305881f2872de927a8343d916ceb4028e601dfd781fbacb35c->leave($__internal_c563b4185753ad305881f2872de927a8343d916ceb4028e601dfd781fbacb35c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

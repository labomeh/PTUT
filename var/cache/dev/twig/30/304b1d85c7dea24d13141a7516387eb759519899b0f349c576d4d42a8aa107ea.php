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
        $__internal_0f3d0ac6789a9328b9de7489b61e8440c08ff51f43f67be219df36058d1fcfd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3d0ac6789a9328b9de7489b61e8440c08ff51f43f67be219df36058d1fcfd5->enter($__internal_0f3d0ac6789a9328b9de7489b61e8440c08ff51f43f67be219df36058d1fcfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f0ca23c1e2ff3f6ed57bec57ff34a2edbeae8916ab18d21919defe332fde9751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ca23c1e2ff3f6ed57bec57ff34a2edbeae8916ab18d21919defe332fde9751->enter($__internal_f0ca23c1e2ff3f6ed57bec57ff34a2edbeae8916ab18d21919defe332fde9751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3d0ac6789a9328b9de7489b61e8440c08ff51f43f67be219df36058d1fcfd5->leave($__internal_0f3d0ac6789a9328b9de7489b61e8440c08ff51f43f67be219df36058d1fcfd5_prof);

        
        $__internal_f0ca23c1e2ff3f6ed57bec57ff34a2edbeae8916ab18d21919defe332fde9751->leave($__internal_f0ca23c1e2ff3f6ed57bec57ff34a2edbeae8916ab18d21919defe332fde9751_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40ca2f01cb5d3e48da9c306fb2d17cdb64623deefae37c1b801e82d1564855e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ca2f01cb5d3e48da9c306fb2d17cdb64623deefae37c1b801e82d1564855e6->enter($__internal_40ca2f01cb5d3e48da9c306fb2d17cdb64623deefae37c1b801e82d1564855e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6cf7493520d9eea1142581ce4616ae6c02bcbbdfad769b8b381cbc708c41dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cf7493520d9eea1142581ce4616ae6c02bcbbdfad769b8b381cbc708c41dae->enter($__internal_d6cf7493520d9eea1142581ce4616ae6c02bcbbdfad769b8b381cbc708c41dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6cf7493520d9eea1142581ce4616ae6c02bcbbdfad769b8b381cbc708c41dae->leave($__internal_d6cf7493520d9eea1142581ce4616ae6c02bcbbdfad769b8b381cbc708c41dae_prof);

        
        $__internal_40ca2f01cb5d3e48da9c306fb2d17cdb64623deefae37c1b801e82d1564855e6->leave($__internal_40ca2f01cb5d3e48da9c306fb2d17cdb64623deefae37c1b801e82d1564855e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c260cf0fbab1ca0214119ad1425327a67dcc72aae4936992dea773def3252f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c260cf0fbab1ca0214119ad1425327a67dcc72aae4936992dea773def3252f85->enter($__internal_c260cf0fbab1ca0214119ad1425327a67dcc72aae4936992dea773def3252f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_546c9d5d32190b27bee9c6e04804c9cbdb3f2abc3553a24a17b798f21e6f6892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546c9d5d32190b27bee9c6e04804c9cbdb3f2abc3553a24a17b798f21e6f6892->enter($__internal_546c9d5d32190b27bee9c6e04804c9cbdb3f2abc3553a24a17b798f21e6f6892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_546c9d5d32190b27bee9c6e04804c9cbdb3f2abc3553a24a17b798f21e6f6892->leave($__internal_546c9d5d32190b27bee9c6e04804c9cbdb3f2abc3553a24a17b798f21e6f6892_prof);

        
        $__internal_c260cf0fbab1ca0214119ad1425327a67dcc72aae4936992dea773def3252f85->leave($__internal_c260cf0fbab1ca0214119ad1425327a67dcc72aae4936992dea773def3252f85_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b4d1fb074e81a259c8c5bd071ea7909f4eb10144b6f46dd6bb9642cc1e23923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4d1fb074e81a259c8c5bd071ea7909f4eb10144b6f46dd6bb9642cc1e23923->enter($__internal_8b4d1fb074e81a259c8c5bd071ea7909f4eb10144b6f46dd6bb9642cc1e23923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_84f7975a403d090f5657279c6ca4255b6a23ff9e56d75c16ecaf47b1d8ebeab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f7975a403d090f5657279c6ca4255b6a23ff9e56d75c16ecaf47b1d8ebeab6->enter($__internal_84f7975a403d090f5657279c6ca4255b6a23ff9e56d75c16ecaf47b1d8ebeab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_84f7975a403d090f5657279c6ca4255b6a23ff9e56d75c16ecaf47b1d8ebeab6->leave($__internal_84f7975a403d090f5657279c6ca4255b6a23ff9e56d75c16ecaf47b1d8ebeab6_prof);

        
        $__internal_8b4d1fb074e81a259c8c5bd071ea7909f4eb10144b6f46dd6bb9642cc1e23923->leave($__internal_8b4d1fb074e81a259c8c5bd071ea7909f4eb10144b6f46dd6bb9642cc1e23923_prof);

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

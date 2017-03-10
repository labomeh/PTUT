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
        $__internal_5194a66c264dfee19f0b3b9c209a499f48eb8ccb30fc00ecfa9cc51d326e0ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5194a66c264dfee19f0b3b9c209a499f48eb8ccb30fc00ecfa9cc51d326e0ab6->enter($__internal_5194a66c264dfee19f0b3b9c209a499f48eb8ccb30fc00ecfa9cc51d326e0ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_de82c76ad85aada8a0de289305e923c041a6ebca850a578ee1fd930a44b7a114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de82c76ad85aada8a0de289305e923c041a6ebca850a578ee1fd930a44b7a114->enter($__internal_de82c76ad85aada8a0de289305e923c041a6ebca850a578ee1fd930a44b7a114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5194a66c264dfee19f0b3b9c209a499f48eb8ccb30fc00ecfa9cc51d326e0ab6->leave($__internal_5194a66c264dfee19f0b3b9c209a499f48eb8ccb30fc00ecfa9cc51d326e0ab6_prof);

        
        $__internal_de82c76ad85aada8a0de289305e923c041a6ebca850a578ee1fd930a44b7a114->leave($__internal_de82c76ad85aada8a0de289305e923c041a6ebca850a578ee1fd930a44b7a114_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd44e80f8e157de7be52c54bf1acb0be9a4e5c219f1211abf88e3791cddb9305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd44e80f8e157de7be52c54bf1acb0be9a4e5c219f1211abf88e3791cddb9305->enter($__internal_dd44e80f8e157de7be52c54bf1acb0be9a4e5c219f1211abf88e3791cddb9305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f0d29d1b993fd40ffde6ce723b7080de4105f56c0fac09381c5589e9920d6364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d29d1b993fd40ffde6ce723b7080de4105f56c0fac09381c5589e9920d6364->enter($__internal_f0d29d1b993fd40ffde6ce723b7080de4105f56c0fac09381c5589e9920d6364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0d29d1b993fd40ffde6ce723b7080de4105f56c0fac09381c5589e9920d6364->leave($__internal_f0d29d1b993fd40ffde6ce723b7080de4105f56c0fac09381c5589e9920d6364_prof);

        
        $__internal_dd44e80f8e157de7be52c54bf1acb0be9a4e5c219f1211abf88e3791cddb9305->leave($__internal_dd44e80f8e157de7be52c54bf1acb0be9a4e5c219f1211abf88e3791cddb9305_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4eb4f8a403a8efa8712be171b92ebe23cd30d037ba67bc18681bb4b0cbe69064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb4f8a403a8efa8712be171b92ebe23cd30d037ba67bc18681bb4b0cbe69064->enter($__internal_4eb4f8a403a8efa8712be171b92ebe23cd30d037ba67bc18681bb4b0cbe69064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9f5fe779e53397aef8c71e79ba987109b5a05b737c0df9b25ff6498fb5db9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f5fe779e53397aef8c71e79ba987109b5a05b737c0df9b25ff6498fb5db9d7->enter($__internal_e9f5fe779e53397aef8c71e79ba987109b5a05b737c0df9b25ff6498fb5db9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9f5fe779e53397aef8c71e79ba987109b5a05b737c0df9b25ff6498fb5db9d7->leave($__internal_e9f5fe779e53397aef8c71e79ba987109b5a05b737c0df9b25ff6498fb5db9d7_prof);

        
        $__internal_4eb4f8a403a8efa8712be171b92ebe23cd30d037ba67bc18681bb4b0cbe69064->leave($__internal_4eb4f8a403a8efa8712be171b92ebe23cd30d037ba67bc18681bb4b0cbe69064_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0829968b4d5bc4cfbd291bfccc874cd2e8951bf90a7aed36f1fece230345aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0829968b4d5bc4cfbd291bfccc874cd2e8951bf90a7aed36f1fece230345aa3->enter($__internal_a0829968b4d5bc4cfbd291bfccc874cd2e8951bf90a7aed36f1fece230345aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_321701ccab572d8a0b81f7662903c6f127545ea9eba4c7b640fe1e01fe9e5876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321701ccab572d8a0b81f7662903c6f127545ea9eba4c7b640fe1e01fe9e5876->enter($__internal_321701ccab572d8a0b81f7662903c6f127545ea9eba4c7b640fe1e01fe9e5876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_321701ccab572d8a0b81f7662903c6f127545ea9eba4c7b640fe1e01fe9e5876->leave($__internal_321701ccab572d8a0b81f7662903c6f127545ea9eba4c7b640fe1e01fe9e5876_prof);

        
        $__internal_a0829968b4d5bc4cfbd291bfccc874cd2e8951bf90a7aed36f1fece230345aa3->leave($__internal_a0829968b4d5bc4cfbd291bfccc874cd2e8951bf90a7aed36f1fece230345aa3_prof);

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

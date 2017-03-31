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
        $__internal_e7673e5fe262777340b28089a3710136bc7de4f7941ecd8aea66c8258e356364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7673e5fe262777340b28089a3710136bc7de4f7941ecd8aea66c8258e356364->enter($__internal_e7673e5fe262777340b28089a3710136bc7de4f7941ecd8aea66c8258e356364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3d05149a570d9eac5d3ee2593c3c814eaddcffa8c3c699f73bf6115974425505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d05149a570d9eac5d3ee2593c3c814eaddcffa8c3c699f73bf6115974425505->enter($__internal_3d05149a570d9eac5d3ee2593c3c814eaddcffa8c3c699f73bf6115974425505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7673e5fe262777340b28089a3710136bc7de4f7941ecd8aea66c8258e356364->leave($__internal_e7673e5fe262777340b28089a3710136bc7de4f7941ecd8aea66c8258e356364_prof);

        
        $__internal_3d05149a570d9eac5d3ee2593c3c814eaddcffa8c3c699f73bf6115974425505->leave($__internal_3d05149a570d9eac5d3ee2593c3c814eaddcffa8c3c699f73bf6115974425505_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aefd2faf200ee257d194afb4ca9fb2999cc706a6aa98f66fa7460a151b332d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefd2faf200ee257d194afb4ca9fb2999cc706a6aa98f66fa7460a151b332d5b->enter($__internal_aefd2faf200ee257d194afb4ca9fb2999cc706a6aa98f66fa7460a151b332d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8f6c2c557875b4b958a9288edcd29ea5dbe4bae287bec28b5cae32c9ced9602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f6c2c557875b4b958a9288edcd29ea5dbe4bae287bec28b5cae32c9ced9602->enter($__internal_f8f6c2c557875b4b958a9288edcd29ea5dbe4bae287bec28b5cae32c9ced9602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8f6c2c557875b4b958a9288edcd29ea5dbe4bae287bec28b5cae32c9ced9602->leave($__internal_f8f6c2c557875b4b958a9288edcd29ea5dbe4bae287bec28b5cae32c9ced9602_prof);

        
        $__internal_aefd2faf200ee257d194afb4ca9fb2999cc706a6aa98f66fa7460a151b332d5b->leave($__internal_aefd2faf200ee257d194afb4ca9fb2999cc706a6aa98f66fa7460a151b332d5b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44cb19808a32287ad6f2e9f1f6673e3c68618801ee68cc8bd7bf46eba4861748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cb19808a32287ad6f2e9f1f6673e3c68618801ee68cc8bd7bf46eba4861748->enter($__internal_44cb19808a32287ad6f2e9f1f6673e3c68618801ee68cc8bd7bf46eba4861748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c6445cbab286ba00665658cc37c66cfdfb2ea7419cebdd3c8e383943169236a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6445cbab286ba00665658cc37c66cfdfb2ea7419cebdd3c8e383943169236a8->enter($__internal_c6445cbab286ba00665658cc37c66cfdfb2ea7419cebdd3c8e383943169236a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6445cbab286ba00665658cc37c66cfdfb2ea7419cebdd3c8e383943169236a8->leave($__internal_c6445cbab286ba00665658cc37c66cfdfb2ea7419cebdd3c8e383943169236a8_prof);

        
        $__internal_44cb19808a32287ad6f2e9f1f6673e3c68618801ee68cc8bd7bf46eba4861748->leave($__internal_44cb19808a32287ad6f2e9f1f6673e3c68618801ee68cc8bd7bf46eba4861748_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d648c2a40389d334fc7cc76ad61dfa4ac7f9e5f0fb2095c6164e8a580a536df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d648c2a40389d334fc7cc76ad61dfa4ac7f9e5f0fb2095c6164e8a580a536df->enter($__internal_0d648c2a40389d334fc7cc76ad61dfa4ac7f9e5f0fb2095c6164e8a580a536df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a1cdd3a764fa5206533ce42222d3a87aa36241b1355d5030e99b3b5286b494e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1cdd3a764fa5206533ce42222d3a87aa36241b1355d5030e99b3b5286b494e->enter($__internal_8a1cdd3a764fa5206533ce42222d3a87aa36241b1355d5030e99b3b5286b494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a1cdd3a764fa5206533ce42222d3a87aa36241b1355d5030e99b3b5286b494e->leave($__internal_8a1cdd3a764fa5206533ce42222d3a87aa36241b1355d5030e99b3b5286b494e_prof);

        
        $__internal_0d648c2a40389d334fc7cc76ad61dfa4ac7f9e5f0fb2095c6164e8a580a536df->leave($__internal_0d648c2a40389d334fc7cc76ad61dfa4ac7f9e5f0fb2095c6164e8a580a536df_prof);

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

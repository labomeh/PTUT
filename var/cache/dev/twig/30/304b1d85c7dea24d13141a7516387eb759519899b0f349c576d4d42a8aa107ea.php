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
        $__internal_94164762cb61747531cdd89e73cea623556b19942f68b0980dca9ba478c04989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94164762cb61747531cdd89e73cea623556b19942f68b0980dca9ba478c04989->enter($__internal_94164762cb61747531cdd89e73cea623556b19942f68b0980dca9ba478c04989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_fc83968a6044279ad3b29e109a39a8595f0ddbf994b47bee622ddbde551b9470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc83968a6044279ad3b29e109a39a8595f0ddbf994b47bee622ddbde551b9470->enter($__internal_fc83968a6044279ad3b29e109a39a8595f0ddbf994b47bee622ddbde551b9470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94164762cb61747531cdd89e73cea623556b19942f68b0980dca9ba478c04989->leave($__internal_94164762cb61747531cdd89e73cea623556b19942f68b0980dca9ba478c04989_prof);

        
        $__internal_fc83968a6044279ad3b29e109a39a8595f0ddbf994b47bee622ddbde551b9470->leave($__internal_fc83968a6044279ad3b29e109a39a8595f0ddbf994b47bee622ddbde551b9470_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ffdf4bc9bb1ea55f3f5cceb9dae9ae5b091d21be7e1403ef998382e3a2165d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffdf4bc9bb1ea55f3f5cceb9dae9ae5b091d21be7e1403ef998382e3a2165d7->enter($__internal_0ffdf4bc9bb1ea55f3f5cceb9dae9ae5b091d21be7e1403ef998382e3a2165d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_05d9a43005ea7a31a5142faddfec0695a37138cc7b6c286940cb84afe1c2b434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d9a43005ea7a31a5142faddfec0695a37138cc7b6c286940cb84afe1c2b434->enter($__internal_05d9a43005ea7a31a5142faddfec0695a37138cc7b6c286940cb84afe1c2b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05d9a43005ea7a31a5142faddfec0695a37138cc7b6c286940cb84afe1c2b434->leave($__internal_05d9a43005ea7a31a5142faddfec0695a37138cc7b6c286940cb84afe1c2b434_prof);

        
        $__internal_0ffdf4bc9bb1ea55f3f5cceb9dae9ae5b091d21be7e1403ef998382e3a2165d7->leave($__internal_0ffdf4bc9bb1ea55f3f5cceb9dae9ae5b091d21be7e1403ef998382e3a2165d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce85bd21ee34efa38da271c228358f3c87b1e2e34848c99505a9fe039b4ba12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce85bd21ee34efa38da271c228358f3c87b1e2e34848c99505a9fe039b4ba12d->enter($__internal_ce85bd21ee34efa38da271c228358f3c87b1e2e34848c99505a9fe039b4ba12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0027c2b0f8696bf56aca5d55629a470d58c955504b01b6f13e61c480f527b843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0027c2b0f8696bf56aca5d55629a470d58c955504b01b6f13e61c480f527b843->enter($__internal_0027c2b0f8696bf56aca5d55629a470d58c955504b01b6f13e61c480f527b843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0027c2b0f8696bf56aca5d55629a470d58c955504b01b6f13e61c480f527b843->leave($__internal_0027c2b0f8696bf56aca5d55629a470d58c955504b01b6f13e61c480f527b843_prof);

        
        $__internal_ce85bd21ee34efa38da271c228358f3c87b1e2e34848c99505a9fe039b4ba12d->leave($__internal_ce85bd21ee34efa38da271c228358f3c87b1e2e34848c99505a9fe039b4ba12d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af53f799983642f143567e0ff0de579e93cd8336ccc4e40582a266cf2798985c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af53f799983642f143567e0ff0de579e93cd8336ccc4e40582a266cf2798985c->enter($__internal_af53f799983642f143567e0ff0de579e93cd8336ccc4e40582a266cf2798985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e13e09d8f2d8edbd7b5cdf442780b0d7724b6dcf73c263c0b8083d87d234730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e13e09d8f2d8edbd7b5cdf442780b0d7724b6dcf73c263c0b8083d87d234730->enter($__internal_6e13e09d8f2d8edbd7b5cdf442780b0d7724b6dcf73c263c0b8083d87d234730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6e13e09d8f2d8edbd7b5cdf442780b0d7724b6dcf73c263c0b8083d87d234730->leave($__internal_6e13e09d8f2d8edbd7b5cdf442780b0d7724b6dcf73c263c0b8083d87d234730_prof);

        
        $__internal_af53f799983642f143567e0ff0de579e93cd8336ccc4e40582a266cf2798985c->leave($__internal_af53f799983642f143567e0ff0de579e93cd8336ccc4e40582a266cf2798985c_prof);

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

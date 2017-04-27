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
        $__internal_d402db88bed16ec019b1da57ab12bdb91eca0034cf17593ec8d6eed7a2afadab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d402db88bed16ec019b1da57ab12bdb91eca0034cf17593ec8d6eed7a2afadab->enter($__internal_d402db88bed16ec019b1da57ab12bdb91eca0034cf17593ec8d6eed7a2afadab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f2c7b1e1347e78fd1a86f99651dc60e3ffa6deb07bd750ff3193b698696f5d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c7b1e1347e78fd1a86f99651dc60e3ffa6deb07bd750ff3193b698696f5d7f->enter($__internal_f2c7b1e1347e78fd1a86f99651dc60e3ffa6deb07bd750ff3193b698696f5d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d402db88bed16ec019b1da57ab12bdb91eca0034cf17593ec8d6eed7a2afadab->leave($__internal_d402db88bed16ec019b1da57ab12bdb91eca0034cf17593ec8d6eed7a2afadab_prof);

        
        $__internal_f2c7b1e1347e78fd1a86f99651dc60e3ffa6deb07bd750ff3193b698696f5d7f->leave($__internal_f2c7b1e1347e78fd1a86f99651dc60e3ffa6deb07bd750ff3193b698696f5d7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db198b3b224a7b80ec2f5d7a6e1d301bc84cde0fbada9cf6435e21c5a90a9a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db198b3b224a7b80ec2f5d7a6e1d301bc84cde0fbada9cf6435e21c5a90a9a3e->enter($__internal_db198b3b224a7b80ec2f5d7a6e1d301bc84cde0fbada9cf6435e21c5a90a9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e23caef87921bdfb8d3cc5d2240dc98f2ed033d4f9c57d3e82b037596cc8ca3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23caef87921bdfb8d3cc5d2240dc98f2ed033d4f9c57d3e82b037596cc8ca3d->enter($__internal_e23caef87921bdfb8d3cc5d2240dc98f2ed033d4f9c57d3e82b037596cc8ca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e23caef87921bdfb8d3cc5d2240dc98f2ed033d4f9c57d3e82b037596cc8ca3d->leave($__internal_e23caef87921bdfb8d3cc5d2240dc98f2ed033d4f9c57d3e82b037596cc8ca3d_prof);

        
        $__internal_db198b3b224a7b80ec2f5d7a6e1d301bc84cde0fbada9cf6435e21c5a90a9a3e->leave($__internal_db198b3b224a7b80ec2f5d7a6e1d301bc84cde0fbada9cf6435e21c5a90a9a3e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_454f883ff970dcc6b8676ef839226f098968f3f0916426b09db03b3b286ebd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454f883ff970dcc6b8676ef839226f098968f3f0916426b09db03b3b286ebd4f->enter($__internal_454f883ff970dcc6b8676ef839226f098968f3f0916426b09db03b3b286ebd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ebe55d027dd669742cf1bfe817029098d0451d471403ac56cdffe66eb58d047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebe55d027dd669742cf1bfe817029098d0451d471403ac56cdffe66eb58d047->enter($__internal_1ebe55d027dd669742cf1bfe817029098d0451d471403ac56cdffe66eb58d047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ebe55d027dd669742cf1bfe817029098d0451d471403ac56cdffe66eb58d047->leave($__internal_1ebe55d027dd669742cf1bfe817029098d0451d471403ac56cdffe66eb58d047_prof);

        
        $__internal_454f883ff970dcc6b8676ef839226f098968f3f0916426b09db03b3b286ebd4f->leave($__internal_454f883ff970dcc6b8676ef839226f098968f3f0916426b09db03b3b286ebd4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78fe2a5d7c69c59e78c020cd9875677251fe9e0ce8415c5070afb3aa304a8a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78fe2a5d7c69c59e78c020cd9875677251fe9e0ce8415c5070afb3aa304a8a1c->enter($__internal_78fe2a5d7c69c59e78c020cd9875677251fe9e0ce8415c5070afb3aa304a8a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07606dc8f35fae4704506108bff08e374269c5640b8a8f7e66553f8c45e59744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07606dc8f35fae4704506108bff08e374269c5640b8a8f7e66553f8c45e59744->enter($__internal_07606dc8f35fae4704506108bff08e374269c5640b8a8f7e66553f8c45e59744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07606dc8f35fae4704506108bff08e374269c5640b8a8f7e66553f8c45e59744->leave($__internal_07606dc8f35fae4704506108bff08e374269c5640b8a8f7e66553f8c45e59744_prof);

        
        $__internal_78fe2a5d7c69c59e78c020cd9875677251fe9e0ce8415c5070afb3aa304a8a1c->leave($__internal_78fe2a5d7c69c59e78c020cd9875677251fe9e0ce8415c5070afb3aa304a8a1c_prof);

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

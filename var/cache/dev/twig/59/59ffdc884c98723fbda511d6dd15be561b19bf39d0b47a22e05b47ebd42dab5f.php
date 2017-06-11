<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_66e8bae2ef0bd2c2153a91118f4d3f9ab9780394776fc2a701e2dabe733a3f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78be5ad3139cba5ed749b7103abc709d78625c99f12de891d159cb753d98a6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78be5ad3139cba5ed749b7103abc709d78625c99f12de891d159cb753d98a6ac->enter($__internal_78be5ad3139cba5ed749b7103abc709d78625c99f12de891d159cb753d98a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d95b114b978def290d7fb894319170407f93034378cae2882a8c91c0f64643c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95b114b978def290d7fb894319170407f93034378cae2882a8c91c0f64643c7->enter($__internal_d95b114b978def290d7fb894319170407f93034378cae2882a8c91c0f64643c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_78be5ad3139cba5ed749b7103abc709d78625c99f12de891d159cb753d98a6ac->leave($__internal_78be5ad3139cba5ed749b7103abc709d78625c99f12de891d159cb753d98a6ac_prof);

        
        $__internal_d95b114b978def290d7fb894319170407f93034378cae2882a8c91c0f64643c7->leave($__internal_d95b114b978def290d7fb894319170407f93034378cae2882a8c91c0f64643c7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cae3d2404494081955f31e3c7712d86727daff90a1f66c99667cd889abdb5a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae3d2404494081955f31e3c7712d86727daff90a1f66c99667cd889abdb5a91->enter($__internal_cae3d2404494081955f31e3c7712d86727daff90a1f66c99667cd889abdb5a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05ade0c99643ae542fa5705567f14216588f127301e00edc1047443bfa81b5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ade0c99643ae542fa5705567f14216588f127301e00edc1047443bfa81b5b6->enter($__internal_05ade0c99643ae542fa5705567f14216588f127301e00edc1047443bfa81b5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_05ade0c99643ae542fa5705567f14216588f127301e00edc1047443bfa81b5b6->leave($__internal_05ade0c99643ae542fa5705567f14216588f127301e00edc1047443bfa81b5b6_prof);

        
        $__internal_cae3d2404494081955f31e3c7712d86727daff90a1f66c99667cd889abdb5a91->leave($__internal_cae3d2404494081955f31e3c7712d86727daff90a1f66c99667cd889abdb5a91_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

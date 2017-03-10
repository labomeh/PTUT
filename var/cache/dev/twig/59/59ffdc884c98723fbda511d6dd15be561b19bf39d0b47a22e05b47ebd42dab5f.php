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
        $__internal_dd3887e356c255747ab4dbf2f1ef25838bfa222931aa84ae4feaaff3b1682f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3887e356c255747ab4dbf2f1ef25838bfa222931aa84ae4feaaff3b1682f17->enter($__internal_dd3887e356c255747ab4dbf2f1ef25838bfa222931aa84ae4feaaff3b1682f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_003c7c8833dade22c5fe03e0e46a0a9fa22b2aad2e284886adf463a943d09b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003c7c8833dade22c5fe03e0e46a0a9fa22b2aad2e284886adf463a943d09b38->enter($__internal_003c7c8833dade22c5fe03e0e46a0a9fa22b2aad2e284886adf463a943d09b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dd3887e356c255747ab4dbf2f1ef25838bfa222931aa84ae4feaaff3b1682f17->leave($__internal_dd3887e356c255747ab4dbf2f1ef25838bfa222931aa84ae4feaaff3b1682f17_prof);

        
        $__internal_003c7c8833dade22c5fe03e0e46a0a9fa22b2aad2e284886adf463a943d09b38->leave($__internal_003c7c8833dade22c5fe03e0e46a0a9fa22b2aad2e284886adf463a943d09b38_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0b94effc6a3874268da0f2cd2f06e2bb7e2d350ef1bed16f4c02128065da40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b94effc6a3874268da0f2cd2f06e2bb7e2d350ef1bed16f4c02128065da40f->enter($__internal_a0b94effc6a3874268da0f2cd2f06e2bb7e2d350ef1bed16f4c02128065da40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c26f061407bfc6077fbf6d80fde4ea03515c6e9fb0f47eb6eadc587209feba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c26f061407bfc6077fbf6d80fde4ea03515c6e9fb0f47eb6eadc587209feba8->enter($__internal_3c26f061407bfc6077fbf6d80fde4ea03515c6e9fb0f47eb6eadc587209feba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3c26f061407bfc6077fbf6d80fde4ea03515c6e9fb0f47eb6eadc587209feba8->leave($__internal_3c26f061407bfc6077fbf6d80fde4ea03515c6e9fb0f47eb6eadc587209feba8_prof);

        
        $__internal_a0b94effc6a3874268da0f2cd2f06e2bb7e2d350ef1bed16f4c02128065da40f->leave($__internal_a0b94effc6a3874268da0f2cd2f06e2bb7e2d350ef1bed16f4c02128065da40f_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

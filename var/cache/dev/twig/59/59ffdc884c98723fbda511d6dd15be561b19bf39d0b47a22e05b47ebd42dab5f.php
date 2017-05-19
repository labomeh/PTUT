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
        $__internal_14c01035e8732529f01fd40c879ae2b70e05f581e7421a540c3ebaa9249ffe03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c01035e8732529f01fd40c879ae2b70e05f581e7421a540c3ebaa9249ffe03->enter($__internal_14c01035e8732529f01fd40c879ae2b70e05f581e7421a540c3ebaa9249ffe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5f4f6660c12a22c20f91fb034ab1a9f33c42ac9526054d04dcf265675ff20c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4f6660c12a22c20f91fb034ab1a9f33c42ac9526054d04dcf265675ff20c51->enter($__internal_5f4f6660c12a22c20f91fb034ab1a9f33c42ac9526054d04dcf265675ff20c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14c01035e8732529f01fd40c879ae2b70e05f581e7421a540c3ebaa9249ffe03->leave($__internal_14c01035e8732529f01fd40c879ae2b70e05f581e7421a540c3ebaa9249ffe03_prof);

        
        $__internal_5f4f6660c12a22c20f91fb034ab1a9f33c42ac9526054d04dcf265675ff20c51->leave($__internal_5f4f6660c12a22c20f91fb034ab1a9f33c42ac9526054d04dcf265675ff20c51_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_917d67ed0dfbc73637f5f174f187229db5825a138079844505550cfb5b9f988b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917d67ed0dfbc73637f5f174f187229db5825a138079844505550cfb5b9f988b->enter($__internal_917d67ed0dfbc73637f5f174f187229db5825a138079844505550cfb5b9f988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a0b8312208253f8f87d6c9a8ee5bfe03339239a81e9cea1d243925ecbb44946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0b8312208253f8f87d6c9a8ee5bfe03339239a81e9cea1d243925ecbb44946->enter($__internal_6a0b8312208253f8f87d6c9a8ee5bfe03339239a81e9cea1d243925ecbb44946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a0b8312208253f8f87d6c9a8ee5bfe03339239a81e9cea1d243925ecbb44946->leave($__internal_6a0b8312208253f8f87d6c9a8ee5bfe03339239a81e9cea1d243925ecbb44946_prof);

        
        $__internal_917d67ed0dfbc73637f5f174f187229db5825a138079844505550cfb5b9f988b->leave($__internal_917d67ed0dfbc73637f5f174f187229db5825a138079844505550cfb5b9f988b_prof);

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

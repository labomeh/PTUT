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
        $__internal_1c43069bf55269a552941fe044daa88892ab6ac572f978ddd1aa3d185bb5dfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c43069bf55269a552941fe044daa88892ab6ac572f978ddd1aa3d185bb5dfad->enter($__internal_1c43069bf55269a552941fe044daa88892ab6ac572f978ddd1aa3d185bb5dfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_617d1859acd2ae84f3703c683a6f4133bdc8df286c94f9b7df24f216cd2c82fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617d1859acd2ae84f3703c683a6f4133bdc8df286c94f9b7df24f216cd2c82fd->enter($__internal_617d1859acd2ae84f3703c683a6f4133bdc8df286c94f9b7df24f216cd2c82fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1c43069bf55269a552941fe044daa88892ab6ac572f978ddd1aa3d185bb5dfad->leave($__internal_1c43069bf55269a552941fe044daa88892ab6ac572f978ddd1aa3d185bb5dfad_prof);

        
        $__internal_617d1859acd2ae84f3703c683a6f4133bdc8df286c94f9b7df24f216cd2c82fd->leave($__internal_617d1859acd2ae84f3703c683a6f4133bdc8df286c94f9b7df24f216cd2c82fd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_01bd005e7c92260b305f6d48fdb84be9cbaaeac2a94ee576a49f437234553bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bd005e7c92260b305f6d48fdb84be9cbaaeac2a94ee576a49f437234553bc2->enter($__internal_01bd005e7c92260b305f6d48fdb84be9cbaaeac2a94ee576a49f437234553bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eafd60318b16d36eb883c59bb19596cd5fb9bb16a05a47849b1bfd5e6e46853c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafd60318b16d36eb883c59bb19596cd5fb9bb16a05a47849b1bfd5e6e46853c->enter($__internal_eafd60318b16d36eb883c59bb19596cd5fb9bb16a05a47849b1bfd5e6e46853c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eafd60318b16d36eb883c59bb19596cd5fb9bb16a05a47849b1bfd5e6e46853c->leave($__internal_eafd60318b16d36eb883c59bb19596cd5fb9bb16a05a47849b1bfd5e6e46853c_prof);

        
        $__internal_01bd005e7c92260b305f6d48fdb84be9cbaaeac2a94ee576a49f437234553bc2->leave($__internal_01bd005e7c92260b305f6d48fdb84be9cbaaeac2a94ee576a49f437234553bc2_prof);

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

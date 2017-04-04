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
        $__internal_960bfb822833d3e1ac4fbee340aa571b3acd0f574ed1ac4095a2df45537d5bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960bfb822833d3e1ac4fbee340aa571b3acd0f574ed1ac4095a2df45537d5bac->enter($__internal_960bfb822833d3e1ac4fbee340aa571b3acd0f574ed1ac4095a2df45537d5bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3306bcf2342f77d66a213b64d93790ad1156ac6ee77e668b199e8a3d37cb05ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3306bcf2342f77d66a213b64d93790ad1156ac6ee77e668b199e8a3d37cb05ac->enter($__internal_3306bcf2342f77d66a213b64d93790ad1156ac6ee77e668b199e8a3d37cb05ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_960bfb822833d3e1ac4fbee340aa571b3acd0f574ed1ac4095a2df45537d5bac->leave($__internal_960bfb822833d3e1ac4fbee340aa571b3acd0f574ed1ac4095a2df45537d5bac_prof);

        
        $__internal_3306bcf2342f77d66a213b64d93790ad1156ac6ee77e668b199e8a3d37cb05ac->leave($__internal_3306bcf2342f77d66a213b64d93790ad1156ac6ee77e668b199e8a3d37cb05ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb7f0bd49c526357abdd68eac5cb6dabc276e1caf80c868f9d75fd3e2af5482f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7f0bd49c526357abdd68eac5cb6dabc276e1caf80c868f9d75fd3e2af5482f->enter($__internal_eb7f0bd49c526357abdd68eac5cb6dabc276e1caf80c868f9d75fd3e2af5482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33bb3b58d247e40ad68d8e34d4d0709dae7ffcffe2158795b9531f5cc981dafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bb3b58d247e40ad68d8e34d4d0709dae7ffcffe2158795b9531f5cc981dafc->enter($__internal_33bb3b58d247e40ad68d8e34d4d0709dae7ffcffe2158795b9531f5cc981dafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33bb3b58d247e40ad68d8e34d4d0709dae7ffcffe2158795b9531f5cc981dafc->leave($__internal_33bb3b58d247e40ad68d8e34d4d0709dae7ffcffe2158795b9531f5cc981dafc_prof);

        
        $__internal_eb7f0bd49c526357abdd68eac5cb6dabc276e1caf80c868f9d75fd3e2af5482f->leave($__internal_eb7f0bd49c526357abdd68eac5cb6dabc276e1caf80c868f9d75fd3e2af5482f_prof);

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

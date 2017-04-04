<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cae05033129e673a718ad8a132b696a28ca361b1697bd930631eb9b76a21ddd0 extends Twig_Template
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
        $__internal_a3d3ccc56d48ca8c3c399491acdb39592e00391854afe293c521b849c8b6a9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d3ccc56d48ca8c3c399491acdb39592e00391854afe293c521b849c8b6a9cc->enter($__internal_a3d3ccc56d48ca8c3c399491acdb39592e00391854afe293c521b849c8b6a9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_532f7583a33d8e80f1e7cb465e89923a8a1070d4333b74c5b52c62550ce0c7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532f7583a33d8e80f1e7cb465e89923a8a1070d4333b74c5b52c62550ce0c7cf->enter($__internal_532f7583a33d8e80f1e7cb465e89923a8a1070d4333b74c5b52c62550ce0c7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3d3ccc56d48ca8c3c399491acdb39592e00391854afe293c521b849c8b6a9cc->leave($__internal_a3d3ccc56d48ca8c3c399491acdb39592e00391854afe293c521b849c8b6a9cc_prof);

        
        $__internal_532f7583a33d8e80f1e7cb465e89923a8a1070d4333b74c5b52c62550ce0c7cf->leave($__internal_532f7583a33d8e80f1e7cb465e89923a8a1070d4333b74c5b52c62550ce0c7cf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd1effbaf5e02f2abfb346ceeb95225bcdc22f7bf8d15e6a89dc58607d94a88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1effbaf5e02f2abfb346ceeb95225bcdc22f7bf8d15e6a89dc58607d94a88d->enter($__internal_cd1effbaf5e02f2abfb346ceeb95225bcdc22f7bf8d15e6a89dc58607d94a88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39656e333a2794c50290d6d7a51735f6b5cce684ad191fe14c7d5e79e0a390a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39656e333a2794c50290d6d7a51735f6b5cce684ad191fe14c7d5e79e0a390a9->enter($__internal_39656e333a2794c50290d6d7a51735f6b5cce684ad191fe14c7d5e79e0a390a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39656e333a2794c50290d6d7a51735f6b5cce684ad191fe14c7d5e79e0a390a9->leave($__internal_39656e333a2794c50290d6d7a51735f6b5cce684ad191fe14c7d5e79e0a390a9_prof);

        
        $__internal_cd1effbaf5e02f2abfb346ceeb95225bcdc22f7bf8d15e6a89dc58607d94a88d->leave($__internal_cd1effbaf5e02f2abfb346ceeb95225bcdc22f7bf8d15e6a89dc58607d94a88d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

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
        $__internal_f7a13789c134ff570262c2d559758658567feb8dd9206855e5a3563be91162bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a13789c134ff570262c2d559758658567feb8dd9206855e5a3563be91162bb->enter($__internal_f7a13789c134ff570262c2d559758658567feb8dd9206855e5a3563be91162bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_33daba36cea98fbe2a8c6e34efd5c7b667b61c745ad784fd394496731dfa55f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33daba36cea98fbe2a8c6e34efd5c7b667b61c745ad784fd394496731dfa55f1->enter($__internal_33daba36cea98fbe2a8c6e34efd5c7b667b61c745ad784fd394496731dfa55f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f7a13789c134ff570262c2d559758658567feb8dd9206855e5a3563be91162bb->leave($__internal_f7a13789c134ff570262c2d559758658567feb8dd9206855e5a3563be91162bb_prof);

        
        $__internal_33daba36cea98fbe2a8c6e34efd5c7b667b61c745ad784fd394496731dfa55f1->leave($__internal_33daba36cea98fbe2a8c6e34efd5c7b667b61c745ad784fd394496731dfa55f1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e12885c8da477c4d7e11b4c0b75ec83a117b3b322c9f264cfdda6e4fba1f4d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12885c8da477c4d7e11b4c0b75ec83a117b3b322c9f264cfdda6e4fba1f4d86->enter($__internal_e12885c8da477c4d7e11b4c0b75ec83a117b3b322c9f264cfdda6e4fba1f4d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f74fe571c1aa8ea1bd77fdb1e3e5aa4eca2cd603455ff31c8d9dee8a4acd3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f74fe571c1aa8ea1bd77fdb1e3e5aa4eca2cd603455ff31c8d9dee8a4acd3d1->enter($__internal_5f74fe571c1aa8ea1bd77fdb1e3e5aa4eca2cd603455ff31c8d9dee8a4acd3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5f74fe571c1aa8ea1bd77fdb1e3e5aa4eca2cd603455ff31c8d9dee8a4acd3d1->leave($__internal_5f74fe571c1aa8ea1bd77fdb1e3e5aa4eca2cd603455ff31c8d9dee8a4acd3d1_prof);

        
        $__internal_e12885c8da477c4d7e11b4c0b75ec83a117b3b322c9f264cfdda6e4fba1f4d86->leave($__internal_e12885c8da477c4d7e11b4c0b75ec83a117b3b322c9f264cfdda6e4fba1f4d86_prof);

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

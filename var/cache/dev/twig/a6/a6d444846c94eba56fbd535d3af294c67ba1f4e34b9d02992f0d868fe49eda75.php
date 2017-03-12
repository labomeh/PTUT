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
        $__internal_d1bb3658f2818e90f036ea1641838256eef957df38428b93eb630cbc03848495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bb3658f2818e90f036ea1641838256eef957df38428b93eb630cbc03848495->enter($__internal_d1bb3658f2818e90f036ea1641838256eef957df38428b93eb630cbc03848495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_de341b67538c90e9399d98e594e17d84ff16ec690100e12616f70aa3cbdba33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de341b67538c90e9399d98e594e17d84ff16ec690100e12616f70aa3cbdba33e->enter($__internal_de341b67538c90e9399d98e594e17d84ff16ec690100e12616f70aa3cbdba33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d1bb3658f2818e90f036ea1641838256eef957df38428b93eb630cbc03848495->leave($__internal_d1bb3658f2818e90f036ea1641838256eef957df38428b93eb630cbc03848495_prof);

        
        $__internal_de341b67538c90e9399d98e594e17d84ff16ec690100e12616f70aa3cbdba33e->leave($__internal_de341b67538c90e9399d98e594e17d84ff16ec690100e12616f70aa3cbdba33e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2812bd6eee7046af588b9d906b3f4268b30f12b623009e1e71ed56a84414cb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2812bd6eee7046af588b9d906b3f4268b30f12b623009e1e71ed56a84414cb31->enter($__internal_2812bd6eee7046af588b9d906b3f4268b30f12b623009e1e71ed56a84414cb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00efc25aab868ef5fe5cf31a3fc687ed0b094ff72e7e1b483415461aa5f4f82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00efc25aab868ef5fe5cf31a3fc687ed0b094ff72e7e1b483415461aa5f4f82d->enter($__internal_00efc25aab868ef5fe5cf31a3fc687ed0b094ff72e7e1b483415461aa5f4f82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_00efc25aab868ef5fe5cf31a3fc687ed0b094ff72e7e1b483415461aa5f4f82d->leave($__internal_00efc25aab868ef5fe5cf31a3fc687ed0b094ff72e7e1b483415461aa5f4f82d_prof);

        
        $__internal_2812bd6eee7046af588b9d906b3f4268b30f12b623009e1e71ed56a84414cb31->leave($__internal_2812bd6eee7046af588b9d906b3f4268b30f12b623009e1e71ed56a84414cb31_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

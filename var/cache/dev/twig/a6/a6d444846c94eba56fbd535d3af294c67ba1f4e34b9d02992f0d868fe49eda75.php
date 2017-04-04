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
        $__internal_35640814764e46c46aa22fdbe2692723eddd6e0c3c9145ebe72accd5bd67c3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35640814764e46c46aa22fdbe2692723eddd6e0c3c9145ebe72accd5bd67c3ad->enter($__internal_35640814764e46c46aa22fdbe2692723eddd6e0c3c9145ebe72accd5bd67c3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8c6db62190e95aba29c1150dd3591c6641ab43fb886ded98da3fd8e7cd1415ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6db62190e95aba29c1150dd3591c6641ab43fb886ded98da3fd8e7cd1415ab->enter($__internal_8c6db62190e95aba29c1150dd3591c6641ab43fb886ded98da3fd8e7cd1415ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_35640814764e46c46aa22fdbe2692723eddd6e0c3c9145ebe72accd5bd67c3ad->leave($__internal_35640814764e46c46aa22fdbe2692723eddd6e0c3c9145ebe72accd5bd67c3ad_prof);

        
        $__internal_8c6db62190e95aba29c1150dd3591c6641ab43fb886ded98da3fd8e7cd1415ab->leave($__internal_8c6db62190e95aba29c1150dd3591c6641ab43fb886ded98da3fd8e7cd1415ab_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fdd51ff95fe626cc79b0283794b9da00d670a8e8f7b1d79c17831eac2358e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdd51ff95fe626cc79b0283794b9da00d670a8e8f7b1d79c17831eac2358e44->enter($__internal_3fdd51ff95fe626cc79b0283794b9da00d670a8e8f7b1d79c17831eac2358e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90b93017cfc22bea5149b9220e6666977cb9b58432cbdb65be754cce91a17009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b93017cfc22bea5149b9220e6666977cb9b58432cbdb65be754cce91a17009->enter($__internal_90b93017cfc22bea5149b9220e6666977cb9b58432cbdb65be754cce91a17009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90b93017cfc22bea5149b9220e6666977cb9b58432cbdb65be754cce91a17009->leave($__internal_90b93017cfc22bea5149b9220e6666977cb9b58432cbdb65be754cce91a17009_prof);

        
        $__internal_3fdd51ff95fe626cc79b0283794b9da00d670a8e8f7b1d79c17831eac2358e44->leave($__internal_3fdd51ff95fe626cc79b0283794b9da00d670a8e8f7b1d79c17831eac2358e44_prof);

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

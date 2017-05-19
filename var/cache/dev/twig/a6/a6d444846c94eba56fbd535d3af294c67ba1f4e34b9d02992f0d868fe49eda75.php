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
        $__internal_335f97f6aa098f2845cf6a847c3b1266d79cc02e7ccbcf3176bc53e4e5867b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335f97f6aa098f2845cf6a847c3b1266d79cc02e7ccbcf3176bc53e4e5867b56->enter($__internal_335f97f6aa098f2845cf6a847c3b1266d79cc02e7ccbcf3176bc53e4e5867b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d56da9045517c3cfcd0586bc88b6ba225b39c734bd8d23aee22bb945f9a3709c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56da9045517c3cfcd0586bc88b6ba225b39c734bd8d23aee22bb945f9a3709c->enter($__internal_d56da9045517c3cfcd0586bc88b6ba225b39c734bd8d23aee22bb945f9a3709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_335f97f6aa098f2845cf6a847c3b1266d79cc02e7ccbcf3176bc53e4e5867b56->leave($__internal_335f97f6aa098f2845cf6a847c3b1266d79cc02e7ccbcf3176bc53e4e5867b56_prof);

        
        $__internal_d56da9045517c3cfcd0586bc88b6ba225b39c734bd8d23aee22bb945f9a3709c->leave($__internal_d56da9045517c3cfcd0586bc88b6ba225b39c734bd8d23aee22bb945f9a3709c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8d33dc9d07303e16de03466a2814b593a6c740ece21a33840c0b223c1a8029c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d33dc9d07303e16de03466a2814b593a6c740ece21a33840c0b223c1a8029c->enter($__internal_a8d33dc9d07303e16de03466a2814b593a6c740ece21a33840c0b223c1a8029c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b52019981399f7a62712024b0cd6aecc1df920287997a0ec54b514ce1d932af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52019981399f7a62712024b0cd6aecc1df920287997a0ec54b514ce1d932af7->enter($__internal_b52019981399f7a62712024b0cd6aecc1df920287997a0ec54b514ce1d932af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b52019981399f7a62712024b0cd6aecc1df920287997a0ec54b514ce1d932af7->leave($__internal_b52019981399f7a62712024b0cd6aecc1df920287997a0ec54b514ce1d932af7_prof);

        
        $__internal_a8d33dc9d07303e16de03466a2814b593a6c740ece21a33840c0b223c1a8029c->leave($__internal_a8d33dc9d07303e16de03466a2814b593a6c740ece21a33840c0b223c1a8029c_prof);

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

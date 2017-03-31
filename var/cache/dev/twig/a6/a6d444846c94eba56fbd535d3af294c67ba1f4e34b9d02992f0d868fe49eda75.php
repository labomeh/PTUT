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
        $__internal_bb1cfcfdaa03ca121dc97cff652d786941dea9daed807cda9f88ec88aec4aeb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1cfcfdaa03ca121dc97cff652d786941dea9daed807cda9f88ec88aec4aeb4->enter($__internal_bb1cfcfdaa03ca121dc97cff652d786941dea9daed807cda9f88ec88aec4aeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_180452006e9952cf9102e2cb5c49eb7bef182c0f52caf36c5aaa828edeba3141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180452006e9952cf9102e2cb5c49eb7bef182c0f52caf36c5aaa828edeba3141->enter($__internal_180452006e9952cf9102e2cb5c49eb7bef182c0f52caf36c5aaa828edeba3141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bb1cfcfdaa03ca121dc97cff652d786941dea9daed807cda9f88ec88aec4aeb4->leave($__internal_bb1cfcfdaa03ca121dc97cff652d786941dea9daed807cda9f88ec88aec4aeb4_prof);

        
        $__internal_180452006e9952cf9102e2cb5c49eb7bef182c0f52caf36c5aaa828edeba3141->leave($__internal_180452006e9952cf9102e2cb5c49eb7bef182c0f52caf36c5aaa828edeba3141_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_789c63e3752d08fecddf69fbb9a2b39f757ddc5b1e6cfe1b051d433226e3a065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789c63e3752d08fecddf69fbb9a2b39f757ddc5b1e6cfe1b051d433226e3a065->enter($__internal_789c63e3752d08fecddf69fbb9a2b39f757ddc5b1e6cfe1b051d433226e3a065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_abe0dfec3a66ca43e3f87626b19480feaa970be38d637d6cbd16e67b8b5d3f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe0dfec3a66ca43e3f87626b19480feaa970be38d637d6cbd16e67b8b5d3f7d->enter($__internal_abe0dfec3a66ca43e3f87626b19480feaa970be38d637d6cbd16e67b8b5d3f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_abe0dfec3a66ca43e3f87626b19480feaa970be38d637d6cbd16e67b8b5d3f7d->leave($__internal_abe0dfec3a66ca43e3f87626b19480feaa970be38d637d6cbd16e67b8b5d3f7d_prof);

        
        $__internal_789c63e3752d08fecddf69fbb9a2b39f757ddc5b1e6cfe1b051d433226e3a065->leave($__internal_789c63e3752d08fecddf69fbb9a2b39f757ddc5b1e6cfe1b051d433226e3a065_prof);

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

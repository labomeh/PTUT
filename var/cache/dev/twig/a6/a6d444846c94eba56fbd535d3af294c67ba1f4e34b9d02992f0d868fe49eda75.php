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
        $__internal_8f5b5727f74ac7ec806b0c0d0c202fa17157f650963f6718c067064bc7f643cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5b5727f74ac7ec806b0c0d0c202fa17157f650963f6718c067064bc7f643cc->enter($__internal_8f5b5727f74ac7ec806b0c0d0c202fa17157f650963f6718c067064bc7f643cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_93e150f9f9325e8c2269832a5d5ccbe51ea1924844d62502f1539ca66b0eecb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e150f9f9325e8c2269832a5d5ccbe51ea1924844d62502f1539ca66b0eecb0->enter($__internal_93e150f9f9325e8c2269832a5d5ccbe51ea1924844d62502f1539ca66b0eecb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8f5b5727f74ac7ec806b0c0d0c202fa17157f650963f6718c067064bc7f643cc->leave($__internal_8f5b5727f74ac7ec806b0c0d0c202fa17157f650963f6718c067064bc7f643cc_prof);

        
        $__internal_93e150f9f9325e8c2269832a5d5ccbe51ea1924844d62502f1539ca66b0eecb0->leave($__internal_93e150f9f9325e8c2269832a5d5ccbe51ea1924844d62502f1539ca66b0eecb0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_671f6cbb75e6fcd4c407cd6d68cc909e83ba443d997599c01b3667aa91b6ce63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671f6cbb75e6fcd4c407cd6d68cc909e83ba443d997599c01b3667aa91b6ce63->enter($__internal_671f6cbb75e6fcd4c407cd6d68cc909e83ba443d997599c01b3667aa91b6ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_845b615e18147724e2db2f66999d07f9d99525e7219af0c5e60f9f6d56cac790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845b615e18147724e2db2f66999d07f9d99525e7219af0c5e60f9f6d56cac790->enter($__internal_845b615e18147724e2db2f66999d07f9d99525e7219af0c5e60f9f6d56cac790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_845b615e18147724e2db2f66999d07f9d99525e7219af0c5e60f9f6d56cac790->leave($__internal_845b615e18147724e2db2f66999d07f9d99525e7219af0c5e60f9f6d56cac790_prof);

        
        $__internal_671f6cbb75e6fcd4c407cd6d68cc909e83ba443d997599c01b3667aa91b6ce63->leave($__internal_671f6cbb75e6fcd4c407cd6d68cc909e83ba443d997599c01b3667aa91b6ce63_prof);

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

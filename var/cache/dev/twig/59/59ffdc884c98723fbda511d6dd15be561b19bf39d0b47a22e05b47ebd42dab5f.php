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
        $__internal_f83e6fec503ca4d18d12010282608c220bcd733fd796ebaa78426bd4f0ea45e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83e6fec503ca4d18d12010282608c220bcd733fd796ebaa78426bd4f0ea45e7->enter($__internal_f83e6fec503ca4d18d12010282608c220bcd733fd796ebaa78426bd4f0ea45e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2e7b5830504b0c38a0aa105d6aaea381edff8e4a6f5db6597fe3846d23541a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7b5830504b0c38a0aa105d6aaea381edff8e4a6f5db6597fe3846d23541a3e->enter($__internal_2e7b5830504b0c38a0aa105d6aaea381edff8e4a6f5db6597fe3846d23541a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f83e6fec503ca4d18d12010282608c220bcd733fd796ebaa78426bd4f0ea45e7->leave($__internal_f83e6fec503ca4d18d12010282608c220bcd733fd796ebaa78426bd4f0ea45e7_prof);

        
        $__internal_2e7b5830504b0c38a0aa105d6aaea381edff8e4a6f5db6597fe3846d23541a3e->leave($__internal_2e7b5830504b0c38a0aa105d6aaea381edff8e4a6f5db6597fe3846d23541a3e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1958a06c0dcbec56c558c71724ae4bd47304d6495159ff03c658384c68254d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1958a06c0dcbec56c558c71724ae4bd47304d6495159ff03c658384c68254d8->enter($__internal_a1958a06c0dcbec56c558c71724ae4bd47304d6495159ff03c658384c68254d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_592787e9f4f2cd059a46e4ec2f50eb4d8566b884cfaae71546cf787c113f7a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592787e9f4f2cd059a46e4ec2f50eb4d8566b884cfaae71546cf787c113f7a5f->enter($__internal_592787e9f4f2cd059a46e4ec2f50eb4d8566b884cfaae71546cf787c113f7a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_592787e9f4f2cd059a46e4ec2f50eb4d8566b884cfaae71546cf787c113f7a5f->leave($__internal_592787e9f4f2cd059a46e4ec2f50eb4d8566b884cfaae71546cf787c113f7a5f_prof);

        
        $__internal_a1958a06c0dcbec56c558c71724ae4bd47304d6495159ff03c658384c68254d8->leave($__internal_a1958a06c0dcbec56c558c71724ae4bd47304d6495159ff03c658384c68254d8_prof);

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

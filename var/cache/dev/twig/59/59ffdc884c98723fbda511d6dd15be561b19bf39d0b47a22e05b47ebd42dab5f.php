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
        $__internal_ef060e120a7b0fe40ed557c7d344c32b54b53627aeffc7d68ffa22b3334920b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef060e120a7b0fe40ed557c7d344c32b54b53627aeffc7d68ffa22b3334920b7->enter($__internal_ef060e120a7b0fe40ed557c7d344c32b54b53627aeffc7d68ffa22b3334920b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3e5be1b04a2cf15ac443aeab20090c8eae9456707a2f4ad550a5fc091336b3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5be1b04a2cf15ac443aeab20090c8eae9456707a2f4ad550a5fc091336b3a9->enter($__internal_3e5be1b04a2cf15ac443aeab20090c8eae9456707a2f4ad550a5fc091336b3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef060e120a7b0fe40ed557c7d344c32b54b53627aeffc7d68ffa22b3334920b7->leave($__internal_ef060e120a7b0fe40ed557c7d344c32b54b53627aeffc7d68ffa22b3334920b7_prof);

        
        $__internal_3e5be1b04a2cf15ac443aeab20090c8eae9456707a2f4ad550a5fc091336b3a9->leave($__internal_3e5be1b04a2cf15ac443aeab20090c8eae9456707a2f4ad550a5fc091336b3a9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae544059e3e86745cac072e834b313db58b4dfe73192c52a686e3cbf33a47337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae544059e3e86745cac072e834b313db58b4dfe73192c52a686e3cbf33a47337->enter($__internal_ae544059e3e86745cac072e834b313db58b4dfe73192c52a686e3cbf33a47337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_825b495a3ae5bbe5a7ca26bd42ac9363ba2c2e5ebc5c2137466bbad4366a7a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825b495a3ae5bbe5a7ca26bd42ac9363ba2c2e5ebc5c2137466bbad4366a7a36->enter($__internal_825b495a3ae5bbe5a7ca26bd42ac9363ba2c2e5ebc5c2137466bbad4366a7a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_825b495a3ae5bbe5a7ca26bd42ac9363ba2c2e5ebc5c2137466bbad4366a7a36->leave($__internal_825b495a3ae5bbe5a7ca26bd42ac9363ba2c2e5ebc5c2137466bbad4366a7a36_prof);

        
        $__internal_ae544059e3e86745cac072e834b313db58b4dfe73192c52a686e3cbf33a47337->leave($__internal_ae544059e3e86745cac072e834b313db58b4dfe73192c52a686e3cbf33a47337_prof);

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

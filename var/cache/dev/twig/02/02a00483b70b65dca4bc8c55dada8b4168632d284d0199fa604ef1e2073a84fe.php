<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e7540d81a0e2a51f719f2be6c96bcbe60caad8cc1a0ee074d0b04f979bd7d8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f7a430c55688f6de5304b8c52cd0593b9f85b9590a74ee867047201f3925d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7a430c55688f6de5304b8c52cd0593b9f85b9590a74ee867047201f3925d96->enter($__internal_5f7a430c55688f6de5304b8c52cd0593b9f85b9590a74ee867047201f3925d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_96fa167529600ac2deb3994b52eb645cf5196d1258b76c16fc2e7bf02ad344dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fa167529600ac2deb3994b52eb645cf5196d1258b76c16fc2e7bf02ad344dc->enter($__internal_96fa167529600ac2deb3994b52eb645cf5196d1258b76c16fc2e7bf02ad344dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5f7a430c55688f6de5304b8c52cd0593b9f85b9590a74ee867047201f3925d96->leave($__internal_5f7a430c55688f6de5304b8c52cd0593b9f85b9590a74ee867047201f3925d96_prof);

        
        $__internal_96fa167529600ac2deb3994b52eb645cf5196d1258b76c16fc2e7bf02ad344dc->leave($__internal_96fa167529600ac2deb3994b52eb645cf5196d1258b76c16fc2e7bf02ad344dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

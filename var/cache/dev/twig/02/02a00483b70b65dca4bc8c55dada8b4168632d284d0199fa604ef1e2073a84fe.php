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
        $__internal_bdd494781bbf2e1ff37611bb0e0ac06255c0d56abc48a9f2fcfa3bf2a0f1a9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd494781bbf2e1ff37611bb0e0ac06255c0d56abc48a9f2fcfa3bf2a0f1a9f4->enter($__internal_bdd494781bbf2e1ff37611bb0e0ac06255c0d56abc48a9f2fcfa3bf2a0f1a9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_afe7a18fa625e5a120e0bb228fe329a908121e7f72744792327cda82288c088c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe7a18fa625e5a120e0bb228fe329a908121e7f72744792327cda82288c088c->enter($__internal_afe7a18fa625e5a120e0bb228fe329a908121e7f72744792327cda82288c088c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bdd494781bbf2e1ff37611bb0e0ac06255c0d56abc48a9f2fcfa3bf2a0f1a9f4->leave($__internal_bdd494781bbf2e1ff37611bb0e0ac06255c0d56abc48a9f2fcfa3bf2a0f1a9f4_prof);

        
        $__internal_afe7a18fa625e5a120e0bb228fe329a908121e7f72744792327cda82288c088c->leave($__internal_afe7a18fa625e5a120e0bb228fe329a908121e7f72744792327cda82288c088c_prof);

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

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
        $__internal_f40073da0f252fb314bf26e08d59d38d01c58420c10d38e919200bba8a4bcafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40073da0f252fb314bf26e08d59d38d01c58420c10d38e919200bba8a4bcafb->enter($__internal_f40073da0f252fb314bf26e08d59d38d01c58420c10d38e919200bba8a4bcafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a303d8fb36c989ae70f3a2a746e67daefb383a6b080cebae63b65297693232ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a303d8fb36c989ae70f3a2a746e67daefb383a6b080cebae63b65297693232ed->enter($__internal_a303d8fb36c989ae70f3a2a746e67daefb383a6b080cebae63b65297693232ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f40073da0f252fb314bf26e08d59d38d01c58420c10d38e919200bba8a4bcafb->leave($__internal_f40073da0f252fb314bf26e08d59d38d01c58420c10d38e919200bba8a4bcafb_prof);

        
        $__internal_a303d8fb36c989ae70f3a2a746e67daefb383a6b080cebae63b65297693232ed->leave($__internal_a303d8fb36c989ae70f3a2a746e67daefb383a6b080cebae63b65297693232ed_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

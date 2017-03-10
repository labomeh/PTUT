<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_889940a131771f41338e478c4e6f61faa39fb1be43e520bb2b6cf886595092a8 extends Twig_Template
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
        $__internal_927d5d49a7e2d951259d3603c82d8e2e700dea90db27e61dca0d0ee410c56f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927d5d49a7e2d951259d3603c82d8e2e700dea90db27e61dca0d0ee410c56f13->enter($__internal_927d5d49a7e2d951259d3603c82d8e2e700dea90db27e61dca0d0ee410c56f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_fdc3df6f51949d69a968cd2573d46daa0ae93b7b0956bd839e06614bd8dc5948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc3df6f51949d69a968cd2573d46daa0ae93b7b0956bd839e06614bd8dc5948->enter($__internal_fdc3df6f51949d69a968cd2573d46daa0ae93b7b0956bd839e06614bd8dc5948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_927d5d49a7e2d951259d3603c82d8e2e700dea90db27e61dca0d0ee410c56f13->leave($__internal_927d5d49a7e2d951259d3603c82d8e2e700dea90db27e61dca0d0ee410c56f13_prof);

        
        $__internal_fdc3df6f51949d69a968cd2573d46daa0ae93b7b0956bd839e06614bd8dc5948->leave($__internal_fdc3df6f51949d69a968cd2573d46daa0ae93b7b0956bd839e06614bd8dc5948_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}

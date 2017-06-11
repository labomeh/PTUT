<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_245737abc667b6eecd30fd82cb34cb59edd674c76fa74fe52bed2f389c2a0814 extends Twig_Template
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
        $__internal_dea09863320fa8f54555eacb4102d30b4391253620fc83fa3705b872a064c647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea09863320fa8f54555eacb4102d30b4391253620fc83fa3705b872a064c647->enter($__internal_dea09863320fa8f54555eacb4102d30b4391253620fc83fa3705b872a064c647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c6d4a899a7f60a5bb4b2e17081d73cdf93d5434d538111f03dc351ff025fe3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d4a899a7f60a5bb4b2e17081d73cdf93d5434d538111f03dc351ff025fe3e1->enter($__internal_c6d4a899a7f60a5bb4b2e17081d73cdf93d5434d538111f03dc351ff025fe3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_dea09863320fa8f54555eacb4102d30b4391253620fc83fa3705b872a064c647->leave($__internal_dea09863320fa8f54555eacb4102d30b4391253620fc83fa3705b872a064c647_prof);

        
        $__internal_c6d4a899a7f60a5bb4b2e17081d73cdf93d5434d538111f03dc351ff025fe3e1->leave($__internal_c6d4a899a7f60a5bb4b2e17081d73cdf93d5434d538111f03dc351ff025fe3e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

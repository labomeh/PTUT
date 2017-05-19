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
        $__internal_8c4b5921b092bef85f4dab8aebb6f7c624df1bd21604c621c6654478fb32518e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4b5921b092bef85f4dab8aebb6f7c624df1bd21604c621c6654478fb32518e->enter($__internal_8c4b5921b092bef85f4dab8aebb6f7c624df1bd21604c621c6654478fb32518e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7df20cc06fd96f03f546fcf6380355a8bdd193cedd4d0b2708046b3f87288a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df20cc06fd96f03f546fcf6380355a8bdd193cedd4d0b2708046b3f87288a35->enter($__internal_7df20cc06fd96f03f546fcf6380355a8bdd193cedd4d0b2708046b3f87288a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8c4b5921b092bef85f4dab8aebb6f7c624df1bd21604c621c6654478fb32518e->leave($__internal_8c4b5921b092bef85f4dab8aebb6f7c624df1bd21604c621c6654478fb32518e_prof);

        
        $__internal_7df20cc06fd96f03f546fcf6380355a8bdd193cedd4d0b2708046b3f87288a35->leave($__internal_7df20cc06fd96f03f546fcf6380355a8bdd193cedd4d0b2708046b3f87288a35_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

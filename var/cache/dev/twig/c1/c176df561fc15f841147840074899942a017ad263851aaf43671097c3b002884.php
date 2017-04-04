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
        $__internal_93bae8263f286d7487b24aedfd256bee488dd3abe3fec2044fc9b306c120eddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bae8263f286d7487b24aedfd256bee488dd3abe3fec2044fc9b306c120eddc->enter($__internal_93bae8263f286d7487b24aedfd256bee488dd3abe3fec2044fc9b306c120eddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6e04a4348322c2c0a5860980b01fe83b07c5bcf81a10da92ee23c32156adf8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e04a4348322c2c0a5860980b01fe83b07c5bcf81a10da92ee23c32156adf8c8->enter($__internal_6e04a4348322c2c0a5860980b01fe83b07c5bcf81a10da92ee23c32156adf8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_93bae8263f286d7487b24aedfd256bee488dd3abe3fec2044fc9b306c120eddc->leave($__internal_93bae8263f286d7487b24aedfd256bee488dd3abe3fec2044fc9b306c120eddc_prof);

        
        $__internal_6e04a4348322c2c0a5860980b01fe83b07c5bcf81a10da92ee23c32156adf8c8->leave($__internal_6e04a4348322c2c0a5860980b01fe83b07c5bcf81a10da92ee23c32156adf8c8_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}

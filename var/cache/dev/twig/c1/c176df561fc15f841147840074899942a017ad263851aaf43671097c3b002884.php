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
        $__internal_b6f73b94bb7da72ab61e6d3b0c47b6a963cb42a0086ce87632e224e1fdfa9708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f73b94bb7da72ab61e6d3b0c47b6a963cb42a0086ce87632e224e1fdfa9708->enter($__internal_b6f73b94bb7da72ab61e6d3b0c47b6a963cb42a0086ce87632e224e1fdfa9708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_064df270c9348e7c94789ce3e4e2d09de1aed697ecb5eb449e0581eab46dbf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064df270c9348e7c94789ce3e4e2d09de1aed697ecb5eb449e0581eab46dbf9c->enter($__internal_064df270c9348e7c94789ce3e4e2d09de1aed697ecb5eb449e0581eab46dbf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b6f73b94bb7da72ab61e6d3b0c47b6a963cb42a0086ce87632e224e1fdfa9708->leave($__internal_b6f73b94bb7da72ab61e6d3b0c47b6a963cb42a0086ce87632e224e1fdfa9708_prof);

        
        $__internal_064df270c9348e7c94789ce3e4e2d09de1aed697ecb5eb449e0581eab46dbf9c->leave($__internal_064df270c9348e7c94789ce3e4e2d09de1aed697ecb5eb449e0581eab46dbf9c_prof);

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

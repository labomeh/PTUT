<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8194a599aa93377ae64ff891f5b4c375ec6e24ab0764360bbd25b21e80490061 extends Twig_Template
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
        $__internal_4206c5f151329e7c5984ab7c9fdc4a7356483252967ab96c3f55741e3daaa3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4206c5f151329e7c5984ab7c9fdc4a7356483252967ab96c3f55741e3daaa3ff->enter($__internal_4206c5f151329e7c5984ab7c9fdc4a7356483252967ab96c3f55741e3daaa3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_9577728b08f102507ca98e496aa763535b48f39aca6d0319a2cc23242e22e994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9577728b08f102507ca98e496aa763535b48f39aca6d0319a2cc23242e22e994->enter($__internal_9577728b08f102507ca98e496aa763535b48f39aca6d0319a2cc23242e22e994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4206c5f151329e7c5984ab7c9fdc4a7356483252967ab96c3f55741e3daaa3ff->leave($__internal_4206c5f151329e7c5984ab7c9fdc4a7356483252967ab96c3f55741e3daaa3ff_prof);

        
        $__internal_9577728b08f102507ca98e496aa763535b48f39aca6d0319a2cc23242e22e994->leave($__internal_9577728b08f102507ca98e496aa763535b48f39aca6d0319a2cc23242e22e994_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

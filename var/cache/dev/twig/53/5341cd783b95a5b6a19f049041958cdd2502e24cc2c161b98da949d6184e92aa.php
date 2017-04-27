<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c45e061129a3653ab749d926862102f15aee4f46db2177fe640462604ef6a47 extends Twig_Template
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
        $__internal_c0341ce96c5f8d4e7f568e28399edcd46263093d5c3bad356449b7e97159e72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0341ce96c5f8d4e7f568e28399edcd46263093d5c3bad356449b7e97159e72b->enter($__internal_c0341ce96c5f8d4e7f568e28399edcd46263093d5c3bad356449b7e97159e72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c53344c3a8cd2b7a52fff130471779753a43959cef37c2538d288f5b7e3b77c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53344c3a8cd2b7a52fff130471779753a43959cef37c2538d288f5b7e3b77c7->enter($__internal_c53344c3a8cd2b7a52fff130471779753a43959cef37c2538d288f5b7e3b77c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c0341ce96c5f8d4e7f568e28399edcd46263093d5c3bad356449b7e97159e72b->leave($__internal_c0341ce96c5f8d4e7f568e28399edcd46263093d5c3bad356449b7e97159e72b_prof);

        
        $__internal_c53344c3a8cd2b7a52fff130471779753a43959cef37c2538d288f5b7e3b77c7->leave($__internal_c53344c3a8cd2b7a52fff130471779753a43959cef37c2538d288f5b7e3b77c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

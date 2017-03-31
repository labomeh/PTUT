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
        $__internal_18a151e45c6ee871b566f045d61ec9763ad384aba773247be7d7bc49816e14fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a151e45c6ee871b566f045d61ec9763ad384aba773247be7d7bc49816e14fb->enter($__internal_18a151e45c6ee871b566f045d61ec9763ad384aba773247be7d7bc49816e14fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7a43e3317c60a5fc3460b480e43be9247b426826892e960c3ed083a5756fd536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a43e3317c60a5fc3460b480e43be9247b426826892e960c3ed083a5756fd536->enter($__internal_7a43e3317c60a5fc3460b480e43be9247b426826892e960c3ed083a5756fd536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_18a151e45c6ee871b566f045d61ec9763ad384aba773247be7d7bc49816e14fb->leave($__internal_18a151e45c6ee871b566f045d61ec9763ad384aba773247be7d7bc49816e14fb_prof);

        
        $__internal_7a43e3317c60a5fc3460b480e43be9247b426826892e960c3ed083a5756fd536->leave($__internal_7a43e3317c60a5fc3460b480e43be9247b426826892e960c3ed083a5756fd536_prof);

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

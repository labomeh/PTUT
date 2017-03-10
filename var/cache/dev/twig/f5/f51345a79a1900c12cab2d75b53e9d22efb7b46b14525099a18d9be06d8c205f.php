<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_821fe71f6b611b36aeb9f4dc4bf6e1b91656da10c9e3660b6a02316e0bcfca30 extends Twig_Template
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
        $__internal_974d385ae256ec1d36ed107d81f1877b5df9f53cf1ac14aa9f914defb966062e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974d385ae256ec1d36ed107d81f1877b5df9f53cf1ac14aa9f914defb966062e->enter($__internal_974d385ae256ec1d36ed107d81f1877b5df9f53cf1ac14aa9f914defb966062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6058939b264b5225ee1c94e964de30e6c898ce658e58cae8560ac8269f63534d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6058939b264b5225ee1c94e964de30e6c898ce658e58cae8560ac8269f63534d->enter($__internal_6058939b264b5225ee1c94e964de30e6c898ce658e58cae8560ac8269f63534d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_974d385ae256ec1d36ed107d81f1877b5df9f53cf1ac14aa9f914defb966062e->leave($__internal_974d385ae256ec1d36ed107d81f1877b5df9f53cf1ac14aa9f914defb966062e_prof);

        
        $__internal_6058939b264b5225ee1c94e964de30e6c898ce658e58cae8560ac8269f63534d->leave($__internal_6058939b264b5225ee1c94e964de30e6c898ce658e58cae8560ac8269f63534d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

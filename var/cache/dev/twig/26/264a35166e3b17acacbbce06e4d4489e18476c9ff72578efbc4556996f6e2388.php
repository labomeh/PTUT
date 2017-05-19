<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3f48c6c940bb8f0567bcfd028bd31985df1c656c600e5b12ac11d792101de412 extends Twig_Template
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
        $__internal_d6d6572dc81303c51e38c67bea192ae9518ee80eab550a9adf5356bb0765342f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d6572dc81303c51e38c67bea192ae9518ee80eab550a9adf5356bb0765342f->enter($__internal_d6d6572dc81303c51e38c67bea192ae9518ee80eab550a9adf5356bb0765342f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ca6b88938a861d360b31fb1867df1f57483197f4d9f6dbc9d79cbef154a2c932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6b88938a861d360b31fb1867df1f57483197f4d9f6dbc9d79cbef154a2c932->enter($__internal_ca6b88938a861d360b31fb1867df1f57483197f4d9f6dbc9d79cbef154a2c932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d6d6572dc81303c51e38c67bea192ae9518ee80eab550a9adf5356bb0765342f->leave($__internal_d6d6572dc81303c51e38c67bea192ae9518ee80eab550a9adf5356bb0765342f_prof);

        
        $__internal_ca6b88938a861d360b31fb1867df1f57483197f4d9f6dbc9d79cbef154a2c932->leave($__internal_ca6b88938a861d360b31fb1867df1f57483197f4d9f6dbc9d79cbef154a2c932_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

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
        $__internal_e664aa5c588112e6af9e454d1ec5018e647b7d01f5e1e85fc1786d46e7955eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e664aa5c588112e6af9e454d1ec5018e647b7d01f5e1e85fc1786d46e7955eeb->enter($__internal_e664aa5c588112e6af9e454d1ec5018e647b7d01f5e1e85fc1786d46e7955eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_095b38a5ff78acba657a7873b2afab6ab15cbea72c3c8add993e63aa0b5a6f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095b38a5ff78acba657a7873b2afab6ab15cbea72c3c8add993e63aa0b5a6f2e->enter($__internal_095b38a5ff78acba657a7873b2afab6ab15cbea72c3c8add993e63aa0b5a6f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_e664aa5c588112e6af9e454d1ec5018e647b7d01f5e1e85fc1786d46e7955eeb->leave($__internal_e664aa5c588112e6af9e454d1ec5018e647b7d01f5e1e85fc1786d46e7955eeb_prof);

        
        $__internal_095b38a5ff78acba657a7873b2afab6ab15cbea72c3c8add993e63aa0b5a6f2e->leave($__internal_095b38a5ff78acba657a7873b2afab6ab15cbea72c3c8add993e63aa0b5a6f2e_prof);

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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

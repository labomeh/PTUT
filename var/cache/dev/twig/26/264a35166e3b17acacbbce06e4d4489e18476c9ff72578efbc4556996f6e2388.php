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
        $__internal_02bf7efe93e3f2bc0cb5b84fe9173fb6e02f2a94560f0c1c87a7df9de06389b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02bf7efe93e3f2bc0cb5b84fe9173fb6e02f2a94560f0c1c87a7df9de06389b8->enter($__internal_02bf7efe93e3f2bc0cb5b84fe9173fb6e02f2a94560f0c1c87a7df9de06389b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d1f4ab6480fd8d00b9424f577923095c37c949c4896ce4a5039b8a530162a828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f4ab6480fd8d00b9424f577923095c37c949c4896ce4a5039b8a530162a828->enter($__internal_d1f4ab6480fd8d00b9424f577923095c37c949c4896ce4a5039b8a530162a828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_02bf7efe93e3f2bc0cb5b84fe9173fb6e02f2a94560f0c1c87a7df9de06389b8->leave($__internal_02bf7efe93e3f2bc0cb5b84fe9173fb6e02f2a94560f0c1c87a7df9de06389b8_prof);

        
        $__internal_d1f4ab6480fd8d00b9424f577923095c37c949c4896ce4a5039b8a530162a828->leave($__internal_d1f4ab6480fd8d00b9424f577923095c37c949c4896ce4a5039b8a530162a828_prof);

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

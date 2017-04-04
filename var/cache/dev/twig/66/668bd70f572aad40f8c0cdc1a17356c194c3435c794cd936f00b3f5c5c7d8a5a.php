<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a79f0d8985131b7fd6629c0b42a71c3246af87c6dd2461ca402b35cacff6d159 extends Twig_Template
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
        $__internal_d3e847821bc620e38b9d727f8dd966738e950c12c5731b33af4c1da4bb00ec68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e847821bc620e38b9d727f8dd966738e950c12c5731b33af4c1da4bb00ec68->enter($__internal_d3e847821bc620e38b9d727f8dd966738e950c12c5731b33af4c1da4bb00ec68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8f83f246abb8c4970205ac1be042f07080f86573aafe0d2069e6509f5047f8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f83f246abb8c4970205ac1be042f07080f86573aafe0d2069e6509f5047f8e0->enter($__internal_8f83f246abb8c4970205ac1be042f07080f86573aafe0d2069e6509f5047f8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d3e847821bc620e38b9d727f8dd966738e950c12c5731b33af4c1da4bb00ec68->leave($__internal_d3e847821bc620e38b9d727f8dd966738e950c12c5731b33af4c1da4bb00ec68_prof);

        
        $__internal_8f83f246abb8c4970205ac1be042f07080f86573aafe0d2069e6509f5047f8e0->leave($__internal_8f83f246abb8c4970205ac1be042f07080f86573aafe0d2069e6509f5047f8e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

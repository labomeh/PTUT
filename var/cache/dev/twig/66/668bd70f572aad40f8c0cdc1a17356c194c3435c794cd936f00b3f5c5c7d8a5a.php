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
        $__internal_5a0a1cd745f20ba8c2e08574d5ce0596fd8f16a0cfb00d1ba8c5c4b64743cc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0a1cd745f20ba8c2e08574d5ce0596fd8f16a0cfb00d1ba8c5c4b64743cc8b->enter($__internal_5a0a1cd745f20ba8c2e08574d5ce0596fd8f16a0cfb00d1ba8c5c4b64743cc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_53b348bc3a61d3b37232c1cffa8a7b9b8a3d9857ca2ba541ee4a0100ca7b4c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b348bc3a61d3b37232c1cffa8a7b9b8a3d9857ca2ba541ee4a0100ca7b4c98->enter($__internal_53b348bc3a61d3b37232c1cffa8a7b9b8a3d9857ca2ba541ee4a0100ca7b4c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5a0a1cd745f20ba8c2e08574d5ce0596fd8f16a0cfb00d1ba8c5c4b64743cc8b->leave($__internal_5a0a1cd745f20ba8c2e08574d5ce0596fd8f16a0cfb00d1ba8c5c4b64743cc8b_prof);

        
        $__internal_53b348bc3a61d3b37232c1cffa8a7b9b8a3d9857ca2ba541ee4a0100ca7b4c98->leave($__internal_53b348bc3a61d3b37232c1cffa8a7b9b8a3d9857ca2ba541ee4a0100ca7b4c98_prof);

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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

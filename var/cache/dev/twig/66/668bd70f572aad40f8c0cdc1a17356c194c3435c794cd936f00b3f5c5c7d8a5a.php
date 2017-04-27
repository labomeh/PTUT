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
        $__internal_d995ec05015d12042f39477f1cdf76b231f31405733a8426c2edcd2b0d478dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d995ec05015d12042f39477f1cdf76b231f31405733a8426c2edcd2b0d478dff->enter($__internal_d995ec05015d12042f39477f1cdf76b231f31405733a8426c2edcd2b0d478dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_25585caccfa521e7b44ccf7f10ae84332596f5350a0d990ecb589abb552b3f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25585caccfa521e7b44ccf7f10ae84332596f5350a0d990ecb589abb552b3f0d->enter($__internal_25585caccfa521e7b44ccf7f10ae84332596f5350a0d990ecb589abb552b3f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d995ec05015d12042f39477f1cdf76b231f31405733a8426c2edcd2b0d478dff->leave($__internal_d995ec05015d12042f39477f1cdf76b231f31405733a8426c2edcd2b0d478dff_prof);

        
        $__internal_25585caccfa521e7b44ccf7f10ae84332596f5350a0d990ecb589abb552b3f0d->leave($__internal_25585caccfa521e7b44ccf7f10ae84332596f5350a0d990ecb589abb552b3f0d_prof);

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

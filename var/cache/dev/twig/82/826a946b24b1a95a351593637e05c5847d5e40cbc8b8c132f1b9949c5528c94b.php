<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0848ea48b99295e47a9f6c24c38a7898512be2ad0ddcdf3b0d827acc7c55d453 extends Twig_Template
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
        $__internal_649334db40ac960673974788dcc3dc2ae900cee23b65d3c66e13eefdc24b499e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649334db40ac960673974788dcc3dc2ae900cee23b65d3c66e13eefdc24b499e->enter($__internal_649334db40ac960673974788dcc3dc2ae900cee23b65d3c66e13eefdc24b499e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_9b51ae694ef1dc30b26fd423d6480f2ebd7f86d32c55ee6fbe5335879cef3733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b51ae694ef1dc30b26fd423d6480f2ebd7f86d32c55ee6fbe5335879cef3733->enter($__internal_9b51ae694ef1dc30b26fd423d6480f2ebd7f86d32c55ee6fbe5335879cef3733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_649334db40ac960673974788dcc3dc2ae900cee23b65d3c66e13eefdc24b499e->leave($__internal_649334db40ac960673974788dcc3dc2ae900cee23b65d3c66e13eefdc24b499e_prof);

        
        $__internal_9b51ae694ef1dc30b26fd423d6480f2ebd7f86d32c55ee6fbe5335879cef3733->leave($__internal_9b51ae694ef1dc30b26fd423d6480f2ebd7f86d32c55ee6fbe5335879cef3733_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

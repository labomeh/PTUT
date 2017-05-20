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
        $__internal_59f9e60d98e01f080c648a20da239b8396315102992a00be9a95fe359ee2279f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f9e60d98e01f080c648a20da239b8396315102992a00be9a95fe359ee2279f->enter($__internal_59f9e60d98e01f080c648a20da239b8396315102992a00be9a95fe359ee2279f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_bb1f4d4590d8493b771fd8eb5197895c059679c2abfdbac90a15afff166eec2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1f4d4590d8493b771fd8eb5197895c059679c2abfdbac90a15afff166eec2f->enter($__internal_bb1f4d4590d8493b771fd8eb5197895c059679c2abfdbac90a15afff166eec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_59f9e60d98e01f080c648a20da239b8396315102992a00be9a95fe359ee2279f->leave($__internal_59f9e60d98e01f080c648a20da239b8396315102992a00be9a95fe359ee2279f_prof);

        
        $__internal_bb1f4d4590d8493b771fd8eb5197895c059679c2abfdbac90a15afff166eec2f->leave($__internal_bb1f4d4590d8493b771fd8eb5197895c059679c2abfdbac90a15afff166eec2f_prof);

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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

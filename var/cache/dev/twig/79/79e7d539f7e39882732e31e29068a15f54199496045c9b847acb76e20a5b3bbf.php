<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ab24f2235153d8586341136ecfa4c40c822c82cb45fd13caabeda3bf0ce320ac extends Twig_Template
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
        $__internal_8dba5ecb868b22cd83bf86324cd46d472fbe6c378926322bf64977217c76717a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dba5ecb868b22cd83bf86324cd46d472fbe6c378926322bf64977217c76717a->enter($__internal_8dba5ecb868b22cd83bf86324cd46d472fbe6c378926322bf64977217c76717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_31ae4232c49db7aba74b0ca4dbafd4e51f57b7ef4b04b60c6ca61e77093e0859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ae4232c49db7aba74b0ca4dbafd4e51f57b7ef4b04b60c6ca61e77093e0859->enter($__internal_31ae4232c49db7aba74b0ca4dbafd4e51f57b7ef4b04b60c6ca61e77093e0859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8dba5ecb868b22cd83bf86324cd46d472fbe6c378926322bf64977217c76717a->leave($__internal_8dba5ecb868b22cd83bf86324cd46d472fbe6c378926322bf64977217c76717a_prof);

        
        $__internal_31ae4232c49db7aba74b0ca4dbafd4e51f57b7ef4b04b60c6ca61e77093e0859->leave($__internal_31ae4232c49db7aba74b0ca4dbafd4e51f57b7ef4b04b60c6ca61e77093e0859_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

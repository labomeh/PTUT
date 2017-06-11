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
        $__internal_878d9b1ad99c4a81d02a5044c80a6b8599bc13a26290ee1d4db1bd9dda06d6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878d9b1ad99c4a81d02a5044c80a6b8599bc13a26290ee1d4db1bd9dda06d6f1->enter($__internal_878d9b1ad99c4a81d02a5044c80a6b8599bc13a26290ee1d4db1bd9dda06d6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_c16e1ef380f212a1df1deb38888f80eb16d8f7d7466b4b8532da44db3c7f7010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16e1ef380f212a1df1deb38888f80eb16d8f7d7466b4b8532da44db3c7f7010->enter($__internal_c16e1ef380f212a1df1deb38888f80eb16d8f7d7466b4b8532da44db3c7f7010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_878d9b1ad99c4a81d02a5044c80a6b8599bc13a26290ee1d4db1bd9dda06d6f1->leave($__internal_878d9b1ad99c4a81d02a5044c80a6b8599bc13a26290ee1d4db1bd9dda06d6f1_prof);

        
        $__internal_c16e1ef380f212a1df1deb38888f80eb16d8f7d7466b4b8532da44db3c7f7010->leave($__internal_c16e1ef380f212a1df1deb38888f80eb16d8f7d7466b4b8532da44db3c7f7010_prof);

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

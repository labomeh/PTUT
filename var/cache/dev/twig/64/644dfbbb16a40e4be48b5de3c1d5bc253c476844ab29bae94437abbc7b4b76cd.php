<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9308a8ccba52188e80c554863505af1a2dee7de0f104544430be61cf936a5a28 extends Twig_Template
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
        $__internal_8ac95fa2c271a09af3a1f0343498ca4f22ad4c5ac9b8f1a8d50ef18aa11022f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac95fa2c271a09af3a1f0343498ca4f22ad4c5ac9b8f1a8d50ef18aa11022f3->enter($__internal_8ac95fa2c271a09af3a1f0343498ca4f22ad4c5ac9b8f1a8d50ef18aa11022f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e5393b0ca9022c45287b2a1c9df62e40c20526caed8e3abf19a617ae3f1822ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5393b0ca9022c45287b2a1c9df62e40c20526caed8e3abf19a617ae3f1822ce->enter($__internal_e5393b0ca9022c45287b2a1c9df62e40c20526caed8e3abf19a617ae3f1822ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8ac95fa2c271a09af3a1f0343498ca4f22ad4c5ac9b8f1a8d50ef18aa11022f3->leave($__internal_8ac95fa2c271a09af3a1f0343498ca4f22ad4c5ac9b8f1a8d50ef18aa11022f3_prof);

        
        $__internal_e5393b0ca9022c45287b2a1c9df62e40c20526caed8e3abf19a617ae3f1822ce->leave($__internal_e5393b0ca9022c45287b2a1c9df62e40c20526caed8e3abf19a617ae3f1822ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

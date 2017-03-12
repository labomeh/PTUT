<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c45e061129a3653ab749d926862102f15aee4f46db2177fe640462604ef6a47 extends Twig_Template
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
        $__internal_89a0be863a66bac423c9ee93f03cd65723fa99e5ed2da3f104e67dfadca80e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a0be863a66bac423c9ee93f03cd65723fa99e5ed2da3f104e67dfadca80e1f->enter($__internal_89a0be863a66bac423c9ee93f03cd65723fa99e5ed2da3f104e67dfadca80e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b3f943c30c02b0b0aed37fa09f046a4160431ec6ab5264886ea02c5b43e33ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f943c30c02b0b0aed37fa09f046a4160431ec6ab5264886ea02c5b43e33ec3->enter($__internal_b3f943c30c02b0b0aed37fa09f046a4160431ec6ab5264886ea02c5b43e33ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_89a0be863a66bac423c9ee93f03cd65723fa99e5ed2da3f104e67dfadca80e1f->leave($__internal_89a0be863a66bac423c9ee93f03cd65723fa99e5ed2da3f104e67dfadca80e1f_prof);

        
        $__internal_b3f943c30c02b0b0aed37fa09f046a4160431ec6ab5264886ea02c5b43e33ec3->leave($__internal_b3f943c30c02b0b0aed37fa09f046a4160431ec6ab5264886ea02c5b43e33ec3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

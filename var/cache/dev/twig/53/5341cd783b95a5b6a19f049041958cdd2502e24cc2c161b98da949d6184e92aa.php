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
        $__internal_50f94e83c832969650bd51ab47a2891ce47356e539031cfafac17231371ae3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f94e83c832969650bd51ab47a2891ce47356e539031cfafac17231371ae3f9->enter($__internal_50f94e83c832969650bd51ab47a2891ce47356e539031cfafac17231371ae3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_4ae2380ae6fc5bd68aff4b30afa6eb115629e698f578986a6b5c1b9480665387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae2380ae6fc5bd68aff4b30afa6eb115629e698f578986a6b5c1b9480665387->enter($__internal_4ae2380ae6fc5bd68aff4b30afa6eb115629e698f578986a6b5c1b9480665387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_50f94e83c832969650bd51ab47a2891ce47356e539031cfafac17231371ae3f9->leave($__internal_50f94e83c832969650bd51ab47a2891ce47356e539031cfafac17231371ae3f9_prof);

        
        $__internal_4ae2380ae6fc5bd68aff4b30afa6eb115629e698f578986a6b5c1b9480665387->leave($__internal_4ae2380ae6fc5bd68aff4b30afa6eb115629e698f578986a6b5c1b9480665387_prof);

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

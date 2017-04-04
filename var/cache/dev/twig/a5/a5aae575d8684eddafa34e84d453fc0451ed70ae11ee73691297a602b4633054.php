<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8194a599aa93377ae64ff891f5b4c375ec6e24ab0764360bbd25b21e80490061 extends Twig_Template
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
        $__internal_ea8f9c0702cedd2846082f5c5b3358f8d2aa34652e10ad32d9b39f3054f9ed64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8f9c0702cedd2846082f5c5b3358f8d2aa34652e10ad32d9b39f3054f9ed64->enter($__internal_ea8f9c0702cedd2846082f5c5b3358f8d2aa34652e10ad32d9b39f3054f9ed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ce957b1643b82e277cd9bf11480828c92213d82a4730d5463699785374f5c760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce957b1643b82e277cd9bf11480828c92213d82a4730d5463699785374f5c760->enter($__internal_ce957b1643b82e277cd9bf11480828c92213d82a4730d5463699785374f5c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ea8f9c0702cedd2846082f5c5b3358f8d2aa34652e10ad32d9b39f3054f9ed64->leave($__internal_ea8f9c0702cedd2846082f5c5b3358f8d2aa34652e10ad32d9b39f3054f9ed64_prof);

        
        $__internal_ce957b1643b82e277cd9bf11480828c92213d82a4730d5463699785374f5c760->leave($__internal_ce957b1643b82e277cd9bf11480828c92213d82a4730d5463699785374f5c760_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

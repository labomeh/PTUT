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
        $__internal_6c26cc1ba721e913dfcb977bebd44282b2a8a884360ff676a5356a0a552e2e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c26cc1ba721e913dfcb977bebd44282b2a8a884360ff676a5356a0a552e2e6f->enter($__internal_6c26cc1ba721e913dfcb977bebd44282b2a8a884360ff676a5356a0a552e2e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e46b8b50cd86798917c53a1a48c42d8ec4706c9c5e53ba2421806e67fedc8011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46b8b50cd86798917c53a1a48c42d8ec4706c9c5e53ba2421806e67fedc8011->enter($__internal_e46b8b50cd86798917c53a1a48c42d8ec4706c9c5e53ba2421806e67fedc8011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6c26cc1ba721e913dfcb977bebd44282b2a8a884360ff676a5356a0a552e2e6f->leave($__internal_6c26cc1ba721e913dfcb977bebd44282b2a8a884360ff676a5356a0a552e2e6f_prof);

        
        $__internal_e46b8b50cd86798917c53a1a48c42d8ec4706c9c5e53ba2421806e67fedc8011->leave($__internal_e46b8b50cd86798917c53a1a48c42d8ec4706c9c5e53ba2421806e67fedc8011_prof);

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

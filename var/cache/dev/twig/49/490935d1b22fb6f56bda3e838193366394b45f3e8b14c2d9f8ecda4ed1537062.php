<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8bd0d709545c2e0eff3699e9dee149826229f8811ac78dddb18b7dfce31ebdb2 extends Twig_Template
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
        $__internal_74e5c1b837ef394a67e6af45feed67654667c67cbd7e813e33f39a1b5f3a7148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e5c1b837ef394a67e6af45feed67654667c67cbd7e813e33f39a1b5f3a7148->enter($__internal_74e5c1b837ef394a67e6af45feed67654667c67cbd7e813e33f39a1b5f3a7148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8282ea394ceaf089888c30c42586fef8614f69bf8ad311b8c421c769c06e329d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8282ea394ceaf089888c30c42586fef8614f69bf8ad311b8c421c769c06e329d->enter($__internal_8282ea394ceaf089888c30c42586fef8614f69bf8ad311b8c421c769c06e329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_74e5c1b837ef394a67e6af45feed67654667c67cbd7e813e33f39a1b5f3a7148->leave($__internal_74e5c1b837ef394a67e6af45feed67654667c67cbd7e813e33f39a1b5f3a7148_prof);

        
        $__internal_8282ea394ceaf089888c30c42586fef8614f69bf8ad311b8c421c769c06e329d->leave($__internal_8282ea394ceaf089888c30c42586fef8614f69bf8ad311b8c421c769c06e329d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

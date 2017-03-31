<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e54ba81b6c17b07d0428a0daedfd35ab467be4baff09be38a39e83aa2f7d3736 extends Twig_Template
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
        $__internal_d1844f82fab5eb04f69d3f8d19380ee53596748f7bd36bf99261a0593c756b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1844f82fab5eb04f69d3f8d19380ee53596748f7bd36bf99261a0593c756b26->enter($__internal_d1844f82fab5eb04f69d3f8d19380ee53596748f7bd36bf99261a0593c756b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1723d3198ca2ef8e08bd019b826f4d24ebf6e7041a11590c4df9aa8981c21f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1723d3198ca2ef8e08bd019b826f4d24ebf6e7041a11590c4df9aa8981c21f46->enter($__internal_1723d3198ca2ef8e08bd019b826f4d24ebf6e7041a11590c4df9aa8981c21f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d1844f82fab5eb04f69d3f8d19380ee53596748f7bd36bf99261a0593c756b26->leave($__internal_d1844f82fab5eb04f69d3f8d19380ee53596748f7bd36bf99261a0593c756b26_prof);

        
        $__internal_1723d3198ca2ef8e08bd019b826f4d24ebf6e7041a11590c4df9aa8981c21f46->leave($__internal_1723d3198ca2ef8e08bd019b826f4d24ebf6e7041a11590c4df9aa8981c21f46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

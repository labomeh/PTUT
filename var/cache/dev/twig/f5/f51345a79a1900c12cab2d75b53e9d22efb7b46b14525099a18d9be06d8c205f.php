<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_821fe71f6b611b36aeb9f4dc4bf6e1b91656da10c9e3660b6a02316e0bcfca30 extends Twig_Template
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
        $__internal_97776f12ceb95b240ea5fb8bc45d041133e1d14daa0f8c06ff6fb5ab164019b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97776f12ceb95b240ea5fb8bc45d041133e1d14daa0f8c06ff6fb5ab164019b4->enter($__internal_97776f12ceb95b240ea5fb8bc45d041133e1d14daa0f8c06ff6fb5ab164019b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_edec70600404f3a17029840ba7d2d2e9650e9c923283a7c68ef9eae0ab4856d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edec70600404f3a17029840ba7d2d2e9650e9c923283a7c68ef9eae0ab4856d2->enter($__internal_edec70600404f3a17029840ba7d2d2e9650e9c923283a7c68ef9eae0ab4856d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_97776f12ceb95b240ea5fb8bc45d041133e1d14daa0f8c06ff6fb5ab164019b4->leave($__internal_97776f12ceb95b240ea5fb8bc45d041133e1d14daa0f8c06ff6fb5ab164019b4_prof);

        
        $__internal_edec70600404f3a17029840ba7d2d2e9650e9c923283a7c68ef9eae0ab4856d2->leave($__internal_edec70600404f3a17029840ba7d2d2e9650e9c923283a7c68ef9eae0ab4856d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

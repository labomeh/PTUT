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
        $__internal_48ac7fb23440284685fbc2856e24993e5b5bf859cacb54858ccb0333ab55b338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ac7fb23440284685fbc2856e24993e5b5bf859cacb54858ccb0333ab55b338->enter($__internal_48ac7fb23440284685fbc2856e24993e5b5bf859cacb54858ccb0333ab55b338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2a5a4c057eeaddb78a6b0dad5635d5a52483e202a1b391242422078fba9599bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5a4c057eeaddb78a6b0dad5635d5a52483e202a1b391242422078fba9599bd->enter($__internal_2a5a4c057eeaddb78a6b0dad5635d5a52483e202a1b391242422078fba9599bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_48ac7fb23440284685fbc2856e24993e5b5bf859cacb54858ccb0333ab55b338->leave($__internal_48ac7fb23440284685fbc2856e24993e5b5bf859cacb54858ccb0333ab55b338_prof);

        
        $__internal_2a5a4c057eeaddb78a6b0dad5635d5a52483e202a1b391242422078fba9599bd->leave($__internal_2a5a4c057eeaddb78a6b0dad5635d5a52483e202a1b391242422078fba9599bd_prof);

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

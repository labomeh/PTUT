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
        $__internal_31ba65064faf6bb7969b34ec95e14ce6294b7f17d8825c441d4d6db4c6f4cbfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ba65064faf6bb7969b34ec95e14ce6294b7f17d8825c441d4d6db4c6f4cbfa->enter($__internal_31ba65064faf6bb7969b34ec95e14ce6294b7f17d8825c441d4d6db4c6f4cbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f4fde08e0a67221bd45bfb6a4aec68578855e996d91e5afca3390786107a99ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fde08e0a67221bd45bfb6a4aec68578855e996d91e5afca3390786107a99ed->enter($__internal_f4fde08e0a67221bd45bfb6a4aec68578855e996d91e5afca3390786107a99ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_31ba65064faf6bb7969b34ec95e14ce6294b7f17d8825c441d4d6db4c6f4cbfa->leave($__internal_31ba65064faf6bb7969b34ec95e14ce6294b7f17d8825c441d4d6db4c6f4cbfa_prof);

        
        $__internal_f4fde08e0a67221bd45bfb6a4aec68578855e996d91e5afca3390786107a99ed->leave($__internal_f4fde08e0a67221bd45bfb6a4aec68578855e996d91e5afca3390786107a99ed_prof);

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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

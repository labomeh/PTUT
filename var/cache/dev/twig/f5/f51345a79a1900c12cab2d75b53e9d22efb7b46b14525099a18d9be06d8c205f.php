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
        $__internal_1886a3e838ca7ec921a3d5a6b47d690bfdd2c76becf60e1d575f38529841b2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1886a3e838ca7ec921a3d5a6b47d690bfdd2c76becf60e1d575f38529841b2f5->enter($__internal_1886a3e838ca7ec921a3d5a6b47d690bfdd2c76becf60e1d575f38529841b2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_1c6d415fc34d0440a028a9cf58fa1765bbc7ee0f5aee4ee3a2973db39c1b7dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6d415fc34d0440a028a9cf58fa1765bbc7ee0f5aee4ee3a2973db39c1b7dfc->enter($__internal_1c6d415fc34d0440a028a9cf58fa1765bbc7ee0f5aee4ee3a2973db39c1b7dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1886a3e838ca7ec921a3d5a6b47d690bfdd2c76becf60e1d575f38529841b2f5->leave($__internal_1886a3e838ca7ec921a3d5a6b47d690bfdd2c76becf60e1d575f38529841b2f5_prof);

        
        $__internal_1c6d415fc34d0440a028a9cf58fa1765bbc7ee0f5aee4ee3a2973db39c1b7dfc->leave($__internal_1c6d415fc34d0440a028a9cf58fa1765bbc7ee0f5aee4ee3a2973db39c1b7dfc_prof);

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

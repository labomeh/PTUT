<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e7540d81a0e2a51f719f2be6c96bcbe60caad8cc1a0ee074d0b04f979bd7d8cb extends Twig_Template
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
        $__internal_a53b61549ae139dd53c6313c2d501b237f2400fb99fea5c73cf336e76d8d1363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53b61549ae139dd53c6313c2d501b237f2400fb99fea5c73cf336e76d8d1363->enter($__internal_a53b61549ae139dd53c6313c2d501b237f2400fb99fea5c73cf336e76d8d1363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ed5e3e4fe7d9d0b0f8b1e3297c73bef055aaa958bedb98cfba840ed9cd3e37db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5e3e4fe7d9d0b0f8b1e3297c73bef055aaa958bedb98cfba840ed9cd3e37db->enter($__internal_ed5e3e4fe7d9d0b0f8b1e3297c73bef055aaa958bedb98cfba840ed9cd3e37db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a53b61549ae139dd53c6313c2d501b237f2400fb99fea5c73cf336e76d8d1363->leave($__internal_a53b61549ae139dd53c6313c2d501b237f2400fb99fea5c73cf336e76d8d1363_prof);

        
        $__internal_ed5e3e4fe7d9d0b0f8b1e3297c73bef055aaa958bedb98cfba840ed9cd3e37db->leave($__internal_ed5e3e4fe7d9d0b0f8b1e3297c73bef055aaa958bedb98cfba840ed9cd3e37db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

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
        $__internal_c1b57d6e11dc45305513c8d91470caf5c2bd42eec3d963360e4fbaa3430e2660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b57d6e11dc45305513c8d91470caf5c2bd42eec3d963360e4fbaa3430e2660->enter($__internal_c1b57d6e11dc45305513c8d91470caf5c2bd42eec3d963360e4fbaa3430e2660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ab4a6770e070dae083af94801a6c78bd62cffe59ef2c7240b6c94e2e8dd96244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4a6770e070dae083af94801a6c78bd62cffe59ef2c7240b6c94e2e8dd96244->enter($__internal_ab4a6770e070dae083af94801a6c78bd62cffe59ef2c7240b6c94e2e8dd96244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c1b57d6e11dc45305513c8d91470caf5c2bd42eec3d963360e4fbaa3430e2660->leave($__internal_c1b57d6e11dc45305513c8d91470caf5c2bd42eec3d963360e4fbaa3430e2660_prof);

        
        $__internal_ab4a6770e070dae083af94801a6c78bd62cffe59ef2c7240b6c94e2e8dd96244->leave($__internal_ab4a6770e070dae083af94801a6c78bd62cffe59ef2c7240b6c94e2e8dd96244_prof);

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

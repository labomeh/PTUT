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
        $__internal_dd731bcae9f9f7aa17f070486b6bf5187334f0d438fe89bc24a571e2d87a5cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd731bcae9f9f7aa17f070486b6bf5187334f0d438fe89bc24a571e2d87a5cf5->enter($__internal_dd731bcae9f9f7aa17f070486b6bf5187334f0d438fe89bc24a571e2d87a5cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_8cdae266cf20df0fc07dbb8c28bbd3644ec4553b7c1a32b3b26c6b76c9c1ad8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdae266cf20df0fc07dbb8c28bbd3644ec4553b7c1a32b3b26c6b76c9c1ad8f->enter($__internal_8cdae266cf20df0fc07dbb8c28bbd3644ec4553b7c1a32b3b26c6b76c9c1ad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_dd731bcae9f9f7aa17f070486b6bf5187334f0d438fe89bc24a571e2d87a5cf5->leave($__internal_dd731bcae9f9f7aa17f070486b6bf5187334f0d438fe89bc24a571e2d87a5cf5_prof);

        
        $__internal_8cdae266cf20df0fc07dbb8c28bbd3644ec4553b7c1a32b3b26c6b76c9c1ad8f->leave($__internal_8cdae266cf20df0fc07dbb8c28bbd3644ec4553b7c1a32b3b26c6b76c9c1ad8f_prof);

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

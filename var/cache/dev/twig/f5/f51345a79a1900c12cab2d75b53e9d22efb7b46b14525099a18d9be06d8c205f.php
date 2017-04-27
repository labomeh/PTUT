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
        $__internal_cdd54cff985c0e19ce2b1cfaea8203246a8d04248430217a466edb643f27d9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd54cff985c0e19ce2b1cfaea8203246a8d04248430217a466edb643f27d9f9->enter($__internal_cdd54cff985c0e19ce2b1cfaea8203246a8d04248430217a466edb643f27d9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f4841fd90bfe6c8b5f15a1faf1fc38ff7b7fd843ccd2f4c075a32796f9e59b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4841fd90bfe6c8b5f15a1faf1fc38ff7b7fd843ccd2f4c075a32796f9e59b5c->enter($__internal_f4841fd90bfe6c8b5f15a1faf1fc38ff7b7fd843ccd2f4c075a32796f9e59b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_cdd54cff985c0e19ce2b1cfaea8203246a8d04248430217a466edb643f27d9f9->leave($__internal_cdd54cff985c0e19ce2b1cfaea8203246a8d04248430217a466edb643f27d9f9_prof);

        
        $__internal_f4841fd90bfe6c8b5f15a1faf1fc38ff7b7fd843ccd2f4c075a32796f9e59b5c->leave($__internal_f4841fd90bfe6c8b5f15a1faf1fc38ff7b7fd843ccd2f4c075a32796f9e59b5c_prof);

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

<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_42cff5b1d618a1f1a99ec0c2e1b3fc3d1e8c18aec7b7fd311830e102a1bfeeba extends Twig_Template
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
        $__internal_f207a0d9e8dffa63427243b53aeb9da907677797b6ed8b8bcaa40def1f381744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f207a0d9e8dffa63427243b53aeb9da907677797b6ed8b8bcaa40def1f381744->enter($__internal_f207a0d9e8dffa63427243b53aeb9da907677797b6ed8b8bcaa40def1f381744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9ec8d7cbbf01da0e46627b43ce09241377a39f16c5eb6b48c9fe2fce9a275c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec8d7cbbf01da0e46627b43ce09241377a39f16c5eb6b48c9fe2fce9a275c0e->enter($__internal_9ec8d7cbbf01da0e46627b43ce09241377a39f16c5eb6b48c9fe2fce9a275c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f207a0d9e8dffa63427243b53aeb9da907677797b6ed8b8bcaa40def1f381744->leave($__internal_f207a0d9e8dffa63427243b53aeb9da907677797b6ed8b8bcaa40def1f381744_prof);

        
        $__internal_9ec8d7cbbf01da0e46627b43ce09241377a39f16c5eb6b48c9fe2fce9a275c0e->leave($__internal_9ec8d7cbbf01da0e46627b43ce09241377a39f16c5eb6b48c9fe2fce9a275c0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

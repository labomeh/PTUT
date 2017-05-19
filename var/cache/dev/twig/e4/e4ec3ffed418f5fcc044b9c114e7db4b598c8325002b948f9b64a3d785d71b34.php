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
        $__internal_905518cb83588f479c22841db0735ad3a8586b48930c6961e75e1fdf9bcdac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905518cb83588f479c22841db0735ad3a8586b48930c6961e75e1fdf9bcdac6e->enter($__internal_905518cb83588f479c22841db0735ad3a8586b48930c6961e75e1fdf9bcdac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_030d0b96dc430ee4177d780c34ee4939981a38904cb8a489f1fe438caad497f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030d0b96dc430ee4177d780c34ee4939981a38904cb8a489f1fe438caad497f5->enter($__internal_030d0b96dc430ee4177d780c34ee4939981a38904cb8a489f1fe438caad497f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_905518cb83588f479c22841db0735ad3a8586b48930c6961e75e1fdf9bcdac6e->leave($__internal_905518cb83588f479c22841db0735ad3a8586b48930c6961e75e1fdf9bcdac6e_prof);

        
        $__internal_030d0b96dc430ee4177d780c34ee4939981a38904cb8a489f1fe438caad497f5->leave($__internal_030d0b96dc430ee4177d780c34ee4939981a38904cb8a489f1fe438caad497f5_prof);

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

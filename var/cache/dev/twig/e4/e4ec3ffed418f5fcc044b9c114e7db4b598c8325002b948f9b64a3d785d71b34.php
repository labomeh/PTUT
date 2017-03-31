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
        $__internal_b3ddd973da390dabf2d8a53e032035262d0dffb224f269e771e4667e4aa1decd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ddd973da390dabf2d8a53e032035262d0dffb224f269e771e4667e4aa1decd->enter($__internal_b3ddd973da390dabf2d8a53e032035262d0dffb224f269e771e4667e4aa1decd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_37aeeae3fd9e9716c8e9c679def1768b4fc28a2d6207cb3b4f2c126d6e7d7a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37aeeae3fd9e9716c8e9c679def1768b4fc28a2d6207cb3b4f2c126d6e7d7a77->enter($__internal_37aeeae3fd9e9716c8e9c679def1768b4fc28a2d6207cb3b4f2c126d6e7d7a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b3ddd973da390dabf2d8a53e032035262d0dffb224f269e771e4667e4aa1decd->leave($__internal_b3ddd973da390dabf2d8a53e032035262d0dffb224f269e771e4667e4aa1decd_prof);

        
        $__internal_37aeeae3fd9e9716c8e9c679def1768b4fc28a2d6207cb3b4f2c126d6e7d7a77->leave($__internal_37aeeae3fd9e9716c8e9c679def1768b4fc28a2d6207cb3b4f2c126d6e7d7a77_prof);

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

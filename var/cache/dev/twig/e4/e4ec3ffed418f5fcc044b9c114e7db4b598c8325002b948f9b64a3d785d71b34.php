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
        $__internal_8ef028de0bf9eb7a04f268bbd0b91ff61c4f6fedfa3b76bd43a1c24d4966b1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef028de0bf9eb7a04f268bbd0b91ff61c4f6fedfa3b76bd43a1c24d4966b1ef->enter($__internal_8ef028de0bf9eb7a04f268bbd0b91ff61c4f6fedfa3b76bd43a1c24d4966b1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4c07ff0671cc6bc86442c1a34ba4511a7161c7ac5b94ce5ecf91843eb0eabc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c07ff0671cc6bc86442c1a34ba4511a7161c7ac5b94ce5ecf91843eb0eabc71->enter($__internal_4c07ff0671cc6bc86442c1a34ba4511a7161c7ac5b94ce5ecf91843eb0eabc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8ef028de0bf9eb7a04f268bbd0b91ff61c4f6fedfa3b76bd43a1c24d4966b1ef->leave($__internal_8ef028de0bf9eb7a04f268bbd0b91ff61c4f6fedfa3b76bd43a1c24d4966b1ef_prof);

        
        $__internal_4c07ff0671cc6bc86442c1a34ba4511a7161c7ac5b94ce5ecf91843eb0eabc71->leave($__internal_4c07ff0671cc6bc86442c1a34ba4511a7161c7ac5b94ce5ecf91843eb0eabc71_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

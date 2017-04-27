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
        $__internal_d1a5e34327b519f6964b4a113d0ca6aa0fc8002ca15edf67ec026b2e87c5dddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a5e34327b519f6964b4a113d0ca6aa0fc8002ca15edf67ec026b2e87c5dddf->enter($__internal_d1a5e34327b519f6964b4a113d0ca6aa0fc8002ca15edf67ec026b2e87c5dddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d3fc8c451ea1ddf572355a4c92a4570caac7ff3df80f5be07eada31999b3e744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fc8c451ea1ddf572355a4c92a4570caac7ff3df80f5be07eada31999b3e744->enter($__internal_d3fc8c451ea1ddf572355a4c92a4570caac7ff3df80f5be07eada31999b3e744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d1a5e34327b519f6964b4a113d0ca6aa0fc8002ca15edf67ec026b2e87c5dddf->leave($__internal_d1a5e34327b519f6964b4a113d0ca6aa0fc8002ca15edf67ec026b2e87c5dddf_prof);

        
        $__internal_d3fc8c451ea1ddf572355a4c92a4570caac7ff3df80f5be07eada31999b3e744->leave($__internal_d3fc8c451ea1ddf572355a4c92a4570caac7ff3df80f5be07eada31999b3e744_prof);

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

<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e54ba81b6c17b07d0428a0daedfd35ab467be4baff09be38a39e83aa2f7d3736 extends Twig_Template
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
        $__internal_39e9b0e4815c12bb6d6083f739102f371fac5b822b9a8cbe322113922e0bf19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e9b0e4815c12bb6d6083f739102f371fac5b822b9a8cbe322113922e0bf19e->enter($__internal_39e9b0e4815c12bb6d6083f739102f371fac5b822b9a8cbe322113922e0bf19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8de6bf070869c66ae4b56d57ebb2c1e21d361480bc2b9fdeed4ee7330070d21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de6bf070869c66ae4b56d57ebb2c1e21d361480bc2b9fdeed4ee7330070d21a->enter($__internal_8de6bf070869c66ae4b56d57ebb2c1e21d361480bc2b9fdeed4ee7330070d21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_39e9b0e4815c12bb6d6083f739102f371fac5b822b9a8cbe322113922e0bf19e->leave($__internal_39e9b0e4815c12bb6d6083f739102f371fac5b822b9a8cbe322113922e0bf19e_prof);

        
        $__internal_8de6bf070869c66ae4b56d57ebb2c1e21d361480bc2b9fdeed4ee7330070d21a->leave($__internal_8de6bf070869c66ae4b56d57ebb2c1e21d361480bc2b9fdeed4ee7330070d21a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

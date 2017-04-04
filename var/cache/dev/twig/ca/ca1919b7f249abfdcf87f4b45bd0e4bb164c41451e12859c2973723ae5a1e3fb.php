<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_245737abc667b6eecd30fd82cb34cb59edd674c76fa74fe52bed2f389c2a0814 extends Twig_Template
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
        $__internal_b286fcc6f65697af5ad3b376d3f44c47aa2eb3a86e3f88ef67d78fd87d4dbd77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b286fcc6f65697af5ad3b376d3f44c47aa2eb3a86e3f88ef67d78fd87d4dbd77->enter($__internal_b286fcc6f65697af5ad3b376d3f44c47aa2eb3a86e3f88ef67d78fd87d4dbd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_52d5d6b1a7006faa1990941b3c34a62d4588f05f835815147ac8f56c2a724289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d5d6b1a7006faa1990941b3c34a62d4588f05f835815147ac8f56c2a724289->enter($__internal_52d5d6b1a7006faa1990941b3c34a62d4588f05f835815147ac8f56c2a724289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b286fcc6f65697af5ad3b376d3f44c47aa2eb3a86e3f88ef67d78fd87d4dbd77->leave($__internal_b286fcc6f65697af5ad3b376d3f44c47aa2eb3a86e3f88ef67d78fd87d4dbd77_prof);

        
        $__internal_52d5d6b1a7006faa1990941b3c34a62d4588f05f835815147ac8f56c2a724289->leave($__internal_52d5d6b1a7006faa1990941b3c34a62d4588f05f835815147ac8f56c2a724289_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

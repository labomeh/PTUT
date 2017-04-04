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
        $__internal_8678b0109da5060007a2013b24119cc58ea1997e7f913bc4df24917e29bf6dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8678b0109da5060007a2013b24119cc58ea1997e7f913bc4df24917e29bf6dd4->enter($__internal_8678b0109da5060007a2013b24119cc58ea1997e7f913bc4df24917e29bf6dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c58ebed0b85a5a1cf35c7453c200833a8a6d1c18e30131ac355d32d9027af26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58ebed0b85a5a1cf35c7453c200833a8a6d1c18e30131ac355d32d9027af26a->enter($__internal_c58ebed0b85a5a1cf35c7453c200833a8a6d1c18e30131ac355d32d9027af26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8678b0109da5060007a2013b24119cc58ea1997e7f913bc4df24917e29bf6dd4->leave($__internal_8678b0109da5060007a2013b24119cc58ea1997e7f913bc4df24917e29bf6dd4_prof);

        
        $__internal_c58ebed0b85a5a1cf35c7453c200833a8a6d1c18e30131ac355d32d9027af26a->leave($__internal_c58ebed0b85a5a1cf35c7453c200833a8a6d1c18e30131ac355d32d9027af26a_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

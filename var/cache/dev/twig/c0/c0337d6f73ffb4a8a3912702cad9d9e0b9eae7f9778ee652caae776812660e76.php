<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_78f67a704d2b325701142713a2600289ce56704a3e17e9ef90af7e128d948e90 extends Twig_Template
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
        $__internal_210b97af757977576b79bebc04eb26385db6c356c85cd5c1d7a7949e080ce0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210b97af757977576b79bebc04eb26385db6c356c85cd5c1d7a7949e080ce0c7->enter($__internal_210b97af757977576b79bebc04eb26385db6c356c85cd5c1d7a7949e080ce0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ad8574c189c96160e49265131c6ded6ea629ccb15d0b2972d78c23452a2a0132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8574c189c96160e49265131c6ded6ea629ccb15d0b2972d78c23452a2a0132->enter($__internal_ad8574c189c96160e49265131c6ded6ea629ccb15d0b2972d78c23452a2a0132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_210b97af757977576b79bebc04eb26385db6c356c85cd5c1d7a7949e080ce0c7->leave($__internal_210b97af757977576b79bebc04eb26385db6c356c85cd5c1d7a7949e080ce0c7_prof);

        
        $__internal_ad8574c189c96160e49265131c6ded6ea629ccb15d0b2972d78c23452a2a0132->leave($__internal_ad8574c189c96160e49265131c6ded6ea629ccb15d0b2972d78c23452a2a0132_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

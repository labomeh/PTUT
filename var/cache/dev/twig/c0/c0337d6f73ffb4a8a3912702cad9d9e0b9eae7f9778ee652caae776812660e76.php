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
        $__internal_ea694a48a277a1c4863f19388c11c8eb454e7728b7ea4731b18dace56c272db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea694a48a277a1c4863f19388c11c8eb454e7728b7ea4731b18dace56c272db0->enter($__internal_ea694a48a277a1c4863f19388c11c8eb454e7728b7ea4731b18dace56c272db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_bed50d5ba2f991488b59eeb6e496fbb51e48023604645c57f4c136bd3633216b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed50d5ba2f991488b59eeb6e496fbb51e48023604645c57f4c136bd3633216b->enter($__internal_bed50d5ba2f991488b59eeb6e496fbb51e48023604645c57f4c136bd3633216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_ea694a48a277a1c4863f19388c11c8eb454e7728b7ea4731b18dace56c272db0->leave($__internal_ea694a48a277a1c4863f19388c11c8eb454e7728b7ea4731b18dace56c272db0_prof);

        
        $__internal_bed50d5ba2f991488b59eeb6e496fbb51e48023604645c57f4c136bd3633216b->leave($__internal_bed50d5ba2f991488b59eeb6e496fbb51e48023604645c57f4c136bd3633216b_prof);

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

<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c45e061129a3653ab749d926862102f15aee4f46db2177fe640462604ef6a47 extends Twig_Template
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
        $__internal_32c6e10ed60b10103854708ab88584937178a5f39faea06018bf452bbeb19fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c6e10ed60b10103854708ab88584937178a5f39faea06018bf452bbeb19fb9->enter($__internal_32c6e10ed60b10103854708ab88584937178a5f39faea06018bf452bbeb19fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3058d7952471bba4783177e41d0a3424af15dacb7b3f7a0d3507459d63e92e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3058d7952471bba4783177e41d0a3424af15dacb7b3f7a0d3507459d63e92e4b->enter($__internal_3058d7952471bba4783177e41d0a3424af15dacb7b3f7a0d3507459d63e92e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_32c6e10ed60b10103854708ab88584937178a5f39faea06018bf452bbeb19fb9->leave($__internal_32c6e10ed60b10103854708ab88584937178a5f39faea06018bf452bbeb19fb9_prof);

        
        $__internal_3058d7952471bba4783177e41d0a3424af15dacb7b3f7a0d3507459d63e92e4b->leave($__internal_3058d7952471bba4783177e41d0a3424af15dacb7b3f7a0d3507459d63e92e4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

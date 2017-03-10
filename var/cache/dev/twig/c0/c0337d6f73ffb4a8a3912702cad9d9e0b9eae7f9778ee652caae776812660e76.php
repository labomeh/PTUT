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
        $__internal_2f5fe500cb9bbb2b75f35e3d63d53bd39f501b3bb7950f4a86c37e4683efb107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5fe500cb9bbb2b75f35e3d63d53bd39f501b3bb7950f4a86c37e4683efb107->enter($__internal_2f5fe500cb9bbb2b75f35e3d63d53bd39f501b3bb7950f4a86c37e4683efb107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_492e379b334e2a0128442b76918ce7e36747f34038f7dc4821e81d437684e1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492e379b334e2a0128442b76918ce7e36747f34038f7dc4821e81d437684e1aa->enter($__internal_492e379b334e2a0128442b76918ce7e36747f34038f7dc4821e81d437684e1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2f5fe500cb9bbb2b75f35e3d63d53bd39f501b3bb7950f4a86c37e4683efb107->leave($__internal_2f5fe500cb9bbb2b75f35e3d63d53bd39f501b3bb7950f4a86c37e4683efb107_prof);

        
        $__internal_492e379b334e2a0128442b76918ce7e36747f34038f7dc4821e81d437684e1aa->leave($__internal_492e379b334e2a0128442b76918ce7e36747f34038f7dc4821e81d437684e1aa_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

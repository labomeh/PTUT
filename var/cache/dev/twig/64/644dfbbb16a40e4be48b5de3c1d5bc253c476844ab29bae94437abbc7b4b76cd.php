<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9308a8ccba52188e80c554863505af1a2dee7de0f104544430be61cf936a5a28 extends Twig_Template
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
        $__internal_6fae342e45efa93a47eeee71b094e81a3d506e50d7bc1fe197bc670ef3ffcbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fae342e45efa93a47eeee71b094e81a3d506e50d7bc1fe197bc670ef3ffcbd3->enter($__internal_6fae342e45efa93a47eeee71b094e81a3d506e50d7bc1fe197bc670ef3ffcbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_48b99ffc9aca68a9ed87620f47dc9d3ce7c9d3d38d0e950cc2f7c475cb17c92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b99ffc9aca68a9ed87620f47dc9d3ce7c9d3d38d0e950cc2f7c475cb17c92c->enter($__internal_48b99ffc9aca68a9ed87620f47dc9d3ce7c9d3d38d0e950cc2f7c475cb17c92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6fae342e45efa93a47eeee71b094e81a3d506e50d7bc1fe197bc670ef3ffcbd3->leave($__internal_6fae342e45efa93a47eeee71b094e81a3d506e50d7bc1fe197bc670ef3ffcbd3_prof);

        
        $__internal_48b99ffc9aca68a9ed87620f47dc9d3ce7c9d3d38d0e950cc2f7c475cb17c92c->leave($__internal_48b99ffc9aca68a9ed87620f47dc9d3ce7c9d3d38d0e950cc2f7c475cb17c92c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

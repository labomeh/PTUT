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
        $__internal_8b06afdaf444b05a57ee7ad1ec5fb9fb04188962e07472ef46d3f8d912bb55fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b06afdaf444b05a57ee7ad1ec5fb9fb04188962e07472ef46d3f8d912bb55fb->enter($__internal_8b06afdaf444b05a57ee7ad1ec5fb9fb04188962e07472ef46d3f8d912bb55fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6b7cce788be9da0260c36a0912b79d5f802a0c6d793080f6c7febe6334b8ba6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7cce788be9da0260c36a0912b79d5f802a0c6d793080f6c7febe6334b8ba6a->enter($__internal_6b7cce788be9da0260c36a0912b79d5f802a0c6d793080f6c7febe6334b8ba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8b06afdaf444b05a57ee7ad1ec5fb9fb04188962e07472ef46d3f8d912bb55fb->leave($__internal_8b06afdaf444b05a57ee7ad1ec5fb9fb04188962e07472ef46d3f8d912bb55fb_prof);

        
        $__internal_6b7cce788be9da0260c36a0912b79d5f802a0c6d793080f6c7febe6334b8ba6a->leave($__internal_6b7cce788be9da0260c36a0912b79d5f802a0c6d793080f6c7febe6334b8ba6a_prof);

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

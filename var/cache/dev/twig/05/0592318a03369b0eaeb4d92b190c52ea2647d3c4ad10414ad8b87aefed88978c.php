<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_27dfc0357f4a86ef8dd9df905b055f309b691c61cae3b23e342a366881a19fbb extends Twig_Template
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
        $__internal_dd5fcfc4ef2b881fcf3f16243ec75a613dfa404255d3df92ecc6c357dd5a7849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5fcfc4ef2b881fcf3f16243ec75a613dfa404255d3df92ecc6c357dd5a7849->enter($__internal_dd5fcfc4ef2b881fcf3f16243ec75a613dfa404255d3df92ecc6c357dd5a7849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3ea905fd7627a22cdfe9833fbd08e4564c8b46a4acaa2ae401f711a04ee7ad37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea905fd7627a22cdfe9833fbd08e4564c8b46a4acaa2ae401f711a04ee7ad37->enter($__internal_3ea905fd7627a22cdfe9833fbd08e4564c8b46a4acaa2ae401f711a04ee7ad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_dd5fcfc4ef2b881fcf3f16243ec75a613dfa404255d3df92ecc6c357dd5a7849->leave($__internal_dd5fcfc4ef2b881fcf3f16243ec75a613dfa404255d3df92ecc6c357dd5a7849_prof);

        
        $__internal_3ea905fd7627a22cdfe9833fbd08e4564c8b46a4acaa2ae401f711a04ee7ad37->leave($__internal_3ea905fd7627a22cdfe9833fbd08e4564c8b46a4acaa2ae401f711a04ee7ad37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

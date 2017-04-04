<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0e6c94996293795a39cf37d4f4f9f7cd6f0f4480a01afcf77fa000d801671c33 extends Twig_Template
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
        $__internal_bf805b976f917ae498a82b5986afb68b3fcc378c263df0b6a4d8654332321dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf805b976f917ae498a82b5986afb68b3fcc378c263df0b6a4d8654332321dc0->enter($__internal_bf805b976f917ae498a82b5986afb68b3fcc378c263df0b6a4d8654332321dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_193d63e262650d3333eb45990b59368afa9cdf362b795530f35ce2c932884b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193d63e262650d3333eb45990b59368afa9cdf362b795530f35ce2c932884b55->enter($__internal_193d63e262650d3333eb45990b59368afa9cdf362b795530f35ce2c932884b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bf805b976f917ae498a82b5986afb68b3fcc378c263df0b6a4d8654332321dc0->leave($__internal_bf805b976f917ae498a82b5986afb68b3fcc378c263df0b6a4d8654332321dc0_prof);

        
        $__internal_193d63e262650d3333eb45990b59368afa9cdf362b795530f35ce2c932884b55->leave($__internal_193d63e262650d3333eb45990b59368afa9cdf362b795530f35ce2c932884b55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

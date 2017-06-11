<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2e89820d082dacb7436a4f5257153955b82787f5da4deb67f71b751e6bae902c extends Twig_Template
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
        $__internal_08b0948c3c54fed2a18863becd8f24e02d78d7673b507e895b234c87097db1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b0948c3c54fed2a18863becd8f24e02d78d7673b507e895b234c87097db1ac->enter($__internal_08b0948c3c54fed2a18863becd8f24e02d78d7673b507e895b234c87097db1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c65c526c468aec36b0955daa6e2765df34b5318a46e59499df9e3a1c6ee2b426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65c526c468aec36b0955daa6e2765df34b5318a46e59499df9e3a1c6ee2b426->enter($__internal_c65c526c468aec36b0955daa6e2765df34b5318a46e59499df9e3a1c6ee2b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_08b0948c3c54fed2a18863becd8f24e02d78d7673b507e895b234c87097db1ac->leave($__internal_08b0948c3c54fed2a18863becd8f24e02d78d7673b507e895b234c87097db1ac_prof);

        
        $__internal_c65c526c468aec36b0955daa6e2765df34b5318a46e59499df9e3a1c6ee2b426->leave($__internal_c65c526c468aec36b0955daa6e2765df34b5318a46e59499df9e3a1c6ee2b426_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

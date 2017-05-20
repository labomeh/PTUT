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
        $__internal_bfeda45c390950f8969c5e2e9594ab22dc3c01b929a9feeb5340cb10acb8ee97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfeda45c390950f8969c5e2e9594ab22dc3c01b929a9feeb5340cb10acb8ee97->enter($__internal_bfeda45c390950f8969c5e2e9594ab22dc3c01b929a9feeb5340cb10acb8ee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3454abd3a6a4e2c91c4065bf75e692911c30991f75d2a9087c21e7a6c5d42f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3454abd3a6a4e2c91c4065bf75e692911c30991f75d2a9087c21e7a6c5d42f54->enter($__internal_3454abd3a6a4e2c91c4065bf75e692911c30991f75d2a9087c21e7a6c5d42f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bfeda45c390950f8969c5e2e9594ab22dc3c01b929a9feeb5340cb10acb8ee97->leave($__internal_bfeda45c390950f8969c5e2e9594ab22dc3c01b929a9feeb5340cb10acb8ee97_prof);

        
        $__internal_3454abd3a6a4e2c91c4065bf75e692911c30991f75d2a9087c21e7a6c5d42f54->leave($__internal_3454abd3a6a4e2c91c4065bf75e692911c30991f75d2a9087c21e7a6c5d42f54_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

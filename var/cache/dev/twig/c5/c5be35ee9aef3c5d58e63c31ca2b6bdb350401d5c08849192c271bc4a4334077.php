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
        $__internal_9c1e80987d36c40c2a5197c89b3133bda82b4d3bc396af7a10bdf0c2d912cc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1e80987d36c40c2a5197c89b3133bda82b4d3bc396af7a10bdf0c2d912cc20->enter($__internal_9c1e80987d36c40c2a5197c89b3133bda82b4d3bc396af7a10bdf0c2d912cc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5487243c688d71aa2de5ff2d9826b91e020235a469824a4465474cded5acaefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5487243c688d71aa2de5ff2d9826b91e020235a469824a4465474cded5acaefe->enter($__internal_5487243c688d71aa2de5ff2d9826b91e020235a469824a4465474cded5acaefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9c1e80987d36c40c2a5197c89b3133bda82b4d3bc396af7a10bdf0c2d912cc20->leave($__internal_9c1e80987d36c40c2a5197c89b3133bda82b4d3bc396af7a10bdf0c2d912cc20_prof);

        
        $__internal_5487243c688d71aa2de5ff2d9826b91e020235a469824a4465474cded5acaefe->leave($__internal_5487243c688d71aa2de5ff2d9826b91e020235a469824a4465474cded5acaefe_prof);

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

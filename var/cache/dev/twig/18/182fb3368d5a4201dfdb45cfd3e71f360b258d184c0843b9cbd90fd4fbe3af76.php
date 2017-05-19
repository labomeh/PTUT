<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e83c2a9079f6ec12fe68de301d7bf82a50bd4bf40ecd35514fd55bbb7f03b097 extends Twig_Template
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
        $__internal_4e6f0c5393a7e6ef3a254b90d6dbb5220799ec5c464a495d9324ad999e1b691b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6f0c5393a7e6ef3a254b90d6dbb5220799ec5c464a495d9324ad999e1b691b->enter($__internal_4e6f0c5393a7e6ef3a254b90d6dbb5220799ec5c464a495d9324ad999e1b691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_746cc748f9091814debb50d63015104a457d37647794ea5f3f671175898b002d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746cc748f9091814debb50d63015104a457d37647794ea5f3f671175898b002d->enter($__internal_746cc748f9091814debb50d63015104a457d37647794ea5f3f671175898b002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4e6f0c5393a7e6ef3a254b90d6dbb5220799ec5c464a495d9324ad999e1b691b->leave($__internal_4e6f0c5393a7e6ef3a254b90d6dbb5220799ec5c464a495d9324ad999e1b691b_prof);

        
        $__internal_746cc748f9091814debb50d63015104a457d37647794ea5f3f671175898b002d->leave($__internal_746cc748f9091814debb50d63015104a457d37647794ea5f3f671175898b002d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}

<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d1620b0add2ff514f6b7199facb9af3ee9dd63c3d79346b2cbda402fa4054c8a extends Twig_Template
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
        $__internal_1a7d44305c93b5cb91469468ce4a9fec819aff1567c103dcebc20c4763d166c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7d44305c93b5cb91469468ce4a9fec819aff1567c103dcebc20c4763d166c3->enter($__internal_1a7d44305c93b5cb91469468ce4a9fec819aff1567c103dcebc20c4763d166c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5e939b79d4fee8600dc9f131d9c08b871239e00601395da4dbb8e741ff75d746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e939b79d4fee8600dc9f131d9c08b871239e00601395da4dbb8e741ff75d746->enter($__internal_5e939b79d4fee8600dc9f131d9c08b871239e00601395da4dbb8e741ff75d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1a7d44305c93b5cb91469468ce4a9fec819aff1567c103dcebc20c4763d166c3->leave($__internal_1a7d44305c93b5cb91469468ce4a9fec819aff1567c103dcebc20c4763d166c3_prof);

        
        $__internal_5e939b79d4fee8600dc9f131d9c08b871239e00601395da4dbb8e741ff75d746->leave($__internal_5e939b79d4fee8600dc9f131d9c08b871239e00601395da4dbb8e741ff75d746_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

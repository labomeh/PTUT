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
        $__internal_847a9c36f00dcd06d16596cce442ce225632d074f66163b4fc199f9b01a59b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847a9c36f00dcd06d16596cce442ce225632d074f66163b4fc199f9b01a59b49->enter($__internal_847a9c36f00dcd06d16596cce442ce225632d074f66163b4fc199f9b01a59b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a969c381285fb706e9696ce8e3aafd116a3291838443d5b67fff086d929b72e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a969c381285fb706e9696ce8e3aafd116a3291838443d5b67fff086d929b72e4->enter($__internal_a969c381285fb706e9696ce8e3aafd116a3291838443d5b67fff086d929b72e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_847a9c36f00dcd06d16596cce442ce225632d074f66163b4fc199f9b01a59b49->leave($__internal_847a9c36f00dcd06d16596cce442ce225632d074f66163b4fc199f9b01a59b49_prof);

        
        $__internal_a969c381285fb706e9696ce8e3aafd116a3291838443d5b67fff086d929b72e4->leave($__internal_a969c381285fb706e9696ce8e3aafd116a3291838443d5b67fff086d929b72e4_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

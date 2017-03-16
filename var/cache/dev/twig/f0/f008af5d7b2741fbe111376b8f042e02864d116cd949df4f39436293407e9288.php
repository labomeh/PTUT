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
        $__internal_909842bc5ca0977c8709bd74590c2a296c62e862022ec7f267a89ef4ffb3d61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909842bc5ca0977c8709bd74590c2a296c62e862022ec7f267a89ef4ffb3d61b->enter($__internal_909842bc5ca0977c8709bd74590c2a296c62e862022ec7f267a89ef4ffb3d61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d98f85fd18a9ad2d7a5415348341966f2c368c5c7a38777e1944678c0080f37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98f85fd18a9ad2d7a5415348341966f2c368c5c7a38777e1944678c0080f37e->enter($__internal_d98f85fd18a9ad2d7a5415348341966f2c368c5c7a38777e1944678c0080f37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_909842bc5ca0977c8709bd74590c2a296c62e862022ec7f267a89ef4ffb3d61b->leave($__internal_909842bc5ca0977c8709bd74590c2a296c62e862022ec7f267a89ef4ffb3d61b_prof);

        
        $__internal_d98f85fd18a9ad2d7a5415348341966f2c368c5c7a38777e1944678c0080f37e->leave($__internal_d98f85fd18a9ad2d7a5415348341966f2c368c5c7a38777e1944678c0080f37e_prof);

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

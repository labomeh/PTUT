<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a79f0d8985131b7fd6629c0b42a71c3246af87c6dd2461ca402b35cacff6d159 extends Twig_Template
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
        $__internal_9ef4818999bb9e9d32d90f0f28e0354530e0efdbc9cb902ef9b361fd60a831d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef4818999bb9e9d32d90f0f28e0354530e0efdbc9cb902ef9b361fd60a831d7->enter($__internal_9ef4818999bb9e9d32d90f0f28e0354530e0efdbc9cb902ef9b361fd60a831d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_3d1abefcc79b418868a79830ca6693757c1ecc104c7897d124de42f3fb256ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1abefcc79b418868a79830ca6693757c1ecc104c7897d124de42f3fb256ee2->enter($__internal_3d1abefcc79b418868a79830ca6693757c1ecc104c7897d124de42f3fb256ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9ef4818999bb9e9d32d90f0f28e0354530e0efdbc9cb902ef9b361fd60a831d7->leave($__internal_9ef4818999bb9e9d32d90f0f28e0354530e0efdbc9cb902ef9b361fd60a831d7_prof);

        
        $__internal_3d1abefcc79b418868a79830ca6693757c1ecc104c7897d124de42f3fb256ee2->leave($__internal_3d1abefcc79b418868a79830ca6693757c1ecc104c7897d124de42f3fb256ee2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

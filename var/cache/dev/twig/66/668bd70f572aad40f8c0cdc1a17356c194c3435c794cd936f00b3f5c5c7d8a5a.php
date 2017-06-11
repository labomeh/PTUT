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
        $__internal_5a185549a00bd1b48866abafef182f9d822b4598f77a50cf0c3792e335a1ca0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a185549a00bd1b48866abafef182f9d822b4598f77a50cf0c3792e335a1ca0c->enter($__internal_5a185549a00bd1b48866abafef182f9d822b4598f77a50cf0c3792e335a1ca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8b82685dd7ecd92ddc86204ccef1fa60236cf5870cd7cf326a17936e277774bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b82685dd7ecd92ddc86204ccef1fa60236cf5870cd7cf326a17936e277774bc->enter($__internal_8b82685dd7ecd92ddc86204ccef1fa60236cf5870cd7cf326a17936e277774bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5a185549a00bd1b48866abafef182f9d822b4598f77a50cf0c3792e335a1ca0c->leave($__internal_5a185549a00bd1b48866abafef182f9d822b4598f77a50cf0c3792e335a1ca0c_prof);

        
        $__internal_8b82685dd7ecd92ddc86204ccef1fa60236cf5870cd7cf326a17936e277774bc->leave($__internal_8b82685dd7ecd92ddc86204ccef1fa60236cf5870cd7cf326a17936e277774bc_prof);

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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

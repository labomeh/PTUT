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
        $__internal_41ae834ef63a09fe367bd164b2353ae25d9e3caffd94e33ee92dd18a1ef36ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ae834ef63a09fe367bd164b2353ae25d9e3caffd94e33ee92dd18a1ef36ee6->enter($__internal_41ae834ef63a09fe367bd164b2353ae25d9e3caffd94e33ee92dd18a1ef36ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_244551fcef2d8a868462f0700d79ac7b05e8cc92f43c94f0e8775d155f914f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244551fcef2d8a868462f0700d79ac7b05e8cc92f43c94f0e8775d155f914f4b->enter($__internal_244551fcef2d8a868462f0700d79ac7b05e8cc92f43c94f0e8775d155f914f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_41ae834ef63a09fe367bd164b2353ae25d9e3caffd94e33ee92dd18a1ef36ee6->leave($__internal_41ae834ef63a09fe367bd164b2353ae25d9e3caffd94e33ee92dd18a1ef36ee6_prof);

        
        $__internal_244551fcef2d8a868462f0700d79ac7b05e8cc92f43c94f0e8775d155f914f4b->leave($__internal_244551fcef2d8a868462f0700d79ac7b05e8cc92f43c94f0e8775d155f914f4b_prof);

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

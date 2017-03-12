<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0848ea48b99295e47a9f6c24c38a7898512be2ad0ddcdf3b0d827acc7c55d453 extends Twig_Template
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
        $__internal_e14bc616dc6add01b0449740d54a141e6e928cad77f473f33820ad55b6d5f8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14bc616dc6add01b0449740d54a141e6e928cad77f473f33820ad55b6d5f8d9->enter($__internal_e14bc616dc6add01b0449740d54a141e6e928cad77f473f33820ad55b6d5f8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a9c88566a79eaaf5df697d8a2f75acb2c9bc6afac67d95c85c2929c099732fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c88566a79eaaf5df697d8a2f75acb2c9bc6afac67d95c85c2929c099732fa6->enter($__internal_a9c88566a79eaaf5df697d8a2f75acb2c9bc6afac67d95c85c2929c099732fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e14bc616dc6add01b0449740d54a141e6e928cad77f473f33820ad55b6d5f8d9->leave($__internal_e14bc616dc6add01b0449740d54a141e6e928cad77f473f33820ad55b6d5f8d9_prof);

        
        $__internal_a9c88566a79eaaf5df697d8a2f75acb2c9bc6afac67d95c85c2929c099732fa6->leave($__internal_a9c88566a79eaaf5df697d8a2f75acb2c9bc6afac67d95c85c2929c099732fa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

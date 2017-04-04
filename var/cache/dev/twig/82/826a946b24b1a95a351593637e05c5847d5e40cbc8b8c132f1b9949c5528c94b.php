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
        $__internal_b12a53a7c039fec512b6f2e37ccdbd3089a25d7c42d712d937b344f971a0ca5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12a53a7c039fec512b6f2e37ccdbd3089a25d7c42d712d937b344f971a0ca5f->enter($__internal_b12a53a7c039fec512b6f2e37ccdbd3089a25d7c42d712d937b344f971a0ca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d3a2700f282af3b94ade647b58cb7b42c23557db8c5ecb16b857cfe0c6354cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a2700f282af3b94ade647b58cb7b42c23557db8c5ecb16b857cfe0c6354cb6->enter($__internal_d3a2700f282af3b94ade647b58cb7b42c23557db8c5ecb16b857cfe0c6354cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_b12a53a7c039fec512b6f2e37ccdbd3089a25d7c42d712d937b344f971a0ca5f->leave($__internal_b12a53a7c039fec512b6f2e37ccdbd3089a25d7c42d712d937b344f971a0ca5f_prof);

        
        $__internal_d3a2700f282af3b94ade647b58cb7b42c23557db8c5ecb16b857cfe0c6354cb6->leave($__internal_d3a2700f282af3b94ade647b58cb7b42c23557db8c5ecb16b857cfe0c6354cb6_prof);

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

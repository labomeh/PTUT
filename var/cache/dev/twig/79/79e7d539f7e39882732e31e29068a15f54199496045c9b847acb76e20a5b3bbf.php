<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ab24f2235153d8586341136ecfa4c40c822c82cb45fd13caabeda3bf0ce320ac extends Twig_Template
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
        $__internal_f44ceaae291144ba9bd4f2f64d8fe3603a072b03bc273a7f5e7945e294682480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44ceaae291144ba9bd4f2f64d8fe3603a072b03bc273a7f5e7945e294682480->enter($__internal_f44ceaae291144ba9bd4f2f64d8fe3603a072b03bc273a7f5e7945e294682480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_d71f62d8f3fe98c6ec8fdacd6a9a44d4060f79bda7e11784326c2de045e9cf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71f62d8f3fe98c6ec8fdacd6a9a44d4060f79bda7e11784326c2de045e9cf00->enter($__internal_d71f62d8f3fe98c6ec8fdacd6a9a44d4060f79bda7e11784326c2de045e9cf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f44ceaae291144ba9bd4f2f64d8fe3603a072b03bc273a7f5e7945e294682480->leave($__internal_f44ceaae291144ba9bd4f2f64d8fe3603a072b03bc273a7f5e7945e294682480_prof);

        
        $__internal_d71f62d8f3fe98c6ec8fdacd6a9a44d4060f79bda7e11784326c2de045e9cf00->leave($__internal_d71f62d8f3fe98c6ec8fdacd6a9a44d4060f79bda7e11784326c2de045e9cf00_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

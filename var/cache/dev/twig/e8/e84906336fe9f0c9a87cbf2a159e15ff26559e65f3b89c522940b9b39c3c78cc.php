<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e54ba81b6c17b07d0428a0daedfd35ab467be4baff09be38a39e83aa2f7d3736 extends Twig_Template
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
        $__internal_3dbd0987c7901d3d101ea5f05a7079a015c7e286e79260f17b325960d4c316d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbd0987c7901d3d101ea5f05a7079a015c7e286e79260f17b325960d4c316d9->enter($__internal_3dbd0987c7901d3d101ea5f05a7079a015c7e286e79260f17b325960d4c316d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_bed1675ea96e05e0ae9abe12372b8000ec902272e6798440b1fb938cb2b4fdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed1675ea96e05e0ae9abe12372b8000ec902272e6798440b1fb938cb2b4fdcf->enter($__internal_bed1675ea96e05e0ae9abe12372b8000ec902272e6798440b1fb938cb2b4fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3dbd0987c7901d3d101ea5f05a7079a015c7e286e79260f17b325960d4c316d9->leave($__internal_3dbd0987c7901d3d101ea5f05a7079a015c7e286e79260f17b325960d4c316d9_prof);

        
        $__internal_bed1675ea96e05e0ae9abe12372b8000ec902272e6798440b1fb938cb2b4fdcf->leave($__internal_bed1675ea96e05e0ae9abe12372b8000ec902272e6798440b1fb938cb2b4fdcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

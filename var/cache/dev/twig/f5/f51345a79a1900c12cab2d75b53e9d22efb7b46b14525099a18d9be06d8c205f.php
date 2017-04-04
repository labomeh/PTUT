<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_821fe71f6b611b36aeb9f4dc4bf6e1b91656da10c9e3660b6a02316e0bcfca30 extends Twig_Template
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
        $__internal_fdb18fda48f1301f2ca4731f82d4c687ae73dbc45c275fbe109cb6285442eb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb18fda48f1301f2ca4731f82d4c687ae73dbc45c275fbe109cb6285442eb1d->enter($__internal_fdb18fda48f1301f2ca4731f82d4c687ae73dbc45c275fbe109cb6285442eb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_68b2902732086c2717105081edd3fcc3e07ad033bc73ec142267cd3ce433da87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b2902732086c2717105081edd3fcc3e07ad033bc73ec142267cd3ce433da87->enter($__internal_68b2902732086c2717105081edd3fcc3e07ad033bc73ec142267cd3ce433da87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_fdb18fda48f1301f2ca4731f82d4c687ae73dbc45c275fbe109cb6285442eb1d->leave($__internal_fdb18fda48f1301f2ca4731f82d4c687ae73dbc45c275fbe109cb6285442eb1d_prof);

        
        $__internal_68b2902732086c2717105081edd3fcc3e07ad033bc73ec142267cd3ce433da87->leave($__internal_68b2902732086c2717105081edd3fcc3e07ad033bc73ec142267cd3ce433da87_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

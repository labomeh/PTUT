<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cae05033129e673a718ad8a132b696a28ca361b1697bd930631eb9b76a21ddd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daa4a673b5e114747368e4b076a40d1b95069aeeeb2d70c07819ec80538d211c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa4a673b5e114747368e4b076a40d1b95069aeeeb2d70c07819ec80538d211c->enter($__internal_daa4a673b5e114747368e4b076a40d1b95069aeeeb2d70c07819ec80538d211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b4d5c24a6bf38de19134e28459ae99c7a9681a97e40cf81ee2a0966ee3ab5f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d5c24a6bf38de19134e28459ae99c7a9681a97e40cf81ee2a0966ee3ab5f47->enter($__internal_b4d5c24a6bf38de19134e28459ae99c7a9681a97e40cf81ee2a0966ee3ab5f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_daa4a673b5e114747368e4b076a40d1b95069aeeeb2d70c07819ec80538d211c->leave($__internal_daa4a673b5e114747368e4b076a40d1b95069aeeeb2d70c07819ec80538d211c_prof);

        
        $__internal_b4d5c24a6bf38de19134e28459ae99c7a9681a97e40cf81ee2a0966ee3ab5f47->leave($__internal_b4d5c24a6bf38de19134e28459ae99c7a9681a97e40cf81ee2a0966ee3ab5f47_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_78eab3fafadfbb9f86bdd28b46efce65fc05ae63b67915cd32717c78ed57a778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78eab3fafadfbb9f86bdd28b46efce65fc05ae63b67915cd32717c78ed57a778->enter($__internal_78eab3fafadfbb9f86bdd28b46efce65fc05ae63b67915cd32717c78ed57a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_375068fdffb8b6a6d7df1062465187f821004f3b0cdf9e1113e108a37ed4b8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375068fdffb8b6a6d7df1062465187f821004f3b0cdf9e1113e108a37ed4b8a2->enter($__internal_375068fdffb8b6a6d7df1062465187f821004f3b0cdf9e1113e108a37ed4b8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_375068fdffb8b6a6d7df1062465187f821004f3b0cdf9e1113e108a37ed4b8a2->leave($__internal_375068fdffb8b6a6d7df1062465187f821004f3b0cdf9e1113e108a37ed4b8a2_prof);

        
        $__internal_78eab3fafadfbb9f86bdd28b46efce65fc05ae63b67915cd32717c78ed57a778->leave($__internal_78eab3fafadfbb9f86bdd28b46efce65fc05ae63b67915cd32717c78ed57a778_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

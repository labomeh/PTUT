<?php

/* PTUTPlatformBundle:Platform:articles/article_1.html.twig */
class __TwigTemplate_453f6f9e16b5ce46788c8bdf33ce0eaf9c85b713e5b5c1da7137ae0889e2fc2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "PTUTPlatformBundle:Platform:articles/article_1.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7db145f2dfd6b3500f40c453bdb947a6838fc784a24c7a59639f3890552fb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db145f2dfd6b3500f40c453bdb947a6838fc784a24c7a59639f3890552fb09->enter($__internal_e7db145f2dfd6b3500f40c453bdb947a6838fc784a24c7a59639f3890552fb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:articles/article_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7db145f2dfd6b3500f40c453bdb947a6838fc784a24c7a59639f3890552fb09->leave($__internal_e7db145f2dfd6b3500f40c453bdb947a6838fc784a24c7a59639f3890552fb09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_895afaf5d1db0fd7790142e107151a653eedd9b72cb8c859de5a7477e195868b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895afaf5d1db0fd7790142e107151a653eedd9b72cb8c859de5a7477e195868b->enter($__internal_895afaf5d1db0fd7790142e107151a653eedd9b72cb8c859de5a7477e195868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>dqsdqsfqsfqs</h1>

<h2>sqdqsdq</h2>

<h3>sqdqsdsq</h3>

<p>sqdqsdsq</p>

";
        
        $__internal_895afaf5d1db0fd7790142e107151a653eedd9b72cb8c859de5a7477e195868b->leave($__internal_895afaf5d1db0fd7790142e107151a653eedd9b72cb8c859de5a7477e195868b_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:articles/article_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PTUTPlatformBundle:Platform:layout.html.twig\" %}

{% block body %}

<h1>dqsdqsfqsfqs</h1>

<h2>sqdqsdq</h2>

<h3>sqdqsdsq</h3>

<p>sqdqsdsq</p>

{%endblock%}", "PTUTPlatformBundle:Platform:articles/article_1.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/articles/article_1.html.twig");
    }
}

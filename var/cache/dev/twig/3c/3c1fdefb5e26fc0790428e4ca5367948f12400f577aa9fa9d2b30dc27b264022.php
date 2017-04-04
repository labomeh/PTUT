<?php

/* PTUTPlatformBundle:Platform/articles:article_1.html.twig */
class __TwigTemplate_c353f559081c0d6b74e1f57857f16a1bdbbe8c74f7556b6688376e3f9953b365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "PTUTPlatformBundle:Platform/articles:article_1.html.twig", 1);
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
        $__internal_7c19761084860cf5304b4db98e899621c4f017c6e02f8fe854bcc3e40e47d6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c19761084860cf5304b4db98e899621c4f017c6e02f8fe854bcc3e40e47d6a8->enter($__internal_7c19761084860cf5304b4db98e899621c4f017c6e02f8fe854bcc3e40e47d6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform/articles:article_1.html.twig"));

        $__internal_74db305bc08b51d2f74c5cafb606ba0d96e27ba9bad4f398cb1067d3d8771ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74db305bc08b51d2f74c5cafb606ba0d96e27ba9bad4f398cb1067d3d8771ac3->enter($__internal_74db305bc08b51d2f74c5cafb606ba0d96e27ba9bad4f398cb1067d3d8771ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform/articles:article_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c19761084860cf5304b4db98e899621c4f017c6e02f8fe854bcc3e40e47d6a8->leave($__internal_7c19761084860cf5304b4db98e899621c4f017c6e02f8fe854bcc3e40e47d6a8_prof);

        
        $__internal_74db305bc08b51d2f74c5cafb606ba0d96e27ba9bad4f398cb1067d3d8771ac3->leave($__internal_74db305bc08b51d2f74c5cafb606ba0d96e27ba9bad4f398cb1067d3d8771ac3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c2ba45ef34328ca089848f43162f3c4b1cd895cf40e558d8ba177b8a578fbeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ba45ef34328ca089848f43162f3c4b1cd895cf40e558d8ba177b8a578fbeb3->enter($__internal_c2ba45ef34328ca089848f43162f3c4b1cd895cf40e558d8ba177b8a578fbeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66b2011147f2fa76e51ea8fc6c0d7163beca3e0e1e604bf2003474cbffae03cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b2011147f2fa76e51ea8fc6c0d7163beca3e0e1e604bf2003474cbffae03cf->enter($__internal_66b2011147f2fa76e51ea8fc6c0d7163beca3e0e1e604bf2003474cbffae03cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "<div class=\"row\">
<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 container-fluid\">
<h1>TITRE DE L&#39;ARTICLE</h1>

<h1>&nbsp;</h1>

<h2>SOUS-TITRE 1</h2>

<h2>&nbsp;</h2>

<p>Texte de l&#39;article 1</p>

<h2>SOUS-TITRE 2</h2>

<h2>&nbsp;</h2>

<p>Texte de l&#39;article 2</p>
</div>
</div>
";
        
        $__internal_66b2011147f2fa76e51ea8fc6c0d7163beca3e0e1e604bf2003474cbffae03cf->leave($__internal_66b2011147f2fa76e51ea8fc6c0d7163beca3e0e1e604bf2003474cbffae03cf_prof);

        
        $__internal_c2ba45ef34328ca089848f43162f3c4b1cd895cf40e558d8ba177b8a578fbeb3->leave($__internal_c2ba45ef34328ca089848f43162f3c4b1cd895cf40e558d8ba177b8a578fbeb3_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform/articles:article_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PTUTPlatformBundle:Platform:layout.html.twig\" %}{% block body %}<div class=\"row\">
<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 container-fluid\">
<h1>TITRE DE L&#39;ARTICLE</h1>

<h1>&nbsp;</h1>

<h2>SOUS-TITRE 1</h2>

<h2>&nbsp;</h2>

<p>Texte de l&#39;article 1</p>

<h2>SOUS-TITRE 2</h2>

<h2>&nbsp;</h2>

<p>Texte de l&#39;article 2</p>
</div>
</div>
{% endblock %} ", "PTUTPlatformBundle:Platform/articles:article_1.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/articles/article_1.html.twig");
    }
}

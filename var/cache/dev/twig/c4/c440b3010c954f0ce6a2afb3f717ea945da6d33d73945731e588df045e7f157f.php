<?php

/* @PTUTPlatform/Platform/articles/article_1.html.twig */
class __TwigTemplate_f202993a9de9651401c0cde5e703f8d0c0f15e753cd50b2dfb229769bcf3ae72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "@PTUTPlatform/Platform/articles/article_1.html.twig", 1);
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
        $__internal_43309ae3f5e17a914f28f67203cb66a30f5691ae48ad2bebcf1a7b146b598dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43309ae3f5e17a914f28f67203cb66a30f5691ae48ad2bebcf1a7b146b598dc6->enter($__internal_43309ae3f5e17a914f28f67203cb66a30f5691ae48ad2bebcf1a7b146b598dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/articles/article_1.html.twig"));

        $__internal_5bcb74659810b3f44a0bd97bd1061407c17885ea71089587a22799811416ac26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcb74659810b3f44a0bd97bd1061407c17885ea71089587a22799811416ac26->enter($__internal_5bcb74659810b3f44a0bd97bd1061407c17885ea71089587a22799811416ac26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/articles/article_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43309ae3f5e17a914f28f67203cb66a30f5691ae48ad2bebcf1a7b146b598dc6->leave($__internal_43309ae3f5e17a914f28f67203cb66a30f5691ae48ad2bebcf1a7b146b598dc6_prof);

        
        $__internal_5bcb74659810b3f44a0bd97bd1061407c17885ea71089587a22799811416ac26->leave($__internal_5bcb74659810b3f44a0bd97bd1061407c17885ea71089587a22799811416ac26_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7da6ce0bd0fc342f444cc846ce2f696681737bef77bf90e6ac9bfe3a3dccb55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da6ce0bd0fc342f444cc846ce2f696681737bef77bf90e6ac9bfe3a3dccb55e->enter($__internal_7da6ce0bd0fc342f444cc846ce2f696681737bef77bf90e6ac9bfe3a3dccb55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4aed221d79deefeebcad91a78b1e9893a1b022c0682ce4fb93d52c4d4946be86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aed221d79deefeebcad91a78b1e9893a1b022c0682ce4fb93d52c4d4946be86->enter($__internal_4aed221d79deefeebcad91a78b1e9893a1b022c0682ce4fb93d52c4d4946be86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4aed221d79deefeebcad91a78b1e9893a1b022c0682ce4fb93d52c4d4946be86->leave($__internal_4aed221d79deefeebcad91a78b1e9893a1b022c0682ce4fb93d52c4d4946be86_prof);

        
        $__internal_7da6ce0bd0fc342f444cc846ce2f696681737bef77bf90e6ac9bfe3a3dccb55e->leave($__internal_7da6ce0bd0fc342f444cc846ce2f696681737bef77bf90e6ac9bfe3a3dccb55e_prof);

    }

    public function getTemplateName()
    {
        return "@PTUTPlatform/Platform/articles/article_1.html.twig";
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
{% endblock %} ", "@PTUTPlatform/Platform/articles/article_1.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\articles\\article_1.html.twig");
    }
}

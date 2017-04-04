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
        $__internal_4be0554db6a637b31b2be853e3f29174e4ea89e687d134f1fb6b872fd7f99c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be0554db6a637b31b2be853e3f29174e4ea89e687d134f1fb6b872fd7f99c0d->enter($__internal_4be0554db6a637b31b2be853e3f29174e4ea89e687d134f1fb6b872fd7f99c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:articles/article_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be0554db6a637b31b2be853e3f29174e4ea89e687d134f1fb6b872fd7f99c0d->leave($__internal_4be0554db6a637b31b2be853e3f29174e4ea89e687d134f1fb6b872fd7f99c0d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f7c3fd67ebbb9f1e2a94f540daaf837ed22c775498175c8ad570d1650cd709c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c3fd67ebbb9f1e2a94f540daaf837ed22c775498175c8ad570d1650cd709c9->enter($__internal_f7c3fd67ebbb9f1e2a94f540daaf837ed22c775498175c8ad570d1650cd709c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "<div class=\"row\">
<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 container-fluid\">
<h1>TITRE DE L&#39;ARTICLE</h1>

<h2>SOUS-TITRE 1</h2>

<p>Texte de l&#39;article 1</p>

<h2>SOUS-TITRE 2</h2>

<p>Texte de l&#39;article 2</p>

<p>&lt;div&gt;coucou &lt;/div&gt;</p>

<p>&nbsp;</p>
</div>
</div>
";
        
        $__internal_f7c3fd67ebbb9f1e2a94f540daaf837ed22c775498175c8ad570d1650cd709c9->leave($__internal_f7c3fd67ebbb9f1e2a94f540daaf837ed22c775498175c8ad570d1650cd709c9_prof);

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

<h2>SOUS-TITRE 1</h2>

<p>Texte de l&#39;article 1</p>

<h2>SOUS-TITRE 2</h2>

<p>Texte de l&#39;article 2</p>

<p>&lt;div&gt;coucou &lt;/div&gt;</p>

<p>&nbsp;</p>
</div>
</div>
{% endblock %} ", "PTUTPlatformBundle:Platform:articles/article_1.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/articles/article_1.html.twig");
    }
}

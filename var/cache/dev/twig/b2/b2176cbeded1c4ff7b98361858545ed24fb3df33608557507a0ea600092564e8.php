<?php

/* @PTUTPlatform/Platform/article_creator.html.twig */
class __TwigTemplate_73d769f7d3c7c6823b39c65eec474979fafb5d9f8a08b6d790fe330a06a72fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "@PTUTPlatform/Platform/article_creator.html.twig", 1);
        $this->blocks = array(
            'ongletHome' => array($this, 'block_ongletHome'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afb9bc07c9ba5883e8834d5c64124d17d1789658f6f86eba1df7c942bb099e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb9bc07c9ba5883e8834d5c64124d17d1789658f6f86eba1df7c942bb099e5a->enter($__internal_afb9bc07c9ba5883e8834d5c64124d17d1789658f6f86eba1df7c942bb099e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/article_creator.html.twig"));

        $__internal_2bef9ec5c74b0faede839fc2acee465f4a7d7a2d81f43b7ea53b2ad5077c7f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bef9ec5c74b0faede839fc2acee465f4a7d7a2d81f43b7ea53b2ad5077c7f02->enter($__internal_2bef9ec5c74b0faede839fc2acee465f4a7d7a2d81f43b7ea53b2ad5077c7f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afb9bc07c9ba5883e8834d5c64124d17d1789658f6f86eba1df7c942bb099e5a->leave($__internal_afb9bc07c9ba5883e8834d5c64124d17d1789658f6f86eba1df7c942bb099e5a_prof);

        
        $__internal_2bef9ec5c74b0faede839fc2acee465f4a7d7a2d81f43b7ea53b2ad5077c7f02->leave($__internal_2bef9ec5c74b0faede839fc2acee465f4a7d7a2d81f43b7ea53b2ad5077c7f02_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_b0f43cdbedb90f7f9dfef0a73c5d63b4bedaf40dc80b7149de0e443197556fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f43cdbedb90f7f9dfef0a73c5d63b4bedaf40dc80b7149de0e443197556fdd->enter($__internal_b0f43cdbedb90f7f9dfef0a73c5d63b4bedaf40dc80b7149de0e443197556fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_4f1e4dcb95f182c9ac880a1e480160fa12ebdbd1f701f99e6f145022011ab717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1e4dcb95f182c9ac880a1e480160fa12ebdbd1f701f99e6f145022011ab717->enter($__internal_4f1e4dcb95f182c9ac880a1e480160fa12ebdbd1f701f99e6f145022011ab717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_4f1e4dcb95f182c9ac880a1e480160fa12ebdbd1f701f99e6f145022011ab717->leave($__internal_4f1e4dcb95f182c9ac880a1e480160fa12ebdbd1f701f99e6f145022011ab717_prof);

        
        $__internal_b0f43cdbedb90f7f9dfef0a73c5d63b4bedaf40dc80b7149de0e443197556fdd->leave($__internal_b0f43cdbedb90f7f9dfef0a73c5d63b4bedaf40dc80b7149de0e443197556fdd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c459dcb08d027d52c7052df6893fd01ebdb82711caca9582e83818943579690e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c459dcb08d027d52c7052df6893fd01ebdb82711caca9582e83818943579690e->enter($__internal_c459dcb08d027d52c7052df6893fd01ebdb82711caca9582e83818943579690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_764f6668c3fd7fa8a4287f52a041a4f600efd8d5a3ed4d794c8e8c563a00532e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764f6668c3fd7fa8a4287f52a041a4f600efd8d5a3ed4d794c8e8c563a00532e->enter($__internal_764f6668c3fd7fa8a4287f52a041a4f600efd8d5a3ed4d794c8e8c563a00532e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

<div class=\"row\">
<div name=\"article_editor\" class=\"form-group col-md-offset-1 col-lg-offset-1 col-xs-12 col-sm-12 col-md-10 col-lg-10\">
    <label for=\"title_editor\">Titre :</label>
    <input type=\"text\" name=\"titre\"  class=\"form-control\" id=\"title_editor\">
    <label for=\"content_editor\">Contenu :</label>
    <textarea class=\"form-control\" name=\"content_editor\" id=\"content_editor\">
    </textarea>
    <script>
        CKEDITOR.replace('content_editor');
    </script>
</div></div>



";
        
        $__internal_764f6668c3fd7fa8a4287f52a041a4f600efd8d5a3ed4d794c8e8c563a00532e->leave($__internal_764f6668c3fd7fa8a4287f52a041a4f600efd8d5a3ed4d794c8e8c563a00532e_prof);

        
        $__internal_c459dcb08d027d52c7052df6893fd01ebdb82711caca9582e83818943579690e->leave($__internal_c459dcb08d027d52c7052df6893fd01ebdb82711caca9582e83818943579690e_prof);

    }

    public function getTemplateName()
    {
        return "@PTUTPlatform/Platform/article_creator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  41 => 3,  11 => 1,);
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

{% block ongletHome %}active{%endblock%}

{% block body %} 

<div class=\"row\">
<div name=\"article_editor\" class=\"form-group col-md-offset-1 col-lg-offset-1 col-xs-12 col-sm-12 col-md-10 col-lg-10\">
    <label for=\"title_editor\">Titre :</label>
    <input type=\"text\" name=\"titre\"  class=\"form-control\" id=\"title_editor\">
    <label for=\"content_editor\">Contenu :</label>
    <textarea class=\"form-control\" name=\"content_editor\" id=\"content_editor\">
    </textarea>
    <script>
        CKEDITOR.replace('content_editor');
    </script>
</div></div>



{%endblock%}", "@PTUTPlatform/Platform/article_creator.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\article_creator.html.twig");
    }
}

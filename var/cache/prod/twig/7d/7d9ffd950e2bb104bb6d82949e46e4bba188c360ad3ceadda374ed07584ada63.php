<?php

/* PTUTPlatformBundle:Platform:article_creator.html.twig */
class __TwigTemplate_c3336f942927ff5b60b626a1b133256649cb0b8c8ea5bf6bea5e85de6605d64d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "PTUTPlatformBundle:Platform:article_creator.html.twig", 1);
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
        $__internal_cf8f9819dacf8f3739d095f32a6cc1e6602765f1990776f58a66a5413f91ae51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8f9819dacf8f3739d095f32a6cc1e6602765f1990776f58a66a5413f91ae51->enter($__internal_cf8f9819dacf8f3739d095f32a6cc1e6602765f1990776f58a66a5413f91ae51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf8f9819dacf8f3739d095f32a6cc1e6602765f1990776f58a66a5413f91ae51->leave($__internal_cf8f9819dacf8f3739d095f32a6cc1e6602765f1990776f58a66a5413f91ae51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_273fed614f44db04691df7f3deb4bebfeec6353106048bad454b3ad438941622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273fed614f44db04691df7f3deb4bebfeec6353106048bad454b3ad438941622->enter($__internal_273fed614f44db04691df7f3deb4bebfeec6353106048bad454b3ad438941622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

<section id=\"article_creator\">
    <div class=\"row\">
        <form name=\"article_editor\" method=\"post\" action=\"\" class=\"col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-8\">
            <div class=\"form-group\">
                <label for=\"thumbnail\">Miniature :</label>
                <input type=\"file\" name=\"miniature\" id=\"thumbnail_editor\">
            </div>    
            <div class=\"form-group\">
                <label for=\"title_editor\">Titre :</label>
                <input type=\"text\" name=\"titre\"  class=\"form-control\" id=\"title_editor\">
            </div>
            <div class=\"form-group\">
                <label for=\"content_editor\">Contenu :</label>
                <textarea class=\"form-control\" name=\"content_editor\" id=\"content_editor\"></textarea>
            </div>
            <script>
                CKEDITOR.replace('content_editor');
            </script>
            <button type=\"submit\" class=\"btn btn-default\">Créer  l'article</button>
        </form>
    </div>
</section>



";
        
        $__internal_273fed614f44db04691df7f3deb4bebfeec6353106048bad454b3ad438941622->leave($__internal_273fed614f44db04691df7f3deb4bebfeec6353106048bad454b3ad438941622_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:article_creator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
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

<section id=\"article_creator\">
    <div class=\"row\">
        <form name=\"article_editor\" method=\"post\" action=\"\" class=\"col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-8\">
            <div class=\"form-group\">
                <label for=\"thumbnail\">Miniature :</label>
                <input type=\"file\" name=\"miniature\" id=\"thumbnail_editor\">
            </div>    
            <div class=\"form-group\">
                <label for=\"title_editor\">Titre :</label>
                <input type=\"text\" name=\"titre\"  class=\"form-control\" id=\"title_editor\">
            </div>
            <div class=\"form-group\">
                <label for=\"content_editor\">Contenu :</label>
                <textarea class=\"form-control\" name=\"content_editor\" id=\"content_editor\"></textarea>
            </div>
            <script>
                CKEDITOR.replace('content_editor');
            </script>
            <button type=\"submit\" class=\"btn btn-default\">Créer  l'article</button>
        </form>
    </div>
</section>



{%endblock%}", "PTUTPlatformBundle:Platform:article_creator.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/article_creator.html.twig");
    }
}

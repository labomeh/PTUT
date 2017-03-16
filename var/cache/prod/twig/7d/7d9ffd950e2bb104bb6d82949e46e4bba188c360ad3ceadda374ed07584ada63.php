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
        $__internal_7da89c7355d55b3d0282ab667d9b31bea9c9740da712f904ad7a136ed3133956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da89c7355d55b3d0282ab667d9b31bea9c9740da712f904ad7a136ed3133956->enter($__internal_7da89c7355d55b3d0282ab667d9b31bea9c9740da712f904ad7a136ed3133956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da89c7355d55b3d0282ab667d9b31bea9c9740da712f904ad7a136ed3133956->leave($__internal_7da89c7355d55b3d0282ab667d9b31bea9c9740da712f904ad7a136ed3133956_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02da7e9442e01350bfa54b91e2f2c6813c76ad689cd6fb0143bdda22d55f5a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02da7e9442e01350bfa54b91e2f2c6813c76ad689cd6fb0143bdda22d55f5a9f->enter($__internal_02da7e9442e01350bfa54b91e2f2c6813c76ad689cd6fb0143bdda22d55f5a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

<section id=\"article_creator\">
    <div class=\"row\">
        <form name=\"article_editor\" method=\"post\" action=\"creation/article\" class=\"col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-8\">
            <input type=\"hidden\" class=\"form-control\" name=\"url\" value=\"PTUT/web/article_creator\">
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
        
        $__internal_02da7e9442e01350bfa54b91e2f2c6813c76ad689cd6fb0143bdda22d55f5a9f->leave($__internal_02da7e9442e01350bfa54b91e2f2c6813c76ad689cd6fb0143bdda22d55f5a9f_prof);

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
        <form name=\"article_editor\" method=\"post\" action=\"creation/article\" class=\"col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-8\">
            <input type=\"hidden\" class=\"form-control\" name=\"url\" value=\"PTUT/web/article_creator\">
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

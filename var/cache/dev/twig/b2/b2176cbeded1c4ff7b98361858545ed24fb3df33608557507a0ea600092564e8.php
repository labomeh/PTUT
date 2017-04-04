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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c9cfc89f97b72514091eb0e7b4ea1cae328c5d06b4789e5d1400189c84b7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c9cfc89f97b72514091eb0e7b4ea1cae328c5d06b4789e5d1400189c84b7cf->enter($__internal_c7c9cfc89f97b72514091eb0e7b4ea1cae328c5d06b4789e5d1400189c84b7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/article_creator.html.twig"));

        $__internal_940d7952a555290efc77af26620337d4537052a324eb0592b125129f20200206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940d7952a555290efc77af26620337d4537052a324eb0592b125129f20200206->enter($__internal_940d7952a555290efc77af26620337d4537052a324eb0592b125129f20200206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c9cfc89f97b72514091eb0e7b4ea1cae328c5d06b4789e5d1400189c84b7cf->leave($__internal_c7c9cfc89f97b72514091eb0e7b4ea1cae328c5d06b4789e5d1400189c84b7cf_prof);

        
        $__internal_940d7952a555290efc77af26620337d4537052a324eb0592b125129f20200206->leave($__internal_940d7952a555290efc77af26620337d4537052a324eb0592b125129f20200206_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a068bc26a93908f2abe040f7a32760ab619a7542d207f1c249c39b754cb4ae27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a068bc26a93908f2abe040f7a32760ab619a7542d207f1c249c39b754cb4ae27->enter($__internal_a068bc26a93908f2abe040f7a32760ab619a7542d207f1c249c39b754cb4ae27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e703f810ded10400406bac08d4e67c38ab830bc4f96b7c0731f81043ed1da71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e703f810ded10400406bac08d4e67c38ab830bc4f96b7c0731f81043ed1da71f->enter($__internal_e703f810ded10400406bac08d4e67c38ab830bc4f96b7c0731f81043ed1da71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                CKEDITOR.config.toolbarGroups=[
                        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                        { name: 'forms', groups: [ 'forms' ] },
                        '/',
                        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                        { name: 'links', groups: [ 'links' ] },
                        { name: 'insert', groups: [ 'insert' ] },
                        '/',
                        { name: 'styles', groups: [ 'styles' ] },
                        { name: 'colors', groups: [ 'colors' ] },
                        { name: 'tools', groups: [ 'tools' ] },
                        { name: 'others', groups: [ 'others' ] },
                        { name: 'about', groups: [ 'about' ] }
                    ];
                CKEDITOR.replace('content_editor');
            </script>
            <button type=\"submit\" class=\"btn btn-default\">Créer  l'article</button>
        </form>
    </div>
</section>



";
        
        $__internal_e703f810ded10400406bac08d4e67c38ab830bc4f96b7c0731f81043ed1da71f->leave($__internal_e703f810ded10400406bac08d4e67c38ab830bc4f96b7c0731f81043ed1da71f_prof);

        
        $__internal_a068bc26a93908f2abe040f7a32760ab619a7542d207f1c249c39b754cb4ae27->leave($__internal_a068bc26a93908f2abe040f7a32760ab619a7542d207f1c249c39b754cb4ae27_prof);

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
        return array (  40 => 3,  11 => 1,);
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
                CKEDITOR.config.toolbarGroups=[
                        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                        { name: 'forms', groups: [ 'forms' ] },
                        '/',
                        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                        { name: 'links', groups: [ 'links' ] },
                        { name: 'insert', groups: [ 'insert' ] },
                        '/',
                        { name: 'styles', groups: [ 'styles' ] },
                        { name: 'colors', groups: [ 'colors' ] },
                        { name: 'tools', groups: [ 'tools' ] },
                        { name: 'others', groups: [ 'others' ] },
                        { name: 'about', groups: [ 'about' ] }
                    ];
                CKEDITOR.replace('content_editor');
            </script>
            <button type=\"submit\" class=\"btn btn-default\">Créer  l'article</button>
        </form>
    </div>
</section>



{%endblock%}", "@PTUTPlatform/Platform/article_creator.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\article_creator.html.twig");
    }
}

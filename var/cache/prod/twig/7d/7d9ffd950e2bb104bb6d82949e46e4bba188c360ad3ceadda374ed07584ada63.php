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
        $__internal_047bab354f19bdf2ec780c92f3d7f66b50d938497415ea4e0842fb6b5755cbc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047bab354f19bdf2ec780c92f3d7f66b50d938497415ea4e0842fb6b5755cbc6->enter($__internal_047bab354f19bdf2ec780c92f3d7f66b50d938497415ea4e0842fb6b5755cbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047bab354f19bdf2ec780c92f3d7f66b50d938497415ea4e0842fb6b5755cbc6->leave($__internal_047bab354f19bdf2ec780c92f3d7f66b50d938497415ea4e0842fb6b5755cbc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8da3946ed3b349623c88a769b24059e1dd60b24df32f699a7f70729971fd2a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da3946ed3b349623c88a769b24059e1dd60b24df32f699a7f70729971fd2a4b->enter($__internal_8da3946ed3b349623c88a769b24059e1dd60b24df32f699a7f70729971fd2a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                CKEDITOR.replace('content_editor',{
                    toolbar : [
                        { name: 'document', items: ['Templates' ] },
                        { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                        { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
                        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                        { name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Flash', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                        { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                        { name: 'about', items: [ 'About' ] }
                    ],
                    templates_files:[ \"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ptutplatform/ckeditor/plugins/templates/templates/article.js"), "html", null, true);
        echo "\" ]
                });
            </script>
            <button type=\"submit\" class=\"btn btn-default\">Créer  l'article</button>
        </form>
        
    </div>
</section>



";
        
        $__internal_8da3946ed3b349623c88a769b24059e1dd60b24df32f699a7f70729971fd2a4b->leave($__internal_8da3946ed3b349623c88a769b24059e1dd60b24df32f699a7f70729971fd2a4b_prof);

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
        return array (  73 => 35,  34 => 3,  11 => 1,);
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
                CKEDITOR.replace('content_editor',{
                    toolbar : [
                        { name: 'document', items: ['Templates' ] },
                        { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                        { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
                        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                        { name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Flash', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                        { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                        { name: 'about', items: [ 'About' ] }
                    ],
                    templates_files:[ \"{{ asset('bundles/ptutplatform/ckeditor/plugins/templates/templates/article.js') }}\" ]
                });
            </script>
            <button type=\"submit\" class=\"btn btn-default\">Créer  l'article</button>
        </form>
        
    </div>
</section>



{%endblock%}", "PTUTPlatformBundle:Platform:article_creator.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/article_creator.html.twig");
    }
}

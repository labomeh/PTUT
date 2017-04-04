<?php

/* PTUTPlatformBundle:Platform:article_creator.html.twig */
class __TwigTemplate_0052b6f7e7124b016163d6da1ecc9e21748d3dec851d14a9aadf98351e6630e8 extends Twig_Template
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
        $__internal_9b58827ee736c5dee6d0695052496a5b9d87d0381af52e17e2f19dee6ae1f9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b58827ee736c5dee6d0695052496a5b9d87d0381af52e17e2f19dee6ae1f9a8->enter($__internal_9b58827ee736c5dee6d0695052496a5b9d87d0381af52e17e2f19dee6ae1f9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $__internal_bfabab420f9bf472ee411d7e83b7b32132b855d7c348f970734c9ced383b8965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfabab420f9bf472ee411d7e83b7b32132b855d7c348f970734c9ced383b8965->enter($__internal_bfabab420f9bf472ee411d7e83b7b32132b855d7c348f970734c9ced383b8965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b58827ee736c5dee6d0695052496a5b9d87d0381af52e17e2f19dee6ae1f9a8->leave($__internal_9b58827ee736c5dee6d0695052496a5b9d87d0381af52e17e2f19dee6ae1f9a8_prof);

        
        $__internal_bfabab420f9bf472ee411d7e83b7b32132b855d7c348f970734c9ced383b8965->leave($__internal_bfabab420f9bf472ee411d7e83b7b32132b855d7c348f970734c9ced383b8965_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b851554bcab690134a107bb72956c4215ced392ea23e5a8cfe9f590ebea31220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b851554bcab690134a107bb72956c4215ced392ea23e5a8cfe9f590ebea31220->enter($__internal_b851554bcab690134a107bb72956c4215ced392ea23e5a8cfe9f590ebea31220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94b584e878181568e92b575ecc802b290a686061f9ff1a07caa7126c4310a706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b584e878181568e92b575ecc802b290a686061f9ff1a07caa7126c4310a706->enter($__internal_94b584e878181568e92b575ecc802b290a686061f9ff1a07caa7126c4310a706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94b584e878181568e92b575ecc802b290a686061f9ff1a07caa7126c4310a706->leave($__internal_94b584e878181568e92b575ecc802b290a686061f9ff1a07caa7126c4310a706_prof);

        
        $__internal_b851554bcab690134a107bb72956c4215ced392ea23e5a8cfe9f590ebea31220->leave($__internal_b851554bcab690134a107bb72956c4215ced392ea23e5a8cfe9f590ebea31220_prof);

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



{%endblock%}", "PTUTPlatformBundle:Platform:article_creator.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/article_creator.html.twig");
    }
}

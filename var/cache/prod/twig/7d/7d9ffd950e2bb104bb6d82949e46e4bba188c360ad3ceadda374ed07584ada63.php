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
        $__internal_51f9b1040fad52f1b42530dafcaaa736195d0f2d444b8542608e84bd3765cf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f9b1040fad52f1b42530dafcaaa736195d0f2d444b8542608e84bd3765cf6b->enter($__internal_51f9b1040fad52f1b42530dafcaaa736195d0f2d444b8542608e84bd3765cf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51f9b1040fad52f1b42530dafcaaa736195d0f2d444b8542608e84bd3765cf6b->leave($__internal_51f9b1040fad52f1b42530dafcaaa736195d0f2d444b8542608e84bd3765cf6b_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_1096cbd9eff83c0d0fd0eca4076249529180e641b7377c4093799fddb81b69ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1096cbd9eff83c0d0fd0eca4076249529180e641b7377c4093799fddb81b69ea->enter($__internal_1096cbd9eff83c0d0fd0eca4076249529180e641b7377c4093799fddb81b69ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_1096cbd9eff83c0d0fd0eca4076249529180e641b7377c4093799fddb81b69ea->leave($__internal_1096cbd9eff83c0d0fd0eca4076249529180e641b7377c4093799fddb81b69ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f95334dc9857c34b7868304b98de20f919677119681110dd7ac40ebfffe3a3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95334dc9857c34b7868304b98de20f919677119681110dd7ac40ebfffe3a3d7->enter($__internal_f95334dc9857c34b7868304b98de20f919677119681110dd7ac40ebfffe3a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

<div class=\"row\">
<form name=\"article_editor\" method=\"post\" class=\"col-md-offset-1 col-lg-offset-1 col-xs-12 col-sm-12 col-md-10 col-lg-10\">
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
</form></div>



";
        
        $__internal_f95334dc9857c34b7868304b98de20f919677119681110dd7ac40ebfffe3a3d7->leave($__internal_f95334dc9857c34b7868304b98de20f919677119681110dd7ac40ebfffe3a3d7_prof);

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
        return array (  47 => 5,  35 => 3,  11 => 1,);
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
<form name=\"article_editor\" method=\"post\" class=\"col-md-offset-1 col-lg-offset-1 col-xs-12 col-sm-12 col-md-10 col-lg-10\">
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
</form></div>



{%endblock%}", "PTUTPlatformBundle:Platform:article_creator.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/article_creator.html.twig");
    }
}

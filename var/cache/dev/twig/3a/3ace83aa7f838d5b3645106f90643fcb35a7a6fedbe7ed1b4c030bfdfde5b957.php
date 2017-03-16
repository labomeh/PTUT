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
        $__internal_7dc56adc482f59f481630720b8c0c21ab586740e287bb63f76f1c473769bc625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc56adc482f59f481630720b8c0c21ab586740e287bb63f76f1c473769bc625->enter($__internal_7dc56adc482f59f481630720b8c0c21ab586740e287bb63f76f1c473769bc625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $__internal_9e12a9aaae1171914f15aeab1b78f96e1b0ebd2b8ab5b3a3e4d330844408586a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e12a9aaae1171914f15aeab1b78f96e1b0ebd2b8ab5b3a3e4d330844408586a->enter($__internal_9e12a9aaae1171914f15aeab1b78f96e1b0ebd2b8ab5b3a3e4d330844408586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_creator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc56adc482f59f481630720b8c0c21ab586740e287bb63f76f1c473769bc625->leave($__internal_7dc56adc482f59f481630720b8c0c21ab586740e287bb63f76f1c473769bc625_prof);

        
        $__internal_9e12a9aaae1171914f15aeab1b78f96e1b0ebd2b8ab5b3a3e4d330844408586a->leave($__internal_9e12a9aaae1171914f15aeab1b78f96e1b0ebd2b8ab5b3a3e4d330844408586a_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_a94ac9a3f98d940b6b946c993e361cd16f6f95d6b001752a4a26903ac85f78dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94ac9a3f98d940b6b946c993e361cd16f6f95d6b001752a4a26903ac85f78dd->enter($__internal_a94ac9a3f98d940b6b946c993e361cd16f6f95d6b001752a4a26903ac85f78dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_bc92e6693d9120eb2fd581168a3806989b098086c7718076719a4e596f3575ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc92e6693d9120eb2fd581168a3806989b098086c7718076719a4e596f3575ee->enter($__internal_bc92e6693d9120eb2fd581168a3806989b098086c7718076719a4e596f3575ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_bc92e6693d9120eb2fd581168a3806989b098086c7718076719a4e596f3575ee->leave($__internal_bc92e6693d9120eb2fd581168a3806989b098086c7718076719a4e596f3575ee_prof);

        
        $__internal_a94ac9a3f98d940b6b946c993e361cd16f6f95d6b001752a4a26903ac85f78dd->leave($__internal_a94ac9a3f98d940b6b946c993e361cd16f6f95d6b001752a4a26903ac85f78dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0584d87bb9c78966849d5ae3d1849c2f0e10c7d030a4b40e24fb397f0b74e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0584d87bb9c78966849d5ae3d1849c2f0e10c7d030a4b40e24fb397f0b74e1f->enter($__internal_e0584d87bb9c78966849d5ae3d1849c2f0e10c7d030a4b40e24fb397f0b74e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3c0f9d836188c96473b922637f5c9b762ed6e9e74261bb2ec29d5fdfb9f73e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c0f9d836188c96473b922637f5c9b762ed6e9e74261bb2ec29d5fdfb9f73e7->enter($__internal_b3c0f9d836188c96473b922637f5c9b762ed6e9e74261bb2ec29d5fdfb9f73e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3c0f9d836188c96473b922637f5c9b762ed6e9e74261bb2ec29d5fdfb9f73e7->leave($__internal_b3c0f9d836188c96473b922637f5c9b762ed6e9e74261bb2ec29d5fdfb9f73e7_prof);

        
        $__internal_e0584d87bb9c78966849d5ae3d1849c2f0e10c7d030a4b40e24fb397f0b74e1f->leave($__internal_e0584d87bb9c78966849d5ae3d1849c2f0e10c7d030a4b40e24fb397f0b74e1f_prof);

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



{%endblock%}", "PTUTPlatformBundle:Platform:article_creator.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/article_creator.html.twig");
    }
}

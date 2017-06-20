<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_35dda62958d97826c4833b58a9730c1920fe21417245577fcb1517daec7743bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62fa738886b63d5b9173c39fe62e1e42b4daf4a45e87e925e6ffc07a9dc5afdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fa738886b63d5b9173c39fe62e1e42b4daf4a45e87e925e6ffc07a9dc5afdd->enter($__internal_62fa738886b63d5b9173c39fe62e1e42b4daf4a45e87e925e6ffc07a9dc5afdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_edc3ea6e1cc541d6421e42f65dc5a037076799bec13ad9ba984da54aac1309fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc3ea6e1cc541d6421e42f65dc5a037076799bec13ad9ba984da54aac1309fa->enter($__internal_edc3ea6e1cc541d6421e42f65dc5a037076799bec13ad9ba984da54aac1309fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62fa738886b63d5b9173c39fe62e1e42b4daf4a45e87e925e6ffc07a9dc5afdd->leave($__internal_62fa738886b63d5b9173c39fe62e1e42b4daf4a45e87e925e6ffc07a9dc5afdd_prof);

        
        $__internal_edc3ea6e1cc541d6421e42f65dc5a037076799bec13ad9ba984da54aac1309fa->leave($__internal_edc3ea6e1cc541d6421e42f65dc5a037076799bec13ad9ba984da54aac1309fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02df4801de870200ba0c400e66c560c8645aa02886686a8d6a0ecccab0397179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02df4801de870200ba0c400e66c560c8645aa02886686a8d6a0ecccab0397179->enter($__internal_02df4801de870200ba0c400e66c560c8645aa02886686a8d6a0ecccab0397179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e8c895bf67f6ad1a8e23900d48e9a390d59e8b7cf639044d18bddc58c3983152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c895bf67f6ad1a8e23900d48e9a390d59e8b7cf639044d18bddc58c3983152->enter($__internal_e8c895bf67f6ad1a8e23900d48e9a390d59e8b7cf639044d18bddc58c3983152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e8c895bf67f6ad1a8e23900d48e9a390d59e8b7cf639044d18bddc58c3983152->leave($__internal_e8c895bf67f6ad1a8e23900d48e9a390d59e8b7cf639044d18bddc58c3983152_prof);

        
        $__internal_02df4801de870200ba0c400e66c560c8645aa02886686a8d6a0ecccab0397179->leave($__internal_02df4801de870200ba0c400e66c560c8645aa02886686a8d6a0ecccab0397179_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_264e3856e4f60f556a52813398950a1076efbdbd7671f24774af48e8ffea2e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264e3856e4f60f556a52813398950a1076efbdbd7671f24774af48e8ffea2e99->enter($__internal_264e3856e4f60f556a52813398950a1076efbdbd7671f24774af48e8ffea2e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aee5494cf5185ad29be45e3391f83ff2543444d13af7abc81aae8ecefe9ff55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee5494cf5185ad29be45e3391f83ff2543444d13af7abc81aae8ecefe9ff55b->enter($__internal_aee5494cf5185ad29be45e3391f83ff2543444d13af7abc81aae8ecefe9ff55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_aee5494cf5185ad29be45e3391f83ff2543444d13af7abc81aae8ecefe9ff55b->leave($__internal_aee5494cf5185ad29be45e3391f83ff2543444d13af7abc81aae8ecefe9ff55b_prof);

        
        $__internal_264e3856e4f60f556a52813398950a1076efbdbd7671f24774af48e8ffea2e99->leave($__internal_264e3856e4f60f556a52813398950a1076efbdbd7671f24774af48e8ffea2e99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

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
        $__internal_32fb14e0312576122eb59e02630cb6625fa777861bd087abadf73e8fc6660aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fb14e0312576122eb59e02630cb6625fa777861bd087abadf73e8fc6660aa6->enter($__internal_32fb14e0312576122eb59e02630cb6625fa777861bd087abadf73e8fc6660aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_30ead3b25b630048782ddc17433e18456b41850c5258946827a27b59b9521d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ead3b25b630048782ddc17433e18456b41850c5258946827a27b59b9521d2f->enter($__internal_30ead3b25b630048782ddc17433e18456b41850c5258946827a27b59b9521d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32fb14e0312576122eb59e02630cb6625fa777861bd087abadf73e8fc6660aa6->leave($__internal_32fb14e0312576122eb59e02630cb6625fa777861bd087abadf73e8fc6660aa6_prof);

        
        $__internal_30ead3b25b630048782ddc17433e18456b41850c5258946827a27b59b9521d2f->leave($__internal_30ead3b25b630048782ddc17433e18456b41850c5258946827a27b59b9521d2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c3511999d95392045c4214276863654fee59c9ecb2a1cdd4b2afcdfbfc27e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3511999d95392045c4214276863654fee59c9ecb2a1cdd4b2afcdfbfc27e81->enter($__internal_4c3511999d95392045c4214276863654fee59c9ecb2a1cdd4b2afcdfbfc27e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76fc0329db2abdf9bca31f21d30f45ef6b2a1becd2f570c397aee6d8f3d84611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fc0329db2abdf9bca31f21d30f45ef6b2a1becd2f570c397aee6d8f3d84611->enter($__internal_76fc0329db2abdf9bca31f21d30f45ef6b2a1becd2f570c397aee6d8f3d84611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_76fc0329db2abdf9bca31f21d30f45ef6b2a1becd2f570c397aee6d8f3d84611->leave($__internal_76fc0329db2abdf9bca31f21d30f45ef6b2a1becd2f570c397aee6d8f3d84611_prof);

        
        $__internal_4c3511999d95392045c4214276863654fee59c9ecb2a1cdd4b2afcdfbfc27e81->leave($__internal_4c3511999d95392045c4214276863654fee59c9ecb2a1cdd4b2afcdfbfc27e81_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_483199c419da747fe949cd24865461ff8a858a5de25cbaaab7c330dbf36b4f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483199c419da747fe949cd24865461ff8a858a5de25cbaaab7c330dbf36b4f73->enter($__internal_483199c419da747fe949cd24865461ff8a858a5de25cbaaab7c330dbf36b4f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eff693ba44c06ca59fc568c0588272fbd9a7bf3c7b9c9df84a2d5c1298408ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eff693ba44c06ca59fc568c0588272fbd9a7bf3c7b9c9df84a2d5c1298408ed->enter($__internal_7eff693ba44c06ca59fc568c0588272fbd9a7bf3c7b9c9df84a2d5c1298408ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7eff693ba44c06ca59fc568c0588272fbd9a7bf3c7b9c9df84a2d5c1298408ed->leave($__internal_7eff693ba44c06ca59fc568c0588272fbd9a7bf3c7b9c9df84a2d5c1298408ed_prof);

        
        $__internal_483199c419da747fe949cd24865461ff8a858a5de25cbaaab7c330dbf36b4f73->leave($__internal_483199c419da747fe949cd24865461ff8a858a5de25cbaaab7c330dbf36b4f73_prof);

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

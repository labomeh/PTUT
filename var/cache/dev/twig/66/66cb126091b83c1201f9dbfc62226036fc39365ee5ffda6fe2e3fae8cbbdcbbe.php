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
        $__internal_4d92993a4ee3d0d271695b72e3a548586b7523adf948f2db229043f4cb73e934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d92993a4ee3d0d271695b72e3a548586b7523adf948f2db229043f4cb73e934->enter($__internal_4d92993a4ee3d0d271695b72e3a548586b7523adf948f2db229043f4cb73e934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9d8b4a952f3ec244830bd773a65eb39b8fea79067962ce0f6e3ffe20de4f4ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8b4a952f3ec244830bd773a65eb39b8fea79067962ce0f6e3ffe20de4f4ee8->enter($__internal_9d8b4a952f3ec244830bd773a65eb39b8fea79067962ce0f6e3ffe20de4f4ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d92993a4ee3d0d271695b72e3a548586b7523adf948f2db229043f4cb73e934->leave($__internal_4d92993a4ee3d0d271695b72e3a548586b7523adf948f2db229043f4cb73e934_prof);

        
        $__internal_9d8b4a952f3ec244830bd773a65eb39b8fea79067962ce0f6e3ffe20de4f4ee8->leave($__internal_9d8b4a952f3ec244830bd773a65eb39b8fea79067962ce0f6e3ffe20de4f4ee8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_221820a3a513a8ec80ddab655df7b5f48f41bede823d94aeb0be0bbca9731b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221820a3a513a8ec80ddab655df7b5f48f41bede823d94aeb0be0bbca9731b4f->enter($__internal_221820a3a513a8ec80ddab655df7b5f48f41bede823d94aeb0be0bbca9731b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f22d50acef2f2d4a8066f9a91bd25766048a5df6c89d374069db54a7dad34390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22d50acef2f2d4a8066f9a91bd25766048a5df6c89d374069db54a7dad34390->enter($__internal_f22d50acef2f2d4a8066f9a91bd25766048a5df6c89d374069db54a7dad34390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f22d50acef2f2d4a8066f9a91bd25766048a5df6c89d374069db54a7dad34390->leave($__internal_f22d50acef2f2d4a8066f9a91bd25766048a5df6c89d374069db54a7dad34390_prof);

        
        $__internal_221820a3a513a8ec80ddab655df7b5f48f41bede823d94aeb0be0bbca9731b4f->leave($__internal_221820a3a513a8ec80ddab655df7b5f48f41bede823d94aeb0be0bbca9731b4f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_938f9314bfb4a4800d63894022df3f9014db3537724a0cc7ce21113ba28a5852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938f9314bfb4a4800d63894022df3f9014db3537724a0cc7ce21113ba28a5852->enter($__internal_938f9314bfb4a4800d63894022df3f9014db3537724a0cc7ce21113ba28a5852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13fb2d663bf427db8f2d828d16427b22c473cbbcda9cbcdae07fe37162448712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fb2d663bf427db8f2d828d16427b22c473cbbcda9cbcdae07fe37162448712->enter($__internal_13fb2d663bf427db8f2d828d16427b22c473cbbcda9cbcdae07fe37162448712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13fb2d663bf427db8f2d828d16427b22c473cbbcda9cbcdae07fe37162448712->leave($__internal_13fb2d663bf427db8f2d828d16427b22c473cbbcda9cbcdae07fe37162448712_prof);

        
        $__internal_938f9314bfb4a4800d63894022df3f9014db3537724a0cc7ce21113ba28a5852->leave($__internal_938f9314bfb4a4800d63894022df3f9014db3537724a0cc7ce21113ba28a5852_prof);

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

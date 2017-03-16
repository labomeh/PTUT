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
        $__internal_afdf8de3e0ccc043192550426ebc51c5a7ea697e6f0ea02e04ab7fd3f73757f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdf8de3e0ccc043192550426ebc51c5a7ea697e6f0ea02e04ab7fd3f73757f9->enter($__internal_afdf8de3e0ccc043192550426ebc51c5a7ea697e6f0ea02e04ab7fd3f73757f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f821bb6691cccda138fe677d4f2024cb75fbca1dd84f1a7b946cec789279e29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f821bb6691cccda138fe677d4f2024cb75fbca1dd84f1a7b946cec789279e29a->enter($__internal_f821bb6691cccda138fe677d4f2024cb75fbca1dd84f1a7b946cec789279e29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdf8de3e0ccc043192550426ebc51c5a7ea697e6f0ea02e04ab7fd3f73757f9->leave($__internal_afdf8de3e0ccc043192550426ebc51c5a7ea697e6f0ea02e04ab7fd3f73757f9_prof);

        
        $__internal_f821bb6691cccda138fe677d4f2024cb75fbca1dd84f1a7b946cec789279e29a->leave($__internal_f821bb6691cccda138fe677d4f2024cb75fbca1dd84f1a7b946cec789279e29a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87be6f9e6f94cd2b4744e061bce8bc301e4ac44451af086752e2809e97e9551b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87be6f9e6f94cd2b4744e061bce8bc301e4ac44451af086752e2809e97e9551b->enter($__internal_87be6f9e6f94cd2b4744e061bce8bc301e4ac44451af086752e2809e97e9551b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8552521a691a63210203b00e8f7a8586861fdace1a611792dffabfea6b7f0a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8552521a691a63210203b00e8f7a8586861fdace1a611792dffabfea6b7f0a6c->enter($__internal_8552521a691a63210203b00e8f7a8586861fdace1a611792dffabfea6b7f0a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8552521a691a63210203b00e8f7a8586861fdace1a611792dffabfea6b7f0a6c->leave($__internal_8552521a691a63210203b00e8f7a8586861fdace1a611792dffabfea6b7f0a6c_prof);

        
        $__internal_87be6f9e6f94cd2b4744e061bce8bc301e4ac44451af086752e2809e97e9551b->leave($__internal_87be6f9e6f94cd2b4744e061bce8bc301e4ac44451af086752e2809e97e9551b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40e7e5a409e4209cdd506dc000e7583d17ba94c7299605f934d323827a5edd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40e7e5a409e4209cdd506dc000e7583d17ba94c7299605f934d323827a5edd7->enter($__internal_b40e7e5a409e4209cdd506dc000e7583d17ba94c7299605f934d323827a5edd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8571d8fda75ffb868c6bf58adba6a75492c7d3847740ff6ee8d5106fde8a6847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8571d8fda75ffb868c6bf58adba6a75492c7d3847740ff6ee8d5106fde8a6847->enter($__internal_8571d8fda75ffb868c6bf58adba6a75492c7d3847740ff6ee8d5106fde8a6847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8571d8fda75ffb868c6bf58adba6a75492c7d3847740ff6ee8d5106fde8a6847->leave($__internal_8571d8fda75ffb868c6bf58adba6a75492c7d3847740ff6ee8d5106fde8a6847_prof);

        
        $__internal_b40e7e5a409e4209cdd506dc000e7583d17ba94c7299605f934d323827a5edd7->leave($__internal_b40e7e5a409e4209cdd506dc000e7583d17ba94c7299605f934d323827a5edd7_prof);

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

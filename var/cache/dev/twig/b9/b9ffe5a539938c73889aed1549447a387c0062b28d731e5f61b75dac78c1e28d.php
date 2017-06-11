<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_e6ae86765d3d069fe3f03ced925d280f7ff9bb915dae863d8f88cf11e6c039d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ae86765d3d069fe3f03ced925d280f7ff9bb915dae863d8f88cf11e6c039d0->enter($__internal_e6ae86765d3d069fe3f03ced925d280f7ff9bb915dae863d8f88cf11e6c039d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fdec4e4cfc0dc383f597d3b4ad0472d405f05f6f340ec8d214407ef55e264a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdec4e4cfc0dc383f597d3b4ad0472d405f05f6f340ec8d214407ef55e264a66->enter($__internal_fdec4e4cfc0dc383f597d3b4ad0472d405f05f6f340ec8d214407ef55e264a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ae86765d3d069fe3f03ced925d280f7ff9bb915dae863d8f88cf11e6c039d0->leave($__internal_e6ae86765d3d069fe3f03ced925d280f7ff9bb915dae863d8f88cf11e6c039d0_prof);

        
        $__internal_fdec4e4cfc0dc383f597d3b4ad0472d405f05f6f340ec8d214407ef55e264a66->leave($__internal_fdec4e4cfc0dc383f597d3b4ad0472d405f05f6f340ec8d214407ef55e264a66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a9ea3903f5d4f60e01d1cd8b9ef294f5bfac94010681c44d6d99021266ceb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9ea3903f5d4f60e01d1cd8b9ef294f5bfac94010681c44d6d99021266ceb99->enter($__internal_6a9ea3903f5d4f60e01d1cd8b9ef294f5bfac94010681c44d6d99021266ceb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5be209246416ead5e48082fae790e3b8130d047be9795c22a00880cf7b43d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5be209246416ead5e48082fae790e3b8130d047be9795c22a00880cf7b43d11->enter($__internal_f5be209246416ead5e48082fae790e3b8130d047be9795c22a00880cf7b43d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f5be209246416ead5e48082fae790e3b8130d047be9795c22a00880cf7b43d11->leave($__internal_f5be209246416ead5e48082fae790e3b8130d047be9795c22a00880cf7b43d11_prof);

        
        $__internal_6a9ea3903f5d4f60e01d1cd8b9ef294f5bfac94010681c44d6d99021266ceb99->leave($__internal_6a9ea3903f5d4f60e01d1cd8b9ef294f5bfac94010681c44d6d99021266ceb99_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1948922249022a9d975af8ce8a010729fa0eb195cbccadf4a07b0eef18f2566d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1948922249022a9d975af8ce8a010729fa0eb195cbccadf4a07b0eef18f2566d->enter($__internal_1948922249022a9d975af8ce8a010729fa0eb195cbccadf4a07b0eef18f2566d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce4b18ae18a9d2bfedabdffc70e743ea88c9ef3405bd3cae01e3a00e187f7994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4b18ae18a9d2bfedabdffc70e743ea88c9ef3405bd3cae01e3a00e187f7994->enter($__internal_ce4b18ae18a9d2bfedabdffc70e743ea88c9ef3405bd3cae01e3a00e187f7994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce4b18ae18a9d2bfedabdffc70e743ea88c9ef3405bd3cae01e3a00e187f7994->leave($__internal_ce4b18ae18a9d2bfedabdffc70e743ea88c9ef3405bd3cae01e3a00e187f7994_prof);

        
        $__internal_1948922249022a9d975af8ce8a010729fa0eb195cbccadf4a07b0eef18f2566d->leave($__internal_1948922249022a9d975af8ce8a010729fa0eb195cbccadf4a07b0eef18f2566d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

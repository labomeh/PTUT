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
        $__internal_8dbae598215c872af0d80119d5ba7c7b5b5b8a5c7451d400508cf425ee32a25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbae598215c872af0d80119d5ba7c7b5b5b8a5c7451d400508cf425ee32a25c->enter($__internal_8dbae598215c872af0d80119d5ba7c7b5b5b8a5c7451d400508cf425ee32a25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_167411204cb28145e9e23861dbff61543e244798ade84e196c6e51e4a6b8c465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167411204cb28145e9e23861dbff61543e244798ade84e196c6e51e4a6b8c465->enter($__internal_167411204cb28145e9e23861dbff61543e244798ade84e196c6e51e4a6b8c465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dbae598215c872af0d80119d5ba7c7b5b5b8a5c7451d400508cf425ee32a25c->leave($__internal_8dbae598215c872af0d80119d5ba7c7b5b5b8a5c7451d400508cf425ee32a25c_prof);

        
        $__internal_167411204cb28145e9e23861dbff61543e244798ade84e196c6e51e4a6b8c465->leave($__internal_167411204cb28145e9e23861dbff61543e244798ade84e196c6e51e4a6b8c465_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_375143e906f8722a766d2134d384b7eab08989deb9bc82e1b6a0572fc33688db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375143e906f8722a766d2134d384b7eab08989deb9bc82e1b6a0572fc33688db->enter($__internal_375143e906f8722a766d2134d384b7eab08989deb9bc82e1b6a0572fc33688db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9819e28e270ec765cad980690869793c88786b7b6b2bbb35cf86295d69ec7eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9819e28e270ec765cad980690869793c88786b7b6b2bbb35cf86295d69ec7eee->enter($__internal_9819e28e270ec765cad980690869793c88786b7b6b2bbb35cf86295d69ec7eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9819e28e270ec765cad980690869793c88786b7b6b2bbb35cf86295d69ec7eee->leave($__internal_9819e28e270ec765cad980690869793c88786b7b6b2bbb35cf86295d69ec7eee_prof);

        
        $__internal_375143e906f8722a766d2134d384b7eab08989deb9bc82e1b6a0572fc33688db->leave($__internal_375143e906f8722a766d2134d384b7eab08989deb9bc82e1b6a0572fc33688db_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3e443c295203366ad9844f237d24340a16d146df4cdf0331476ae6e2fe1dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3e443c295203366ad9844f237d24340a16d146df4cdf0331476ae6e2fe1dcc->enter($__internal_fd3e443c295203366ad9844f237d24340a16d146df4cdf0331476ae6e2fe1dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc18901f5d430fc94c43f33cf7caf3fdbc2022593ddb11f549d7119bab0b0d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc18901f5d430fc94c43f33cf7caf3fdbc2022593ddb11f549d7119bab0b0d03->enter($__internal_fc18901f5d430fc94c43f33cf7caf3fdbc2022593ddb11f549d7119bab0b0d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc18901f5d430fc94c43f33cf7caf3fdbc2022593ddb11f549d7119bab0b0d03->leave($__internal_fc18901f5d430fc94c43f33cf7caf3fdbc2022593ddb11f549d7119bab0b0d03_prof);

        
        $__internal_fd3e443c295203366ad9844f237d24340a16d146df4cdf0331476ae6e2fe1dcc->leave($__internal_fd3e443c295203366ad9844f237d24340a16d146df4cdf0331476ae6e2fe1dcc_prof);

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

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
        $__internal_9f6e9c0b4cb1a2b8689cb008b870a11aa2d0d105eef6c967b0795fafe7844fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6e9c0b4cb1a2b8689cb008b870a11aa2d0d105eef6c967b0795fafe7844fc2->enter($__internal_9f6e9c0b4cb1a2b8689cb008b870a11aa2d0d105eef6c967b0795fafe7844fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e1a88902df62fe74ad235a559f452b5cda7a77b5b4a7fa463c377d610045abbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a88902df62fe74ad235a559f452b5cda7a77b5b4a7fa463c377d610045abbc->enter($__internal_e1a88902df62fe74ad235a559f452b5cda7a77b5b4a7fa463c377d610045abbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6e9c0b4cb1a2b8689cb008b870a11aa2d0d105eef6c967b0795fafe7844fc2->leave($__internal_9f6e9c0b4cb1a2b8689cb008b870a11aa2d0d105eef6c967b0795fafe7844fc2_prof);

        
        $__internal_e1a88902df62fe74ad235a559f452b5cda7a77b5b4a7fa463c377d610045abbc->leave($__internal_e1a88902df62fe74ad235a559f452b5cda7a77b5b4a7fa463c377d610045abbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ea6a9f36c9ea26c58ec5e2f2943595bc500a5e161a8be557ed4f191d9e31dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea6a9f36c9ea26c58ec5e2f2943595bc500a5e161a8be557ed4f191d9e31dc4->enter($__internal_8ea6a9f36c9ea26c58ec5e2f2943595bc500a5e161a8be557ed4f191d9e31dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae466405ba464f9e9e32c01d0815f43e9f39f43dc426899ad2682a19b3dd2da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae466405ba464f9e9e32c01d0815f43e9f39f43dc426899ad2682a19b3dd2da8->enter($__internal_ae466405ba464f9e9e32c01d0815f43e9f39f43dc426899ad2682a19b3dd2da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ae466405ba464f9e9e32c01d0815f43e9f39f43dc426899ad2682a19b3dd2da8->leave($__internal_ae466405ba464f9e9e32c01d0815f43e9f39f43dc426899ad2682a19b3dd2da8_prof);

        
        $__internal_8ea6a9f36c9ea26c58ec5e2f2943595bc500a5e161a8be557ed4f191d9e31dc4->leave($__internal_8ea6a9f36c9ea26c58ec5e2f2943595bc500a5e161a8be557ed4f191d9e31dc4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_264328a6dca4fa3b3f29eac18fe95b0b9591a09160771ac745936ff304970f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264328a6dca4fa3b3f29eac18fe95b0b9591a09160771ac745936ff304970f39->enter($__internal_264328a6dca4fa3b3f29eac18fe95b0b9591a09160771ac745936ff304970f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77f7ac2da08b3c38c3690de330ceaff718046c53257b4a6ebbc98b533f14b87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f7ac2da08b3c38c3690de330ceaff718046c53257b4a6ebbc98b533f14b87b->enter($__internal_77f7ac2da08b3c38c3690de330ceaff718046c53257b4a6ebbc98b533f14b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77f7ac2da08b3c38c3690de330ceaff718046c53257b4a6ebbc98b533f14b87b->leave($__internal_77f7ac2da08b3c38c3690de330ceaff718046c53257b4a6ebbc98b533f14b87b_prof);

        
        $__internal_264328a6dca4fa3b3f29eac18fe95b0b9591a09160771ac745936ff304970f39->leave($__internal_264328a6dca4fa3b3f29eac18fe95b0b9591a09160771ac745936ff304970f39_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

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
        $__internal_1d99cf17e684040e450a62fdcd99ec3dc43d2a7fb5d2bf7941a6c1a11d0e5b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d99cf17e684040e450a62fdcd99ec3dc43d2a7fb5d2bf7941a6c1a11d0e5b45->enter($__internal_1d99cf17e684040e450a62fdcd99ec3dc43d2a7fb5d2bf7941a6c1a11d0e5b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ea9ed6a0c8b749de9b99602719ec4573c46c69191bf3d4683c3a4b135387846b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9ed6a0c8b749de9b99602719ec4573c46c69191bf3d4683c3a4b135387846b->enter($__internal_ea9ed6a0c8b749de9b99602719ec4573c46c69191bf3d4683c3a4b135387846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d99cf17e684040e450a62fdcd99ec3dc43d2a7fb5d2bf7941a6c1a11d0e5b45->leave($__internal_1d99cf17e684040e450a62fdcd99ec3dc43d2a7fb5d2bf7941a6c1a11d0e5b45_prof);

        
        $__internal_ea9ed6a0c8b749de9b99602719ec4573c46c69191bf3d4683c3a4b135387846b->leave($__internal_ea9ed6a0c8b749de9b99602719ec4573c46c69191bf3d4683c3a4b135387846b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_521ab0f0b5a4d7d6d8d27d51dd61c1879dbe1310a94ad5c29be5e0e944fd265c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521ab0f0b5a4d7d6d8d27d51dd61c1879dbe1310a94ad5c29be5e0e944fd265c->enter($__internal_521ab0f0b5a4d7d6d8d27d51dd61c1879dbe1310a94ad5c29be5e0e944fd265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_edb7f97f14b30472636440c8917ecffbb5694a03e764527eb0b508927b0de1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb7f97f14b30472636440c8917ecffbb5694a03e764527eb0b508927b0de1fc->enter($__internal_edb7f97f14b30472636440c8917ecffbb5694a03e764527eb0b508927b0de1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_edb7f97f14b30472636440c8917ecffbb5694a03e764527eb0b508927b0de1fc->leave($__internal_edb7f97f14b30472636440c8917ecffbb5694a03e764527eb0b508927b0de1fc_prof);

        
        $__internal_521ab0f0b5a4d7d6d8d27d51dd61c1879dbe1310a94ad5c29be5e0e944fd265c->leave($__internal_521ab0f0b5a4d7d6d8d27d51dd61c1879dbe1310a94ad5c29be5e0e944fd265c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b921309578495a11904ef27e64c4f04294e4c3af13555823a864838111395a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b921309578495a11904ef27e64c4f04294e4c3af13555823a864838111395a55->enter($__internal_b921309578495a11904ef27e64c4f04294e4c3af13555823a864838111395a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_732dc58f43d7a148f2b0b4ea8c6d8845957f796d225447b314619ae9f7f573b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732dc58f43d7a148f2b0b4ea8c6d8845957f796d225447b314619ae9f7f573b6->enter($__internal_732dc58f43d7a148f2b0b4ea8c6d8845957f796d225447b314619ae9f7f573b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_732dc58f43d7a148f2b0b4ea8c6d8845957f796d225447b314619ae9f7f573b6->leave($__internal_732dc58f43d7a148f2b0b4ea8c6d8845957f796d225447b314619ae9f7f573b6_prof);

        
        $__internal_b921309578495a11904ef27e64c4f04294e4c3af13555823a864838111395a55->leave($__internal_b921309578495a11904ef27e64c4f04294e4c3af13555823a864838111395a55_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

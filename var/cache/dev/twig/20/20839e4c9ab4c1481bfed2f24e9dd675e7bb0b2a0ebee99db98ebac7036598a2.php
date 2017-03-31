<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9cf4ecfd74a1037bf1f0d06394a435916895ee5ce6b501033ff54a9c01b03044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69ecfdbfbce3ee079fdb4910491044c5a2c55fa34ae605c76a08143f943c06fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ecfdbfbce3ee079fdb4910491044c5a2c55fa34ae605c76a08143f943c06fa->enter($__internal_69ecfdbfbce3ee079fdb4910491044c5a2c55fa34ae605c76a08143f943c06fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b794de07bb444a5b48270cd39aed96b514f68ada43f10b689900683e35f192e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b794de07bb444a5b48270cd39aed96b514f68ada43f10b689900683e35f192e3->enter($__internal_b794de07bb444a5b48270cd39aed96b514f68ada43f10b689900683e35f192e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ecfdbfbce3ee079fdb4910491044c5a2c55fa34ae605c76a08143f943c06fa->leave($__internal_69ecfdbfbce3ee079fdb4910491044c5a2c55fa34ae605c76a08143f943c06fa_prof);

        
        $__internal_b794de07bb444a5b48270cd39aed96b514f68ada43f10b689900683e35f192e3->leave($__internal_b794de07bb444a5b48270cd39aed96b514f68ada43f10b689900683e35f192e3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7a0c4d43c614ab7daed524dadfb7d9f1dee09c158aeec0d329ced557ae65aa2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0c4d43c614ab7daed524dadfb7d9f1dee09c158aeec0d329ced557ae65aa2f->enter($__internal_7a0c4d43c614ab7daed524dadfb7d9f1dee09c158aeec0d329ced557ae65aa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4e20161b723472744290b8343c120d622632dba5a42223c137379b0534ca8731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e20161b723472744290b8343c120d622632dba5a42223c137379b0534ca8731->enter($__internal_4e20161b723472744290b8343c120d622632dba5a42223c137379b0534ca8731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_4e20161b723472744290b8343c120d622632dba5a42223c137379b0534ca8731->leave($__internal_4e20161b723472744290b8343c120d622632dba5a42223c137379b0534ca8731_prof);

        
        $__internal_7a0c4d43c614ab7daed524dadfb7d9f1dee09c158aeec0d329ced557ae65aa2f->leave($__internal_7a0c4d43c614ab7daed524dadfb7d9f1dee09c158aeec0d329ced557ae65aa2f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fb3524db85de8785d7c1f327b3a8ddc9fa03d02d8cd39fc0363165b9d27cedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb3524db85de8785d7c1f327b3a8ddc9fa03d02d8cd39fc0363165b9d27cedf->enter($__internal_8fb3524db85de8785d7c1f327b3a8ddc9fa03d02d8cd39fc0363165b9d27cedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2eeece391eeaa665ad41d6c24f167d87777a63a34b37478af4260bf6cbbd388e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eeece391eeaa665ad41d6c24f167d87777a63a34b37478af4260bf6cbbd388e->enter($__internal_2eeece391eeaa665ad41d6c24f167d87777a63a34b37478af4260bf6cbbd388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2eeece391eeaa665ad41d6c24f167d87777a63a34b37478af4260bf6cbbd388e->leave($__internal_2eeece391eeaa665ad41d6c24f167d87777a63a34b37478af4260bf6cbbd388e_prof);

        
        $__internal_8fb3524db85de8785d7c1f327b3a8ddc9fa03d02d8cd39fc0363165b9d27cedf->leave($__internal_8fb3524db85de8785d7c1f327b3a8ddc9fa03d02d8cd39fc0363165b9d27cedf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

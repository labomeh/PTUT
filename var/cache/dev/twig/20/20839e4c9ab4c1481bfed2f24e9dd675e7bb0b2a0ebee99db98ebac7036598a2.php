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
        $__internal_19dc5e3d474dce3c893488ea7d3c1e78fbdb3dd5d1eb080366824ffc02a4ea5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19dc5e3d474dce3c893488ea7d3c1e78fbdb3dd5d1eb080366824ffc02a4ea5c->enter($__internal_19dc5e3d474dce3c893488ea7d3c1e78fbdb3dd5d1eb080366824ffc02a4ea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_59c5e561eb5943c40e377b58b3f5f2e61947dec395ee3780851e503ad2fc00de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c5e561eb5943c40e377b58b3f5f2e61947dec395ee3780851e503ad2fc00de->enter($__internal_59c5e561eb5943c40e377b58b3f5f2e61947dec395ee3780851e503ad2fc00de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19dc5e3d474dce3c893488ea7d3c1e78fbdb3dd5d1eb080366824ffc02a4ea5c->leave($__internal_19dc5e3d474dce3c893488ea7d3c1e78fbdb3dd5d1eb080366824ffc02a4ea5c_prof);

        
        $__internal_59c5e561eb5943c40e377b58b3f5f2e61947dec395ee3780851e503ad2fc00de->leave($__internal_59c5e561eb5943c40e377b58b3f5f2e61947dec395ee3780851e503ad2fc00de_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3d7b0aa53024fa22d9e223ec79f066b1639caabf81d371ab684b72fb038d24e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7b0aa53024fa22d9e223ec79f066b1639caabf81d371ab684b72fb038d24e5->enter($__internal_3d7b0aa53024fa22d9e223ec79f066b1639caabf81d371ab684b72fb038d24e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6543dc30d3de11b9d47baab8fa09cebc08a43270f4ea09c0a48eccf2bd215d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6543dc30d3de11b9d47baab8fa09cebc08a43270f4ea09c0a48eccf2bd215d24->enter($__internal_6543dc30d3de11b9d47baab8fa09cebc08a43270f4ea09c0a48eccf2bd215d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6543dc30d3de11b9d47baab8fa09cebc08a43270f4ea09c0a48eccf2bd215d24->leave($__internal_6543dc30d3de11b9d47baab8fa09cebc08a43270f4ea09c0a48eccf2bd215d24_prof);

        
        $__internal_3d7b0aa53024fa22d9e223ec79f066b1639caabf81d371ab684b72fb038d24e5->leave($__internal_3d7b0aa53024fa22d9e223ec79f066b1639caabf81d371ab684b72fb038d24e5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_360441cc7f249700a73591e398722745a8f0822f8be547f636946d3ff15097a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360441cc7f249700a73591e398722745a8f0822f8be547f636946d3ff15097a9->enter($__internal_360441cc7f249700a73591e398722745a8f0822f8be547f636946d3ff15097a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4667242e64ba450d942b60319a85f831ff15289a976e14e8b29750d26d4c713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4667242e64ba450d942b60319a85f831ff15289a976e14e8b29750d26d4c713->enter($__internal_e4667242e64ba450d942b60319a85f831ff15289a976e14e8b29750d26d4c713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e4667242e64ba450d942b60319a85f831ff15289a976e14e8b29750d26d4c713->leave($__internal_e4667242e64ba450d942b60319a85f831ff15289a976e14e8b29750d26d4c713_prof);

        
        $__internal_360441cc7f249700a73591e398722745a8f0822f8be547f636946d3ff15097a9->leave($__internal_360441cc7f249700a73591e398722745a8f0822f8be547f636946d3ff15097a9_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

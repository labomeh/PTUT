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
        $__internal_27ca9f081290d930cdddb370c5056d12339384f84d477cadc5a34d8bc5d6e634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ca9f081290d930cdddb370c5056d12339384f84d477cadc5a34d8bc5d6e634->enter($__internal_27ca9f081290d930cdddb370c5056d12339384f84d477cadc5a34d8bc5d6e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1db905eb5511b142230dac8933b0185ea140e3b33666182183d18306bc608c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db905eb5511b142230dac8933b0185ea140e3b33666182183d18306bc608c58->enter($__internal_1db905eb5511b142230dac8933b0185ea140e3b33666182183d18306bc608c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ca9f081290d930cdddb370c5056d12339384f84d477cadc5a34d8bc5d6e634->leave($__internal_27ca9f081290d930cdddb370c5056d12339384f84d477cadc5a34d8bc5d6e634_prof);

        
        $__internal_1db905eb5511b142230dac8933b0185ea140e3b33666182183d18306bc608c58->leave($__internal_1db905eb5511b142230dac8933b0185ea140e3b33666182183d18306bc608c58_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7ed06dd12322688a38ad312954f0f9468c0b548c861ffb8779055178584a9619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed06dd12322688a38ad312954f0f9468c0b548c861ffb8779055178584a9619->enter($__internal_7ed06dd12322688a38ad312954f0f9468c0b548c861ffb8779055178584a9619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_66aee60c1a8e941c0a17ff506ef26749b542d200fe1af4518287717d6a638ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66aee60c1a8e941c0a17ff506ef26749b542d200fe1af4518287717d6a638ad6->enter($__internal_66aee60c1a8e941c0a17ff506ef26749b542d200fe1af4518287717d6a638ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_66aee60c1a8e941c0a17ff506ef26749b542d200fe1af4518287717d6a638ad6->leave($__internal_66aee60c1a8e941c0a17ff506ef26749b542d200fe1af4518287717d6a638ad6_prof);

        
        $__internal_7ed06dd12322688a38ad312954f0f9468c0b548c861ffb8779055178584a9619->leave($__internal_7ed06dd12322688a38ad312954f0f9468c0b548c861ffb8779055178584a9619_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e6ad779f8b111c85465523339fa0051165accd23c6da1e9b3568cdd54aeedd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6ad779f8b111c85465523339fa0051165accd23c6da1e9b3568cdd54aeedd0->enter($__internal_7e6ad779f8b111c85465523339fa0051165accd23c6da1e9b3568cdd54aeedd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66a20369c5a62e4bc72ad7eb78f448091f81d40baefe6339477ae9cf6e4c3267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a20369c5a62e4bc72ad7eb78f448091f81d40baefe6339477ae9cf6e4c3267->enter($__internal_66a20369c5a62e4bc72ad7eb78f448091f81d40baefe6339477ae9cf6e4c3267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_66a20369c5a62e4bc72ad7eb78f448091f81d40baefe6339477ae9cf6e4c3267->leave($__internal_66a20369c5a62e4bc72ad7eb78f448091f81d40baefe6339477ae9cf6e4c3267_prof);

        
        $__internal_7e6ad779f8b111c85465523339fa0051165accd23c6da1e9b3568cdd54aeedd0->leave($__internal_7e6ad779f8b111c85465523339fa0051165accd23c6da1e9b3568cdd54aeedd0_prof);

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

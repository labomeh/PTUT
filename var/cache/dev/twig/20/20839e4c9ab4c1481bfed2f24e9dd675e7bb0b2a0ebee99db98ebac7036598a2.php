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
        $__internal_239ba0611129ec946a4d40fe0580a75d5464c2fab1db71278ab57ac758036bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239ba0611129ec946a4d40fe0580a75d5464c2fab1db71278ab57ac758036bbf->enter($__internal_239ba0611129ec946a4d40fe0580a75d5464c2fab1db71278ab57ac758036bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fb7f6bee49c93d011b6ca8cd6eecd54ed8aa1b8d62f80f840c7d9b3cc0bf55e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7f6bee49c93d011b6ca8cd6eecd54ed8aa1b8d62f80f840c7d9b3cc0bf55e8->enter($__internal_fb7f6bee49c93d011b6ca8cd6eecd54ed8aa1b8d62f80f840c7d9b3cc0bf55e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239ba0611129ec946a4d40fe0580a75d5464c2fab1db71278ab57ac758036bbf->leave($__internal_239ba0611129ec946a4d40fe0580a75d5464c2fab1db71278ab57ac758036bbf_prof);

        
        $__internal_fb7f6bee49c93d011b6ca8cd6eecd54ed8aa1b8d62f80f840c7d9b3cc0bf55e8->leave($__internal_fb7f6bee49c93d011b6ca8cd6eecd54ed8aa1b8d62f80f840c7d9b3cc0bf55e8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_35879d71f37f3175a2eddb4f396beafe60a69e29e2682ffbd1084ab48dc4b2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35879d71f37f3175a2eddb4f396beafe60a69e29e2682ffbd1084ab48dc4b2e8->enter($__internal_35879d71f37f3175a2eddb4f396beafe60a69e29e2682ffbd1084ab48dc4b2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_be33e3b2d2bdb9d5a270f77ccf45da48f79d934d65c5f0532937403a8d38c1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be33e3b2d2bdb9d5a270f77ccf45da48f79d934d65c5f0532937403a8d38c1c2->enter($__internal_be33e3b2d2bdb9d5a270f77ccf45da48f79d934d65c5f0532937403a8d38c1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_be33e3b2d2bdb9d5a270f77ccf45da48f79d934d65c5f0532937403a8d38c1c2->leave($__internal_be33e3b2d2bdb9d5a270f77ccf45da48f79d934d65c5f0532937403a8d38c1c2_prof);

        
        $__internal_35879d71f37f3175a2eddb4f396beafe60a69e29e2682ffbd1084ab48dc4b2e8->leave($__internal_35879d71f37f3175a2eddb4f396beafe60a69e29e2682ffbd1084ab48dc4b2e8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59d2104ba1b8e5f7bd5ceb61cc89987000b2468e6ee403d9c6277b503120edb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d2104ba1b8e5f7bd5ceb61cc89987000b2468e6ee403d9c6277b503120edb2->enter($__internal_59d2104ba1b8e5f7bd5ceb61cc89987000b2468e6ee403d9c6277b503120edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62e65ef1bfeeb8030fe2adec770755cb27e29c5aad24353c69a26cc257cf9fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e65ef1bfeeb8030fe2adec770755cb27e29c5aad24353c69a26cc257cf9fdb->enter($__internal_62e65ef1bfeeb8030fe2adec770755cb27e29c5aad24353c69a26cc257cf9fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_62e65ef1bfeeb8030fe2adec770755cb27e29c5aad24353c69a26cc257cf9fdb->leave($__internal_62e65ef1bfeeb8030fe2adec770755cb27e29c5aad24353c69a26cc257cf9fdb_prof);

        
        $__internal_59d2104ba1b8e5f7bd5ceb61cc89987000b2468e6ee403d9c6277b503120edb2->leave($__internal_59d2104ba1b8e5f7bd5ceb61cc89987000b2468e6ee403d9c6277b503120edb2_prof);

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

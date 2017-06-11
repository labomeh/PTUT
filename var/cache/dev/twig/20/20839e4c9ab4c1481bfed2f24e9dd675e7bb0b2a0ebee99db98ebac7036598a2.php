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
        $__internal_fcf6a3ba9baab8c22817202b0d005fb9c0e41bc0d8ce863afae6acdd04565ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf6a3ba9baab8c22817202b0d005fb9c0e41bc0d8ce863afae6acdd04565ba0->enter($__internal_fcf6a3ba9baab8c22817202b0d005fb9c0e41bc0d8ce863afae6acdd04565ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_52b4680a0af806a02c261d98fef7e0b8c821a9822c597456a081430c41b4e1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b4680a0af806a02c261d98fef7e0b8c821a9822c597456a081430c41b4e1bd->enter($__internal_52b4680a0af806a02c261d98fef7e0b8c821a9822c597456a081430c41b4e1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf6a3ba9baab8c22817202b0d005fb9c0e41bc0d8ce863afae6acdd04565ba0->leave($__internal_fcf6a3ba9baab8c22817202b0d005fb9c0e41bc0d8ce863afae6acdd04565ba0_prof);

        
        $__internal_52b4680a0af806a02c261d98fef7e0b8c821a9822c597456a081430c41b4e1bd->leave($__internal_52b4680a0af806a02c261d98fef7e0b8c821a9822c597456a081430c41b4e1bd_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e6cbd3d9830fd33a869ff2861c89b8c91f4c68765e1372b66057f2861bf48489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cbd3d9830fd33a869ff2861c89b8c91f4c68765e1372b66057f2861bf48489->enter($__internal_e6cbd3d9830fd33a869ff2861c89b8c91f4c68765e1372b66057f2861bf48489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0ed8154270df2f5d8883b11b8dcb43f79fb25871d2c34675bdf431101b1c70bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed8154270df2f5d8883b11b8dcb43f79fb25871d2c34675bdf431101b1c70bf->enter($__internal_0ed8154270df2f5d8883b11b8dcb43f79fb25871d2c34675bdf431101b1c70bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0ed8154270df2f5d8883b11b8dcb43f79fb25871d2c34675bdf431101b1c70bf->leave($__internal_0ed8154270df2f5d8883b11b8dcb43f79fb25871d2c34675bdf431101b1c70bf_prof);

        
        $__internal_e6cbd3d9830fd33a869ff2861c89b8c91f4c68765e1372b66057f2861bf48489->leave($__internal_e6cbd3d9830fd33a869ff2861c89b8c91f4c68765e1372b66057f2861bf48489_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19f27302637dd0d0b5df138baf9042f243120bec946bfc537e93c60582a720de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f27302637dd0d0b5df138baf9042f243120bec946bfc537e93c60582a720de->enter($__internal_19f27302637dd0d0b5df138baf9042f243120bec946bfc537e93c60582a720de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96c4696253922bf3785468d427f3394e3638334f706ba8b37dfe74cb928d6863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c4696253922bf3785468d427f3394e3638334f706ba8b37dfe74cb928d6863->enter($__internal_96c4696253922bf3785468d427f3394e3638334f706ba8b37dfe74cb928d6863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_96c4696253922bf3785468d427f3394e3638334f706ba8b37dfe74cb928d6863->leave($__internal_96c4696253922bf3785468d427f3394e3638334f706ba8b37dfe74cb928d6863_prof);

        
        $__internal_19f27302637dd0d0b5df138baf9042f243120bec946bfc537e93c60582a720de->leave($__internal_19f27302637dd0d0b5df138baf9042f243120bec946bfc537e93c60582a720de_prof);

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

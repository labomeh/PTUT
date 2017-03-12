<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_17c5cdf1c0d665c42a758eb9df8aeb1a047e9429f2f285c16d81c9c9ee531f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_f8348e04c6304ec19e49ee94884f5606563b63557d6960ea06d1b222ceda9b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8348e04c6304ec19e49ee94884f5606563b63557d6960ea06d1b222ceda9b9d->enter($__internal_f8348e04c6304ec19e49ee94884f5606563b63557d6960ea06d1b222ceda9b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d259c9bef613ac76d927032deb239728edcb3ebcfdec88a6c7b300e634e9e9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d259c9bef613ac76d927032deb239728edcb3ebcfdec88a6c7b300e634e9e9c7->enter($__internal_d259c9bef613ac76d927032deb239728edcb3ebcfdec88a6c7b300e634e9e9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8348e04c6304ec19e49ee94884f5606563b63557d6960ea06d1b222ceda9b9d->leave($__internal_f8348e04c6304ec19e49ee94884f5606563b63557d6960ea06d1b222ceda9b9d_prof);

        
        $__internal_d259c9bef613ac76d927032deb239728edcb3ebcfdec88a6c7b300e634e9e9c7->leave($__internal_d259c9bef613ac76d927032deb239728edcb3ebcfdec88a6c7b300e634e9e9c7_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7248a490963308343012a87bc65c1b12f02433d3e922bd0cdc043092fb4514a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7248a490963308343012a87bc65c1b12f02433d3e922bd0cdc043092fb4514a9->enter($__internal_7248a490963308343012a87bc65c1b12f02433d3e922bd0cdc043092fb4514a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_27494d63753ef5f5fefcb3a6533c2e65ff295ae8d8c7a3cf387e2d29d9f8a78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27494d63753ef5f5fefcb3a6533c2e65ff295ae8d8c7a3cf387e2d29d9f8a78d->enter($__internal_27494d63753ef5f5fefcb3a6533c2e65ff295ae8d8c7a3cf387e2d29d9f8a78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_27494d63753ef5f5fefcb3a6533c2e65ff295ae8d8c7a3cf387e2d29d9f8a78d->leave($__internal_27494d63753ef5f5fefcb3a6533c2e65ff295ae8d8c7a3cf387e2d29d9f8a78d_prof);

        
        $__internal_7248a490963308343012a87bc65c1b12f02433d3e922bd0cdc043092fb4514a9->leave($__internal_7248a490963308343012a87bc65c1b12f02433d3e922bd0cdc043092fb4514a9_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7cd3a5c47bf27d3814e3ef7d9a313500f6c12cad2677401e194bd71b1a060261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd3a5c47bf27d3814e3ef7d9a313500f6c12cad2677401e194bd71b1a060261->enter($__internal_7cd3a5c47bf27d3814e3ef7d9a313500f6c12cad2677401e194bd71b1a060261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_119de1ad2a1cbe9f337f7191b034fa0d514dc94b5fc7a9393a5fb929b40fc3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119de1ad2a1cbe9f337f7191b034fa0d514dc94b5fc7a9393a5fb929b40fc3bb->enter($__internal_119de1ad2a1cbe9f337f7191b034fa0d514dc94b5fc7a9393a5fb929b40fc3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_119de1ad2a1cbe9f337f7191b034fa0d514dc94b5fc7a9393a5fb929b40fc3bb->leave($__internal_119de1ad2a1cbe9f337f7191b034fa0d514dc94b5fc7a9393a5fb929b40fc3bb_prof);

        
        $__internal_7cd3a5c47bf27d3814e3ef7d9a313500f6c12cad2677401e194bd71b1a060261->leave($__internal_7cd3a5c47bf27d3814e3ef7d9a313500f6c12cad2677401e194bd71b1a060261_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

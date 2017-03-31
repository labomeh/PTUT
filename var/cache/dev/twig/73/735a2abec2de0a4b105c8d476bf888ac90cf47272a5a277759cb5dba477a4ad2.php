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
        $__internal_a50c7b8b4238758618ae40cda1d67dcf47c919e170db8ef9f86a6365d41d540d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50c7b8b4238758618ae40cda1d67dcf47c919e170db8ef9f86a6365d41d540d->enter($__internal_a50c7b8b4238758618ae40cda1d67dcf47c919e170db8ef9f86a6365d41d540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6fd30ba5ca772c4e09661e17d3c3b0d7da04da91d0b40b91a0b09167d795e9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd30ba5ca772c4e09661e17d3c3b0d7da04da91d0b40b91a0b09167d795e9fb->enter($__internal_6fd30ba5ca772c4e09661e17d3c3b0d7da04da91d0b40b91a0b09167d795e9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50c7b8b4238758618ae40cda1d67dcf47c919e170db8ef9f86a6365d41d540d->leave($__internal_a50c7b8b4238758618ae40cda1d67dcf47c919e170db8ef9f86a6365d41d540d_prof);

        
        $__internal_6fd30ba5ca772c4e09661e17d3c3b0d7da04da91d0b40b91a0b09167d795e9fb->leave($__internal_6fd30ba5ca772c4e09661e17d3c3b0d7da04da91d0b40b91a0b09167d795e9fb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bef5458d6a0221f6829c051e1ea3716bbf9e3080e5ead552ba8cad2b6ca82140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef5458d6a0221f6829c051e1ea3716bbf9e3080e5ead552ba8cad2b6ca82140->enter($__internal_bef5458d6a0221f6829c051e1ea3716bbf9e3080e5ead552ba8cad2b6ca82140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_da59a9fe4e1ffa981eba4c58165b10c479365cabc3d57018f06cf75ce3de374f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da59a9fe4e1ffa981eba4c58165b10c479365cabc3d57018f06cf75ce3de374f->enter($__internal_da59a9fe4e1ffa981eba4c58165b10c479365cabc3d57018f06cf75ce3de374f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_da59a9fe4e1ffa981eba4c58165b10c479365cabc3d57018f06cf75ce3de374f->leave($__internal_da59a9fe4e1ffa981eba4c58165b10c479365cabc3d57018f06cf75ce3de374f_prof);

        
        $__internal_bef5458d6a0221f6829c051e1ea3716bbf9e3080e5ead552ba8cad2b6ca82140->leave($__internal_bef5458d6a0221f6829c051e1ea3716bbf9e3080e5ead552ba8cad2b6ca82140_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_636e7f5b40a64e4e930c13a51c4814fc2e177dabeba5b07d7c973833b40c4dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636e7f5b40a64e4e930c13a51c4814fc2e177dabeba5b07d7c973833b40c4dd0->enter($__internal_636e7f5b40a64e4e930c13a51c4814fc2e177dabeba5b07d7c973833b40c4dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_087c326a64d1af79c4ebf78d86c6969bca1a252c85dcdc88ebe9d9aefaec90d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087c326a64d1af79c4ebf78d86c6969bca1a252c85dcdc88ebe9d9aefaec90d6->enter($__internal_087c326a64d1af79c4ebf78d86c6969bca1a252c85dcdc88ebe9d9aefaec90d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_087c326a64d1af79c4ebf78d86c6969bca1a252c85dcdc88ebe9d9aefaec90d6->leave($__internal_087c326a64d1af79c4ebf78d86c6969bca1a252c85dcdc88ebe9d9aefaec90d6_prof);

        
        $__internal_636e7f5b40a64e4e930c13a51c4814fc2e177dabeba5b07d7c973833b40c4dd0->leave($__internal_636e7f5b40a64e4e930c13a51c4814fc2e177dabeba5b07d7c973833b40c4dd0_prof);

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

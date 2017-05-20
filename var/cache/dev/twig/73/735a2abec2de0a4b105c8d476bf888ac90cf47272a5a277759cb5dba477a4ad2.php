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
        $__internal_5f509031b9f18601105fc2adf318802c24d197712b656470cb668c75b6650705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f509031b9f18601105fc2adf318802c24d197712b656470cb668c75b6650705->enter($__internal_5f509031b9f18601105fc2adf318802c24d197712b656470cb668c75b6650705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_aa70c8a03d0eefe6faf86cfbba1dd50bbef834b581ab891a8e06e1a5410e3d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa70c8a03d0eefe6faf86cfbba1dd50bbef834b581ab891a8e06e1a5410e3d64->enter($__internal_aa70c8a03d0eefe6faf86cfbba1dd50bbef834b581ab891a8e06e1a5410e3d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f509031b9f18601105fc2adf318802c24d197712b656470cb668c75b6650705->leave($__internal_5f509031b9f18601105fc2adf318802c24d197712b656470cb668c75b6650705_prof);

        
        $__internal_aa70c8a03d0eefe6faf86cfbba1dd50bbef834b581ab891a8e06e1a5410e3d64->leave($__internal_aa70c8a03d0eefe6faf86cfbba1dd50bbef834b581ab891a8e06e1a5410e3d64_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b167bbe50dd8b372655a9d9d087987ab4b19ae84fde5bc4ecd91a75795059fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b167bbe50dd8b372655a9d9d087987ab4b19ae84fde5bc4ecd91a75795059fc8->enter($__internal_b167bbe50dd8b372655a9d9d087987ab4b19ae84fde5bc4ecd91a75795059fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5d272c4ac2cffcf553a0a6afc9ebcaa105a17ac5aa0f8ef962ae5374d455f9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d272c4ac2cffcf553a0a6afc9ebcaa105a17ac5aa0f8ef962ae5374d455f9b1->enter($__internal_5d272c4ac2cffcf553a0a6afc9ebcaa105a17ac5aa0f8ef962ae5374d455f9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5d272c4ac2cffcf553a0a6afc9ebcaa105a17ac5aa0f8ef962ae5374d455f9b1->leave($__internal_5d272c4ac2cffcf553a0a6afc9ebcaa105a17ac5aa0f8ef962ae5374d455f9b1_prof);

        
        $__internal_b167bbe50dd8b372655a9d9d087987ab4b19ae84fde5bc4ecd91a75795059fc8->leave($__internal_b167bbe50dd8b372655a9d9d087987ab4b19ae84fde5bc4ecd91a75795059fc8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5c4d68cdfc6ce5c664f7c155c42b0f090ae774c8684729ae9b784f55c0491a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c4d68cdfc6ce5c664f7c155c42b0f090ae774c8684729ae9b784f55c0491a8->enter($__internal_a5c4d68cdfc6ce5c664f7c155c42b0f090ae774c8684729ae9b784f55c0491a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07963c6e3eb03a767cb61288d7b11ffaa2e6a242030c18263a61f4c5d7ceb8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07963c6e3eb03a767cb61288d7b11ffaa2e6a242030c18263a61f4c5d7ceb8ab->enter($__internal_07963c6e3eb03a767cb61288d7b11ffaa2e6a242030c18263a61f4c5d7ceb8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_07963c6e3eb03a767cb61288d7b11ffaa2e6a242030c18263a61f4c5d7ceb8ab->leave($__internal_07963c6e3eb03a767cb61288d7b11ffaa2e6a242030c18263a61f4c5d7ceb8ab_prof);

        
        $__internal_a5c4d68cdfc6ce5c664f7c155c42b0f090ae774c8684729ae9b784f55c0491a8->leave($__internal_a5c4d68cdfc6ce5c664f7c155c42b0f090ae774c8684729ae9b784f55c0491a8_prof);

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

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
        $__internal_4bed112527efc6c26bbab8820172cdcfc4200d62387b06091fede8cdbdea9a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bed112527efc6c26bbab8820172cdcfc4200d62387b06091fede8cdbdea9a3d->enter($__internal_4bed112527efc6c26bbab8820172cdcfc4200d62387b06091fede8cdbdea9a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_eb8cd36060063b49fbdcefd4d6eb35044f789ee0c33267c11acc4267beda91d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8cd36060063b49fbdcefd4d6eb35044f789ee0c33267c11acc4267beda91d0->enter($__internal_eb8cd36060063b49fbdcefd4d6eb35044f789ee0c33267c11acc4267beda91d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bed112527efc6c26bbab8820172cdcfc4200d62387b06091fede8cdbdea9a3d->leave($__internal_4bed112527efc6c26bbab8820172cdcfc4200d62387b06091fede8cdbdea9a3d_prof);

        
        $__internal_eb8cd36060063b49fbdcefd4d6eb35044f789ee0c33267c11acc4267beda91d0->leave($__internal_eb8cd36060063b49fbdcefd4d6eb35044f789ee0c33267c11acc4267beda91d0_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0020351392f711404380f1890d525bc0084bb650eca3b72d93e7720cd3219f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0020351392f711404380f1890d525bc0084bb650eca3b72d93e7720cd3219f38->enter($__internal_0020351392f711404380f1890d525bc0084bb650eca3b72d93e7720cd3219f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_02e339cc16ae2a4bd0473c7ff3fabab014487828e95b5bf5712a57faa4abb3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e339cc16ae2a4bd0473c7ff3fabab014487828e95b5bf5712a57faa4abb3c2->enter($__internal_02e339cc16ae2a4bd0473c7ff3fabab014487828e95b5bf5712a57faa4abb3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_02e339cc16ae2a4bd0473c7ff3fabab014487828e95b5bf5712a57faa4abb3c2->leave($__internal_02e339cc16ae2a4bd0473c7ff3fabab014487828e95b5bf5712a57faa4abb3c2_prof);

        
        $__internal_0020351392f711404380f1890d525bc0084bb650eca3b72d93e7720cd3219f38->leave($__internal_0020351392f711404380f1890d525bc0084bb650eca3b72d93e7720cd3219f38_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a49a42f713b44afc74b8889d5777e9adfa1941157d0461dce8c218391693fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a49a42f713b44afc74b8889d5777e9adfa1941157d0461dce8c218391693fbb->enter($__internal_5a49a42f713b44afc74b8889d5777e9adfa1941157d0461dce8c218391693fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e4439f06b6a113f2f1ce69cffe3c9eb097adc279204f467a3060da7229cd6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4439f06b6a113f2f1ce69cffe3c9eb097adc279204f467a3060da7229cd6ec->enter($__internal_2e4439f06b6a113f2f1ce69cffe3c9eb097adc279204f467a3060da7229cd6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2e4439f06b6a113f2f1ce69cffe3c9eb097adc279204f467a3060da7229cd6ec->leave($__internal_2e4439f06b6a113f2f1ce69cffe3c9eb097adc279204f467a3060da7229cd6ec_prof);

        
        $__internal_5a49a42f713b44afc74b8889d5777e9adfa1941157d0461dce8c218391693fbb->leave($__internal_5a49a42f713b44afc74b8889d5777e9adfa1941157d0461dce8c218391693fbb_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

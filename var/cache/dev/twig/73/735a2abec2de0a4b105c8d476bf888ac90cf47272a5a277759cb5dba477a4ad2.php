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
        $__internal_0aec071bbbc3d0bbac8fb41cfb3486c218d6b5feaef395c069d80f3c6cb5a7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aec071bbbc3d0bbac8fb41cfb3486c218d6b5feaef395c069d80f3c6cb5a7b6->enter($__internal_0aec071bbbc3d0bbac8fb41cfb3486c218d6b5feaef395c069d80f3c6cb5a7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3903029e827693eb4819b54ef210cbafbb837aa5e1da001941a4066b7ee5970a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3903029e827693eb4819b54ef210cbafbb837aa5e1da001941a4066b7ee5970a->enter($__internal_3903029e827693eb4819b54ef210cbafbb837aa5e1da001941a4066b7ee5970a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aec071bbbc3d0bbac8fb41cfb3486c218d6b5feaef395c069d80f3c6cb5a7b6->leave($__internal_0aec071bbbc3d0bbac8fb41cfb3486c218d6b5feaef395c069d80f3c6cb5a7b6_prof);

        
        $__internal_3903029e827693eb4819b54ef210cbafbb837aa5e1da001941a4066b7ee5970a->leave($__internal_3903029e827693eb4819b54ef210cbafbb837aa5e1da001941a4066b7ee5970a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_130485d7a6653f01a512b1fe1d30c997f02c2c7a00cbb18eaf915b9b381cc175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130485d7a6653f01a512b1fe1d30c997f02c2c7a00cbb18eaf915b9b381cc175->enter($__internal_130485d7a6653f01a512b1fe1d30c997f02c2c7a00cbb18eaf915b9b381cc175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d15fe22494185727fe950a03f30901ff32e1bd91c841e488b1f0bcdde82377c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15fe22494185727fe950a03f30901ff32e1bd91c841e488b1f0bcdde82377c1->enter($__internal_d15fe22494185727fe950a03f30901ff32e1bd91c841e488b1f0bcdde82377c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d15fe22494185727fe950a03f30901ff32e1bd91c841e488b1f0bcdde82377c1->leave($__internal_d15fe22494185727fe950a03f30901ff32e1bd91c841e488b1f0bcdde82377c1_prof);

        
        $__internal_130485d7a6653f01a512b1fe1d30c997f02c2c7a00cbb18eaf915b9b381cc175->leave($__internal_130485d7a6653f01a512b1fe1d30c997f02c2c7a00cbb18eaf915b9b381cc175_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e92e1cf4eadb9e81f6f8e799c3b7c1dfe056644d1ff415d7a12faf67c3b43c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92e1cf4eadb9e81f6f8e799c3b7c1dfe056644d1ff415d7a12faf67c3b43c5d->enter($__internal_e92e1cf4eadb9e81f6f8e799c3b7c1dfe056644d1ff415d7a12faf67c3b43c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e22ba9c473fc689bc220b450495cdd4d60c6654e68dcb2d50b755171b36ed486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22ba9c473fc689bc220b450495cdd4d60c6654e68dcb2d50b755171b36ed486->enter($__internal_e22ba9c473fc689bc220b450495cdd4d60c6654e68dcb2d50b755171b36ed486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e22ba9c473fc689bc220b450495cdd4d60c6654e68dcb2d50b755171b36ed486->leave($__internal_e22ba9c473fc689bc220b450495cdd4d60c6654e68dcb2d50b755171b36ed486_prof);

        
        $__internal_e92e1cf4eadb9e81f6f8e799c3b7c1dfe056644d1ff415d7a12faf67c3b43c5d->leave($__internal_e92e1cf4eadb9e81f6f8e799c3b7c1dfe056644d1ff415d7a12faf67c3b43c5d_prof);

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

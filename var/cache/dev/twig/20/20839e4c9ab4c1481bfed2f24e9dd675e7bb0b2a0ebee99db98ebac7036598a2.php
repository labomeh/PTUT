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
        $__internal_0dacec107d239f543ec0879aa216c451642d56b5af4375cde12b84a9d7fa0485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dacec107d239f543ec0879aa216c451642d56b5af4375cde12b84a9d7fa0485->enter($__internal_0dacec107d239f543ec0879aa216c451642d56b5af4375cde12b84a9d7fa0485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9a483286a550c1b76de8f5989cb82c056973efdb3f5bcae62b44e81bd4e0f0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a483286a550c1b76de8f5989cb82c056973efdb3f5bcae62b44e81bd4e0f0cf->enter($__internal_9a483286a550c1b76de8f5989cb82c056973efdb3f5bcae62b44e81bd4e0f0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dacec107d239f543ec0879aa216c451642d56b5af4375cde12b84a9d7fa0485->leave($__internal_0dacec107d239f543ec0879aa216c451642d56b5af4375cde12b84a9d7fa0485_prof);

        
        $__internal_9a483286a550c1b76de8f5989cb82c056973efdb3f5bcae62b44e81bd4e0f0cf->leave($__internal_9a483286a550c1b76de8f5989cb82c056973efdb3f5bcae62b44e81bd4e0f0cf_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_628a0a6abc1319675d7522d69bbc37c9f1f4374097ecd27c0fdb9ee7d240f69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628a0a6abc1319675d7522d69bbc37c9f1f4374097ecd27c0fdb9ee7d240f69d->enter($__internal_628a0a6abc1319675d7522d69bbc37c9f1f4374097ecd27c0fdb9ee7d240f69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f578a0aebf4d4a87ed7eb53fcd2ab2b9376eccf3beb22ebe1043b9c3de08586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f578a0aebf4d4a87ed7eb53fcd2ab2b9376eccf3beb22ebe1043b9c3de08586d->enter($__internal_f578a0aebf4d4a87ed7eb53fcd2ab2b9376eccf3beb22ebe1043b9c3de08586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f578a0aebf4d4a87ed7eb53fcd2ab2b9376eccf3beb22ebe1043b9c3de08586d->leave($__internal_f578a0aebf4d4a87ed7eb53fcd2ab2b9376eccf3beb22ebe1043b9c3de08586d_prof);

        
        $__internal_628a0a6abc1319675d7522d69bbc37c9f1f4374097ecd27c0fdb9ee7d240f69d->leave($__internal_628a0a6abc1319675d7522d69bbc37c9f1f4374097ecd27c0fdb9ee7d240f69d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_410125da33f68ab068be64ae53b5936ed9d45c1f760e32be9bf5e29ed945b290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410125da33f68ab068be64ae53b5936ed9d45c1f760e32be9bf5e29ed945b290->enter($__internal_410125da33f68ab068be64ae53b5936ed9d45c1f760e32be9bf5e29ed945b290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4bf067bc2ce32949f3d604c465ae4f41fbe29ad6696a88bcd169e7851f075d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf067bc2ce32949f3d604c465ae4f41fbe29ad6696a88bcd169e7851f075d0d->enter($__internal_4bf067bc2ce32949f3d604c465ae4f41fbe29ad6696a88bcd169e7851f075d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4bf067bc2ce32949f3d604c465ae4f41fbe29ad6696a88bcd169e7851f075d0d->leave($__internal_4bf067bc2ce32949f3d604c465ae4f41fbe29ad6696a88bcd169e7851f075d0d_prof);

        
        $__internal_410125da33f68ab068be64ae53b5936ed9d45c1f760e32be9bf5e29ed945b290->leave($__internal_410125da33f68ab068be64ae53b5936ed9d45c1f760e32be9bf5e29ed945b290_prof);

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

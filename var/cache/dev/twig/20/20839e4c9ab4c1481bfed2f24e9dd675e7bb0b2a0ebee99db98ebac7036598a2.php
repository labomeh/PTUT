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
        $__internal_a05b4e659f01c7a085284db7e25fb627f8c043ff8bcd10d9ab85283b638f405e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05b4e659f01c7a085284db7e25fb627f8c043ff8bcd10d9ab85283b638f405e->enter($__internal_a05b4e659f01c7a085284db7e25fb627f8c043ff8bcd10d9ab85283b638f405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e144325530633ca89674bddd52ce8e04810680616417efcdfc52e8764502b38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e144325530633ca89674bddd52ce8e04810680616417efcdfc52e8764502b38c->enter($__internal_e144325530633ca89674bddd52ce8e04810680616417efcdfc52e8764502b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a05b4e659f01c7a085284db7e25fb627f8c043ff8bcd10d9ab85283b638f405e->leave($__internal_a05b4e659f01c7a085284db7e25fb627f8c043ff8bcd10d9ab85283b638f405e_prof);

        
        $__internal_e144325530633ca89674bddd52ce8e04810680616417efcdfc52e8764502b38c->leave($__internal_e144325530633ca89674bddd52ce8e04810680616417efcdfc52e8764502b38c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9a3a2f0672035937401ed36ffeca46d92c6004a5cc34389f57624a83a381d968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3a2f0672035937401ed36ffeca46d92c6004a5cc34389f57624a83a381d968->enter($__internal_9a3a2f0672035937401ed36ffeca46d92c6004a5cc34389f57624a83a381d968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_366b12923dd04db92db13671c8815a95e9030859f1e97f01049e9b922004a984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366b12923dd04db92db13671c8815a95e9030859f1e97f01049e9b922004a984->enter($__internal_366b12923dd04db92db13671c8815a95e9030859f1e97f01049e9b922004a984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_366b12923dd04db92db13671c8815a95e9030859f1e97f01049e9b922004a984->leave($__internal_366b12923dd04db92db13671c8815a95e9030859f1e97f01049e9b922004a984_prof);

        
        $__internal_9a3a2f0672035937401ed36ffeca46d92c6004a5cc34389f57624a83a381d968->leave($__internal_9a3a2f0672035937401ed36ffeca46d92c6004a5cc34389f57624a83a381d968_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c60f9d95762c50fa5f19901448b126f6951be4b6eeb6ed8cc0b88d77a1f6298a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60f9d95762c50fa5f19901448b126f6951be4b6eeb6ed8cc0b88d77a1f6298a->enter($__internal_c60f9d95762c50fa5f19901448b126f6951be4b6eeb6ed8cc0b88d77a1f6298a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ecd8a7f54b455dbe6b296eb9ffa702f858b6ff82b913abc81549475204d986d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecd8a7f54b455dbe6b296eb9ffa702f858b6ff82b913abc81549475204d986d->enter($__internal_2ecd8a7f54b455dbe6b296eb9ffa702f858b6ff82b913abc81549475204d986d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2ecd8a7f54b455dbe6b296eb9ffa702f858b6ff82b913abc81549475204d986d->leave($__internal_2ecd8a7f54b455dbe6b296eb9ffa702f858b6ff82b913abc81549475204d986d_prof);

        
        $__internal_c60f9d95762c50fa5f19901448b126f6951be4b6eeb6ed8cc0b88d77a1f6298a->leave($__internal_c60f9d95762c50fa5f19901448b126f6951be4b6eeb6ed8cc0b88d77a1f6298a_prof);

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

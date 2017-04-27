<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f42419ab089ad487217ea37a741935661f2c41f11b63c7ecd908ba298575919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f42419ab089ad487217ea37a741935661f2c41f11b63c7ecd908ba298575919->enter($__internal_0f42419ab089ad487217ea37a741935661f2c41f11b63c7ecd908ba298575919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e27ad2964d542787f8f029874c0ea890feb62183754bce5f71cf4eb924aaf5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27ad2964d542787f8f029874c0ea890feb62183754bce5f71cf4eb924aaf5a5->enter($__internal_e27ad2964d542787f8f029874c0ea890feb62183754bce5f71cf4eb924aaf5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f42419ab089ad487217ea37a741935661f2c41f11b63c7ecd908ba298575919->leave($__internal_0f42419ab089ad487217ea37a741935661f2c41f11b63c7ecd908ba298575919_prof);

        
        $__internal_e27ad2964d542787f8f029874c0ea890feb62183754bce5f71cf4eb924aaf5a5->leave($__internal_e27ad2964d542787f8f029874c0ea890feb62183754bce5f71cf4eb924aaf5a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2f1f443a0eaaed36eaee38a4b492dc49898a335a78e0cc8dbfb0fcd678fa156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f1f443a0eaaed36eaee38a4b492dc49898a335a78e0cc8dbfb0fcd678fa156->enter($__internal_e2f1f443a0eaaed36eaee38a4b492dc49898a335a78e0cc8dbfb0fcd678fa156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13f9a582e0324df5f9fe1fc0e024ebbd3ebf792dc4d4d0316602845b7d06e2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f9a582e0324df5f9fe1fc0e024ebbd3ebf792dc4d4d0316602845b7d06e2aa->enter($__internal_13f9a582e0324df5f9fe1fc0e024ebbd3ebf792dc4d4d0316602845b7d06e2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_13f9a582e0324df5f9fe1fc0e024ebbd3ebf792dc4d4d0316602845b7d06e2aa->leave($__internal_13f9a582e0324df5f9fe1fc0e024ebbd3ebf792dc4d4d0316602845b7d06e2aa_prof);

        
        $__internal_e2f1f443a0eaaed36eaee38a4b492dc49898a335a78e0cc8dbfb0fcd678fa156->leave($__internal_e2f1f443a0eaaed36eaee38a4b492dc49898a335a78e0cc8dbfb0fcd678fa156_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7067a34ddfb091f4ba764c9cbc2ce7f9b796ef8e4fb4e172a97c017e5e7128b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7067a34ddfb091f4ba764c9cbc2ce7f9b796ef8e4fb4e172a97c017e5e7128b2->enter($__internal_7067a34ddfb091f4ba764c9cbc2ce7f9b796ef8e4fb4e172a97c017e5e7128b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8e95a1fd673340a8a7a77324a42b9a3cbc8f052a8aef955626494d7a082a6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e95a1fd673340a8a7a77324a42b9a3cbc8f052a8aef955626494d7a082a6c4->enter($__internal_e8e95a1fd673340a8a7a77324a42b9a3cbc8f052a8aef955626494d7a082a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8e95a1fd673340a8a7a77324a42b9a3cbc8f052a8aef955626494d7a082a6c4->leave($__internal_e8e95a1fd673340a8a7a77324a42b9a3cbc8f052a8aef955626494d7a082a6c4_prof);

        
        $__internal_7067a34ddfb091f4ba764c9cbc2ce7f9b796ef8e4fb4e172a97c017e5e7128b2->leave($__internal_7067a34ddfb091f4ba764c9cbc2ce7f9b796ef8e4fb4e172a97c017e5e7128b2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd0598bbc4ee7e5760f00cd26730896226fd617840e9f13acbb009e5eed4eb15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0598bbc4ee7e5760f00cd26730896226fd617840e9f13acbb009e5eed4eb15->enter($__internal_cd0598bbc4ee7e5760f00cd26730896226fd617840e9f13acbb009e5eed4eb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c1834c15fa81a1bb52fa16c60e894df8f952facb736b2ae2934316196331462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1834c15fa81a1bb52fa16c60e894df8f952facb736b2ae2934316196331462->enter($__internal_1c1834c15fa81a1bb52fa16c60e894df8f952facb736b2ae2934316196331462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1c1834c15fa81a1bb52fa16c60e894df8f952facb736b2ae2934316196331462->leave($__internal_1c1834c15fa81a1bb52fa16c60e894df8f952facb736b2ae2934316196331462_prof);

        
        $__internal_cd0598bbc4ee7e5760f00cd26730896226fd617840e9f13acbb009e5eed4eb15->leave($__internal_cd0598bbc4ee7e5760f00cd26730896226fd617840e9f13acbb009e5eed4eb15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

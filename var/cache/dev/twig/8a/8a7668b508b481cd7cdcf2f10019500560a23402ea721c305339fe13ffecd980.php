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
        $__internal_51d4b10975e9b71451f0584d0ecaae8eb0e597f520be015654dbc8821f04d7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d4b10975e9b71451f0584d0ecaae8eb0e597f520be015654dbc8821f04d7fa->enter($__internal_51d4b10975e9b71451f0584d0ecaae8eb0e597f520be015654dbc8821f04d7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f94daee134a98b13c6ad97acb34e60abc2c724acdcacb50d9bbf2ded04d3531a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94daee134a98b13c6ad97acb34e60abc2c724acdcacb50d9bbf2ded04d3531a->enter($__internal_f94daee134a98b13c6ad97acb34e60abc2c724acdcacb50d9bbf2ded04d3531a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d4b10975e9b71451f0584d0ecaae8eb0e597f520be015654dbc8821f04d7fa->leave($__internal_51d4b10975e9b71451f0584d0ecaae8eb0e597f520be015654dbc8821f04d7fa_prof);

        
        $__internal_f94daee134a98b13c6ad97acb34e60abc2c724acdcacb50d9bbf2ded04d3531a->leave($__internal_f94daee134a98b13c6ad97acb34e60abc2c724acdcacb50d9bbf2ded04d3531a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a1192166fc9fb5e749b0841602d89b4895ae7722b027161ae7ea313a9c6eb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1192166fc9fb5e749b0841602d89b4895ae7722b027161ae7ea313a9c6eb7d->enter($__internal_8a1192166fc9fb5e749b0841602d89b4895ae7722b027161ae7ea313a9c6eb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6447cf4c192d74efda831f494ebf81b856f6e21d018d343a2ca82bf6b048b0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6447cf4c192d74efda831f494ebf81b856f6e21d018d343a2ca82bf6b048b0e2->enter($__internal_6447cf4c192d74efda831f494ebf81b856f6e21d018d343a2ca82bf6b048b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6447cf4c192d74efda831f494ebf81b856f6e21d018d343a2ca82bf6b048b0e2->leave($__internal_6447cf4c192d74efda831f494ebf81b856f6e21d018d343a2ca82bf6b048b0e2_prof);

        
        $__internal_8a1192166fc9fb5e749b0841602d89b4895ae7722b027161ae7ea313a9c6eb7d->leave($__internal_8a1192166fc9fb5e749b0841602d89b4895ae7722b027161ae7ea313a9c6eb7d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6677d62a44fd8a15e9fd6f0ac7f3eb71b1b3e5c76b924190857602680fa8f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6677d62a44fd8a15e9fd6f0ac7f3eb71b1b3e5c76b924190857602680fa8f15->enter($__internal_c6677d62a44fd8a15e9fd6f0ac7f3eb71b1b3e5c76b924190857602680fa8f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28eca1e4fe88e105ca917f408d443917a204e76ef508b1171a4f400c45ac1bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eca1e4fe88e105ca917f408d443917a204e76ef508b1171a4f400c45ac1bfe->enter($__internal_28eca1e4fe88e105ca917f408d443917a204e76ef508b1171a4f400c45ac1bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28eca1e4fe88e105ca917f408d443917a204e76ef508b1171a4f400c45ac1bfe->leave($__internal_28eca1e4fe88e105ca917f408d443917a204e76ef508b1171a4f400c45ac1bfe_prof);

        
        $__internal_c6677d62a44fd8a15e9fd6f0ac7f3eb71b1b3e5c76b924190857602680fa8f15->leave($__internal_c6677d62a44fd8a15e9fd6f0ac7f3eb71b1b3e5c76b924190857602680fa8f15_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_735e9c488ef59b7a2d0c10275ff0b491a6e31164ee6b9e4dced9170336e06434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735e9c488ef59b7a2d0c10275ff0b491a6e31164ee6b9e4dced9170336e06434->enter($__internal_735e9c488ef59b7a2d0c10275ff0b491a6e31164ee6b9e4dced9170336e06434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7dffa6e5592b7a028a5a4fa6c55ff2ffdfacc45234c09891b45ed775b1e9751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dffa6e5592b7a028a5a4fa6c55ff2ffdfacc45234c09891b45ed775b1e9751->enter($__internal_a7dffa6e5592b7a028a5a4fa6c55ff2ffdfacc45234c09891b45ed775b1e9751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a7dffa6e5592b7a028a5a4fa6c55ff2ffdfacc45234c09891b45ed775b1e9751->leave($__internal_a7dffa6e5592b7a028a5a4fa6c55ff2ffdfacc45234c09891b45ed775b1e9751_prof);

        
        $__internal_735e9c488ef59b7a2d0c10275ff0b491a6e31164ee6b9e4dced9170336e06434->leave($__internal_735e9c488ef59b7a2d0c10275ff0b491a6e31164ee6b9e4dced9170336e06434_prof);

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

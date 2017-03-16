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
        $__internal_1f1b4334be9a3ac0808f186b5bbd9a4a86be2281207e7f7a21bab1dd44bf0ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1b4334be9a3ac0808f186b5bbd9a4a86be2281207e7f7a21bab1dd44bf0ec9->enter($__internal_1f1b4334be9a3ac0808f186b5bbd9a4a86be2281207e7f7a21bab1dd44bf0ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_57b15351fec1b45218aedd2e8d3c7a3966d8721ebf5f1c2053fe0056e16d4314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b15351fec1b45218aedd2e8d3c7a3966d8721ebf5f1c2053fe0056e16d4314->enter($__internal_57b15351fec1b45218aedd2e8d3c7a3966d8721ebf5f1c2053fe0056e16d4314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f1b4334be9a3ac0808f186b5bbd9a4a86be2281207e7f7a21bab1dd44bf0ec9->leave($__internal_1f1b4334be9a3ac0808f186b5bbd9a4a86be2281207e7f7a21bab1dd44bf0ec9_prof);

        
        $__internal_57b15351fec1b45218aedd2e8d3c7a3966d8721ebf5f1c2053fe0056e16d4314->leave($__internal_57b15351fec1b45218aedd2e8d3c7a3966d8721ebf5f1c2053fe0056e16d4314_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7ec90d2f885698f6b28ee60a885d071bf745aa649d74e38606c9527fda1bb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ec90d2f885698f6b28ee60a885d071bf745aa649d74e38606c9527fda1bb02->enter($__internal_b7ec90d2f885698f6b28ee60a885d071bf745aa649d74e38606c9527fda1bb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9fe56e161ded9c9c502c8140a15b90f3b80c0170d6d90988a649b13aa6ad03b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe56e161ded9c9c502c8140a15b90f3b80c0170d6d90988a649b13aa6ad03b6->enter($__internal_9fe56e161ded9c9c502c8140a15b90f3b80c0170d6d90988a649b13aa6ad03b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9fe56e161ded9c9c502c8140a15b90f3b80c0170d6d90988a649b13aa6ad03b6->leave($__internal_9fe56e161ded9c9c502c8140a15b90f3b80c0170d6d90988a649b13aa6ad03b6_prof);

        
        $__internal_b7ec90d2f885698f6b28ee60a885d071bf745aa649d74e38606c9527fda1bb02->leave($__internal_b7ec90d2f885698f6b28ee60a885d071bf745aa649d74e38606c9527fda1bb02_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f07004acfe1939e3796e32804aa28034d1347c9d5060af849790cabde560efb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07004acfe1939e3796e32804aa28034d1347c9d5060af849790cabde560efb7->enter($__internal_f07004acfe1939e3796e32804aa28034d1347c9d5060af849790cabde560efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7540fadbda242a8659f0f44434e86df8fd29110309cabf4aff1506d05c0d7b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7540fadbda242a8659f0f44434e86df8fd29110309cabf4aff1506d05c0d7b51->enter($__internal_7540fadbda242a8659f0f44434e86df8fd29110309cabf4aff1506d05c0d7b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7540fadbda242a8659f0f44434e86df8fd29110309cabf4aff1506d05c0d7b51->leave($__internal_7540fadbda242a8659f0f44434e86df8fd29110309cabf4aff1506d05c0d7b51_prof);

        
        $__internal_f07004acfe1939e3796e32804aa28034d1347c9d5060af849790cabde560efb7->leave($__internal_f07004acfe1939e3796e32804aa28034d1347c9d5060af849790cabde560efb7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e5dae47a3d29acefc016622fc8639f4aa8ef2caa0bcf0330500956f5ab2b50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5dae47a3d29acefc016622fc8639f4aa8ef2caa0bcf0330500956f5ab2b50e->enter($__internal_6e5dae47a3d29acefc016622fc8639f4aa8ef2caa0bcf0330500956f5ab2b50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ea3040a086500013a1f160de8d770db865b9f46be3b7827350c1466225bee0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea3040a086500013a1f160de8d770db865b9f46be3b7827350c1466225bee0a->enter($__internal_6ea3040a086500013a1f160de8d770db865b9f46be3b7827350c1466225bee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6ea3040a086500013a1f160de8d770db865b9f46be3b7827350c1466225bee0a->leave($__internal_6ea3040a086500013a1f160de8d770db865b9f46be3b7827350c1466225bee0a_prof);

        
        $__internal_6e5dae47a3d29acefc016622fc8639f4aa8ef2caa0bcf0330500956f5ab2b50e->leave($__internal_6e5dae47a3d29acefc016622fc8639f4aa8ef2caa0bcf0330500956f5ab2b50e_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

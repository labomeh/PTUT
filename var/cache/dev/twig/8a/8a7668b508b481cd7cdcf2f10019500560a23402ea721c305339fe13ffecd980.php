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
        $__internal_5768617bdc36a22e980fddbde2abc88bdb27d94a5cd318e4de3b743633319cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5768617bdc36a22e980fddbde2abc88bdb27d94a5cd318e4de3b743633319cc5->enter($__internal_5768617bdc36a22e980fddbde2abc88bdb27d94a5cd318e4de3b743633319cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_90a548160ec33fc5ff24b52998bcb2dee19242ab955d475f074a5f790568a0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a548160ec33fc5ff24b52998bcb2dee19242ab955d475f074a5f790568a0bd->enter($__internal_90a548160ec33fc5ff24b52998bcb2dee19242ab955d475f074a5f790568a0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5768617bdc36a22e980fddbde2abc88bdb27d94a5cd318e4de3b743633319cc5->leave($__internal_5768617bdc36a22e980fddbde2abc88bdb27d94a5cd318e4de3b743633319cc5_prof);

        
        $__internal_90a548160ec33fc5ff24b52998bcb2dee19242ab955d475f074a5f790568a0bd->leave($__internal_90a548160ec33fc5ff24b52998bcb2dee19242ab955d475f074a5f790568a0bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27c5fcf7b21a735f37389726d1e516ffe98500cd4aadb0e5a4d199aa41647a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c5fcf7b21a735f37389726d1e516ffe98500cd4aadb0e5a4d199aa41647a2a->enter($__internal_27c5fcf7b21a735f37389726d1e516ffe98500cd4aadb0e5a4d199aa41647a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d65d4f74d3f8cd31f3f29457407becb9e7f6e8e6a3b9fe3b9a480f82f38db98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65d4f74d3f8cd31f3f29457407becb9e7f6e8e6a3b9fe3b9a480f82f38db98f->enter($__internal_d65d4f74d3f8cd31f3f29457407becb9e7f6e8e6a3b9fe3b9a480f82f38db98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d65d4f74d3f8cd31f3f29457407becb9e7f6e8e6a3b9fe3b9a480f82f38db98f->leave($__internal_d65d4f74d3f8cd31f3f29457407becb9e7f6e8e6a3b9fe3b9a480f82f38db98f_prof);

        
        $__internal_27c5fcf7b21a735f37389726d1e516ffe98500cd4aadb0e5a4d199aa41647a2a->leave($__internal_27c5fcf7b21a735f37389726d1e516ffe98500cd4aadb0e5a4d199aa41647a2a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f38fc1eb3663c0014ba4da3c73f27c8c91771900a3fbe432776cf7e6bb731f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38fc1eb3663c0014ba4da3c73f27c8c91771900a3fbe432776cf7e6bb731f01->enter($__internal_f38fc1eb3663c0014ba4da3c73f27c8c91771900a3fbe432776cf7e6bb731f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1003307a4498d983925aba375ae3685dfcd22ca6e80bc9d9b505b00d474b636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1003307a4498d983925aba375ae3685dfcd22ca6e80bc9d9b505b00d474b636->enter($__internal_a1003307a4498d983925aba375ae3685dfcd22ca6e80bc9d9b505b00d474b636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a1003307a4498d983925aba375ae3685dfcd22ca6e80bc9d9b505b00d474b636->leave($__internal_a1003307a4498d983925aba375ae3685dfcd22ca6e80bc9d9b505b00d474b636_prof);

        
        $__internal_f38fc1eb3663c0014ba4da3c73f27c8c91771900a3fbe432776cf7e6bb731f01->leave($__internal_f38fc1eb3663c0014ba4da3c73f27c8c91771900a3fbe432776cf7e6bb731f01_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e10a98ce62f145b9a3d69b9336e1144db84baa6475fe3aca1e262f58bde04a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e10a98ce62f145b9a3d69b9336e1144db84baa6475fe3aca1e262f58bde04a9->enter($__internal_1e10a98ce62f145b9a3d69b9336e1144db84baa6475fe3aca1e262f58bde04a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e17db7ba6e41f9147978745b1341b53046fc9afca01f9a12f7fd689465eede91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17db7ba6e41f9147978745b1341b53046fc9afca01f9a12f7fd689465eede91->enter($__internal_e17db7ba6e41f9147978745b1341b53046fc9afca01f9a12f7fd689465eede91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e17db7ba6e41f9147978745b1341b53046fc9afca01f9a12f7fd689465eede91->leave($__internal_e17db7ba6e41f9147978745b1341b53046fc9afca01f9a12f7fd689465eede91_prof);

        
        $__internal_1e10a98ce62f145b9a3d69b9336e1144db84baa6475fe3aca1e262f58bde04a9->leave($__internal_1e10a98ce62f145b9a3d69b9336e1144db84baa6475fe3aca1e262f58bde04a9_prof);

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

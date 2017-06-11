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
        $__internal_66528234d6adb684c110cb8be58816ae2a4ecb0da8560fecbe30c2aefaf16f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66528234d6adb684c110cb8be58816ae2a4ecb0da8560fecbe30c2aefaf16f7b->enter($__internal_66528234d6adb684c110cb8be58816ae2a4ecb0da8560fecbe30c2aefaf16f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6862bbfed6ae922e07cc041d60b0080d11aa1c00f066dd76cde7d7ae5ac26d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6862bbfed6ae922e07cc041d60b0080d11aa1c00f066dd76cde7d7ae5ac26d27->enter($__internal_6862bbfed6ae922e07cc041d60b0080d11aa1c00f066dd76cde7d7ae5ac26d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66528234d6adb684c110cb8be58816ae2a4ecb0da8560fecbe30c2aefaf16f7b->leave($__internal_66528234d6adb684c110cb8be58816ae2a4ecb0da8560fecbe30c2aefaf16f7b_prof);

        
        $__internal_6862bbfed6ae922e07cc041d60b0080d11aa1c00f066dd76cde7d7ae5ac26d27->leave($__internal_6862bbfed6ae922e07cc041d60b0080d11aa1c00f066dd76cde7d7ae5ac26d27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_780a7e6e4b9885a641fbbef02442a40b13188e64fafc8150704cb3de087f9b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780a7e6e4b9885a641fbbef02442a40b13188e64fafc8150704cb3de087f9b2e->enter($__internal_780a7e6e4b9885a641fbbef02442a40b13188e64fafc8150704cb3de087f9b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b5c718a496497933c63b9670d09f81b28daf06a17e90b32ccab6b215f35e157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5c718a496497933c63b9670d09f81b28daf06a17e90b32ccab6b215f35e157->enter($__internal_7b5c718a496497933c63b9670d09f81b28daf06a17e90b32ccab6b215f35e157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b5c718a496497933c63b9670d09f81b28daf06a17e90b32ccab6b215f35e157->leave($__internal_7b5c718a496497933c63b9670d09f81b28daf06a17e90b32ccab6b215f35e157_prof);

        
        $__internal_780a7e6e4b9885a641fbbef02442a40b13188e64fafc8150704cb3de087f9b2e->leave($__internal_780a7e6e4b9885a641fbbef02442a40b13188e64fafc8150704cb3de087f9b2e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d284acad8d450713f070c45241c194e6653bae01da1781ded6fa8de9aa456d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d284acad8d450713f070c45241c194e6653bae01da1781ded6fa8de9aa456d4->enter($__internal_6d284acad8d450713f070c45241c194e6653bae01da1781ded6fa8de9aa456d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb7565af1b1f2ac8a9dc24b05f521868b787c1e5409ab66244db712456ae8a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7565af1b1f2ac8a9dc24b05f521868b787c1e5409ab66244db712456ae8a2d->enter($__internal_bb7565af1b1f2ac8a9dc24b05f521868b787c1e5409ab66244db712456ae8a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb7565af1b1f2ac8a9dc24b05f521868b787c1e5409ab66244db712456ae8a2d->leave($__internal_bb7565af1b1f2ac8a9dc24b05f521868b787c1e5409ab66244db712456ae8a2d_prof);

        
        $__internal_6d284acad8d450713f070c45241c194e6653bae01da1781ded6fa8de9aa456d4->leave($__internal_6d284acad8d450713f070c45241c194e6653bae01da1781ded6fa8de9aa456d4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac4bd5778cedde2cebb2baa36842c4f0cc0a081192333d2f3a3aa3049f5c74c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4bd5778cedde2cebb2baa36842c4f0cc0a081192333d2f3a3aa3049f5c74c3->enter($__internal_ac4bd5778cedde2cebb2baa36842c4f0cc0a081192333d2f3a3aa3049f5c74c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0879b7677b34e68b1392d1aec42893b2ac429d570ff3cd058a20d45bfb75870e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0879b7677b34e68b1392d1aec42893b2ac429d570ff3cd058a20d45bfb75870e->enter($__internal_0879b7677b34e68b1392d1aec42893b2ac429d570ff3cd058a20d45bfb75870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0879b7677b34e68b1392d1aec42893b2ac429d570ff3cd058a20d45bfb75870e->leave($__internal_0879b7677b34e68b1392d1aec42893b2ac429d570ff3cd058a20d45bfb75870e_prof);

        
        $__internal_ac4bd5778cedde2cebb2baa36842c4f0cc0a081192333d2f3a3aa3049f5c74c3->leave($__internal_ac4bd5778cedde2cebb2baa36842c4f0cc0a081192333d2f3a3aa3049f5c74c3_prof);

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

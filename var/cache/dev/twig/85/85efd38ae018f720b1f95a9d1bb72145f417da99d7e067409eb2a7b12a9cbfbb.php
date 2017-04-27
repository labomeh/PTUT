<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54bede8d25740bf2748913733190288ffaff91cd97a63bd4aec2585517a65e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2cd30c9fe89e9958f4e49381a625bc599b35950d73b187d19b0d723d3a371918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd30c9fe89e9958f4e49381a625bc599b35950d73b187d19b0d723d3a371918->enter($__internal_2cd30c9fe89e9958f4e49381a625bc599b35950d73b187d19b0d723d3a371918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_642b958baeebfa972783dc046ab7d5d2f68652f4b1712b739a48172ac6e3076f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642b958baeebfa972783dc046ab7d5d2f68652f4b1712b739a48172ac6e3076f->enter($__internal_642b958baeebfa972783dc046ab7d5d2f68652f4b1712b739a48172ac6e3076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd30c9fe89e9958f4e49381a625bc599b35950d73b187d19b0d723d3a371918->leave($__internal_2cd30c9fe89e9958f4e49381a625bc599b35950d73b187d19b0d723d3a371918_prof);

        
        $__internal_642b958baeebfa972783dc046ab7d5d2f68652f4b1712b739a48172ac6e3076f->leave($__internal_642b958baeebfa972783dc046ab7d5d2f68652f4b1712b739a48172ac6e3076f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d0b76cc922b24040a12e22133c024326daeecf0405eb063cb977fef6b8de184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0b76cc922b24040a12e22133c024326daeecf0405eb063cb977fef6b8de184->enter($__internal_5d0b76cc922b24040a12e22133c024326daeecf0405eb063cb977fef6b8de184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df0560339c0b22f1721e6f817d916274062f67baabd4c5e7b5dfb41f2b0e91d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0560339c0b22f1721e6f817d916274062f67baabd4c5e7b5dfb41f2b0e91d9->enter($__internal_df0560339c0b22f1721e6f817d916274062f67baabd4c5e7b5dfb41f2b0e91d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_df0560339c0b22f1721e6f817d916274062f67baabd4c5e7b5dfb41f2b0e91d9->leave($__internal_df0560339c0b22f1721e6f817d916274062f67baabd4c5e7b5dfb41f2b0e91d9_prof);

        
        $__internal_5d0b76cc922b24040a12e22133c024326daeecf0405eb063cb977fef6b8de184->leave($__internal_5d0b76cc922b24040a12e22133c024326daeecf0405eb063cb977fef6b8de184_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_82d5b2965d60e8e6ba0cd739195832674f412d6a3e6c3ea53ee2399929dcad27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d5b2965d60e8e6ba0cd739195832674f412d6a3e6c3ea53ee2399929dcad27->enter($__internal_82d5b2965d60e8e6ba0cd739195832674f412d6a3e6c3ea53ee2399929dcad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dedbf4b8260e5782666a00c0a45122587497944c9589d26887cc23c30e40e888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedbf4b8260e5782666a00c0a45122587497944c9589d26887cc23c30e40e888->enter($__internal_dedbf4b8260e5782666a00c0a45122587497944c9589d26887cc23c30e40e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dedbf4b8260e5782666a00c0a45122587497944c9589d26887cc23c30e40e888->leave($__internal_dedbf4b8260e5782666a00c0a45122587497944c9589d26887cc23c30e40e888_prof);

        
        $__internal_82d5b2965d60e8e6ba0cd739195832674f412d6a3e6c3ea53ee2399929dcad27->leave($__internal_82d5b2965d60e8e6ba0cd739195832674f412d6a3e6c3ea53ee2399929dcad27_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_75b612a1b1f3c4294710371f74303b564b40093dc410de9a88c32b5634b9a9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b612a1b1f3c4294710371f74303b564b40093dc410de9a88c32b5634b9a9ec->enter($__internal_75b612a1b1f3c4294710371f74303b564b40093dc410de9a88c32b5634b9a9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66e6e74de0d6bf78dbb824647e9a26bb804441827015897115dca35203023857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e6e74de0d6bf78dbb824647e9a26bb804441827015897115dca35203023857->enter($__internal_66e6e74de0d6bf78dbb824647e9a26bb804441827015897115dca35203023857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_66e6e74de0d6bf78dbb824647e9a26bb804441827015897115dca35203023857->leave($__internal_66e6e74de0d6bf78dbb824647e9a26bb804441827015897115dca35203023857_prof);

        
        $__internal_75b612a1b1f3c4294710371f74303b564b40093dc410de9a88c32b5634b9a9ec->leave($__internal_75b612a1b1f3c4294710371f74303b564b40093dc410de9a88c32b5634b9a9ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

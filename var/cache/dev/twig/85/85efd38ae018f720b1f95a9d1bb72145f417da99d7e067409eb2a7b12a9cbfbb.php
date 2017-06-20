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
        $__internal_25f7f775e7c8af4d1948b8b97cfca45afb3b4a97141b6072983208c744438c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f7f775e7c8af4d1948b8b97cfca45afb3b4a97141b6072983208c744438c22->enter($__internal_25f7f775e7c8af4d1948b8b97cfca45afb3b4a97141b6072983208c744438c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_769b54041cec9238290e0edc361e720d5af8542a33e7062e735a18d027ce9766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769b54041cec9238290e0edc361e720d5af8542a33e7062e735a18d027ce9766->enter($__internal_769b54041cec9238290e0edc361e720d5af8542a33e7062e735a18d027ce9766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f7f775e7c8af4d1948b8b97cfca45afb3b4a97141b6072983208c744438c22->leave($__internal_25f7f775e7c8af4d1948b8b97cfca45afb3b4a97141b6072983208c744438c22_prof);

        
        $__internal_769b54041cec9238290e0edc361e720d5af8542a33e7062e735a18d027ce9766->leave($__internal_769b54041cec9238290e0edc361e720d5af8542a33e7062e735a18d027ce9766_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fa7f6d55a58d18cdd2f0bab882918205c42e892aa4ed823fb4188dc2f0cd371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa7f6d55a58d18cdd2f0bab882918205c42e892aa4ed823fb4188dc2f0cd371->enter($__internal_2fa7f6d55a58d18cdd2f0bab882918205c42e892aa4ed823fb4188dc2f0cd371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fad4cd2ce168b2cdd4aead76ac012d4a5f505d527e793a726a41c2cb7b28506f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad4cd2ce168b2cdd4aead76ac012d4a5f505d527e793a726a41c2cb7b28506f->enter($__internal_fad4cd2ce168b2cdd4aead76ac012d4a5f505d527e793a726a41c2cb7b28506f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fad4cd2ce168b2cdd4aead76ac012d4a5f505d527e793a726a41c2cb7b28506f->leave($__internal_fad4cd2ce168b2cdd4aead76ac012d4a5f505d527e793a726a41c2cb7b28506f_prof);

        
        $__internal_2fa7f6d55a58d18cdd2f0bab882918205c42e892aa4ed823fb4188dc2f0cd371->leave($__internal_2fa7f6d55a58d18cdd2f0bab882918205c42e892aa4ed823fb4188dc2f0cd371_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_61fa8bae591d0ba5d3664f92e1bca23886b33c012c65818d5ecb6c42fd3126b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fa8bae591d0ba5d3664f92e1bca23886b33c012c65818d5ecb6c42fd3126b1->enter($__internal_61fa8bae591d0ba5d3664f92e1bca23886b33c012c65818d5ecb6c42fd3126b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74190542b62ccea4cfe796998fb25429efa24700b77b836a331cfa39053cfdf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74190542b62ccea4cfe796998fb25429efa24700b77b836a331cfa39053cfdf9->enter($__internal_74190542b62ccea4cfe796998fb25429efa24700b77b836a331cfa39053cfdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74190542b62ccea4cfe796998fb25429efa24700b77b836a331cfa39053cfdf9->leave($__internal_74190542b62ccea4cfe796998fb25429efa24700b77b836a331cfa39053cfdf9_prof);

        
        $__internal_61fa8bae591d0ba5d3664f92e1bca23886b33c012c65818d5ecb6c42fd3126b1->leave($__internal_61fa8bae591d0ba5d3664f92e1bca23886b33c012c65818d5ecb6c42fd3126b1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd4c0469d565730bb8d5f37eea251ecc3b2ac4d33669b3aa1df89124cc9be851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4c0469d565730bb8d5f37eea251ecc3b2ac4d33669b3aa1df89124cc9be851->enter($__internal_dd4c0469d565730bb8d5f37eea251ecc3b2ac4d33669b3aa1df89124cc9be851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44deb32c13e76a34e5e875c814958afd1605121fe6e10220b2bddd4ac28c02b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44deb32c13e76a34e5e875c814958afd1605121fe6e10220b2bddd4ac28c02b5->enter($__internal_44deb32c13e76a34e5e875c814958afd1605121fe6e10220b2bddd4ac28c02b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_44deb32c13e76a34e5e875c814958afd1605121fe6e10220b2bddd4ac28c02b5->leave($__internal_44deb32c13e76a34e5e875c814958afd1605121fe6e10220b2bddd4ac28c02b5_prof);

        
        $__internal_dd4c0469d565730bb8d5f37eea251ecc3b2ac4d33669b3aa1df89124cc9be851->leave($__internal_dd4c0469d565730bb8d5f37eea251ecc3b2ac4d33669b3aa1df89124cc9be851_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

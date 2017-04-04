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
        $__internal_2510b2a781305f7af4cc367bde9340cf6b6c1b64d706cd19cbdf66d425c45dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2510b2a781305f7af4cc367bde9340cf6b6c1b64d706cd19cbdf66d425c45dee->enter($__internal_2510b2a781305f7af4cc367bde9340cf6b6c1b64d706cd19cbdf66d425c45dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bc052731b2597a9c60f5589c607583e8495fedf2b5d892e4988d336d729336ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc052731b2597a9c60f5589c607583e8495fedf2b5d892e4988d336d729336ec->enter($__internal_bc052731b2597a9c60f5589c607583e8495fedf2b5d892e4988d336d729336ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2510b2a781305f7af4cc367bde9340cf6b6c1b64d706cd19cbdf66d425c45dee->leave($__internal_2510b2a781305f7af4cc367bde9340cf6b6c1b64d706cd19cbdf66d425c45dee_prof);

        
        $__internal_bc052731b2597a9c60f5589c607583e8495fedf2b5d892e4988d336d729336ec->leave($__internal_bc052731b2597a9c60f5589c607583e8495fedf2b5d892e4988d336d729336ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f401a7378c14370bfcd6109e693ebb5d529f58d3fc83aae794679c55e744b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f401a7378c14370bfcd6109e693ebb5d529f58d3fc83aae794679c55e744b84->enter($__internal_2f401a7378c14370bfcd6109e693ebb5d529f58d3fc83aae794679c55e744b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d600bd873b888aa21fb8687d8ae4f0cac8c40a28f9e2253c68b011d03367a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d600bd873b888aa21fb8687d8ae4f0cac8c40a28f9e2253c68b011d03367a85->enter($__internal_4d600bd873b888aa21fb8687d8ae4f0cac8c40a28f9e2253c68b011d03367a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4d600bd873b888aa21fb8687d8ae4f0cac8c40a28f9e2253c68b011d03367a85->leave($__internal_4d600bd873b888aa21fb8687d8ae4f0cac8c40a28f9e2253c68b011d03367a85_prof);

        
        $__internal_2f401a7378c14370bfcd6109e693ebb5d529f58d3fc83aae794679c55e744b84->leave($__internal_2f401a7378c14370bfcd6109e693ebb5d529f58d3fc83aae794679c55e744b84_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_39098e0165f2aafb7fb74557130a3faddc93bf0f0a4ae4c17f3eb0b503664bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39098e0165f2aafb7fb74557130a3faddc93bf0f0a4ae4c17f3eb0b503664bbf->enter($__internal_39098e0165f2aafb7fb74557130a3faddc93bf0f0a4ae4c17f3eb0b503664bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4125eb28766aabf8a0aa9c28f02ada82414c1fd1bc6dbfe2cc4e2154f35dff99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4125eb28766aabf8a0aa9c28f02ada82414c1fd1bc6dbfe2cc4e2154f35dff99->enter($__internal_4125eb28766aabf8a0aa9c28f02ada82414c1fd1bc6dbfe2cc4e2154f35dff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4125eb28766aabf8a0aa9c28f02ada82414c1fd1bc6dbfe2cc4e2154f35dff99->leave($__internal_4125eb28766aabf8a0aa9c28f02ada82414c1fd1bc6dbfe2cc4e2154f35dff99_prof);

        
        $__internal_39098e0165f2aafb7fb74557130a3faddc93bf0f0a4ae4c17f3eb0b503664bbf->leave($__internal_39098e0165f2aafb7fb74557130a3faddc93bf0f0a4ae4c17f3eb0b503664bbf_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2f9ece7cd9daa456c1cce6043aea2ebf226bc7cbd565d31c44b6bc2fe366379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f9ece7cd9daa456c1cce6043aea2ebf226bc7cbd565d31c44b6bc2fe366379->enter($__internal_b2f9ece7cd9daa456c1cce6043aea2ebf226bc7cbd565d31c44b6bc2fe366379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c91e5ded5bff2260e4b4df2d8630e79aaf6c6778d273310985755172ed3e9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c91e5ded5bff2260e4b4df2d8630e79aaf6c6778d273310985755172ed3e9e0->enter($__internal_3c91e5ded5bff2260e4b4df2d8630e79aaf6c6778d273310985755172ed3e9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3c91e5ded5bff2260e4b4df2d8630e79aaf6c6778d273310985755172ed3e9e0->leave($__internal_3c91e5ded5bff2260e4b4df2d8630e79aaf6c6778d273310985755172ed3e9e0_prof);

        
        $__internal_b2f9ece7cd9daa456c1cce6043aea2ebf226bc7cbd565d31c44b6bc2fe366379->leave($__internal_b2f9ece7cd9daa456c1cce6043aea2ebf226bc7cbd565d31c44b6bc2fe366379_prof);

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

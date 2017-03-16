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
        $__internal_06dda0ab0d635aa3c8ea0e0bd9680c5c7b3310361254bab5c3ead2bfebe17394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dda0ab0d635aa3c8ea0e0bd9680c5c7b3310361254bab5c3ead2bfebe17394->enter($__internal_06dda0ab0d635aa3c8ea0e0bd9680c5c7b3310361254bab5c3ead2bfebe17394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_06840fea595c92bc0383d0e4f5c61dac886448271d6fd486e2e6c84a53c33205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06840fea595c92bc0383d0e4f5c61dac886448271d6fd486e2e6c84a53c33205->enter($__internal_06840fea595c92bc0383d0e4f5c61dac886448271d6fd486e2e6c84a53c33205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06dda0ab0d635aa3c8ea0e0bd9680c5c7b3310361254bab5c3ead2bfebe17394->leave($__internal_06dda0ab0d635aa3c8ea0e0bd9680c5c7b3310361254bab5c3ead2bfebe17394_prof);

        
        $__internal_06840fea595c92bc0383d0e4f5c61dac886448271d6fd486e2e6c84a53c33205->leave($__internal_06840fea595c92bc0383d0e4f5c61dac886448271d6fd486e2e6c84a53c33205_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd722c0e1f98d3aed90ebd80dea02381d37b7bd5a59179a5432a44856ad310e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd722c0e1f98d3aed90ebd80dea02381d37b7bd5a59179a5432a44856ad310e6->enter($__internal_dd722c0e1f98d3aed90ebd80dea02381d37b7bd5a59179a5432a44856ad310e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cadc491e86ed53d142842d99b0835bb6cc63fd2e35dde27fd43e418ee6ed9365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadc491e86ed53d142842d99b0835bb6cc63fd2e35dde27fd43e418ee6ed9365->enter($__internal_cadc491e86ed53d142842d99b0835bb6cc63fd2e35dde27fd43e418ee6ed9365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cadc491e86ed53d142842d99b0835bb6cc63fd2e35dde27fd43e418ee6ed9365->leave($__internal_cadc491e86ed53d142842d99b0835bb6cc63fd2e35dde27fd43e418ee6ed9365_prof);

        
        $__internal_dd722c0e1f98d3aed90ebd80dea02381d37b7bd5a59179a5432a44856ad310e6->leave($__internal_dd722c0e1f98d3aed90ebd80dea02381d37b7bd5a59179a5432a44856ad310e6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_faa2ca66bab291bf437af3170cb9a3849bea8c8a37353c8056fc4f5ed0704618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa2ca66bab291bf437af3170cb9a3849bea8c8a37353c8056fc4f5ed0704618->enter($__internal_faa2ca66bab291bf437af3170cb9a3849bea8c8a37353c8056fc4f5ed0704618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_846dab9538e586272941b0ef8eae3a0632ac7eac71b279466e8e0f02d6acac71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846dab9538e586272941b0ef8eae3a0632ac7eac71b279466e8e0f02d6acac71->enter($__internal_846dab9538e586272941b0ef8eae3a0632ac7eac71b279466e8e0f02d6acac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_846dab9538e586272941b0ef8eae3a0632ac7eac71b279466e8e0f02d6acac71->leave($__internal_846dab9538e586272941b0ef8eae3a0632ac7eac71b279466e8e0f02d6acac71_prof);

        
        $__internal_faa2ca66bab291bf437af3170cb9a3849bea8c8a37353c8056fc4f5ed0704618->leave($__internal_faa2ca66bab291bf437af3170cb9a3849bea8c8a37353c8056fc4f5ed0704618_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a4da0bad76ff7de15cc49c0f9895404192df9bcb63ae078174552221e17e1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4da0bad76ff7de15cc49c0f9895404192df9bcb63ae078174552221e17e1f6->enter($__internal_8a4da0bad76ff7de15cc49c0f9895404192df9bcb63ae078174552221e17e1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96b22d0063a3373d2a524b0340119c62387ecfce5cc447d19fc9c63fb783d554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b22d0063a3373d2a524b0340119c62387ecfce5cc447d19fc9c63fb783d554->enter($__internal_96b22d0063a3373d2a524b0340119c62387ecfce5cc447d19fc9c63fb783d554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_96b22d0063a3373d2a524b0340119c62387ecfce5cc447d19fc9c63fb783d554->leave($__internal_96b22d0063a3373d2a524b0340119c62387ecfce5cc447d19fc9c63fb783d554_prof);

        
        $__internal_8a4da0bad76ff7de15cc49c0f9895404192df9bcb63ae078174552221e17e1f6->leave($__internal_8a4da0bad76ff7de15cc49c0f9895404192df9bcb63ae078174552221e17e1f6_prof);

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

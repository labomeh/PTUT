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
        $__internal_002f3f633a8cd05e82f58b200423ffce631154e797d3ff962d2af31f91125a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002f3f633a8cd05e82f58b200423ffce631154e797d3ff962d2af31f91125a85->enter($__internal_002f3f633a8cd05e82f58b200423ffce631154e797d3ff962d2af31f91125a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4b699cdc841b37e3630123f00e2fc1564512a44424fcbd63f1f7ad8b70aaefa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b699cdc841b37e3630123f00e2fc1564512a44424fcbd63f1f7ad8b70aaefa9->enter($__internal_4b699cdc841b37e3630123f00e2fc1564512a44424fcbd63f1f7ad8b70aaefa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_002f3f633a8cd05e82f58b200423ffce631154e797d3ff962d2af31f91125a85->leave($__internal_002f3f633a8cd05e82f58b200423ffce631154e797d3ff962d2af31f91125a85_prof);

        
        $__internal_4b699cdc841b37e3630123f00e2fc1564512a44424fcbd63f1f7ad8b70aaefa9->leave($__internal_4b699cdc841b37e3630123f00e2fc1564512a44424fcbd63f1f7ad8b70aaefa9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75125862be739fa92fcc8d1e1fc4d71e1c7bcf1c78f1224fdc030ddde37ba4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75125862be739fa92fcc8d1e1fc4d71e1c7bcf1c78f1224fdc030ddde37ba4e4->enter($__internal_75125862be739fa92fcc8d1e1fc4d71e1c7bcf1c78f1224fdc030ddde37ba4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f574c6dc6b37f8c6304eccdf6edf97567ffd71728a76bf50737ec7a0570969bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f574c6dc6b37f8c6304eccdf6edf97567ffd71728a76bf50737ec7a0570969bf->enter($__internal_f574c6dc6b37f8c6304eccdf6edf97567ffd71728a76bf50737ec7a0570969bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f574c6dc6b37f8c6304eccdf6edf97567ffd71728a76bf50737ec7a0570969bf->leave($__internal_f574c6dc6b37f8c6304eccdf6edf97567ffd71728a76bf50737ec7a0570969bf_prof);

        
        $__internal_75125862be739fa92fcc8d1e1fc4d71e1c7bcf1c78f1224fdc030ddde37ba4e4->leave($__internal_75125862be739fa92fcc8d1e1fc4d71e1c7bcf1c78f1224fdc030ddde37ba4e4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa8052ad069fa27da448f3d5f09fe2392c2d4cbc78227623f06c5d16648004dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8052ad069fa27da448f3d5f09fe2392c2d4cbc78227623f06c5d16648004dc->enter($__internal_aa8052ad069fa27da448f3d5f09fe2392c2d4cbc78227623f06c5d16648004dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12e3f346bcfb4c409e7c357ee5417c17418ff1f38773a44170ad0876fe28b56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e3f346bcfb4c409e7c357ee5417c17418ff1f38773a44170ad0876fe28b56b->enter($__internal_12e3f346bcfb4c409e7c357ee5417c17418ff1f38773a44170ad0876fe28b56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_12e3f346bcfb4c409e7c357ee5417c17418ff1f38773a44170ad0876fe28b56b->leave($__internal_12e3f346bcfb4c409e7c357ee5417c17418ff1f38773a44170ad0876fe28b56b_prof);

        
        $__internal_aa8052ad069fa27da448f3d5f09fe2392c2d4cbc78227623f06c5d16648004dc->leave($__internal_aa8052ad069fa27da448f3d5f09fe2392c2d4cbc78227623f06c5d16648004dc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c2a80459683130357aac9893ed833103a031fce0eecb9f7be8365cd8887a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c2a80459683130357aac9893ed833103a031fce0eecb9f7be8365cd8887a04->enter($__internal_67c2a80459683130357aac9893ed833103a031fce0eecb9f7be8365cd8887a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88c2904aa7f32eefb13249b158009d6372ad990dad64d2ce074706ae0c18d537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c2904aa7f32eefb13249b158009d6372ad990dad64d2ce074706ae0c18d537->enter($__internal_88c2904aa7f32eefb13249b158009d6372ad990dad64d2ce074706ae0c18d537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_88c2904aa7f32eefb13249b158009d6372ad990dad64d2ce074706ae0c18d537->leave($__internal_88c2904aa7f32eefb13249b158009d6372ad990dad64d2ce074706ae0c18d537_prof);

        
        $__internal_67c2a80459683130357aac9893ed833103a031fce0eecb9f7be8365cd8887a04->leave($__internal_67c2a80459683130357aac9893ed833103a031fce0eecb9f7be8365cd8887a04_prof);

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

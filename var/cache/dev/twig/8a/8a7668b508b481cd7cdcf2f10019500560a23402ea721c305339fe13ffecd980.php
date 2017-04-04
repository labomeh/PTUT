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
        $__internal_c2923ed9626970a41c17abaa23500d3e7d4e7a478a13911e95c7bbbdcd5026a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2923ed9626970a41c17abaa23500d3e7d4e7a478a13911e95c7bbbdcd5026a5->enter($__internal_c2923ed9626970a41c17abaa23500d3e7d4e7a478a13911e95c7bbbdcd5026a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e3019c873a7ddac39833e0fe5e470352d03bfc96648c3cf05c25eb557a4b4c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3019c873a7ddac39833e0fe5e470352d03bfc96648c3cf05c25eb557a4b4c86->enter($__internal_e3019c873a7ddac39833e0fe5e470352d03bfc96648c3cf05c25eb557a4b4c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2923ed9626970a41c17abaa23500d3e7d4e7a478a13911e95c7bbbdcd5026a5->leave($__internal_c2923ed9626970a41c17abaa23500d3e7d4e7a478a13911e95c7bbbdcd5026a5_prof);

        
        $__internal_e3019c873a7ddac39833e0fe5e470352d03bfc96648c3cf05c25eb557a4b4c86->leave($__internal_e3019c873a7ddac39833e0fe5e470352d03bfc96648c3cf05c25eb557a4b4c86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e591646663ca45d07caa640a7db325f667741fbf43adfb832b45b3f9e9c2a90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e591646663ca45d07caa640a7db325f667741fbf43adfb832b45b3f9e9c2a90e->enter($__internal_e591646663ca45d07caa640a7db325f667741fbf43adfb832b45b3f9e9c2a90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_06e653afeb6072c9ee9e4e1dde0454c05219ebded701d86af91daf24e035c4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e653afeb6072c9ee9e4e1dde0454c05219ebded701d86af91daf24e035c4c9->enter($__internal_06e653afeb6072c9ee9e4e1dde0454c05219ebded701d86af91daf24e035c4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_06e653afeb6072c9ee9e4e1dde0454c05219ebded701d86af91daf24e035c4c9->leave($__internal_06e653afeb6072c9ee9e4e1dde0454c05219ebded701d86af91daf24e035c4c9_prof);

        
        $__internal_e591646663ca45d07caa640a7db325f667741fbf43adfb832b45b3f9e9c2a90e->leave($__internal_e591646663ca45d07caa640a7db325f667741fbf43adfb832b45b3f9e9c2a90e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6af5ffa29580aa5e6832e7dedb799cd7fd7b463af3ba12fd8da1ed42555a2074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af5ffa29580aa5e6832e7dedb799cd7fd7b463af3ba12fd8da1ed42555a2074->enter($__internal_6af5ffa29580aa5e6832e7dedb799cd7fd7b463af3ba12fd8da1ed42555a2074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee87ee37a849dfb8f8b4582ad95d41bac2e586f5bd183104bd9595a63bb94e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee87ee37a849dfb8f8b4582ad95d41bac2e586f5bd183104bd9595a63bb94e2e->enter($__internal_ee87ee37a849dfb8f8b4582ad95d41bac2e586f5bd183104bd9595a63bb94e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee87ee37a849dfb8f8b4582ad95d41bac2e586f5bd183104bd9595a63bb94e2e->leave($__internal_ee87ee37a849dfb8f8b4582ad95d41bac2e586f5bd183104bd9595a63bb94e2e_prof);

        
        $__internal_6af5ffa29580aa5e6832e7dedb799cd7fd7b463af3ba12fd8da1ed42555a2074->leave($__internal_6af5ffa29580aa5e6832e7dedb799cd7fd7b463af3ba12fd8da1ed42555a2074_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2824e2446b1126c4e974257235af3166202b49d1fa6c5a543923488e7c78db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2824e2446b1126c4e974257235af3166202b49d1fa6c5a543923488e7c78db7->enter($__internal_b2824e2446b1126c4e974257235af3166202b49d1fa6c5a543923488e7c78db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8acdf5d1affb3c64167f99b808b6fdf567e12fba55314ae391cb415ba21e20db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acdf5d1affb3c64167f99b808b6fdf567e12fba55314ae391cb415ba21e20db->enter($__internal_8acdf5d1affb3c64167f99b808b6fdf567e12fba55314ae391cb415ba21e20db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8acdf5d1affb3c64167f99b808b6fdf567e12fba55314ae391cb415ba21e20db->leave($__internal_8acdf5d1affb3c64167f99b808b6fdf567e12fba55314ae391cb415ba21e20db_prof);

        
        $__internal_b2824e2446b1126c4e974257235af3166202b49d1fa6c5a543923488e7c78db7->leave($__internal_b2824e2446b1126c4e974257235af3166202b49d1fa6c5a543923488e7c78db7_prof);

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

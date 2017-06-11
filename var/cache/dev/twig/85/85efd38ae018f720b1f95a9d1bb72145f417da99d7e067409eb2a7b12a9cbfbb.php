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
        $__internal_229162ee3560d24fbfb7d9944cfba56da010436a9bfe5fbaa293df85cf4f1fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229162ee3560d24fbfb7d9944cfba56da010436a9bfe5fbaa293df85cf4f1fff->enter($__internal_229162ee3560d24fbfb7d9944cfba56da010436a9bfe5fbaa293df85cf4f1fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a8492b3830c4369a59b67e47db9e059b07f0baf54a586a1a2216ee535fb4b238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8492b3830c4369a59b67e47db9e059b07f0baf54a586a1a2216ee535fb4b238->enter($__internal_a8492b3830c4369a59b67e47db9e059b07f0baf54a586a1a2216ee535fb4b238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229162ee3560d24fbfb7d9944cfba56da010436a9bfe5fbaa293df85cf4f1fff->leave($__internal_229162ee3560d24fbfb7d9944cfba56da010436a9bfe5fbaa293df85cf4f1fff_prof);

        
        $__internal_a8492b3830c4369a59b67e47db9e059b07f0baf54a586a1a2216ee535fb4b238->leave($__internal_a8492b3830c4369a59b67e47db9e059b07f0baf54a586a1a2216ee535fb4b238_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16b47a7bfb1b4dc282e04108547c545268a04aaf7cdc4c622270077dccbe9031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b47a7bfb1b4dc282e04108547c545268a04aaf7cdc4c622270077dccbe9031->enter($__internal_16b47a7bfb1b4dc282e04108547c545268a04aaf7cdc4c622270077dccbe9031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d3daf2ad9dc4a7451794a50fc249347ea6ffef9bb1245e98509906ad06468c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3daf2ad9dc4a7451794a50fc249347ea6ffef9bb1245e98509906ad06468c1->enter($__internal_9d3daf2ad9dc4a7451794a50fc249347ea6ffef9bb1245e98509906ad06468c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9d3daf2ad9dc4a7451794a50fc249347ea6ffef9bb1245e98509906ad06468c1->leave($__internal_9d3daf2ad9dc4a7451794a50fc249347ea6ffef9bb1245e98509906ad06468c1_prof);

        
        $__internal_16b47a7bfb1b4dc282e04108547c545268a04aaf7cdc4c622270077dccbe9031->leave($__internal_16b47a7bfb1b4dc282e04108547c545268a04aaf7cdc4c622270077dccbe9031_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_52e09f7c4f586a2e2df76c3dd2edeae5f43abac4bc224337cb833b05143b3229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e09f7c4f586a2e2df76c3dd2edeae5f43abac4bc224337cb833b05143b3229->enter($__internal_52e09f7c4f586a2e2df76c3dd2edeae5f43abac4bc224337cb833b05143b3229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4321d243715b8001b6d14ea102c8402dac92272e3f7f5f2351ebb50ec7513f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4321d243715b8001b6d14ea102c8402dac92272e3f7f5f2351ebb50ec7513f5->enter($__internal_a4321d243715b8001b6d14ea102c8402dac92272e3f7f5f2351ebb50ec7513f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4321d243715b8001b6d14ea102c8402dac92272e3f7f5f2351ebb50ec7513f5->leave($__internal_a4321d243715b8001b6d14ea102c8402dac92272e3f7f5f2351ebb50ec7513f5_prof);

        
        $__internal_52e09f7c4f586a2e2df76c3dd2edeae5f43abac4bc224337cb833b05143b3229->leave($__internal_52e09f7c4f586a2e2df76c3dd2edeae5f43abac4bc224337cb833b05143b3229_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4baeaedfa39ca8ed936fb5b21bbda1eabd5e7cae15eed7883118fd2f3f48201e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4baeaedfa39ca8ed936fb5b21bbda1eabd5e7cae15eed7883118fd2f3f48201e->enter($__internal_4baeaedfa39ca8ed936fb5b21bbda1eabd5e7cae15eed7883118fd2f3f48201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c40828725c0e8272dc5f470858ef6268acc39827a1e33eb1d0c2433c09dd43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c40828725c0e8272dc5f470858ef6268acc39827a1e33eb1d0c2433c09dd43c->enter($__internal_2c40828725c0e8272dc5f470858ef6268acc39827a1e33eb1d0c2433c09dd43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_2c40828725c0e8272dc5f470858ef6268acc39827a1e33eb1d0c2433c09dd43c->leave($__internal_2c40828725c0e8272dc5f470858ef6268acc39827a1e33eb1d0c2433c09dd43c_prof);

        
        $__internal_4baeaedfa39ca8ed936fb5b21bbda1eabd5e7cae15eed7883118fd2f3f48201e->leave($__internal_4baeaedfa39ca8ed936fb5b21bbda1eabd5e7cae15eed7883118fd2f3f48201e_prof);

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

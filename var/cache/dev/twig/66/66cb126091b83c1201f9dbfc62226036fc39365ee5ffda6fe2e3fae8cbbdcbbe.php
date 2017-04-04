<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_35dda62958d97826c4833b58a9730c1920fe21417245577fcb1517daec7743bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca405fa13f3befef177fb2aa6f684f608e77f4f6a7636d52b5b86503fbff0887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca405fa13f3befef177fb2aa6f684f608e77f4f6a7636d52b5b86503fbff0887->enter($__internal_ca405fa13f3befef177fb2aa6f684f608e77f4f6a7636d52b5b86503fbff0887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0498a108f004c482b46928a58a8f6439b6458e03bf5166e418ae57f1fbcd1cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0498a108f004c482b46928a58a8f6439b6458e03bf5166e418ae57f1fbcd1cd1->enter($__internal_0498a108f004c482b46928a58a8f6439b6458e03bf5166e418ae57f1fbcd1cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca405fa13f3befef177fb2aa6f684f608e77f4f6a7636d52b5b86503fbff0887->leave($__internal_ca405fa13f3befef177fb2aa6f684f608e77f4f6a7636d52b5b86503fbff0887_prof);

        
        $__internal_0498a108f004c482b46928a58a8f6439b6458e03bf5166e418ae57f1fbcd1cd1->leave($__internal_0498a108f004c482b46928a58a8f6439b6458e03bf5166e418ae57f1fbcd1cd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33bfed5b97142bc662306568dfa38dd372a7bd7d17fdbd2cba991de2ce027e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bfed5b97142bc662306568dfa38dd372a7bd7d17fdbd2cba991de2ce027e15->enter($__internal_33bfed5b97142bc662306568dfa38dd372a7bd7d17fdbd2cba991de2ce027e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ca0bd86022545bb1807ddb169f9f2a2e797bb2b05389d8dd98abb0d76352c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca0bd86022545bb1807ddb169f9f2a2e797bb2b05389d8dd98abb0d76352c4a->enter($__internal_4ca0bd86022545bb1807ddb169f9f2a2e797bb2b05389d8dd98abb0d76352c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4ca0bd86022545bb1807ddb169f9f2a2e797bb2b05389d8dd98abb0d76352c4a->leave($__internal_4ca0bd86022545bb1807ddb169f9f2a2e797bb2b05389d8dd98abb0d76352c4a_prof);

        
        $__internal_33bfed5b97142bc662306568dfa38dd372a7bd7d17fdbd2cba991de2ce027e15->leave($__internal_33bfed5b97142bc662306568dfa38dd372a7bd7d17fdbd2cba991de2ce027e15_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c30a16e505502bb43d27358b64af7544f457587d08a91369051b392a73d3276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c30a16e505502bb43d27358b64af7544f457587d08a91369051b392a73d3276->enter($__internal_8c30a16e505502bb43d27358b64af7544f457587d08a91369051b392a73d3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a7caca7bce69df077f04d7308cc8fa9fe7c2fe1241bc83c5e9e5828b88152ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7caca7bce69df077f04d7308cc8fa9fe7c2fe1241bc83c5e9e5828b88152ab->enter($__internal_9a7caca7bce69df077f04d7308cc8fa9fe7c2fe1241bc83c5e9e5828b88152ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9a7caca7bce69df077f04d7308cc8fa9fe7c2fe1241bc83c5e9e5828b88152ab->leave($__internal_9a7caca7bce69df077f04d7308cc8fa9fe7c2fe1241bc83c5e9e5828b88152ab_prof);

        
        $__internal_8c30a16e505502bb43d27358b64af7544f457587d08a91369051b392a73d3276->leave($__internal_8c30a16e505502bb43d27358b64af7544f457587d08a91369051b392a73d3276_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

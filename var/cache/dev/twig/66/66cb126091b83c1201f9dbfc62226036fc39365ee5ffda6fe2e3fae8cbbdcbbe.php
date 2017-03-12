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
        $__internal_8f476d84d946208c1f0e89fd79b6d8b974178d89f5f06f128fd7a324669da00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f476d84d946208c1f0e89fd79b6d8b974178d89f5f06f128fd7a324669da00a->enter($__internal_8f476d84d946208c1f0e89fd79b6d8b974178d89f5f06f128fd7a324669da00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cb30ae2d24c7381a25d4a281b40d40d53e9e74298b35d9602937ff426e068891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb30ae2d24c7381a25d4a281b40d40d53e9e74298b35d9602937ff426e068891->enter($__internal_cb30ae2d24c7381a25d4a281b40d40d53e9e74298b35d9602937ff426e068891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f476d84d946208c1f0e89fd79b6d8b974178d89f5f06f128fd7a324669da00a->leave($__internal_8f476d84d946208c1f0e89fd79b6d8b974178d89f5f06f128fd7a324669da00a_prof);

        
        $__internal_cb30ae2d24c7381a25d4a281b40d40d53e9e74298b35d9602937ff426e068891->leave($__internal_cb30ae2d24c7381a25d4a281b40d40d53e9e74298b35d9602937ff426e068891_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82427661bc564fdd8425a829086ff9993e9ebfc2636d569c8adc6abb2460af29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82427661bc564fdd8425a829086ff9993e9ebfc2636d569c8adc6abb2460af29->enter($__internal_82427661bc564fdd8425a829086ff9993e9ebfc2636d569c8adc6abb2460af29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_715ba8ae23fbb7e79923f88fe6dabf120dd41788da784c2906ad599c31979cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715ba8ae23fbb7e79923f88fe6dabf120dd41788da784c2906ad599c31979cb1->enter($__internal_715ba8ae23fbb7e79923f88fe6dabf120dd41788da784c2906ad599c31979cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_715ba8ae23fbb7e79923f88fe6dabf120dd41788da784c2906ad599c31979cb1->leave($__internal_715ba8ae23fbb7e79923f88fe6dabf120dd41788da784c2906ad599c31979cb1_prof);

        
        $__internal_82427661bc564fdd8425a829086ff9993e9ebfc2636d569c8adc6abb2460af29->leave($__internal_82427661bc564fdd8425a829086ff9993e9ebfc2636d569c8adc6abb2460af29_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c32bb677b93fbee7cfecced9395653e8000e53e01a3db4e6cd6556ad3ed958f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32bb677b93fbee7cfecced9395653e8000e53e01a3db4e6cd6556ad3ed958f6->enter($__internal_c32bb677b93fbee7cfecced9395653e8000e53e01a3db4e6cd6556ad3ed958f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceaaafd9ac084c8e08cc408573344fd1f0f61170a46c81f50024e8131d405d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceaaafd9ac084c8e08cc408573344fd1f0f61170a46c81f50024e8131d405d92->enter($__internal_ceaaafd9ac084c8e08cc408573344fd1f0f61170a46c81f50024e8131d405d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ceaaafd9ac084c8e08cc408573344fd1f0f61170a46c81f50024e8131d405d92->leave($__internal_ceaaafd9ac084c8e08cc408573344fd1f0f61170a46c81f50024e8131d405d92_prof);

        
        $__internal_c32bb677b93fbee7cfecced9395653e8000e53e01a3db4e6cd6556ad3ed958f6->leave($__internal_c32bb677b93fbee7cfecced9395653e8000e53e01a3db4e6cd6556ad3ed958f6_prof);

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

<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5145ff72f6a3e76e148ff39b58ac40e49140d53b1948a05da82a690f8b1e8636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eebfdac38eae5c55a566680636b5418c96831fb29c01ee56251c5d7d0d11305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eebfdac38eae5c55a566680636b5418c96831fb29c01ee56251c5d7d0d11305->enter($__internal_1eebfdac38eae5c55a566680636b5418c96831fb29c01ee56251c5d7d0d11305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e75a99d2ffeac44da2792d92f71be7f876f4d1dee679ee414d2d515856c602d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75a99d2ffeac44da2792d92f71be7f876f4d1dee679ee414d2d515856c602d7->enter($__internal_e75a99d2ffeac44da2792d92f71be7f876f4d1dee679ee414d2d515856c602d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eebfdac38eae5c55a566680636b5418c96831fb29c01ee56251c5d7d0d11305->leave($__internal_1eebfdac38eae5c55a566680636b5418c96831fb29c01ee56251c5d7d0d11305_prof);

        
        $__internal_e75a99d2ffeac44da2792d92f71be7f876f4d1dee679ee414d2d515856c602d7->leave($__internal_e75a99d2ffeac44da2792d92f71be7f876f4d1dee679ee414d2d515856c602d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_609bb31e08d0fcdf6c8c9ab12e39ff3322a8d3dcf8ba07491c21468a0a6b17e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609bb31e08d0fcdf6c8c9ab12e39ff3322a8d3dcf8ba07491c21468a0a6b17e3->enter($__internal_609bb31e08d0fcdf6c8c9ab12e39ff3322a8d3dcf8ba07491c21468a0a6b17e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c877e1e8e147fd8c61a77cd7aefd6612e065d8d478240549c722794c2eb06706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c877e1e8e147fd8c61a77cd7aefd6612e065d8d478240549c722794c2eb06706->enter($__internal_c877e1e8e147fd8c61a77cd7aefd6612e065d8d478240549c722794c2eb06706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c877e1e8e147fd8c61a77cd7aefd6612e065d8d478240549c722794c2eb06706->leave($__internal_c877e1e8e147fd8c61a77cd7aefd6612e065d8d478240549c722794c2eb06706_prof);

        
        $__internal_609bb31e08d0fcdf6c8c9ab12e39ff3322a8d3dcf8ba07491c21468a0a6b17e3->leave($__internal_609bb31e08d0fcdf6c8c9ab12e39ff3322a8d3dcf8ba07491c21468a0a6b17e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcd946fad7eb8e7d2b4a8419efe48d9c90c2a89200e0411ef8ae41d6f7e2a778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd946fad7eb8e7d2b4a8419efe48d9c90c2a89200e0411ef8ae41d6f7e2a778->enter($__internal_bcd946fad7eb8e7d2b4a8419efe48d9c90c2a89200e0411ef8ae41d6f7e2a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2ef14bdab954e8a53de128d75591d5e7c7d60224a842cc9194e24ee434222d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ef14bdab954e8a53de128d75591d5e7c7d60224a842cc9194e24ee434222d5->enter($__internal_c2ef14bdab954e8a53de128d75591d5e7c7d60224a842cc9194e24ee434222d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c2ef14bdab954e8a53de128d75591d5e7c7d60224a842cc9194e24ee434222d5->leave($__internal_c2ef14bdab954e8a53de128d75591d5e7c7d60224a842cc9194e24ee434222d5_prof);

        
        $__internal_bcd946fad7eb8e7d2b4a8419efe48d9c90c2a89200e0411ef8ae41d6f7e2a778->leave($__internal_bcd946fad7eb8e7d2b4a8419efe48d9c90c2a89200e0411ef8ae41d6f7e2a778_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04d73381723b641d89a11b3102851f69790324c3001cb8cba1ae7113dc1170ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d73381723b641d89a11b3102851f69790324c3001cb8cba1ae7113dc1170ca->enter($__internal_04d73381723b641d89a11b3102851f69790324c3001cb8cba1ae7113dc1170ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_059ff9bea949d5a17d8b75bcc4cd8d6eab7de85ed4ec49118fd2c590694316b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059ff9bea949d5a17d8b75bcc4cd8d6eab7de85ed4ec49118fd2c590694316b8->enter($__internal_059ff9bea949d5a17d8b75bcc4cd8d6eab7de85ed4ec49118fd2c590694316b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_059ff9bea949d5a17d8b75bcc4cd8d6eab7de85ed4ec49118fd2c590694316b8->leave($__internal_059ff9bea949d5a17d8b75bcc4cd8d6eab7de85ed4ec49118fd2c590694316b8_prof);

        
        $__internal_04d73381723b641d89a11b3102851f69790324c3001cb8cba1ae7113dc1170ca->leave($__internal_04d73381723b641d89a11b3102851f69790324c3001cb8cba1ae7113dc1170ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

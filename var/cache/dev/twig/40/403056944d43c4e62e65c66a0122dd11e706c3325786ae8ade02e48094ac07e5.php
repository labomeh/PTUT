<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_ca82477e4a7ab538d30505e8986cb30870f14d898f6ed2693e50468120eb3375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca82477e4a7ab538d30505e8986cb30870f14d898f6ed2693e50468120eb3375->enter($__internal_ca82477e4a7ab538d30505e8986cb30870f14d898f6ed2693e50468120eb3375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_23e570075dbdc7d28fd2d1286b848f31836dd9b12afb74a777000daed2b6d5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e570075dbdc7d28fd2d1286b848f31836dd9b12afb74a777000daed2b6d5b0->enter($__internal_23e570075dbdc7d28fd2d1286b848f31836dd9b12afb74a777000daed2b6d5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca82477e4a7ab538d30505e8986cb30870f14d898f6ed2693e50468120eb3375->leave($__internal_ca82477e4a7ab538d30505e8986cb30870f14d898f6ed2693e50468120eb3375_prof);

        
        $__internal_23e570075dbdc7d28fd2d1286b848f31836dd9b12afb74a777000daed2b6d5b0->leave($__internal_23e570075dbdc7d28fd2d1286b848f31836dd9b12afb74a777000daed2b6d5b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43d873b913501467a2064eb26b437babaf7f058a5b9d3bbe3262af7d79d8f7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d873b913501467a2064eb26b437babaf7f058a5b9d3bbe3262af7d79d8f7c8->enter($__internal_43d873b913501467a2064eb26b437babaf7f058a5b9d3bbe3262af7d79d8f7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5167b131311bc04a4dd84cf037f4208c0ee473b673b4c96e049197659936eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5167b131311bc04a4dd84cf037f4208c0ee473b673b4c96e049197659936eb7->enter($__internal_c5167b131311bc04a4dd84cf037f4208c0ee473b673b4c96e049197659936eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c5167b131311bc04a4dd84cf037f4208c0ee473b673b4c96e049197659936eb7->leave($__internal_c5167b131311bc04a4dd84cf037f4208c0ee473b673b4c96e049197659936eb7_prof);

        
        $__internal_43d873b913501467a2064eb26b437babaf7f058a5b9d3bbe3262af7d79d8f7c8->leave($__internal_43d873b913501467a2064eb26b437babaf7f058a5b9d3bbe3262af7d79d8f7c8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b7b120fc8f33e2bb8a9ef79b37036d1596d20000a49a4fe20a134f87f558198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7b120fc8f33e2bb8a9ef79b37036d1596d20000a49a4fe20a134f87f558198->enter($__internal_6b7b120fc8f33e2bb8a9ef79b37036d1596d20000a49a4fe20a134f87f558198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91c39f69faac7b9fbe36eb0906691ed7cb48ff2246fa70642f175468e0139ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c39f69faac7b9fbe36eb0906691ed7cb48ff2246fa70642f175468e0139ca2->enter($__internal_91c39f69faac7b9fbe36eb0906691ed7cb48ff2246fa70642f175468e0139ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_91c39f69faac7b9fbe36eb0906691ed7cb48ff2246fa70642f175468e0139ca2->leave($__internal_91c39f69faac7b9fbe36eb0906691ed7cb48ff2246fa70642f175468e0139ca2_prof);

        
        $__internal_6b7b120fc8f33e2bb8a9ef79b37036d1596d20000a49a4fe20a134f87f558198->leave($__internal_6b7b120fc8f33e2bb8a9ef79b37036d1596d20000a49a4fe20a134f87f558198_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6583f86f7ee04795602f7433b2c988b919f7e3b95e210abadfef0278c1ea6f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6583f86f7ee04795602f7433b2c988b919f7e3b95e210abadfef0278c1ea6f9->enter($__internal_e6583f86f7ee04795602f7433b2c988b919f7e3b95e210abadfef0278c1ea6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d91f69692c5dd857791f1e95e165502f6d431903df0499ce0dfcae228a25d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d91f69692c5dd857791f1e95e165502f6d431903df0499ce0dfcae228a25d62->enter($__internal_4d91f69692c5dd857791f1e95e165502f6d431903df0499ce0dfcae228a25d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4d91f69692c5dd857791f1e95e165502f6d431903df0499ce0dfcae228a25d62->leave($__internal_4d91f69692c5dd857791f1e95e165502f6d431903df0499ce0dfcae228a25d62_prof);

        
        $__internal_e6583f86f7ee04795602f7433b2c988b919f7e3b95e210abadfef0278c1ea6f9->leave($__internal_e6583f86f7ee04795602f7433b2c988b919f7e3b95e210abadfef0278c1ea6f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

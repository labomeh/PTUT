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
        $__internal_5731ab02b6233b186e976be31d56ea2ad22b16dd550957424651f678d190621f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5731ab02b6233b186e976be31d56ea2ad22b16dd550957424651f678d190621f->enter($__internal_5731ab02b6233b186e976be31d56ea2ad22b16dd550957424651f678d190621f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2c587b71955ceb5bbdb52872da4694ca83576b75a51487bedb975ba2dd9bc7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c587b71955ceb5bbdb52872da4694ca83576b75a51487bedb975ba2dd9bc7a4->enter($__internal_2c587b71955ceb5bbdb52872da4694ca83576b75a51487bedb975ba2dd9bc7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5731ab02b6233b186e976be31d56ea2ad22b16dd550957424651f678d190621f->leave($__internal_5731ab02b6233b186e976be31d56ea2ad22b16dd550957424651f678d190621f_prof);

        
        $__internal_2c587b71955ceb5bbdb52872da4694ca83576b75a51487bedb975ba2dd9bc7a4->leave($__internal_2c587b71955ceb5bbdb52872da4694ca83576b75a51487bedb975ba2dd9bc7a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac0be60626baec6fed9d25057263013a57afe130930ae1f7a75ee57436f696eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0be60626baec6fed9d25057263013a57afe130930ae1f7a75ee57436f696eb->enter($__internal_ac0be60626baec6fed9d25057263013a57afe130930ae1f7a75ee57436f696eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfd69ce79dce72bea1a37e6c4b6f7ba0a2d81eac61a47d41563d8690f5e28037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd69ce79dce72bea1a37e6c4b6f7ba0a2d81eac61a47d41563d8690f5e28037->enter($__internal_cfd69ce79dce72bea1a37e6c4b6f7ba0a2d81eac61a47d41563d8690f5e28037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cfd69ce79dce72bea1a37e6c4b6f7ba0a2d81eac61a47d41563d8690f5e28037->leave($__internal_cfd69ce79dce72bea1a37e6c4b6f7ba0a2d81eac61a47d41563d8690f5e28037_prof);

        
        $__internal_ac0be60626baec6fed9d25057263013a57afe130930ae1f7a75ee57436f696eb->leave($__internal_ac0be60626baec6fed9d25057263013a57afe130930ae1f7a75ee57436f696eb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c58bf84cd543137f36053a024c5caa130204d7f4d3618a5412a5d73469321d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58bf84cd543137f36053a024c5caa130204d7f4d3618a5412a5d73469321d94->enter($__internal_c58bf84cd543137f36053a024c5caa130204d7f4d3618a5412a5d73469321d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ba8f11d34b8e409ecb876c0f6732bebfd654ef08b4b37f52405bc9a06c4a14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba8f11d34b8e409ecb876c0f6732bebfd654ef08b4b37f52405bc9a06c4a14c->enter($__internal_6ba8f11d34b8e409ecb876c0f6732bebfd654ef08b4b37f52405bc9a06c4a14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6ba8f11d34b8e409ecb876c0f6732bebfd654ef08b4b37f52405bc9a06c4a14c->leave($__internal_6ba8f11d34b8e409ecb876c0f6732bebfd654ef08b4b37f52405bc9a06c4a14c_prof);

        
        $__internal_c58bf84cd543137f36053a024c5caa130204d7f4d3618a5412a5d73469321d94->leave($__internal_c58bf84cd543137f36053a024c5caa130204d7f4d3618a5412a5d73469321d94_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2e2d88150c7cfbbc95bb7e754229cc0933260219ef48321c209684876111bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e2d88150c7cfbbc95bb7e754229cc0933260219ef48321c209684876111bb2->enter($__internal_f2e2d88150c7cfbbc95bb7e754229cc0933260219ef48321c209684876111bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e17268057f7c6643585de9b44d7855e7dcf139cc9e3f61b3cb511ab9dce86313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17268057f7c6643585de9b44d7855e7dcf139cc9e3f61b3cb511ab9dce86313->enter($__internal_e17268057f7c6643585de9b44d7855e7dcf139cc9e3f61b3cb511ab9dce86313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e17268057f7c6643585de9b44d7855e7dcf139cc9e3f61b3cb511ab9dce86313->leave($__internal_e17268057f7c6643585de9b44d7855e7dcf139cc9e3f61b3cb511ab9dce86313_prof);

        
        $__internal_f2e2d88150c7cfbbc95bb7e754229cc0933260219ef48321c209684876111bb2->leave($__internal_f2e2d88150c7cfbbc95bb7e754229cc0933260219ef48321c209684876111bb2_prof);

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

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
        $__internal_e729fc54c87bc847e1ebadcdb693152998521c7f848875ce3ff6f186f18c7829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e729fc54c87bc847e1ebadcdb693152998521c7f848875ce3ff6f186f18c7829->enter($__internal_e729fc54c87bc847e1ebadcdb693152998521c7f848875ce3ff6f186f18c7829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3d1c459760a96d21ce9e881b3e3656daa8d6841ffdc488faf868d5d1c02a07b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1c459760a96d21ce9e881b3e3656daa8d6841ffdc488faf868d5d1c02a07b3->enter($__internal_3d1c459760a96d21ce9e881b3e3656daa8d6841ffdc488faf868d5d1c02a07b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e729fc54c87bc847e1ebadcdb693152998521c7f848875ce3ff6f186f18c7829->leave($__internal_e729fc54c87bc847e1ebadcdb693152998521c7f848875ce3ff6f186f18c7829_prof);

        
        $__internal_3d1c459760a96d21ce9e881b3e3656daa8d6841ffdc488faf868d5d1c02a07b3->leave($__internal_3d1c459760a96d21ce9e881b3e3656daa8d6841ffdc488faf868d5d1c02a07b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9a06b654f823ecaf88110f8a811b40e07a86816fac1700be695c89f63cb2abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a06b654f823ecaf88110f8a811b40e07a86816fac1700be695c89f63cb2abc->enter($__internal_a9a06b654f823ecaf88110f8a811b40e07a86816fac1700be695c89f63cb2abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df5351514e14db8544e30266ae031759c6cbd3219549243f0925c63ccd111665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5351514e14db8544e30266ae031759c6cbd3219549243f0925c63ccd111665->enter($__internal_df5351514e14db8544e30266ae031759c6cbd3219549243f0925c63ccd111665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_df5351514e14db8544e30266ae031759c6cbd3219549243f0925c63ccd111665->leave($__internal_df5351514e14db8544e30266ae031759c6cbd3219549243f0925c63ccd111665_prof);

        
        $__internal_a9a06b654f823ecaf88110f8a811b40e07a86816fac1700be695c89f63cb2abc->leave($__internal_a9a06b654f823ecaf88110f8a811b40e07a86816fac1700be695c89f63cb2abc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81bb63dfb90336e50765d27dd3f33c057e3a1b108631efb217417f0ecbf3f030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bb63dfb90336e50765d27dd3f33c057e3a1b108631efb217417f0ecbf3f030->enter($__internal_81bb63dfb90336e50765d27dd3f33c057e3a1b108631efb217417f0ecbf3f030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_455f8fd22d30757c4ceab949ea38e92d05a3941642027df1e15649729484c19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455f8fd22d30757c4ceab949ea38e92d05a3941642027df1e15649729484c19a->enter($__internal_455f8fd22d30757c4ceab949ea38e92d05a3941642027df1e15649729484c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_455f8fd22d30757c4ceab949ea38e92d05a3941642027df1e15649729484c19a->leave($__internal_455f8fd22d30757c4ceab949ea38e92d05a3941642027df1e15649729484c19a_prof);

        
        $__internal_81bb63dfb90336e50765d27dd3f33c057e3a1b108631efb217417f0ecbf3f030->leave($__internal_81bb63dfb90336e50765d27dd3f33c057e3a1b108631efb217417f0ecbf3f030_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f6f57ece045a297ca1aeccb411b338253636f192f1ec6fe280e9140b6e302f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6f57ece045a297ca1aeccb411b338253636f192f1ec6fe280e9140b6e302f7->enter($__internal_3f6f57ece045a297ca1aeccb411b338253636f192f1ec6fe280e9140b6e302f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63296ebcaccb401c43ad51135ac93bab90fcc6fb06743ff8774937342a07a84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63296ebcaccb401c43ad51135ac93bab90fcc6fb06743ff8774937342a07a84b->enter($__internal_63296ebcaccb401c43ad51135ac93bab90fcc6fb06743ff8774937342a07a84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_63296ebcaccb401c43ad51135ac93bab90fcc6fb06743ff8774937342a07a84b->leave($__internal_63296ebcaccb401c43ad51135ac93bab90fcc6fb06743ff8774937342a07a84b_prof);

        
        $__internal_3f6f57ece045a297ca1aeccb411b338253636f192f1ec6fe280e9140b6e302f7->leave($__internal_3f6f57ece045a297ca1aeccb411b338253636f192f1ec6fe280e9140b6e302f7_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

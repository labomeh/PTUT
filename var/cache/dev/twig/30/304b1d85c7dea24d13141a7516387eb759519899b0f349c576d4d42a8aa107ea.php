<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e60a21b9f9abb1c8179ac1ee78bb1d1e6bcfe8114974a74ab2d5e0a66993d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5d5f9fb0c409db8d45f675ad6da55e0066034d87d7c0777481511e2fcac3010b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5f9fb0c409db8d45f675ad6da55e0066034d87d7c0777481511e2fcac3010b->enter($__internal_5d5f9fb0c409db8d45f675ad6da55e0066034d87d7c0777481511e2fcac3010b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9611ab74a53ff7ed06538904fd35c0450eb7d2ebf0018f2aad3690ea740a076b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9611ab74a53ff7ed06538904fd35c0450eb7d2ebf0018f2aad3690ea740a076b->enter($__internal_9611ab74a53ff7ed06538904fd35c0450eb7d2ebf0018f2aad3690ea740a076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5f9fb0c409db8d45f675ad6da55e0066034d87d7c0777481511e2fcac3010b->leave($__internal_5d5f9fb0c409db8d45f675ad6da55e0066034d87d7c0777481511e2fcac3010b_prof);

        
        $__internal_9611ab74a53ff7ed06538904fd35c0450eb7d2ebf0018f2aad3690ea740a076b->leave($__internal_9611ab74a53ff7ed06538904fd35c0450eb7d2ebf0018f2aad3690ea740a076b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13c2d6cece32cd074fa03af6b1ffeaad650fb10179c49522416e0105b536c1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c2d6cece32cd074fa03af6b1ffeaad650fb10179c49522416e0105b536c1e7->enter($__internal_13c2d6cece32cd074fa03af6b1ffeaad650fb10179c49522416e0105b536c1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed638580ab3f735d899d9e140cd501ca9538063e17acd49312ee2fb123d06b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed638580ab3f735d899d9e140cd501ca9538063e17acd49312ee2fb123d06b80->enter($__internal_ed638580ab3f735d899d9e140cd501ca9538063e17acd49312ee2fb123d06b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed638580ab3f735d899d9e140cd501ca9538063e17acd49312ee2fb123d06b80->leave($__internal_ed638580ab3f735d899d9e140cd501ca9538063e17acd49312ee2fb123d06b80_prof);

        
        $__internal_13c2d6cece32cd074fa03af6b1ffeaad650fb10179c49522416e0105b536c1e7->leave($__internal_13c2d6cece32cd074fa03af6b1ffeaad650fb10179c49522416e0105b536c1e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_431955c51ef518db66c0675c373807b4814b8bce8f9c85033dc5ee07ccf47674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431955c51ef518db66c0675c373807b4814b8bce8f9c85033dc5ee07ccf47674->enter($__internal_431955c51ef518db66c0675c373807b4814b8bce8f9c85033dc5ee07ccf47674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03679211c936d48b34da758d1bee1339a6364ed726d7fab8113a2344adae583a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03679211c936d48b34da758d1bee1339a6364ed726d7fab8113a2344adae583a->enter($__internal_03679211c936d48b34da758d1bee1339a6364ed726d7fab8113a2344adae583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03679211c936d48b34da758d1bee1339a6364ed726d7fab8113a2344adae583a->leave($__internal_03679211c936d48b34da758d1bee1339a6364ed726d7fab8113a2344adae583a_prof);

        
        $__internal_431955c51ef518db66c0675c373807b4814b8bce8f9c85033dc5ee07ccf47674->leave($__internal_431955c51ef518db66c0675c373807b4814b8bce8f9c85033dc5ee07ccf47674_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ed31dfeb6d03f1354b4edf2dc64090e985bf9374a13094d0fd92a052091c862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed31dfeb6d03f1354b4edf2dc64090e985bf9374a13094d0fd92a052091c862->enter($__internal_1ed31dfeb6d03f1354b4edf2dc64090e985bf9374a13094d0fd92a052091c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fc2b6f2d2f64bbae318e4d8e0a3dd6e8c8bdeecb84f9b8ba482b6307da0dd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc2b6f2d2f64bbae318e4d8e0a3dd6e8c8bdeecb84f9b8ba482b6307da0dd48->enter($__internal_6fc2b6f2d2f64bbae318e4d8e0a3dd6e8c8bdeecb84f9b8ba482b6307da0dd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6fc2b6f2d2f64bbae318e4d8e0a3dd6e8c8bdeecb84f9b8ba482b6307da0dd48->leave($__internal_6fc2b6f2d2f64bbae318e4d8e0a3dd6e8c8bdeecb84f9b8ba482b6307da0dd48_prof);

        
        $__internal_1ed31dfeb6d03f1354b4edf2dc64090e985bf9374a13094d0fd92a052091c862->leave($__internal_1ed31dfeb6d03f1354b4edf2dc64090e985bf9374a13094d0fd92a052091c862_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

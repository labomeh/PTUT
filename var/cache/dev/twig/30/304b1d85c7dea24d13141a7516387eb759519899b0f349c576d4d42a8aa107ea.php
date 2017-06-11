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
        $__internal_c9cbcef5a37219ef76c184d61ec71395f6044d0ea28f7ac481d0a26497f7527e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cbcef5a37219ef76c184d61ec71395f6044d0ea28f7ac481d0a26497f7527e->enter($__internal_c9cbcef5a37219ef76c184d61ec71395f6044d0ea28f7ac481d0a26497f7527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_939cd9a6c5addaf32ae675cd08e24869e2642746d104e2a245b82e255358b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939cd9a6c5addaf32ae675cd08e24869e2642746d104e2a245b82e255358b3d6->enter($__internal_939cd9a6c5addaf32ae675cd08e24869e2642746d104e2a245b82e255358b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9cbcef5a37219ef76c184d61ec71395f6044d0ea28f7ac481d0a26497f7527e->leave($__internal_c9cbcef5a37219ef76c184d61ec71395f6044d0ea28f7ac481d0a26497f7527e_prof);

        
        $__internal_939cd9a6c5addaf32ae675cd08e24869e2642746d104e2a245b82e255358b3d6->leave($__internal_939cd9a6c5addaf32ae675cd08e24869e2642746d104e2a245b82e255358b3d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb56fa42c4f7085ff46ef387239db8416b8ef879127a0f75bcb1f4d137323631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb56fa42c4f7085ff46ef387239db8416b8ef879127a0f75bcb1f4d137323631->enter($__internal_eb56fa42c4f7085ff46ef387239db8416b8ef879127a0f75bcb1f4d137323631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3065545e9c2072bc70aa34d60156889c547f57eef514569f080580a8379033d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3065545e9c2072bc70aa34d60156889c547f57eef514569f080580a8379033d4->enter($__internal_3065545e9c2072bc70aa34d60156889c547f57eef514569f080580a8379033d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3065545e9c2072bc70aa34d60156889c547f57eef514569f080580a8379033d4->leave($__internal_3065545e9c2072bc70aa34d60156889c547f57eef514569f080580a8379033d4_prof);

        
        $__internal_eb56fa42c4f7085ff46ef387239db8416b8ef879127a0f75bcb1f4d137323631->leave($__internal_eb56fa42c4f7085ff46ef387239db8416b8ef879127a0f75bcb1f4d137323631_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8e9a498df2c283349204f33655433c8b3e3dcf3bcf740420651955727ce7847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e9a498df2c283349204f33655433c8b3e3dcf3bcf740420651955727ce7847->enter($__internal_b8e9a498df2c283349204f33655433c8b3e3dcf3bcf740420651955727ce7847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5215fb8cda268335c93a64e2462974e92b1a232dfa1b5586e95e057693a01b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5215fb8cda268335c93a64e2462974e92b1a232dfa1b5586e95e057693a01b30->enter($__internal_5215fb8cda268335c93a64e2462974e92b1a232dfa1b5586e95e057693a01b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5215fb8cda268335c93a64e2462974e92b1a232dfa1b5586e95e057693a01b30->leave($__internal_5215fb8cda268335c93a64e2462974e92b1a232dfa1b5586e95e057693a01b30_prof);

        
        $__internal_b8e9a498df2c283349204f33655433c8b3e3dcf3bcf740420651955727ce7847->leave($__internal_b8e9a498df2c283349204f33655433c8b3e3dcf3bcf740420651955727ce7847_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce91a35b78eb1d41ba69f8ee556a3ca28bd54b7e16542fe57462d047c997abbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce91a35b78eb1d41ba69f8ee556a3ca28bd54b7e16542fe57462d047c997abbd->enter($__internal_ce91a35b78eb1d41ba69f8ee556a3ca28bd54b7e16542fe57462d047c997abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4af8c56f39196aaec7e0d8e54eb621cf4e087fba1d4330a2a2a8b55f475bf419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af8c56f39196aaec7e0d8e54eb621cf4e087fba1d4330a2a2a8b55f475bf419->enter($__internal_4af8c56f39196aaec7e0d8e54eb621cf4e087fba1d4330a2a2a8b55f475bf419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4af8c56f39196aaec7e0d8e54eb621cf4e087fba1d4330a2a2a8b55f475bf419->leave($__internal_4af8c56f39196aaec7e0d8e54eb621cf4e087fba1d4330a2a2a8b55f475bf419_prof);

        
        $__internal_ce91a35b78eb1d41ba69f8ee556a3ca28bd54b7e16542fe57462d047c997abbd->leave($__internal_ce91a35b78eb1d41ba69f8ee556a3ca28bd54b7e16542fe57462d047c997abbd_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

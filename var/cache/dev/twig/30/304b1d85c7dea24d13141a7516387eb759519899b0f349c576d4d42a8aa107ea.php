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
        $__internal_022374a62a7e3ecbaab35960a3481e8e9e3cd6a8224c08926ed2abf82066ca54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022374a62a7e3ecbaab35960a3481e8e9e3cd6a8224c08926ed2abf82066ca54->enter($__internal_022374a62a7e3ecbaab35960a3481e8e9e3cd6a8224c08926ed2abf82066ca54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_45b5ba680830b76212b41f557282b5ffc4456f21f43a42c5949dd4df8634e745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b5ba680830b76212b41f557282b5ffc4456f21f43a42c5949dd4df8634e745->enter($__internal_45b5ba680830b76212b41f557282b5ffc4456f21f43a42c5949dd4df8634e745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022374a62a7e3ecbaab35960a3481e8e9e3cd6a8224c08926ed2abf82066ca54->leave($__internal_022374a62a7e3ecbaab35960a3481e8e9e3cd6a8224c08926ed2abf82066ca54_prof);

        
        $__internal_45b5ba680830b76212b41f557282b5ffc4456f21f43a42c5949dd4df8634e745->leave($__internal_45b5ba680830b76212b41f557282b5ffc4456f21f43a42c5949dd4df8634e745_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec67406a9d297c36b47843e04a87a78da591814c663aa5cfcd20982630ed9706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec67406a9d297c36b47843e04a87a78da591814c663aa5cfcd20982630ed9706->enter($__internal_ec67406a9d297c36b47843e04a87a78da591814c663aa5cfcd20982630ed9706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db5e678d91761ff56b5cce81731439654ea56220d3da9fc8f59d6e33b9181f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5e678d91761ff56b5cce81731439654ea56220d3da9fc8f59d6e33b9181f56->enter($__internal_db5e678d91761ff56b5cce81731439654ea56220d3da9fc8f59d6e33b9181f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db5e678d91761ff56b5cce81731439654ea56220d3da9fc8f59d6e33b9181f56->leave($__internal_db5e678d91761ff56b5cce81731439654ea56220d3da9fc8f59d6e33b9181f56_prof);

        
        $__internal_ec67406a9d297c36b47843e04a87a78da591814c663aa5cfcd20982630ed9706->leave($__internal_ec67406a9d297c36b47843e04a87a78da591814c663aa5cfcd20982630ed9706_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dd7019bb37c0dd587f2b74a43063036ef2b2577f3e7bd12bf74fb9722a05346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd7019bb37c0dd587f2b74a43063036ef2b2577f3e7bd12bf74fb9722a05346->enter($__internal_2dd7019bb37c0dd587f2b74a43063036ef2b2577f3e7bd12bf74fb9722a05346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab7caa3ee7316587b1d4fd7d137aee0e560eb9481419f76cf44855b40c782ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7caa3ee7316587b1d4fd7d137aee0e560eb9481419f76cf44855b40c782ce2->enter($__internal_ab7caa3ee7316587b1d4fd7d137aee0e560eb9481419f76cf44855b40c782ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab7caa3ee7316587b1d4fd7d137aee0e560eb9481419f76cf44855b40c782ce2->leave($__internal_ab7caa3ee7316587b1d4fd7d137aee0e560eb9481419f76cf44855b40c782ce2_prof);

        
        $__internal_2dd7019bb37c0dd587f2b74a43063036ef2b2577f3e7bd12bf74fb9722a05346->leave($__internal_2dd7019bb37c0dd587f2b74a43063036ef2b2577f3e7bd12bf74fb9722a05346_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49851058cce0a91bf0cddcbba4a463490ac4831cbcb5dd4d85e51fa18cf83662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49851058cce0a91bf0cddcbba4a463490ac4831cbcb5dd4d85e51fa18cf83662->enter($__internal_49851058cce0a91bf0cddcbba4a463490ac4831cbcb5dd4d85e51fa18cf83662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93a0c563aeb21d9bbaa2793b03f878788fa0cded048ebe0e4ca9d6a552c1d228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a0c563aeb21d9bbaa2793b03f878788fa0cded048ebe0e4ca9d6a552c1d228->enter($__internal_93a0c563aeb21d9bbaa2793b03f878788fa0cded048ebe0e4ca9d6a552c1d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93a0c563aeb21d9bbaa2793b03f878788fa0cded048ebe0e4ca9d6a552c1d228->leave($__internal_93a0c563aeb21d9bbaa2793b03f878788fa0cded048ebe0e4ca9d6a552c1d228_prof);

        
        $__internal_49851058cce0a91bf0cddcbba4a463490ac4831cbcb5dd4d85e51fa18cf83662->leave($__internal_49851058cce0a91bf0cddcbba4a463490ac4831cbcb5dd4d85e51fa18cf83662_prof);

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

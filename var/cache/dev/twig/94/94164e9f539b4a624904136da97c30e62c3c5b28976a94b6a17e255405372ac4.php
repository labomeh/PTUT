<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_42d8e42e77581f20650930d48b356188648c3ef127c86bfbf219ea2705c37659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d8e42e77581f20650930d48b356188648c3ef127c86bfbf219ea2705c37659->enter($__internal_42d8e42e77581f20650930d48b356188648c3ef127c86bfbf219ea2705c37659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_17f7fa6f6ffcddfcb9773a37797c9de55e578a2fb20524917fc3c67e08cfd22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f7fa6f6ffcddfcb9773a37797c9de55e578a2fb20524917fc3c67e08cfd22a->enter($__internal_17f7fa6f6ffcddfcb9773a37797c9de55e578a2fb20524917fc3c67e08cfd22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d8e42e77581f20650930d48b356188648c3ef127c86bfbf219ea2705c37659->leave($__internal_42d8e42e77581f20650930d48b356188648c3ef127c86bfbf219ea2705c37659_prof);

        
        $__internal_17f7fa6f6ffcddfcb9773a37797c9de55e578a2fb20524917fc3c67e08cfd22a->leave($__internal_17f7fa6f6ffcddfcb9773a37797c9de55e578a2fb20524917fc3c67e08cfd22a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_261bc259eb5fb3f1c6b8c84fe5a6d551cf7f9fa23a3112b7f7ee475c6877a39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261bc259eb5fb3f1c6b8c84fe5a6d551cf7f9fa23a3112b7f7ee475c6877a39f->enter($__internal_261bc259eb5fb3f1c6b8c84fe5a6d551cf7f9fa23a3112b7f7ee475c6877a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_16fd82d1a5ecd9c1bb5b69980c0d871a1a771b3eeed5394da13d83ad3d799969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fd82d1a5ecd9c1bb5b69980c0d871a1a771b3eeed5394da13d83ad3d799969->enter($__internal_16fd82d1a5ecd9c1bb5b69980c0d871a1a771b3eeed5394da13d83ad3d799969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16fd82d1a5ecd9c1bb5b69980c0d871a1a771b3eeed5394da13d83ad3d799969->leave($__internal_16fd82d1a5ecd9c1bb5b69980c0d871a1a771b3eeed5394da13d83ad3d799969_prof);

        
        $__internal_261bc259eb5fb3f1c6b8c84fe5a6d551cf7f9fa23a3112b7f7ee475c6877a39f->leave($__internal_261bc259eb5fb3f1c6b8c84fe5a6d551cf7f9fa23a3112b7f7ee475c6877a39f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18a1f44f0e9117577fec920bd226cc48032fa8676a5142396e26002192e4ba5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a1f44f0e9117577fec920bd226cc48032fa8676a5142396e26002192e4ba5e->enter($__internal_18a1f44f0e9117577fec920bd226cc48032fa8676a5142396e26002192e4ba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0cb7d256397620cae3b73f6035f1db13d0f089d4b37a6fcb47c90b0a8d8e788c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb7d256397620cae3b73f6035f1db13d0f089d4b37a6fcb47c90b0a8d8e788c->enter($__internal_0cb7d256397620cae3b73f6035f1db13d0f089d4b37a6fcb47c90b0a8d8e788c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cb7d256397620cae3b73f6035f1db13d0f089d4b37a6fcb47c90b0a8d8e788c->leave($__internal_0cb7d256397620cae3b73f6035f1db13d0f089d4b37a6fcb47c90b0a8d8e788c_prof);

        
        $__internal_18a1f44f0e9117577fec920bd226cc48032fa8676a5142396e26002192e4ba5e->leave($__internal_18a1f44f0e9117577fec920bd226cc48032fa8676a5142396e26002192e4ba5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9bd62b12735ff5817ac1364a3aac60b1436df6878abb0a5b91c0c7411cc97c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bd62b12735ff5817ac1364a3aac60b1436df6878abb0a5b91c0c7411cc97c4->enter($__internal_f9bd62b12735ff5817ac1364a3aac60b1436df6878abb0a5b91c0c7411cc97c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72ca7ae813d8e90c815becb03aa7f453663fa2e13af225d7cb35d931c2b6c5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ca7ae813d8e90c815becb03aa7f453663fa2e13af225d7cb35d931c2b6c5a2->enter($__internal_72ca7ae813d8e90c815becb03aa7f453663fa2e13af225d7cb35d931c2b6c5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72ca7ae813d8e90c815becb03aa7f453663fa2e13af225d7cb35d931c2b6c5a2->leave($__internal_72ca7ae813d8e90c815becb03aa7f453663fa2e13af225d7cb35d931c2b6c5a2_prof);

        
        $__internal_f9bd62b12735ff5817ac1364a3aac60b1436df6878abb0a5b91c0c7411cc97c4->leave($__internal_f9bd62b12735ff5817ac1364a3aac60b1436df6878abb0a5b91c0c7411cc97c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

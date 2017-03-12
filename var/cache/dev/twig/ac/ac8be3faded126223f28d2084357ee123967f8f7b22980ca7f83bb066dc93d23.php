<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_71e01bb40f2c971824c1189d2d09f9cba80b94232452b79c874ca45476a956fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e01bb40f2c971824c1189d2d09f9cba80b94232452b79c874ca45476a956fc->enter($__internal_71e01bb40f2c971824c1189d2d09f9cba80b94232452b79c874ca45476a956fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_77d1ffe9af8d2dd5c854b44b8849031e7ab00ec1cd616f9cd1b9c02e37ebb014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d1ffe9af8d2dd5c854b44b8849031e7ab00ec1cd616f9cd1b9c02e37ebb014->enter($__internal_77d1ffe9af8d2dd5c854b44b8849031e7ab00ec1cd616f9cd1b9c02e37ebb014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e01bb40f2c971824c1189d2d09f9cba80b94232452b79c874ca45476a956fc->leave($__internal_71e01bb40f2c971824c1189d2d09f9cba80b94232452b79c874ca45476a956fc_prof);

        
        $__internal_77d1ffe9af8d2dd5c854b44b8849031e7ab00ec1cd616f9cd1b9c02e37ebb014->leave($__internal_77d1ffe9af8d2dd5c854b44b8849031e7ab00ec1cd616f9cd1b9c02e37ebb014_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71a91851c26519cbaaf8094fc618754034ebc8c1f92c6d34408481b4bfa38acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a91851c26519cbaaf8094fc618754034ebc8c1f92c6d34408481b4bfa38acd->enter($__internal_71a91851c26519cbaaf8094fc618754034ebc8c1f92c6d34408481b4bfa38acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d79268f976198d025a2f0f01cab11ff81fa82b239e0a256ac9e880cea51d966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d79268f976198d025a2f0f01cab11ff81fa82b239e0a256ac9e880cea51d966->enter($__internal_4d79268f976198d025a2f0f01cab11ff81fa82b239e0a256ac9e880cea51d966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d79268f976198d025a2f0f01cab11ff81fa82b239e0a256ac9e880cea51d966->leave($__internal_4d79268f976198d025a2f0f01cab11ff81fa82b239e0a256ac9e880cea51d966_prof);

        
        $__internal_71a91851c26519cbaaf8094fc618754034ebc8c1f92c6d34408481b4bfa38acd->leave($__internal_71a91851c26519cbaaf8094fc618754034ebc8c1f92c6d34408481b4bfa38acd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9da126e5e989b25bd1ba8c34023259d18441520ae47ee29d1816b6eaba3a4945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da126e5e989b25bd1ba8c34023259d18441520ae47ee29d1816b6eaba3a4945->enter($__internal_9da126e5e989b25bd1ba8c34023259d18441520ae47ee29d1816b6eaba3a4945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91c64aaf34a849cd820cec6de6beb84e34c268cc89c4b3c35e99504e6f9d71b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c64aaf34a849cd820cec6de6beb84e34c268cc89c4b3c35e99504e6f9d71b5->enter($__internal_91c64aaf34a849cd820cec6de6beb84e34c268cc89c4b3c35e99504e6f9d71b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91c64aaf34a849cd820cec6de6beb84e34c268cc89c4b3c35e99504e6f9d71b5->leave($__internal_91c64aaf34a849cd820cec6de6beb84e34c268cc89c4b3c35e99504e6f9d71b5_prof);

        
        $__internal_9da126e5e989b25bd1ba8c34023259d18441520ae47ee29d1816b6eaba3a4945->leave($__internal_9da126e5e989b25bd1ba8c34023259d18441520ae47ee29d1816b6eaba3a4945_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d274159a8315f8cc8e158f5cdd5e9ca36f2eef65407f22c28d328dc8296f69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d274159a8315f8cc8e158f5cdd5e9ca36f2eef65407f22c28d328dc8296f69a->enter($__internal_6d274159a8315f8cc8e158f5cdd5e9ca36f2eef65407f22c28d328dc8296f69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90b6ecc84061f844ce67433ff5b1e5fc65c6ed624fc299d9529f49bf7d1073d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b6ecc84061f844ce67433ff5b1e5fc65c6ed624fc299d9529f49bf7d1073d1->enter($__internal_90b6ecc84061f844ce67433ff5b1e5fc65c6ed624fc299d9529f49bf7d1073d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90b6ecc84061f844ce67433ff5b1e5fc65c6ed624fc299d9529f49bf7d1073d1->leave($__internal_90b6ecc84061f844ce67433ff5b1e5fc65c6ed624fc299d9529f49bf7d1073d1_prof);

        
        $__internal_6d274159a8315f8cc8e158f5cdd5e9ca36f2eef65407f22c28d328dc8296f69a->leave($__internal_6d274159a8315f8cc8e158f5cdd5e9ca36f2eef65407f22c28d328dc8296f69a_prof);

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

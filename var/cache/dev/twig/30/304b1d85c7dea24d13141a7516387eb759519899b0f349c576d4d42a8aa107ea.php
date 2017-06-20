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
        $__internal_d678005c902ddfd053d717ba98d68876c98907b8b294d58f121db8b6bd5775b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d678005c902ddfd053d717ba98d68876c98907b8b294d58f121db8b6bd5775b2->enter($__internal_d678005c902ddfd053d717ba98d68876c98907b8b294d58f121db8b6bd5775b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_bf314669ab9e69c348de987a6c944535ba0922da3d403610dbd5deab98af63e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf314669ab9e69c348de987a6c944535ba0922da3d403610dbd5deab98af63e7->enter($__internal_bf314669ab9e69c348de987a6c944535ba0922da3d403610dbd5deab98af63e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d678005c902ddfd053d717ba98d68876c98907b8b294d58f121db8b6bd5775b2->leave($__internal_d678005c902ddfd053d717ba98d68876c98907b8b294d58f121db8b6bd5775b2_prof);

        
        $__internal_bf314669ab9e69c348de987a6c944535ba0922da3d403610dbd5deab98af63e7->leave($__internal_bf314669ab9e69c348de987a6c944535ba0922da3d403610dbd5deab98af63e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_623a1f48fd6b9e077d46378913fdb5aa355bc8a6c28c19dc959079e5957d922e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623a1f48fd6b9e077d46378913fdb5aa355bc8a6c28c19dc959079e5957d922e->enter($__internal_623a1f48fd6b9e077d46378913fdb5aa355bc8a6c28c19dc959079e5957d922e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f064869ffa714407f70498a172f4ba04fb15d3a8a90bad82b235270f38d81d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f064869ffa714407f70498a172f4ba04fb15d3a8a90bad82b235270f38d81d2d->enter($__internal_f064869ffa714407f70498a172f4ba04fb15d3a8a90bad82b235270f38d81d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f064869ffa714407f70498a172f4ba04fb15d3a8a90bad82b235270f38d81d2d->leave($__internal_f064869ffa714407f70498a172f4ba04fb15d3a8a90bad82b235270f38d81d2d_prof);

        
        $__internal_623a1f48fd6b9e077d46378913fdb5aa355bc8a6c28c19dc959079e5957d922e->leave($__internal_623a1f48fd6b9e077d46378913fdb5aa355bc8a6c28c19dc959079e5957d922e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9f8fdc1ef44d20f63191c42d3cfde5dd1d95fcd6173f201f026e1887f2bfa7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f8fdc1ef44d20f63191c42d3cfde5dd1d95fcd6173f201f026e1887f2bfa7a->enter($__internal_f9f8fdc1ef44d20f63191c42d3cfde5dd1d95fcd6173f201f026e1887f2bfa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5db9f2075c69233d33f8fb988e414c5a6c5910ec6997ab96684b2e13facb9258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db9f2075c69233d33f8fb988e414c5a6c5910ec6997ab96684b2e13facb9258->enter($__internal_5db9f2075c69233d33f8fb988e414c5a6c5910ec6997ab96684b2e13facb9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5db9f2075c69233d33f8fb988e414c5a6c5910ec6997ab96684b2e13facb9258->leave($__internal_5db9f2075c69233d33f8fb988e414c5a6c5910ec6997ab96684b2e13facb9258_prof);

        
        $__internal_f9f8fdc1ef44d20f63191c42d3cfde5dd1d95fcd6173f201f026e1887f2bfa7a->leave($__internal_f9f8fdc1ef44d20f63191c42d3cfde5dd1d95fcd6173f201f026e1887f2bfa7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1502ec26398175bf1eedfaef65047eea0bb3d8468733924f7534472b753ed1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1502ec26398175bf1eedfaef65047eea0bb3d8468733924f7534472b753ed1ac->enter($__internal_1502ec26398175bf1eedfaef65047eea0bb3d8468733924f7534472b753ed1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d105fd1ec3743c8ecf2d665ec3e1e6db4be6b3fd7ca544b678b80c1ebc94c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d105fd1ec3743c8ecf2d665ec3e1e6db4be6b3fd7ca544b678b80c1ebc94c0f->enter($__internal_7d105fd1ec3743c8ecf2d665ec3e1e6db4be6b3fd7ca544b678b80c1ebc94c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d105fd1ec3743c8ecf2d665ec3e1e6db4be6b3fd7ca544b678b80c1ebc94c0f->leave($__internal_7d105fd1ec3743c8ecf2d665ec3e1e6db4be6b3fd7ca544b678b80c1ebc94c0f_prof);

        
        $__internal_1502ec26398175bf1eedfaef65047eea0bb3d8468733924f7534472b753ed1ac->leave($__internal_1502ec26398175bf1eedfaef65047eea0bb3d8468733924f7534472b753ed1ac_prof);

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

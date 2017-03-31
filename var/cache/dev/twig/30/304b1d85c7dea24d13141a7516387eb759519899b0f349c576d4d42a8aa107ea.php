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
        $__internal_869c372c445568689bd8ce09a2281c0c88a92015134c2b8e25f8c3ab8eff9822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869c372c445568689bd8ce09a2281c0c88a92015134c2b8e25f8c3ab8eff9822->enter($__internal_869c372c445568689bd8ce09a2281c0c88a92015134c2b8e25f8c3ab8eff9822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_15adbcf50c8d18f0fc03f510ae719ee78eff1e2bbbd74b5557cd10405652f981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15adbcf50c8d18f0fc03f510ae719ee78eff1e2bbbd74b5557cd10405652f981->enter($__internal_15adbcf50c8d18f0fc03f510ae719ee78eff1e2bbbd74b5557cd10405652f981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869c372c445568689bd8ce09a2281c0c88a92015134c2b8e25f8c3ab8eff9822->leave($__internal_869c372c445568689bd8ce09a2281c0c88a92015134c2b8e25f8c3ab8eff9822_prof);

        
        $__internal_15adbcf50c8d18f0fc03f510ae719ee78eff1e2bbbd74b5557cd10405652f981->leave($__internal_15adbcf50c8d18f0fc03f510ae719ee78eff1e2bbbd74b5557cd10405652f981_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb8866a6e48230e1d26c48529eaca01a70d0b7ee7d3446059e2127b87b51a9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8866a6e48230e1d26c48529eaca01a70d0b7ee7d3446059e2127b87b51a9d1->enter($__internal_bb8866a6e48230e1d26c48529eaca01a70d0b7ee7d3446059e2127b87b51a9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73dfd36c70af3a4d587f618bd7da6ed7df3f8c7fc70d351f8e47406ade9aea0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dfd36c70af3a4d587f618bd7da6ed7df3f8c7fc70d351f8e47406ade9aea0a->enter($__internal_73dfd36c70af3a4d587f618bd7da6ed7df3f8c7fc70d351f8e47406ade9aea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73dfd36c70af3a4d587f618bd7da6ed7df3f8c7fc70d351f8e47406ade9aea0a->leave($__internal_73dfd36c70af3a4d587f618bd7da6ed7df3f8c7fc70d351f8e47406ade9aea0a_prof);

        
        $__internal_bb8866a6e48230e1d26c48529eaca01a70d0b7ee7d3446059e2127b87b51a9d1->leave($__internal_bb8866a6e48230e1d26c48529eaca01a70d0b7ee7d3446059e2127b87b51a9d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2b983186576564222559497cbfead12524c1f425c72882a2d594b75fd7de370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b983186576564222559497cbfead12524c1f425c72882a2d594b75fd7de370->enter($__internal_a2b983186576564222559497cbfead12524c1f425c72882a2d594b75fd7de370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_64c3a1f1fed079f828653386d75cbd06cda622faa733277f7fb50e8d21edc351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c3a1f1fed079f828653386d75cbd06cda622faa733277f7fb50e8d21edc351->enter($__internal_64c3a1f1fed079f828653386d75cbd06cda622faa733277f7fb50e8d21edc351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_64c3a1f1fed079f828653386d75cbd06cda622faa733277f7fb50e8d21edc351->leave($__internal_64c3a1f1fed079f828653386d75cbd06cda622faa733277f7fb50e8d21edc351_prof);

        
        $__internal_a2b983186576564222559497cbfead12524c1f425c72882a2d594b75fd7de370->leave($__internal_a2b983186576564222559497cbfead12524c1f425c72882a2d594b75fd7de370_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0ddde600faa723fad32c43aff514a115fbda05dd02901d0ba6a33fa8db800c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ddde600faa723fad32c43aff514a115fbda05dd02901d0ba6a33fa8db800c1->enter($__internal_c0ddde600faa723fad32c43aff514a115fbda05dd02901d0ba6a33fa8db800c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d50b054b22868dd5b5262ee3d8bd8994f096b6d3c8aa91db0cb78c31dd49447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d50b054b22868dd5b5262ee3d8bd8994f096b6d3c8aa91db0cb78c31dd49447->enter($__internal_3d50b054b22868dd5b5262ee3d8bd8994f096b6d3c8aa91db0cb78c31dd49447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d50b054b22868dd5b5262ee3d8bd8994f096b6d3c8aa91db0cb78c31dd49447->leave($__internal_3d50b054b22868dd5b5262ee3d8bd8994f096b6d3c8aa91db0cb78c31dd49447_prof);

        
        $__internal_c0ddde600faa723fad32c43aff514a115fbda05dd02901d0ba6a33fa8db800c1->leave($__internal_c0ddde600faa723fad32c43aff514a115fbda05dd02901d0ba6a33fa8db800c1_prof);

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

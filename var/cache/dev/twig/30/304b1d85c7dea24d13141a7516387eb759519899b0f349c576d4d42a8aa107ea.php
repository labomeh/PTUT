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
        $__internal_1f9002b91bce605ccafaa05f4cd15332516de1d482a991c036dc97bbf767095a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9002b91bce605ccafaa05f4cd15332516de1d482a991c036dc97bbf767095a->enter($__internal_1f9002b91bce605ccafaa05f4cd15332516de1d482a991c036dc97bbf767095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9ed7422c0aa7482ae1f6392ddd1f90e0f407cd5f68ff2edc8d15043b7ce11229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed7422c0aa7482ae1f6392ddd1f90e0f407cd5f68ff2edc8d15043b7ce11229->enter($__internal_9ed7422c0aa7482ae1f6392ddd1f90e0f407cd5f68ff2edc8d15043b7ce11229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9002b91bce605ccafaa05f4cd15332516de1d482a991c036dc97bbf767095a->leave($__internal_1f9002b91bce605ccafaa05f4cd15332516de1d482a991c036dc97bbf767095a_prof);

        
        $__internal_9ed7422c0aa7482ae1f6392ddd1f90e0f407cd5f68ff2edc8d15043b7ce11229->leave($__internal_9ed7422c0aa7482ae1f6392ddd1f90e0f407cd5f68ff2edc8d15043b7ce11229_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2c2763556fd1f4dfa1445118d495f93144da35d4f6d15ddbc7a1ae04936f060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c2763556fd1f4dfa1445118d495f93144da35d4f6d15ddbc7a1ae04936f060->enter($__internal_e2c2763556fd1f4dfa1445118d495f93144da35d4f6d15ddbc7a1ae04936f060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_673a1d4a0b2dec19010e097c1369aa286ea22ace5d346692257b39fac442ee16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673a1d4a0b2dec19010e097c1369aa286ea22ace5d346692257b39fac442ee16->enter($__internal_673a1d4a0b2dec19010e097c1369aa286ea22ace5d346692257b39fac442ee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_673a1d4a0b2dec19010e097c1369aa286ea22ace5d346692257b39fac442ee16->leave($__internal_673a1d4a0b2dec19010e097c1369aa286ea22ace5d346692257b39fac442ee16_prof);

        
        $__internal_e2c2763556fd1f4dfa1445118d495f93144da35d4f6d15ddbc7a1ae04936f060->leave($__internal_e2c2763556fd1f4dfa1445118d495f93144da35d4f6d15ddbc7a1ae04936f060_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93657d13538680b5d317e51b14c5b261d738e9853f2a92a1fa4cb007d6f9660f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93657d13538680b5d317e51b14c5b261d738e9853f2a92a1fa4cb007d6f9660f->enter($__internal_93657d13538680b5d317e51b14c5b261d738e9853f2a92a1fa4cb007d6f9660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9922d6f198303842a401ef709e3d7a15df132ad3d932d58f324caa1e4b2bf03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9922d6f198303842a401ef709e3d7a15df132ad3d932d58f324caa1e4b2bf03->enter($__internal_c9922d6f198303842a401ef709e3d7a15df132ad3d932d58f324caa1e4b2bf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9922d6f198303842a401ef709e3d7a15df132ad3d932d58f324caa1e4b2bf03->leave($__internal_c9922d6f198303842a401ef709e3d7a15df132ad3d932d58f324caa1e4b2bf03_prof);

        
        $__internal_93657d13538680b5d317e51b14c5b261d738e9853f2a92a1fa4cb007d6f9660f->leave($__internal_93657d13538680b5d317e51b14c5b261d738e9853f2a92a1fa4cb007d6f9660f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_273fa51648cdcccff05833202b99f62661ec9c37af5783ae55319ad139a7ebec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273fa51648cdcccff05833202b99f62661ec9c37af5783ae55319ad139a7ebec->enter($__internal_273fa51648cdcccff05833202b99f62661ec9c37af5783ae55319ad139a7ebec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f0e568529f38430a24f543ab67c685ba6e20962e012387ddaf8a111143543a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0e568529f38430a24f543ab67c685ba6e20962e012387ddaf8a111143543a9->enter($__internal_5f0e568529f38430a24f543ab67c685ba6e20962e012387ddaf8a111143543a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f0e568529f38430a24f543ab67c685ba6e20962e012387ddaf8a111143543a9->leave($__internal_5f0e568529f38430a24f543ab67c685ba6e20962e012387ddaf8a111143543a9_prof);

        
        $__internal_273fa51648cdcccff05833202b99f62661ec9c37af5783ae55319ad139a7ebec->leave($__internal_273fa51648cdcccff05833202b99f62661ec9c37af5783ae55319ad139a7ebec_prof);

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

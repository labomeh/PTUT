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
        $__internal_6b86ec188331e56dfa0fc23eadb762a8b4cfd5bd324988d7c69e3584526aafb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b86ec188331e56dfa0fc23eadb762a8b4cfd5bd324988d7c69e3584526aafb5->enter($__internal_6b86ec188331e56dfa0fc23eadb762a8b4cfd5bd324988d7c69e3584526aafb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d464b4abd81f4f8a7d21622784a6d68a542f6961828d94db166485e296e072fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d464b4abd81f4f8a7d21622784a6d68a542f6961828d94db166485e296e072fd->enter($__internal_d464b4abd81f4f8a7d21622784a6d68a542f6961828d94db166485e296e072fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b86ec188331e56dfa0fc23eadb762a8b4cfd5bd324988d7c69e3584526aafb5->leave($__internal_6b86ec188331e56dfa0fc23eadb762a8b4cfd5bd324988d7c69e3584526aafb5_prof);

        
        $__internal_d464b4abd81f4f8a7d21622784a6d68a542f6961828d94db166485e296e072fd->leave($__internal_d464b4abd81f4f8a7d21622784a6d68a542f6961828d94db166485e296e072fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3544ce955c48c1c86f29283cdd4cdc33b96f3e02b4dd0449258c2b2de839ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3544ce955c48c1c86f29283cdd4cdc33b96f3e02b4dd0449258c2b2de839ff3->enter($__internal_e3544ce955c48c1c86f29283cdd4cdc33b96f3e02b4dd0449258c2b2de839ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8b7267395867e49f82c060c768011a72669092897d40a725da388ade93d0a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b7267395867e49f82c060c768011a72669092897d40a725da388ade93d0a92->enter($__internal_f8b7267395867e49f82c060c768011a72669092897d40a725da388ade93d0a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8b7267395867e49f82c060c768011a72669092897d40a725da388ade93d0a92->leave($__internal_f8b7267395867e49f82c060c768011a72669092897d40a725da388ade93d0a92_prof);

        
        $__internal_e3544ce955c48c1c86f29283cdd4cdc33b96f3e02b4dd0449258c2b2de839ff3->leave($__internal_e3544ce955c48c1c86f29283cdd4cdc33b96f3e02b4dd0449258c2b2de839ff3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9305c7f5107f9c1249229ba4cb494f3eb3c1e43d6418c053de7471ab7d9d53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9305c7f5107f9c1249229ba4cb494f3eb3c1e43d6418c053de7471ab7d9d53e->enter($__internal_d9305c7f5107f9c1249229ba4cb494f3eb3c1e43d6418c053de7471ab7d9d53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bdca82fb2f0e1b7eec76cca73f4db9a6c5160d172fac65dec31ef02859049ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdca82fb2f0e1b7eec76cca73f4db9a6c5160d172fac65dec31ef02859049ba1->enter($__internal_bdca82fb2f0e1b7eec76cca73f4db9a6c5160d172fac65dec31ef02859049ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bdca82fb2f0e1b7eec76cca73f4db9a6c5160d172fac65dec31ef02859049ba1->leave($__internal_bdca82fb2f0e1b7eec76cca73f4db9a6c5160d172fac65dec31ef02859049ba1_prof);

        
        $__internal_d9305c7f5107f9c1249229ba4cb494f3eb3c1e43d6418c053de7471ab7d9d53e->leave($__internal_d9305c7f5107f9c1249229ba4cb494f3eb3c1e43d6418c053de7471ab7d9d53e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4425300f5ceaed51256703cb53bc467048d616fe53255807906ee04957069c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4425300f5ceaed51256703cb53bc467048d616fe53255807906ee04957069c4a->enter($__internal_4425300f5ceaed51256703cb53bc467048d616fe53255807906ee04957069c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7593041f38d65edc7eb51c6837b5a7622bf4fa2ca051505fc88fd46f5d11b4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7593041f38d65edc7eb51c6837b5a7622bf4fa2ca051505fc88fd46f5d11b4ea->enter($__internal_7593041f38d65edc7eb51c6837b5a7622bf4fa2ca051505fc88fd46f5d11b4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7593041f38d65edc7eb51c6837b5a7622bf4fa2ca051505fc88fd46f5d11b4ea->leave($__internal_7593041f38d65edc7eb51c6837b5a7622bf4fa2ca051505fc88fd46f5d11b4ea_prof);

        
        $__internal_4425300f5ceaed51256703cb53bc467048d616fe53255807906ee04957069c4a->leave($__internal_4425300f5ceaed51256703cb53bc467048d616fe53255807906ee04957069c4a_prof);

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

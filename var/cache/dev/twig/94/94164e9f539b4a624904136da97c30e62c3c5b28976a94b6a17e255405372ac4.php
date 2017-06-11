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
        $__internal_8371caf099a073b3b3e42e39a4130b5a288ad27f37db31e362ee9d798b24f5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8371caf099a073b3b3e42e39a4130b5a288ad27f37db31e362ee9d798b24f5b6->enter($__internal_8371caf099a073b3b3e42e39a4130b5a288ad27f37db31e362ee9d798b24f5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d5298d45ab4c03c1abf4f5b3799d6f6dedc9bb6c11c18589ad7fb29c7082186a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5298d45ab4c03c1abf4f5b3799d6f6dedc9bb6c11c18589ad7fb29c7082186a->enter($__internal_d5298d45ab4c03c1abf4f5b3799d6f6dedc9bb6c11c18589ad7fb29c7082186a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8371caf099a073b3b3e42e39a4130b5a288ad27f37db31e362ee9d798b24f5b6->leave($__internal_8371caf099a073b3b3e42e39a4130b5a288ad27f37db31e362ee9d798b24f5b6_prof);

        
        $__internal_d5298d45ab4c03c1abf4f5b3799d6f6dedc9bb6c11c18589ad7fb29c7082186a->leave($__internal_d5298d45ab4c03c1abf4f5b3799d6f6dedc9bb6c11c18589ad7fb29c7082186a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0bb5a060e1c3bfefc78c544db639a7e106e7520fde46d5828036ecbfadc9a2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb5a060e1c3bfefc78c544db639a7e106e7520fde46d5828036ecbfadc9a2d1->enter($__internal_0bb5a060e1c3bfefc78c544db639a7e106e7520fde46d5828036ecbfadc9a2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aeabcf1342f050a90a4ac1104fbf2298af5cda2c7e658ab0769c0fa7b54e2443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeabcf1342f050a90a4ac1104fbf2298af5cda2c7e658ab0769c0fa7b54e2443->enter($__internal_aeabcf1342f050a90a4ac1104fbf2298af5cda2c7e658ab0769c0fa7b54e2443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aeabcf1342f050a90a4ac1104fbf2298af5cda2c7e658ab0769c0fa7b54e2443->leave($__internal_aeabcf1342f050a90a4ac1104fbf2298af5cda2c7e658ab0769c0fa7b54e2443_prof);

        
        $__internal_0bb5a060e1c3bfefc78c544db639a7e106e7520fde46d5828036ecbfadc9a2d1->leave($__internal_0bb5a060e1c3bfefc78c544db639a7e106e7520fde46d5828036ecbfadc9a2d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea241d7477eeab906d019e9c33d69dbc10a15ef16872c29588ae56b5b94d8f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea241d7477eeab906d019e9c33d69dbc10a15ef16872c29588ae56b5b94d8f28->enter($__internal_ea241d7477eeab906d019e9c33d69dbc10a15ef16872c29588ae56b5b94d8f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_620e9e7973038e391f79028476b7024aeebd5e4472fb116c20e876879fdae2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620e9e7973038e391f79028476b7024aeebd5e4472fb116c20e876879fdae2e1->enter($__internal_620e9e7973038e391f79028476b7024aeebd5e4472fb116c20e876879fdae2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_620e9e7973038e391f79028476b7024aeebd5e4472fb116c20e876879fdae2e1->leave($__internal_620e9e7973038e391f79028476b7024aeebd5e4472fb116c20e876879fdae2e1_prof);

        
        $__internal_ea241d7477eeab906d019e9c33d69dbc10a15ef16872c29588ae56b5b94d8f28->leave($__internal_ea241d7477eeab906d019e9c33d69dbc10a15ef16872c29588ae56b5b94d8f28_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_695902cf11ec9170867faf41bcae973d3c873b4a4a59a9c57e82cae0864d13ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695902cf11ec9170867faf41bcae973d3c873b4a4a59a9c57e82cae0864d13ca->enter($__internal_695902cf11ec9170867faf41bcae973d3c873b4a4a59a9c57e82cae0864d13ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_011d0cf23c382f7d981410729c83f8f4d0421606808cd1ee23eb060d7cbc87b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011d0cf23c382f7d981410729c83f8f4d0421606808cd1ee23eb060d7cbc87b8->enter($__internal_011d0cf23c382f7d981410729c83f8f4d0421606808cd1ee23eb060d7cbc87b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_011d0cf23c382f7d981410729c83f8f4d0421606808cd1ee23eb060d7cbc87b8->leave($__internal_011d0cf23c382f7d981410729c83f8f4d0421606808cd1ee23eb060d7cbc87b8_prof);

        
        $__internal_695902cf11ec9170867faf41bcae973d3c873b4a4a59a9c57e82cae0864d13ca->leave($__internal_695902cf11ec9170867faf41bcae973d3c873b4a4a59a9c57e82cae0864d13ca_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

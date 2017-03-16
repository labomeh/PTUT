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
        $__internal_cbc0a3ed9a5b9e84faa551f6a81773570bb4e6323fa8e415c74cbdb4788881d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc0a3ed9a5b9e84faa551f6a81773570bb4e6323fa8e415c74cbdb4788881d6->enter($__internal_cbc0a3ed9a5b9e84faa551f6a81773570bb4e6323fa8e415c74cbdb4788881d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_34b53df13225124c00e924323c77c05b93b2091e6ad7856b68f843a1c9bb713d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b53df13225124c00e924323c77c05b93b2091e6ad7856b68f843a1c9bb713d->enter($__internal_34b53df13225124c00e924323c77c05b93b2091e6ad7856b68f843a1c9bb713d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbc0a3ed9a5b9e84faa551f6a81773570bb4e6323fa8e415c74cbdb4788881d6->leave($__internal_cbc0a3ed9a5b9e84faa551f6a81773570bb4e6323fa8e415c74cbdb4788881d6_prof);

        
        $__internal_34b53df13225124c00e924323c77c05b93b2091e6ad7856b68f843a1c9bb713d->leave($__internal_34b53df13225124c00e924323c77c05b93b2091e6ad7856b68f843a1c9bb713d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7196952f9fb57acc18f63ced430121900c7ea963e5635b1c35ba40511bcd28ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7196952f9fb57acc18f63ced430121900c7ea963e5635b1c35ba40511bcd28ed->enter($__internal_7196952f9fb57acc18f63ced430121900c7ea963e5635b1c35ba40511bcd28ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f01886aeae205f54c29d8089dbf04eb2bba5d1ba097897e053bf8f9c5298ea01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01886aeae205f54c29d8089dbf04eb2bba5d1ba097897e053bf8f9c5298ea01->enter($__internal_f01886aeae205f54c29d8089dbf04eb2bba5d1ba097897e053bf8f9c5298ea01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f01886aeae205f54c29d8089dbf04eb2bba5d1ba097897e053bf8f9c5298ea01->leave($__internal_f01886aeae205f54c29d8089dbf04eb2bba5d1ba097897e053bf8f9c5298ea01_prof);

        
        $__internal_7196952f9fb57acc18f63ced430121900c7ea963e5635b1c35ba40511bcd28ed->leave($__internal_7196952f9fb57acc18f63ced430121900c7ea963e5635b1c35ba40511bcd28ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d381c304eaffb03768624c98bb23f10ba87b7cd8353a77b144899aa1714712b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d381c304eaffb03768624c98bb23f10ba87b7cd8353a77b144899aa1714712b->enter($__internal_0d381c304eaffb03768624c98bb23f10ba87b7cd8353a77b144899aa1714712b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b40612cf592058170f5abbc597b53cf76989e88c1d364b94622727987d893669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40612cf592058170f5abbc597b53cf76989e88c1d364b94622727987d893669->enter($__internal_b40612cf592058170f5abbc597b53cf76989e88c1d364b94622727987d893669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b40612cf592058170f5abbc597b53cf76989e88c1d364b94622727987d893669->leave($__internal_b40612cf592058170f5abbc597b53cf76989e88c1d364b94622727987d893669_prof);

        
        $__internal_0d381c304eaffb03768624c98bb23f10ba87b7cd8353a77b144899aa1714712b->leave($__internal_0d381c304eaffb03768624c98bb23f10ba87b7cd8353a77b144899aa1714712b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b4ec307f9388f97e6e0bcbcbe44ec6b951742c7cbde7c2b575ac3c6df7b1c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4ec307f9388f97e6e0bcbcbe44ec6b951742c7cbde7c2b575ac3c6df7b1c46->enter($__internal_3b4ec307f9388f97e6e0bcbcbe44ec6b951742c7cbde7c2b575ac3c6df7b1c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6bb86375cb58631b847ff1b74ce26dbd62e1b9a11131cf6d516e145edc88fc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb86375cb58631b847ff1b74ce26dbd62e1b9a11131cf6d516e145edc88fc7a->enter($__internal_6bb86375cb58631b847ff1b74ce26dbd62e1b9a11131cf6d516e145edc88fc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6bb86375cb58631b847ff1b74ce26dbd62e1b9a11131cf6d516e145edc88fc7a->leave($__internal_6bb86375cb58631b847ff1b74ce26dbd62e1b9a11131cf6d516e145edc88fc7a_prof);

        
        $__internal_3b4ec307f9388f97e6e0bcbcbe44ec6b951742c7cbde7c2b575ac3c6df7b1c46->leave($__internal_3b4ec307f9388f97e6e0bcbcbe44ec6b951742c7cbde7c2b575ac3c6df7b1c46_prof);

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

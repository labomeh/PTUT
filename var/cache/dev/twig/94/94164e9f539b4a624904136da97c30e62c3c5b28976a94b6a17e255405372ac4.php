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
        $__internal_4abffb2df8825161378f878c3983135922915b9805c5cf1ec66709f359f362ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abffb2df8825161378f878c3983135922915b9805c5cf1ec66709f359f362ea->enter($__internal_4abffb2df8825161378f878c3983135922915b9805c5cf1ec66709f359f362ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a1c838779c6916c9806a0f3abb19d511d97c9b6078a24c48819cb7cfb2daf396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c838779c6916c9806a0f3abb19d511d97c9b6078a24c48819cb7cfb2daf396->enter($__internal_a1c838779c6916c9806a0f3abb19d511d97c9b6078a24c48819cb7cfb2daf396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abffb2df8825161378f878c3983135922915b9805c5cf1ec66709f359f362ea->leave($__internal_4abffb2df8825161378f878c3983135922915b9805c5cf1ec66709f359f362ea_prof);

        
        $__internal_a1c838779c6916c9806a0f3abb19d511d97c9b6078a24c48819cb7cfb2daf396->leave($__internal_a1c838779c6916c9806a0f3abb19d511d97c9b6078a24c48819cb7cfb2daf396_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09971f28cea9b4032fddd805cce23bf2a51afc8c8779e860d271b8c94d96d02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09971f28cea9b4032fddd805cce23bf2a51afc8c8779e860d271b8c94d96d02d->enter($__internal_09971f28cea9b4032fddd805cce23bf2a51afc8c8779e860d271b8c94d96d02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7abe7d08705d916417129c54fa64b946aaebf854666436780d19b6caae44d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7abe7d08705d916417129c54fa64b946aaebf854666436780d19b6caae44d90->enter($__internal_b7abe7d08705d916417129c54fa64b946aaebf854666436780d19b6caae44d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7abe7d08705d916417129c54fa64b946aaebf854666436780d19b6caae44d90->leave($__internal_b7abe7d08705d916417129c54fa64b946aaebf854666436780d19b6caae44d90_prof);

        
        $__internal_09971f28cea9b4032fddd805cce23bf2a51afc8c8779e860d271b8c94d96d02d->leave($__internal_09971f28cea9b4032fddd805cce23bf2a51afc8c8779e860d271b8c94d96d02d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f6d44ebf15844a55463e076a7356ef71f4c9bc7c1b0514f340329c8c8a0a383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6d44ebf15844a55463e076a7356ef71f4c9bc7c1b0514f340329c8c8a0a383->enter($__internal_9f6d44ebf15844a55463e076a7356ef71f4c9bc7c1b0514f340329c8c8a0a383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f09e3b7dae5941e85a278d66f4e775a1dbacce248ce180b2bec823d702489a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09e3b7dae5941e85a278d66f4e775a1dbacce248ce180b2bec823d702489a8f->enter($__internal_f09e3b7dae5941e85a278d66f4e775a1dbacce248ce180b2bec823d702489a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f09e3b7dae5941e85a278d66f4e775a1dbacce248ce180b2bec823d702489a8f->leave($__internal_f09e3b7dae5941e85a278d66f4e775a1dbacce248ce180b2bec823d702489a8f_prof);

        
        $__internal_9f6d44ebf15844a55463e076a7356ef71f4c9bc7c1b0514f340329c8c8a0a383->leave($__internal_9f6d44ebf15844a55463e076a7356ef71f4c9bc7c1b0514f340329c8c8a0a383_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_915a5fe861781d920e4a906d55901aceb1c4523a565ff42bab267887058e8e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915a5fe861781d920e4a906d55901aceb1c4523a565ff42bab267887058e8e8f->enter($__internal_915a5fe861781d920e4a906d55901aceb1c4523a565ff42bab267887058e8e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c703073fbd4f765c7784c33806db85e4207128a80f48446f0da732804a574ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c703073fbd4f765c7784c33806db85e4207128a80f48446f0da732804a574ee->enter($__internal_0c703073fbd4f765c7784c33806db85e4207128a80f48446f0da732804a574ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c703073fbd4f765c7784c33806db85e4207128a80f48446f0da732804a574ee->leave($__internal_0c703073fbd4f765c7784c33806db85e4207128a80f48446f0da732804a574ee_prof);

        
        $__internal_915a5fe861781d920e4a906d55901aceb1c4523a565ff42bab267887058e8e8f->leave($__internal_915a5fe861781d920e4a906d55901aceb1c4523a565ff42bab267887058e8e8f_prof);

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

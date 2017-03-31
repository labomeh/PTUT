<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4605bf05efe8f32a08493f79fd99b767097142122862dfe55af220441a895efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e845a544ea521c62f37ec859bf730674ce9a1209d9959be38402137350d59c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e845a544ea521c62f37ec859bf730674ce9a1209d9959be38402137350d59c9f->enter($__internal_e845a544ea521c62f37ec859bf730674ce9a1209d9959be38402137350d59c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2c4c3beef07b897552e2520441cca9d69db002d55a3583b82460eebb17655209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4c3beef07b897552e2520441cca9d69db002d55a3583b82460eebb17655209->enter($__internal_2c4c3beef07b897552e2520441cca9d69db002d55a3583b82460eebb17655209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e845a544ea521c62f37ec859bf730674ce9a1209d9959be38402137350d59c9f->leave($__internal_e845a544ea521c62f37ec859bf730674ce9a1209d9959be38402137350d59c9f_prof);

        
        $__internal_2c4c3beef07b897552e2520441cca9d69db002d55a3583b82460eebb17655209->leave($__internal_2c4c3beef07b897552e2520441cca9d69db002d55a3583b82460eebb17655209_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b99b20ada3fd5fb2aaea337fae4710d0087d7926acb65ce9774b624edc7a8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b99b20ada3fd5fb2aaea337fae4710d0087d7926acb65ce9774b624edc7a8a0->enter($__internal_9b99b20ada3fd5fb2aaea337fae4710d0087d7926acb65ce9774b624edc7a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b759760dc997db389e198aab8706e66b7216c190e2ff964f2b498aefd235e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b759760dc997db389e198aab8706e66b7216c190e2ff964f2b498aefd235e2d->enter($__internal_2b759760dc997db389e198aab8706e66b7216c190e2ff964f2b498aefd235e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2b759760dc997db389e198aab8706e66b7216c190e2ff964f2b498aefd235e2d->leave($__internal_2b759760dc997db389e198aab8706e66b7216c190e2ff964f2b498aefd235e2d_prof);

        
        $__internal_9b99b20ada3fd5fb2aaea337fae4710d0087d7926acb65ce9774b624edc7a8a0->leave($__internal_9b99b20ada3fd5fb2aaea337fae4710d0087d7926acb65ce9774b624edc7a8a0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ea90b43f15ca5a9671585a036cbc542456f63af6c39895199c753f2654375c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea90b43f15ca5a9671585a036cbc542456f63af6c39895199c753f2654375c4->enter($__internal_8ea90b43f15ca5a9671585a036cbc542456f63af6c39895199c753f2654375c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c8e52a0605bb92ab62313a2583426411ac8f34b1b5b73d55ddceb4b03e23490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8e52a0605bb92ab62313a2583426411ac8f34b1b5b73d55ddceb4b03e23490->enter($__internal_2c8e52a0605bb92ab62313a2583426411ac8f34b1b5b73d55ddceb4b03e23490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2c8e52a0605bb92ab62313a2583426411ac8f34b1b5b73d55ddceb4b03e23490->leave($__internal_2c8e52a0605bb92ab62313a2583426411ac8f34b1b5b73d55ddceb4b03e23490_prof);

        
        $__internal_8ea90b43f15ca5a9671585a036cbc542456f63af6c39895199c753f2654375c4->leave($__internal_8ea90b43f15ca5a9671585a036cbc542456f63af6c39895199c753f2654375c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

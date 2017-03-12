<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f40736bf8191373bcae91d8ced9c0bde76cd8c067731c9662de141e0e1871de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_b8b117b05b5245487136df1f0c593fb69f065a45fdbb1ca84b17691f45c39232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b117b05b5245487136df1f0c593fb69f065a45fdbb1ca84b17691f45c39232->enter($__internal_b8b117b05b5245487136df1f0c593fb69f065a45fdbb1ca84b17691f45c39232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e5a262071d47f58a49719f75e5ab594b641da69b50bc217b939037b2e9f3bb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a262071d47f58a49719f75e5ab594b641da69b50bc217b939037b2e9f3bb33->enter($__internal_e5a262071d47f58a49719f75e5ab594b641da69b50bc217b939037b2e9f3bb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b117b05b5245487136df1f0c593fb69f065a45fdbb1ca84b17691f45c39232->leave($__internal_b8b117b05b5245487136df1f0c593fb69f065a45fdbb1ca84b17691f45c39232_prof);

        
        $__internal_e5a262071d47f58a49719f75e5ab594b641da69b50bc217b939037b2e9f3bb33->leave($__internal_e5a262071d47f58a49719f75e5ab594b641da69b50bc217b939037b2e9f3bb33_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3c81580e1e5c97b72b02e118467800f99764be1c1efa9738de408e81186ff11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c81580e1e5c97b72b02e118467800f99764be1c1efa9738de408e81186ff11->enter($__internal_e3c81580e1e5c97b72b02e118467800f99764be1c1efa9738de408e81186ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72f3d1e8f059b99b7c0b4deb7582665023ed5ff9d7b200154e6482a594ef79d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f3d1e8f059b99b7c0b4deb7582665023ed5ff9d7b200154e6482a594ef79d2->enter($__internal_72f3d1e8f059b99b7c0b4deb7582665023ed5ff9d7b200154e6482a594ef79d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_72f3d1e8f059b99b7c0b4deb7582665023ed5ff9d7b200154e6482a594ef79d2->leave($__internal_72f3d1e8f059b99b7c0b4deb7582665023ed5ff9d7b200154e6482a594ef79d2_prof);

        
        $__internal_e3c81580e1e5c97b72b02e118467800f99764be1c1efa9738de408e81186ff11->leave($__internal_e3c81580e1e5c97b72b02e118467800f99764be1c1efa9738de408e81186ff11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1f560e1d39ea6fa581a66d5a5c79698ed3c26027e05033ed1335f049c055596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f560e1d39ea6fa581a66d5a5c79698ed3c26027e05033ed1335f049c055596->enter($__internal_a1f560e1d39ea6fa581a66d5a5c79698ed3c26027e05033ed1335f049c055596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3258319cd5f00e2451f65c5c1b990d078d868ec0466523a4e58103ef77e321e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3258319cd5f00e2451f65c5c1b990d078d868ec0466523a4e58103ef77e321e5->enter($__internal_3258319cd5f00e2451f65c5c1b990d078d868ec0466523a4e58103ef77e321e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3258319cd5f00e2451f65c5c1b990d078d868ec0466523a4e58103ef77e321e5->leave($__internal_3258319cd5f00e2451f65c5c1b990d078d868ec0466523a4e58103ef77e321e5_prof);

        
        $__internal_a1f560e1d39ea6fa581a66d5a5c79698ed3c26027e05033ed1335f049c055596->leave($__internal_a1f560e1d39ea6fa581a66d5a5c79698ed3c26027e05033ed1335f049c055596_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

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
        $__internal_bf914da140065bfd555f8168bb2341231d8dd0bdacd51aa9eeceab3b4d1d70b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf914da140065bfd555f8168bb2341231d8dd0bdacd51aa9eeceab3b4d1d70b0->enter($__internal_bf914da140065bfd555f8168bb2341231d8dd0bdacd51aa9eeceab3b4d1d70b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a562c7069ab0bbd568dedc035cbe0bacde7a442781903173f094ce625b079603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a562c7069ab0bbd568dedc035cbe0bacde7a442781903173f094ce625b079603->enter($__internal_a562c7069ab0bbd568dedc035cbe0bacde7a442781903173f094ce625b079603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf914da140065bfd555f8168bb2341231d8dd0bdacd51aa9eeceab3b4d1d70b0->leave($__internal_bf914da140065bfd555f8168bb2341231d8dd0bdacd51aa9eeceab3b4d1d70b0_prof);

        
        $__internal_a562c7069ab0bbd568dedc035cbe0bacde7a442781903173f094ce625b079603->leave($__internal_a562c7069ab0bbd568dedc035cbe0bacde7a442781903173f094ce625b079603_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9487aae48febd8d11e86534508510e531f094146fd2390ac2c779c9ed139c5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9487aae48febd8d11e86534508510e531f094146fd2390ac2c779c9ed139c5dd->enter($__internal_9487aae48febd8d11e86534508510e531f094146fd2390ac2c779c9ed139c5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46fe89231943c6c28aed3ca573160fa748a66c506ef179c88b48d2c47bf61667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fe89231943c6c28aed3ca573160fa748a66c506ef179c88b48d2c47bf61667->enter($__internal_46fe89231943c6c28aed3ca573160fa748a66c506ef179c88b48d2c47bf61667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_46fe89231943c6c28aed3ca573160fa748a66c506ef179c88b48d2c47bf61667->leave($__internal_46fe89231943c6c28aed3ca573160fa748a66c506ef179c88b48d2c47bf61667_prof);

        
        $__internal_9487aae48febd8d11e86534508510e531f094146fd2390ac2c779c9ed139c5dd->leave($__internal_9487aae48febd8d11e86534508510e531f094146fd2390ac2c779c9ed139c5dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc0404b272f3a2575e248dd1c2e707310907a2d899a65bfbc0c017119d809d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc0404b272f3a2575e248dd1c2e707310907a2d899a65bfbc0c017119d809d3->enter($__internal_7dc0404b272f3a2575e248dd1c2e707310907a2d899a65bfbc0c017119d809d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5840bbf1e35b1b127d9b1156d49e57429bf29cab67a7a0d00e45bc86f562bd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5840bbf1e35b1b127d9b1156d49e57429bf29cab67a7a0d00e45bc86f562bd2c->enter($__internal_5840bbf1e35b1b127d9b1156d49e57429bf29cab67a7a0d00e45bc86f562bd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5840bbf1e35b1b127d9b1156d49e57429bf29cab67a7a0d00e45bc86f562bd2c->leave($__internal_5840bbf1e35b1b127d9b1156d49e57429bf29cab67a7a0d00e45bc86f562bd2c_prof);

        
        $__internal_7dc0404b272f3a2575e248dd1c2e707310907a2d899a65bfbc0c017119d809d3->leave($__internal_7dc0404b272f3a2575e248dd1c2e707310907a2d899a65bfbc0c017119d809d3_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

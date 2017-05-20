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
        $__internal_074ca1e113fe28677499138d47a924559e0219daf1662fdc882a31a375530ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074ca1e113fe28677499138d47a924559e0219daf1662fdc882a31a375530ecd->enter($__internal_074ca1e113fe28677499138d47a924559e0219daf1662fdc882a31a375530ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_eea09e23e98ce691e5ba25b686c95cf12dcb6599ca06ec2100d90f376bb75983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea09e23e98ce691e5ba25b686c95cf12dcb6599ca06ec2100d90f376bb75983->enter($__internal_eea09e23e98ce691e5ba25b686c95cf12dcb6599ca06ec2100d90f376bb75983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074ca1e113fe28677499138d47a924559e0219daf1662fdc882a31a375530ecd->leave($__internal_074ca1e113fe28677499138d47a924559e0219daf1662fdc882a31a375530ecd_prof);

        
        $__internal_eea09e23e98ce691e5ba25b686c95cf12dcb6599ca06ec2100d90f376bb75983->leave($__internal_eea09e23e98ce691e5ba25b686c95cf12dcb6599ca06ec2100d90f376bb75983_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60764c25840c39487585a6341f076035b1e63b413d8e4ba300976d3b0ae80288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60764c25840c39487585a6341f076035b1e63b413d8e4ba300976d3b0ae80288->enter($__internal_60764c25840c39487585a6341f076035b1e63b413d8e4ba300976d3b0ae80288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9984e376e5c7cce4a3b3e1825127d1a11a3a083a9e8490f503715b9c3fabffbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9984e376e5c7cce4a3b3e1825127d1a11a3a083a9e8490f503715b9c3fabffbe->enter($__internal_9984e376e5c7cce4a3b3e1825127d1a11a3a083a9e8490f503715b9c3fabffbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9984e376e5c7cce4a3b3e1825127d1a11a3a083a9e8490f503715b9c3fabffbe->leave($__internal_9984e376e5c7cce4a3b3e1825127d1a11a3a083a9e8490f503715b9c3fabffbe_prof);

        
        $__internal_60764c25840c39487585a6341f076035b1e63b413d8e4ba300976d3b0ae80288->leave($__internal_60764c25840c39487585a6341f076035b1e63b413d8e4ba300976d3b0ae80288_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37509ee02c514fcc1187963fe65b35bdc70803e21ce09334d03274532629ffb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37509ee02c514fcc1187963fe65b35bdc70803e21ce09334d03274532629ffb4->enter($__internal_37509ee02c514fcc1187963fe65b35bdc70803e21ce09334d03274532629ffb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77865f791cf00040152408bb068fc12eab82f42409525771f77fc7b7be9e76c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77865f791cf00040152408bb068fc12eab82f42409525771f77fc7b7be9e76c3->enter($__internal_77865f791cf00040152408bb068fc12eab82f42409525771f77fc7b7be9e76c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77865f791cf00040152408bb068fc12eab82f42409525771f77fc7b7be9e76c3->leave($__internal_77865f791cf00040152408bb068fc12eab82f42409525771f77fc7b7be9e76c3_prof);

        
        $__internal_37509ee02c514fcc1187963fe65b35bdc70803e21ce09334d03274532629ffb4->leave($__internal_37509ee02c514fcc1187963fe65b35bdc70803e21ce09334d03274532629ffb4_prof);

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

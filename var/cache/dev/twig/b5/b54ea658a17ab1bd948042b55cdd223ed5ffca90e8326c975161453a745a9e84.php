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
        $__internal_4abc83b854c706dccedd00efc97e9b00e4966e16a3371e8dfdaf35af33d29e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abc83b854c706dccedd00efc97e9b00e4966e16a3371e8dfdaf35af33d29e6e->enter($__internal_4abc83b854c706dccedd00efc97e9b00e4966e16a3371e8dfdaf35af33d29e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0b5ccd0f44b69b3dcbc9ad4d8c8e7c30199c14fe11ed42724f5696419f973775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5ccd0f44b69b3dcbc9ad4d8c8e7c30199c14fe11ed42724f5696419f973775->enter($__internal_0b5ccd0f44b69b3dcbc9ad4d8c8e7c30199c14fe11ed42724f5696419f973775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abc83b854c706dccedd00efc97e9b00e4966e16a3371e8dfdaf35af33d29e6e->leave($__internal_4abc83b854c706dccedd00efc97e9b00e4966e16a3371e8dfdaf35af33d29e6e_prof);

        
        $__internal_0b5ccd0f44b69b3dcbc9ad4d8c8e7c30199c14fe11ed42724f5696419f973775->leave($__internal_0b5ccd0f44b69b3dcbc9ad4d8c8e7c30199c14fe11ed42724f5696419f973775_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97976c7a088b735f6178e0bd7512a6b4cd22b4b4bc0c7b8a820fc9cb45f6ca5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97976c7a088b735f6178e0bd7512a6b4cd22b4b4bc0c7b8a820fc9cb45f6ca5a->enter($__internal_97976c7a088b735f6178e0bd7512a6b4cd22b4b4bc0c7b8a820fc9cb45f6ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00f5c090ff633db54735c826776d9064043d24e5467b9a4964f0774b1428503f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f5c090ff633db54735c826776d9064043d24e5467b9a4964f0774b1428503f->enter($__internal_00f5c090ff633db54735c826776d9064043d24e5467b9a4964f0774b1428503f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00f5c090ff633db54735c826776d9064043d24e5467b9a4964f0774b1428503f->leave($__internal_00f5c090ff633db54735c826776d9064043d24e5467b9a4964f0774b1428503f_prof);

        
        $__internal_97976c7a088b735f6178e0bd7512a6b4cd22b4b4bc0c7b8a820fc9cb45f6ca5a->leave($__internal_97976c7a088b735f6178e0bd7512a6b4cd22b4b4bc0c7b8a820fc9cb45f6ca5a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f6fc483d3599bf22070816d684e5e7746723afc452580ca830d9ba2c32fe9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6fc483d3599bf22070816d684e5e7746723afc452580ca830d9ba2c32fe9f9->enter($__internal_6f6fc483d3599bf22070816d684e5e7746723afc452580ca830d9ba2c32fe9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65ef8524c95e6e569e85740e4e97f206a694a70b226ee3db78afcd101e32fe4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ef8524c95e6e569e85740e4e97f206a694a70b226ee3db78afcd101e32fe4c->enter($__internal_65ef8524c95e6e569e85740e4e97f206a694a70b226ee3db78afcd101e32fe4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65ef8524c95e6e569e85740e4e97f206a694a70b226ee3db78afcd101e32fe4c->leave($__internal_65ef8524c95e6e569e85740e4e97f206a694a70b226ee3db78afcd101e32fe4c_prof);

        
        $__internal_6f6fc483d3599bf22070816d684e5e7746723afc452580ca830d9ba2c32fe9f9->leave($__internal_6f6fc483d3599bf22070816d684e5e7746723afc452580ca830d9ba2c32fe9f9_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

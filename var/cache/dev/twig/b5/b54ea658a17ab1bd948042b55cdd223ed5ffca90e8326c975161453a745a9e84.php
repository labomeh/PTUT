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
        $__internal_4ee03aaf75b36b02a7f283b6d7bda479672e6a8294cfefdfbab060d5b8bc6868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee03aaf75b36b02a7f283b6d7bda479672e6a8294cfefdfbab060d5b8bc6868->enter($__internal_4ee03aaf75b36b02a7f283b6d7bda479672e6a8294cfefdfbab060d5b8bc6868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_5eb5528b99ecfcbb1daa997b7e8701aaaa9fa85d50d27de9bbc1fd92b9f09a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb5528b99ecfcbb1daa997b7e8701aaaa9fa85d50d27de9bbc1fd92b9f09a61->enter($__internal_5eb5528b99ecfcbb1daa997b7e8701aaaa9fa85d50d27de9bbc1fd92b9f09a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ee03aaf75b36b02a7f283b6d7bda479672e6a8294cfefdfbab060d5b8bc6868->leave($__internal_4ee03aaf75b36b02a7f283b6d7bda479672e6a8294cfefdfbab060d5b8bc6868_prof);

        
        $__internal_5eb5528b99ecfcbb1daa997b7e8701aaaa9fa85d50d27de9bbc1fd92b9f09a61->leave($__internal_5eb5528b99ecfcbb1daa997b7e8701aaaa9fa85d50d27de9bbc1fd92b9f09a61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8522ad86d2c6531218339cc0766b189ba6c18017e1a58005df5a5ffbe54c3c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8522ad86d2c6531218339cc0766b189ba6c18017e1a58005df5a5ffbe54c3c9f->enter($__internal_8522ad86d2c6531218339cc0766b189ba6c18017e1a58005df5a5ffbe54c3c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9d7d2d266def94fb28618a8d6020fa047bd390f0e3d6518fb080b0915d3533a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d7d2d266def94fb28618a8d6020fa047bd390f0e3d6518fb080b0915d3533a->enter($__internal_d9d7d2d266def94fb28618a8d6020fa047bd390f0e3d6518fb080b0915d3533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d9d7d2d266def94fb28618a8d6020fa047bd390f0e3d6518fb080b0915d3533a->leave($__internal_d9d7d2d266def94fb28618a8d6020fa047bd390f0e3d6518fb080b0915d3533a_prof);

        
        $__internal_8522ad86d2c6531218339cc0766b189ba6c18017e1a58005df5a5ffbe54c3c9f->leave($__internal_8522ad86d2c6531218339cc0766b189ba6c18017e1a58005df5a5ffbe54c3c9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c0e285a5416b3832cf657be997ebc9bf1557b6890cba8230a8ae1ac6b846704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0e285a5416b3832cf657be997ebc9bf1557b6890cba8230a8ae1ac6b846704->enter($__internal_2c0e285a5416b3832cf657be997ebc9bf1557b6890cba8230a8ae1ac6b846704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5644aed257c136936ceaded5342bbae57ee51d6ad4b949c5701e5d528efe62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5644aed257c136936ceaded5342bbae57ee51d6ad4b949c5701e5d528efe62e->enter($__internal_f5644aed257c136936ceaded5342bbae57ee51d6ad4b949c5701e5d528efe62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f5644aed257c136936ceaded5342bbae57ee51d6ad4b949c5701e5d528efe62e->leave($__internal_f5644aed257c136936ceaded5342bbae57ee51d6ad4b949c5701e5d528efe62e_prof);

        
        $__internal_2c0e285a5416b3832cf657be997ebc9bf1557b6890cba8230a8ae1ac6b846704->leave($__internal_2c0e285a5416b3832cf657be997ebc9bf1557b6890cba8230a8ae1ac6b846704_prof);

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

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
        $__internal_7e83bcf2e00f27b6811d7bf76a90c52c9f42df895d83ff5ff890c88d1487f438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e83bcf2e00f27b6811d7bf76a90c52c9f42df895d83ff5ff890c88d1487f438->enter($__internal_7e83bcf2e00f27b6811d7bf76a90c52c9f42df895d83ff5ff890c88d1487f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_617b1cba47ecb6ff117a78ab7213d763363753cc05d74234439e9bd85f1dc4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617b1cba47ecb6ff117a78ab7213d763363753cc05d74234439e9bd85f1dc4e2->enter($__internal_617b1cba47ecb6ff117a78ab7213d763363753cc05d74234439e9bd85f1dc4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e83bcf2e00f27b6811d7bf76a90c52c9f42df895d83ff5ff890c88d1487f438->leave($__internal_7e83bcf2e00f27b6811d7bf76a90c52c9f42df895d83ff5ff890c88d1487f438_prof);

        
        $__internal_617b1cba47ecb6ff117a78ab7213d763363753cc05d74234439e9bd85f1dc4e2->leave($__internal_617b1cba47ecb6ff117a78ab7213d763363753cc05d74234439e9bd85f1dc4e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc7853a05a42dab69f6146797785add2cd866488e1f11e38e9dba51d93d04623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7853a05a42dab69f6146797785add2cd866488e1f11e38e9dba51d93d04623->enter($__internal_fc7853a05a42dab69f6146797785add2cd866488e1f11e38e9dba51d93d04623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_544898da9079ed3304c819c75283c09a5a225e76c514a170222a340909eb5246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544898da9079ed3304c819c75283c09a5a225e76c514a170222a340909eb5246->enter($__internal_544898da9079ed3304c819c75283c09a5a225e76c514a170222a340909eb5246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_544898da9079ed3304c819c75283c09a5a225e76c514a170222a340909eb5246->leave($__internal_544898da9079ed3304c819c75283c09a5a225e76c514a170222a340909eb5246_prof);

        
        $__internal_fc7853a05a42dab69f6146797785add2cd866488e1f11e38e9dba51d93d04623->leave($__internal_fc7853a05a42dab69f6146797785add2cd866488e1f11e38e9dba51d93d04623_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_660b4df41fe28bdbc119abfd50d4a7dca4cfd59bb6ce8fa6f7249e96b113f56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660b4df41fe28bdbc119abfd50d4a7dca4cfd59bb6ce8fa6f7249e96b113f56b->enter($__internal_660b4df41fe28bdbc119abfd50d4a7dca4cfd59bb6ce8fa6f7249e96b113f56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02977b94ac78861545a46284b4ad9569baca36f8438f8d4251ab9149af94a9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02977b94ac78861545a46284b4ad9569baca36f8438f8d4251ab9149af94a9c4->enter($__internal_02977b94ac78861545a46284b4ad9569baca36f8438f8d4251ab9149af94a9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02977b94ac78861545a46284b4ad9569baca36f8438f8d4251ab9149af94a9c4->leave($__internal_02977b94ac78861545a46284b4ad9569baca36f8438f8d4251ab9149af94a9c4_prof);

        
        $__internal_660b4df41fe28bdbc119abfd50d4a7dca4cfd59bb6ce8fa6f7249e96b113f56b->leave($__internal_660b4df41fe28bdbc119abfd50d4a7dca4cfd59bb6ce8fa6f7249e96b113f56b_prof);

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

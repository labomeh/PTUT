<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bbc6943a6b488f2a2e476a80533c0028f28b66d1c9b67abdec4679748cad1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbc6943a6b488f2a2e476a80533c0028f28b66d1c9b67abdec4679748cad1d4->enter($__internal_1bbc6943a6b488f2a2e476a80533c0028f28b66d1c9b67abdec4679748cad1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cefbbd7f30c1615314a1be2e84f6956562232042e1057dca1d81b35c3453e85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefbbd7f30c1615314a1be2e84f6956562232042e1057dca1d81b35c3453e85e->enter($__internal_cefbbd7f30c1615314a1be2e84f6956562232042e1057dca1d81b35c3453e85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbc6943a6b488f2a2e476a80533c0028f28b66d1c9b67abdec4679748cad1d4->leave($__internal_1bbc6943a6b488f2a2e476a80533c0028f28b66d1c9b67abdec4679748cad1d4_prof);

        
        $__internal_cefbbd7f30c1615314a1be2e84f6956562232042e1057dca1d81b35c3453e85e->leave($__internal_cefbbd7f30c1615314a1be2e84f6956562232042e1057dca1d81b35c3453e85e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6071793dde02b3d22790501fa5f83dac31e718ebff82264eb51499a872801dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6071793dde02b3d22790501fa5f83dac31e718ebff82264eb51499a872801dd->enter($__internal_b6071793dde02b3d22790501fa5f83dac31e718ebff82264eb51499a872801dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_820e8374ba0a0f4458dc91b64ae8fcfeb7137d9ce4257c40baafda71ab8a27e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820e8374ba0a0f4458dc91b64ae8fcfeb7137d9ce4257c40baafda71ab8a27e7->enter($__internal_820e8374ba0a0f4458dc91b64ae8fcfeb7137d9ce4257c40baafda71ab8a27e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_820e8374ba0a0f4458dc91b64ae8fcfeb7137d9ce4257c40baafda71ab8a27e7->leave($__internal_820e8374ba0a0f4458dc91b64ae8fcfeb7137d9ce4257c40baafda71ab8a27e7_prof);

        
        $__internal_b6071793dde02b3d22790501fa5f83dac31e718ebff82264eb51499a872801dd->leave($__internal_b6071793dde02b3d22790501fa5f83dac31e718ebff82264eb51499a872801dd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ded9bdbad3bad141f4a41fe218c52594bda5fcb25ad1abfefbd83f9fadf1996b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded9bdbad3bad141f4a41fe218c52594bda5fcb25ad1abfefbd83f9fadf1996b->enter($__internal_ded9bdbad3bad141f4a41fe218c52594bda5fcb25ad1abfefbd83f9fadf1996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_898b0f0b34cce18398f615cfb1825c86eeccbfbb1e65b3d62d172b2498afe055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898b0f0b34cce18398f615cfb1825c86eeccbfbb1e65b3d62d172b2498afe055->enter($__internal_898b0f0b34cce18398f615cfb1825c86eeccbfbb1e65b3d62d172b2498afe055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_898b0f0b34cce18398f615cfb1825c86eeccbfbb1e65b3d62d172b2498afe055->leave($__internal_898b0f0b34cce18398f615cfb1825c86eeccbfbb1e65b3d62d172b2498afe055_prof);

        
        $__internal_ded9bdbad3bad141f4a41fe218c52594bda5fcb25ad1abfefbd83f9fadf1996b->leave($__internal_ded9bdbad3bad141f4a41fe218c52594bda5fcb25ad1abfefbd83f9fadf1996b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

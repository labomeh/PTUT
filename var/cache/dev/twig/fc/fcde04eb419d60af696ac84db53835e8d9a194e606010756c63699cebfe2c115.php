<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ef9edb4d226bcfc71e9b36f6448e93a90de0d6690a02db843490c8107fd778e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8acf4962686743c05d51fbd7621bc25826e98a082266d077e235f8d0c93015f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8acf4962686743c05d51fbd7621bc25826e98a082266d077e235f8d0c93015f6->enter($__internal_8acf4962686743c05d51fbd7621bc25826e98a082266d077e235f8d0c93015f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_30a2a3011f64edbe76ff8f95dc14f6a56502b800708eeda61297aa9a3f968aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a2a3011f64edbe76ff8f95dc14f6a56502b800708eeda61297aa9a3f968aa4->enter($__internal_30a2a3011f64edbe76ff8f95dc14f6a56502b800708eeda61297aa9a3f968aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8acf4962686743c05d51fbd7621bc25826e98a082266d077e235f8d0c93015f6->leave($__internal_8acf4962686743c05d51fbd7621bc25826e98a082266d077e235f8d0c93015f6_prof);

        
        $__internal_30a2a3011f64edbe76ff8f95dc14f6a56502b800708eeda61297aa9a3f968aa4->leave($__internal_30a2a3011f64edbe76ff8f95dc14f6a56502b800708eeda61297aa9a3f968aa4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f89f883cc7ee455379b892d6a05f9a344c613c45a47e8944f753d75cd3b95b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89f883cc7ee455379b892d6a05f9a344c613c45a47e8944f753d75cd3b95b2c->enter($__internal_f89f883cc7ee455379b892d6a05f9a344c613c45a47e8944f753d75cd3b95b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc0e44e3803c780f50cb10cff976f0388cfcaaf945d5f049145005ba843efb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0e44e3803c780f50cb10cff976f0388cfcaaf945d5f049145005ba843efb58->enter($__internal_bc0e44e3803c780f50cb10cff976f0388cfcaaf945d5f049145005ba843efb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bc0e44e3803c780f50cb10cff976f0388cfcaaf945d5f049145005ba843efb58->leave($__internal_bc0e44e3803c780f50cb10cff976f0388cfcaaf945d5f049145005ba843efb58_prof);

        
        $__internal_f89f883cc7ee455379b892d6a05f9a344c613c45a47e8944f753d75cd3b95b2c->leave($__internal_f89f883cc7ee455379b892d6a05f9a344c613c45a47e8944f753d75cd3b95b2c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

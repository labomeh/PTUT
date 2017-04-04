<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9a5db22b768910612b3be71b41b954972a3ebdb4e6cbfb9cc1bf1d941f6ac3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_0b4db749621dfe925083d29614bd02ca49c0c8b35dce0adf5e7f0447bb4e3a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4db749621dfe925083d29614bd02ca49c0c8b35dce0adf5e7f0447bb4e3a38->enter($__internal_0b4db749621dfe925083d29614bd02ca49c0c8b35dce0adf5e7f0447bb4e3a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ed8ade6cbc62eb9bb60cee393356ba3d763386c487f1dd479925ef16f849c69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8ade6cbc62eb9bb60cee393356ba3d763386c487f1dd479925ef16f849c69f->enter($__internal_ed8ade6cbc62eb9bb60cee393356ba3d763386c487f1dd479925ef16f849c69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4db749621dfe925083d29614bd02ca49c0c8b35dce0adf5e7f0447bb4e3a38->leave($__internal_0b4db749621dfe925083d29614bd02ca49c0c8b35dce0adf5e7f0447bb4e3a38_prof);

        
        $__internal_ed8ade6cbc62eb9bb60cee393356ba3d763386c487f1dd479925ef16f849c69f->leave($__internal_ed8ade6cbc62eb9bb60cee393356ba3d763386c487f1dd479925ef16f849c69f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68c20a0a5653e3f8a971e1f7d436b729ed49fff5b4f3b00ca1a2709438559823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c20a0a5653e3f8a971e1f7d436b729ed49fff5b4f3b00ca1a2709438559823->enter($__internal_68c20a0a5653e3f8a971e1f7d436b729ed49fff5b4f3b00ca1a2709438559823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7901a951e1a956b290c635e277ca09afb8167e910d875cdd302863aa5541a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7901a951e1a956b290c635e277ca09afb8167e910d875cdd302863aa5541a08->enter($__internal_a7901a951e1a956b290c635e277ca09afb8167e910d875cdd302863aa5541a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a7901a951e1a956b290c635e277ca09afb8167e910d875cdd302863aa5541a08->leave($__internal_a7901a951e1a956b290c635e277ca09afb8167e910d875cdd302863aa5541a08_prof);

        
        $__internal_68c20a0a5653e3f8a971e1f7d436b729ed49fff5b4f3b00ca1a2709438559823->leave($__internal_68c20a0a5653e3f8a971e1f7d436b729ed49fff5b4f3b00ca1a2709438559823_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b21231e6301c780dde803eb01bd64390fe525469229a318b4d570da8329cf0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_123aaa9b3c02c2cd6ebfe8fd15a18130e29c570504520c6b625d6a3f5e8079db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123aaa9b3c02c2cd6ebfe8fd15a18130e29c570504520c6b625d6a3f5e8079db->enter($__internal_123aaa9b3c02c2cd6ebfe8fd15a18130e29c570504520c6b625d6a3f5e8079db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ec3dcf923cabd6d040a2248103271efa35e6a7a7f6329c6c4fe65c5b5d953a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3dcf923cabd6d040a2248103271efa35e6a7a7f6329c6c4fe65c5b5d953a4d->enter($__internal_ec3dcf923cabd6d040a2248103271efa35e6a7a7f6329c6c4fe65c5b5d953a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_123aaa9b3c02c2cd6ebfe8fd15a18130e29c570504520c6b625d6a3f5e8079db->leave($__internal_123aaa9b3c02c2cd6ebfe8fd15a18130e29c570504520c6b625d6a3f5e8079db_prof);

        
        $__internal_ec3dcf923cabd6d040a2248103271efa35e6a7a7f6329c6c4fe65c5b5d953a4d->leave($__internal_ec3dcf923cabd6d040a2248103271efa35e6a7a7f6329c6c4fe65c5b5d953a4d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

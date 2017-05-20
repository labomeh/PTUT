<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_df5c3e9132aebab06c01322dba56b125e31ad676300d450657f3b498db87fd9d extends Twig_Template
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
        $__internal_ae947cf5008ed2821c9f86918807adf888b300bf1be539fc97562319f6c9b8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae947cf5008ed2821c9f86918807adf888b300bf1be539fc97562319f6c9b8b2->enter($__internal_ae947cf5008ed2821c9f86918807adf888b300bf1be539fc97562319f6c9b8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4a4d3b013c01cc8041afdefe4208e0964f6ccf17aaaa469e33a0e6e7f4188769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4d3b013c01cc8041afdefe4208e0964f6ccf17aaaa469e33a0e6e7f4188769->enter($__internal_4a4d3b013c01cc8041afdefe4208e0964f6ccf17aaaa469e33a0e6e7f4188769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ae947cf5008ed2821c9f86918807adf888b300bf1be539fc97562319f6c9b8b2->leave($__internal_ae947cf5008ed2821c9f86918807adf888b300bf1be539fc97562319f6c9b8b2_prof);

        
        $__internal_4a4d3b013c01cc8041afdefe4208e0964f6ccf17aaaa469e33a0e6e7f4188769->leave($__internal_4a4d3b013c01cc8041afdefe4208e0964f6ccf17aaaa469e33a0e6e7f4188769_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}

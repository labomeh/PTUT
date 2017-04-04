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
        $__internal_919cd30fcf278b50558edf6cafbc82816f29f690e4c9ae040ba61bc6ec6ff39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919cd30fcf278b50558edf6cafbc82816f29f690e4c9ae040ba61bc6ec6ff39c->enter($__internal_919cd30fcf278b50558edf6cafbc82816f29f690e4c9ae040ba61bc6ec6ff39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d97135da0ee9f576b2dd0b4910675d559775201f2cb47ac7e980d003590d6eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97135da0ee9f576b2dd0b4910675d559775201f2cb47ac7e980d003590d6eb8->enter($__internal_d97135da0ee9f576b2dd0b4910675d559775201f2cb47ac7e980d003590d6eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_919cd30fcf278b50558edf6cafbc82816f29f690e4c9ae040ba61bc6ec6ff39c->leave($__internal_919cd30fcf278b50558edf6cafbc82816f29f690e4c9ae040ba61bc6ec6ff39c_prof);

        
        $__internal_d97135da0ee9f576b2dd0b4910675d559775201f2cb47ac7e980d003590d6eb8->leave($__internal_d97135da0ee9f576b2dd0b4910675d559775201f2cb47ac7e980d003590d6eb8_prof);

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

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cae05033129e673a718ad8a132b696a28ca361b1697bd930631eb9b76a21ddd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8c796725d4badb234eace5b6810fe19d4c8b67e050eca6fec347f5974b7bc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c796725d4badb234eace5b6810fe19d4c8b67e050eca6fec347f5974b7bc52->enter($__internal_e8c796725d4badb234eace5b6810fe19d4c8b67e050eca6fec347f5974b7bc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_46890d69d8d3bc6631250479cca70478741450699e5e2a346112e4d314c0c9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46890d69d8d3bc6631250479cca70478741450699e5e2a346112e4d314c0c9ae->enter($__internal_46890d69d8d3bc6631250479cca70478741450699e5e2a346112e4d314c0c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e8c796725d4badb234eace5b6810fe19d4c8b67e050eca6fec347f5974b7bc52->leave($__internal_e8c796725d4badb234eace5b6810fe19d4c8b67e050eca6fec347f5974b7bc52_prof);

        
        $__internal_46890d69d8d3bc6631250479cca70478741450699e5e2a346112e4d314c0c9ae->leave($__internal_46890d69d8d3bc6631250479cca70478741450699e5e2a346112e4d314c0c9ae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed3e449472197cb9f05ee2afa9138b0d60ad3325312b587b10420219ab852f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3e449472197cb9f05ee2afa9138b0d60ad3325312b587b10420219ab852f08->enter($__internal_ed3e449472197cb9f05ee2afa9138b0d60ad3325312b587b10420219ab852f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db1305dfc55b073a33fb94f2f36b62c89acb3de818667a286520651ccb94972d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1305dfc55b073a33fb94f2f36b62c89acb3de818667a286520651ccb94972d->enter($__internal_db1305dfc55b073a33fb94f2f36b62c89acb3de818667a286520651ccb94972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_db1305dfc55b073a33fb94f2f36b62c89acb3de818667a286520651ccb94972d->leave($__internal_db1305dfc55b073a33fb94f2f36b62c89acb3de818667a286520651ccb94972d_prof);

        
        $__internal_ed3e449472197cb9f05ee2afa9138b0d60ad3325312b587b10420219ab852f08->leave($__internal_ed3e449472197cb9f05ee2afa9138b0d60ad3325312b587b10420219ab852f08_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

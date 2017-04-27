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
        $__internal_2f08ed4e881ceec414b5b6da15e0e91e789dc10c4d538e8109b7efa5b9f88069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f08ed4e881ceec414b5b6da15e0e91e789dc10c4d538e8109b7efa5b9f88069->enter($__internal_2f08ed4e881ceec414b5b6da15e0e91e789dc10c4d538e8109b7efa5b9f88069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_134ab2fcc6725eaf5c368b4a5cd0099f2bf7676332cc37c1c8babc983e316f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134ab2fcc6725eaf5c368b4a5cd0099f2bf7676332cc37c1c8babc983e316f60->enter($__internal_134ab2fcc6725eaf5c368b4a5cd0099f2bf7676332cc37c1c8babc983e316f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2f08ed4e881ceec414b5b6da15e0e91e789dc10c4d538e8109b7efa5b9f88069->leave($__internal_2f08ed4e881ceec414b5b6da15e0e91e789dc10c4d538e8109b7efa5b9f88069_prof);

        
        $__internal_134ab2fcc6725eaf5c368b4a5cd0099f2bf7676332cc37c1c8babc983e316f60->leave($__internal_134ab2fcc6725eaf5c368b4a5cd0099f2bf7676332cc37c1c8babc983e316f60_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_193d19a199f2e291100eeb83c26c27b36d3a0a7f329833616ef9eb1abe15fb91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193d19a199f2e291100eeb83c26c27b36d3a0a7f329833616ef9eb1abe15fb91->enter($__internal_193d19a199f2e291100eeb83c26c27b36d3a0a7f329833616ef9eb1abe15fb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57b12c2f012c33a356d037eda4a6607620d2ad790b1aa1121e405351524845ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b12c2f012c33a356d037eda4a6607620d2ad790b1aa1121e405351524845ea->enter($__internal_57b12c2f012c33a356d037eda4a6607620d2ad790b1aa1121e405351524845ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_57b12c2f012c33a356d037eda4a6607620d2ad790b1aa1121e405351524845ea->leave($__internal_57b12c2f012c33a356d037eda4a6607620d2ad790b1aa1121e405351524845ea_prof);

        
        $__internal_193d19a199f2e291100eeb83c26c27b36d3a0a7f329833616ef9eb1abe15fb91->leave($__internal_193d19a199f2e291100eeb83c26c27b36d3a0a7f329833616ef9eb1abe15fb91_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_66e8bae2ef0bd2c2153a91118f4d3f9ab9780394776fc2a701e2dabe733a3f1a extends Twig_Template
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
        $__internal_4598e66e1d30e890524eb369e7ba10d8e1574db0ee2eabf50cf58f5ef35860a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4598e66e1d30e890524eb369e7ba10d8e1574db0ee2eabf50cf58f5ef35860a8->enter($__internal_4598e66e1d30e890524eb369e7ba10d8e1574db0ee2eabf50cf58f5ef35860a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e780480a7a59271a88126447ef92bc38d2a059d736179ff1ed20cea08357895e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e780480a7a59271a88126447ef92bc38d2a059d736179ff1ed20cea08357895e->enter($__internal_e780480a7a59271a88126447ef92bc38d2a059d736179ff1ed20cea08357895e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4598e66e1d30e890524eb369e7ba10d8e1574db0ee2eabf50cf58f5ef35860a8->leave($__internal_4598e66e1d30e890524eb369e7ba10d8e1574db0ee2eabf50cf58f5ef35860a8_prof);

        
        $__internal_e780480a7a59271a88126447ef92bc38d2a059d736179ff1ed20cea08357895e->leave($__internal_e780480a7a59271a88126447ef92bc38d2a059d736179ff1ed20cea08357895e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c738c9eb33ebfca5c9a16901ec248076d74133f9cb1d8c61d46418190c410535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c738c9eb33ebfca5c9a16901ec248076d74133f9cb1d8c61d46418190c410535->enter($__internal_c738c9eb33ebfca5c9a16901ec248076d74133f9cb1d8c61d46418190c410535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e092d315123f0eef9304064e0b5d07ec27d8ab2c83da4dc181d33368bb038b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e092d315123f0eef9304064e0b5d07ec27d8ab2c83da4dc181d33368bb038b9->enter($__internal_5e092d315123f0eef9304064e0b5d07ec27d8ab2c83da4dc181d33368bb038b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5e092d315123f0eef9304064e0b5d07ec27d8ab2c83da4dc181d33368bb038b9->leave($__internal_5e092d315123f0eef9304064e0b5d07ec27d8ab2c83da4dc181d33368bb038b9_prof);

        
        $__internal_c738c9eb33ebfca5c9a16901ec248076d74133f9cb1d8c61d46418190c410535->leave($__internal_c738c9eb33ebfca5c9a16901ec248076d74133f9cb1d8c61d46418190c410535_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

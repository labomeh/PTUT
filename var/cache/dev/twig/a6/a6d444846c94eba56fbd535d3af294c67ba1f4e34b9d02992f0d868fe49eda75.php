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
        $__internal_a70ef7d8b1a1450305c1f5d05c46bdcc8d764c471baf41b380b9f3d02c00b1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70ef7d8b1a1450305c1f5d05c46bdcc8d764c471baf41b380b9f3d02c00b1dd->enter($__internal_a70ef7d8b1a1450305c1f5d05c46bdcc8d764c471baf41b380b9f3d02c00b1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_83ac40255451270cd3ff28ff0d11c516ae20bdecc2db4e2c983e2551b3d43654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ac40255451270cd3ff28ff0d11c516ae20bdecc2db4e2c983e2551b3d43654->enter($__internal_83ac40255451270cd3ff28ff0d11c516ae20bdecc2db4e2c983e2551b3d43654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a70ef7d8b1a1450305c1f5d05c46bdcc8d764c471baf41b380b9f3d02c00b1dd->leave($__internal_a70ef7d8b1a1450305c1f5d05c46bdcc8d764c471baf41b380b9f3d02c00b1dd_prof);

        
        $__internal_83ac40255451270cd3ff28ff0d11c516ae20bdecc2db4e2c983e2551b3d43654->leave($__internal_83ac40255451270cd3ff28ff0d11c516ae20bdecc2db4e2c983e2551b3d43654_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_82b6484e7e0491722303be4603d55b552a97a47c28240b0b9e2cb95cada51136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b6484e7e0491722303be4603d55b552a97a47c28240b0b9e2cb95cada51136->enter($__internal_82b6484e7e0491722303be4603d55b552a97a47c28240b0b9e2cb95cada51136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb65cdeb33fde6e45626d06102e37255004ac695eba019db0dadb6f901a9b94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb65cdeb33fde6e45626d06102e37255004ac695eba019db0dadb6f901a9b94d->enter($__internal_eb65cdeb33fde6e45626d06102e37255004ac695eba019db0dadb6f901a9b94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eb65cdeb33fde6e45626d06102e37255004ac695eba019db0dadb6f901a9b94d->leave($__internal_eb65cdeb33fde6e45626d06102e37255004ac695eba019db0dadb6f901a9b94d_prof);

        
        $__internal_82b6484e7e0491722303be4603d55b552a97a47c28240b0b9e2cb95cada51136->leave($__internal_82b6484e7e0491722303be4603d55b552a97a47c28240b0b9e2cb95cada51136_prof);

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

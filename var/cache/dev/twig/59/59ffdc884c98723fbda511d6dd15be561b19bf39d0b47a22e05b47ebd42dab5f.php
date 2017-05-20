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
        $__internal_e088d21f7ffc4fcc213a137d53d3d9090e8d0814b321e1481fd270d9101ba4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e088d21f7ffc4fcc213a137d53d3d9090e8d0814b321e1481fd270d9101ba4e8->enter($__internal_e088d21f7ffc4fcc213a137d53d3d9090e8d0814b321e1481fd270d9101ba4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_435461f669f0176f1bdc00aa37b87fecb1883821afa83ee1c2a02f5b24154e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435461f669f0176f1bdc00aa37b87fecb1883821afa83ee1c2a02f5b24154e58->enter($__internal_435461f669f0176f1bdc00aa37b87fecb1883821afa83ee1c2a02f5b24154e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e088d21f7ffc4fcc213a137d53d3d9090e8d0814b321e1481fd270d9101ba4e8->leave($__internal_e088d21f7ffc4fcc213a137d53d3d9090e8d0814b321e1481fd270d9101ba4e8_prof);

        
        $__internal_435461f669f0176f1bdc00aa37b87fecb1883821afa83ee1c2a02f5b24154e58->leave($__internal_435461f669f0176f1bdc00aa37b87fecb1883821afa83ee1c2a02f5b24154e58_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5840fe929e4a7b1af285837826fc2694e2bce37cf8557e53be146f4d3b514b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5840fe929e4a7b1af285837826fc2694e2bce37cf8557e53be146f4d3b514b5d->enter($__internal_5840fe929e4a7b1af285837826fc2694e2bce37cf8557e53be146f4d3b514b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3266f22ae614a29cb0d08e50c3a0c95e21b32f17df28859816f500d1d8ac74fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3266f22ae614a29cb0d08e50c3a0c95e21b32f17df28859816f500d1d8ac74fa->enter($__internal_3266f22ae614a29cb0d08e50c3a0c95e21b32f17df28859816f500d1d8ac74fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3266f22ae614a29cb0d08e50c3a0c95e21b32f17df28859816f500d1d8ac74fa->leave($__internal_3266f22ae614a29cb0d08e50c3a0c95e21b32f17df28859816f500d1d8ac74fa_prof);

        
        $__internal_5840fe929e4a7b1af285837826fc2694e2bce37cf8557e53be146f4d3b514b5d->leave($__internal_5840fe929e4a7b1af285837826fc2694e2bce37cf8557e53be146f4d3b514b5d_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

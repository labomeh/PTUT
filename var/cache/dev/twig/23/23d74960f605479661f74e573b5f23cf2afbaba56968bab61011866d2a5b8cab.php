<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f8d837562761f99e567bcf8958a6c7f32e26a7929e143cf261520b2ead9a6c3b extends Twig_Template
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
        $__internal_3359bf2e8d5991beec2000d85560a7d974f0af2251f430c62ce353671d13dfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3359bf2e8d5991beec2000d85560a7d974f0af2251f430c62ce353671d13dfc5->enter($__internal_3359bf2e8d5991beec2000d85560a7d974f0af2251f430c62ce353671d13dfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b58ce4ff4cf52b88a3e2bb0f1e83c662cded900c31195bb3631d5eddc3d26cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58ce4ff4cf52b88a3e2bb0f1e83c662cded900c31195bb3631d5eddc3d26cf7->enter($__internal_b58ce4ff4cf52b88a3e2bb0f1e83c662cded900c31195bb3631d5eddc3d26cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3359bf2e8d5991beec2000d85560a7d974f0af2251f430c62ce353671d13dfc5->leave($__internal_3359bf2e8d5991beec2000d85560a7d974f0af2251f430c62ce353671d13dfc5_prof);

        
        $__internal_b58ce4ff4cf52b88a3e2bb0f1e83c662cded900c31195bb3631d5eddc3d26cf7->leave($__internal_b58ce4ff4cf52b88a3e2bb0f1e83c662cded900c31195bb3631d5eddc3d26cf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

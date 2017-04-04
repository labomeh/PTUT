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
        $__internal_aeda80d8b03cdcb0564c15b7a18be2d57fdbb88a2dae425e5af579e831d7cc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeda80d8b03cdcb0564c15b7a18be2d57fdbb88a2dae425e5af579e831d7cc5b->enter($__internal_aeda80d8b03cdcb0564c15b7a18be2d57fdbb88a2dae425e5af579e831d7cc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ee6b025d06a0e3cbf86835197e99eeaba4e1e62ae72467ce1f43c1b75ce6b6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6b025d06a0e3cbf86835197e99eeaba4e1e62ae72467ce1f43c1b75ce6b6c1->enter($__internal_ee6b025d06a0e3cbf86835197e99eeaba4e1e62ae72467ce1f43c1b75ce6b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_aeda80d8b03cdcb0564c15b7a18be2d57fdbb88a2dae425e5af579e831d7cc5b->leave($__internal_aeda80d8b03cdcb0564c15b7a18be2d57fdbb88a2dae425e5af579e831d7cc5b_prof);

        
        $__internal_ee6b025d06a0e3cbf86835197e99eeaba4e1e62ae72467ce1f43c1b75ce6b6c1->leave($__internal_ee6b025d06a0e3cbf86835197e99eeaba4e1e62ae72467ce1f43c1b75ce6b6c1_prof);

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

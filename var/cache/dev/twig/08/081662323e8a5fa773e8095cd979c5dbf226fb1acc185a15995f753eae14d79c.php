<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43155966c45df880a914bea0e34fee9b9926202925b729a7a23e24bf8e15c10a extends Twig_Template
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
        $__internal_7f1df5c3c34d7d003c60cb5fd0863692a9f3848627cfa07287eefbf14d4bcb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1df5c3c34d7d003c60cb5fd0863692a9f3848627cfa07287eefbf14d4bcb26->enter($__internal_7f1df5c3c34d7d003c60cb5fd0863692a9f3848627cfa07287eefbf14d4bcb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_047d02831c25eecb8b1d8dde12f042cfc33d42a39de437e64a0135a5d24a2812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047d02831c25eecb8b1d8dde12f042cfc33d42a39de437e64a0135a5d24a2812->enter($__internal_047d02831c25eecb8b1d8dde12f042cfc33d42a39de437e64a0135a5d24a2812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7f1df5c3c34d7d003c60cb5fd0863692a9f3848627cfa07287eefbf14d4bcb26->leave($__internal_7f1df5c3c34d7d003c60cb5fd0863692a9f3848627cfa07287eefbf14d4bcb26_prof);

        
        $__internal_047d02831c25eecb8b1d8dde12f042cfc33d42a39de437e64a0135a5d24a2812->leave($__internal_047d02831c25eecb8b1d8dde12f042cfc33d42a39de437e64a0135a5d24a2812_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

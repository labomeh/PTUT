<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_91460aee2d574d58e660fd346d75179f570db0f92537bd122fce8579cb08b883 extends Twig_Template
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
        $__internal_fea24cc26e310446fff719cc4b3d8d367e2b06e229676e7e837c690c983af7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea24cc26e310446fff719cc4b3d8d367e2b06e229676e7e837c690c983af7ac->enter($__internal_fea24cc26e310446fff719cc4b3d8d367e2b06e229676e7e837c690c983af7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9c3d740f2652d51147cc320fd543529c66a75d56b79d2b064c87c340fa96f933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3d740f2652d51147cc320fd543529c66a75d56b79d2b064c87c340fa96f933->enter($__internal_9c3d740f2652d51147cc320fd543529c66a75d56b79d2b064c87c340fa96f933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fea24cc26e310446fff719cc4b3d8d367e2b06e229676e7e837c690c983af7ac->leave($__internal_fea24cc26e310446fff719cc4b3d8d367e2b06e229676e7e837c690c983af7ac_prof);

        
        $__internal_9c3d740f2652d51147cc320fd543529c66a75d56b79d2b064c87c340fa96f933->leave($__internal_9c3d740f2652d51147cc320fd543529c66a75d56b79d2b064c87c340fa96f933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}

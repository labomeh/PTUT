<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_373d9429f4343d0721abdaeb56f283659e04c776d230be7f9bfb3bb51685867f extends Twig_Template
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
        $__internal_52cff2ee944f2417710f35ed8bd1414c7f26000f5b938615e49d954fe35f22ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52cff2ee944f2417710f35ed8bd1414c7f26000f5b938615e49d954fe35f22ec->enter($__internal_52cff2ee944f2417710f35ed8bd1414c7f26000f5b938615e49d954fe35f22ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3b0a98f70d0d5bb4a75d1ae6bba3b7cff8be0cdd118d28430ffbfe4eff3666f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0a98f70d0d5bb4a75d1ae6bba3b7cff8be0cdd118d28430ffbfe4eff3666f7->enter($__internal_3b0a98f70d0d5bb4a75d1ae6bba3b7cff8be0cdd118d28430ffbfe4eff3666f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_52cff2ee944f2417710f35ed8bd1414c7f26000f5b938615e49d954fe35f22ec->leave($__internal_52cff2ee944f2417710f35ed8bd1414c7f26000f5b938615e49d954fe35f22ec_prof);

        
        $__internal_3b0a98f70d0d5bb4a75d1ae6bba3b7cff8be0cdd118d28430ffbfe4eff3666f7->leave($__internal_3b0a98f70d0d5bb4a75d1ae6bba3b7cff8be0cdd118d28430ffbfe4eff3666f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

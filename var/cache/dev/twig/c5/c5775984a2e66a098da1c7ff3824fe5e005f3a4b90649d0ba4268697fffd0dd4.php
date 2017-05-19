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
        $__internal_0756eff6b747034bbbfd4f165d3b65c6ff2dfb4af860aaf8e2e09fec9f4ce8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0756eff6b747034bbbfd4f165d3b65c6ff2dfb4af860aaf8e2e09fec9f4ce8d6->enter($__internal_0756eff6b747034bbbfd4f165d3b65c6ff2dfb4af860aaf8e2e09fec9f4ce8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_14214475071e8c30d6b3dd279b9b8de4fe6d92e8155f2c5122f321c5e4e98ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14214475071e8c30d6b3dd279b9b8de4fe6d92e8155f2c5122f321c5e4e98ffd->enter($__internal_14214475071e8c30d6b3dd279b9b8de4fe6d92e8155f2c5122f321c5e4e98ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0756eff6b747034bbbfd4f165d3b65c6ff2dfb4af860aaf8e2e09fec9f4ce8d6->leave($__internal_0756eff6b747034bbbfd4f165d3b65c6ff2dfb4af860aaf8e2e09fec9f4ce8d6_prof);

        
        $__internal_14214475071e8c30d6b3dd279b9b8de4fe6d92e8155f2c5122f321c5e4e98ffd->leave($__internal_14214475071e8c30d6b3dd279b9b8de4fe6d92e8155f2c5122f321c5e4e98ffd_prof);

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

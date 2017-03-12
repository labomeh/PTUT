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
        $__internal_9a8edb15c4cdadb5f36304b887ffae03768ea41b80f528169f2c5f6d5aea9cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8edb15c4cdadb5f36304b887ffae03768ea41b80f528169f2c5f6d5aea9cc1->enter($__internal_9a8edb15c4cdadb5f36304b887ffae03768ea41b80f528169f2c5f6d5aea9cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_658308fdc901f68de8b6dc90d924a8fc6ff339f10966e99cfe1dabca258ace85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658308fdc901f68de8b6dc90d924a8fc6ff339f10966e99cfe1dabca258ace85->enter($__internal_658308fdc901f68de8b6dc90d924a8fc6ff339f10966e99cfe1dabca258ace85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9a8edb15c4cdadb5f36304b887ffae03768ea41b80f528169f2c5f6d5aea9cc1->leave($__internal_9a8edb15c4cdadb5f36304b887ffae03768ea41b80f528169f2c5f6d5aea9cc1_prof);

        
        $__internal_658308fdc901f68de8b6dc90d924a8fc6ff339f10966e99cfe1dabca258ace85->leave($__internal_658308fdc901f68de8b6dc90d924a8fc6ff339f10966e99cfe1dabca258ace85_prof);

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

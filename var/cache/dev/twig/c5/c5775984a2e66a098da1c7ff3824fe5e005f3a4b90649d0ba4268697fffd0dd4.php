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
        $__internal_d2cd188ef0eca2942b625d7bb324cb14cd0a2dbdd55b9543cf24cda972d85dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cd188ef0eca2942b625d7bb324cb14cd0a2dbdd55b9543cf24cda972d85dab->enter($__internal_d2cd188ef0eca2942b625d7bb324cb14cd0a2dbdd55b9543cf24cda972d85dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e5f92b8cacd08fd7e98a3dc3de26888281d83ced79ae4d1a138a14d79dc1d90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f92b8cacd08fd7e98a3dc3de26888281d83ced79ae4d1a138a14d79dc1d90d->enter($__internal_e5f92b8cacd08fd7e98a3dc3de26888281d83ced79ae4d1a138a14d79dc1d90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d2cd188ef0eca2942b625d7bb324cb14cd0a2dbdd55b9543cf24cda972d85dab->leave($__internal_d2cd188ef0eca2942b625d7bb324cb14cd0a2dbdd55b9543cf24cda972d85dab_prof);

        
        $__internal_e5f92b8cacd08fd7e98a3dc3de26888281d83ced79ae4d1a138a14d79dc1d90d->leave($__internal_e5f92b8cacd08fd7e98a3dc3de26888281d83ced79ae4d1a138a14d79dc1d90d_prof);

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
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

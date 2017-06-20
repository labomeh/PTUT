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
        $__internal_346cdd6edb62a25c0cf07dd078aa7e7502f49012a17c38c88f9c91d4524bf9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346cdd6edb62a25c0cf07dd078aa7e7502f49012a17c38c88f9c91d4524bf9cc->enter($__internal_346cdd6edb62a25c0cf07dd078aa7e7502f49012a17c38c88f9c91d4524bf9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_40f693e98da9bb5e8a35ec28a906e6399f6b4b8715447473787bc82026e9b1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f693e98da9bb5e8a35ec28a906e6399f6b4b8715447473787bc82026e9b1d5->enter($__internal_40f693e98da9bb5e8a35ec28a906e6399f6b4b8715447473787bc82026e9b1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_346cdd6edb62a25c0cf07dd078aa7e7502f49012a17c38c88f9c91d4524bf9cc->leave($__internal_346cdd6edb62a25c0cf07dd078aa7e7502f49012a17c38c88f9c91d4524bf9cc_prof);

        
        $__internal_40f693e98da9bb5e8a35ec28a906e6399f6b4b8715447473787bc82026e9b1d5->leave($__internal_40f693e98da9bb5e8a35ec28a906e6399f6b4b8715447473787bc82026e9b1d5_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}

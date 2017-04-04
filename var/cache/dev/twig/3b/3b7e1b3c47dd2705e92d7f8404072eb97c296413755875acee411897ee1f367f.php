<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_17b969dc8bf695da52fed436aae800cf51cf7d434d88594d55de9d8c1d980fc6 extends Twig_Template
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
        $__internal_68e11ab6f0b9a0c71be3364ce7ac07b736bec18fb152dfd19219a6e95660e167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e11ab6f0b9a0c71be3364ce7ac07b736bec18fb152dfd19219a6e95660e167->enter($__internal_68e11ab6f0b9a0c71be3364ce7ac07b736bec18fb152dfd19219a6e95660e167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d2b2a2be9a4e996b76bbdacf8e608c62ab99c6c27ba4b898c6a59807241a3840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b2a2be9a4e996b76bbdacf8e608c62ab99c6c27ba4b898c6a59807241a3840->enter($__internal_d2b2a2be9a4e996b76bbdacf8e608c62ab99c6c27ba4b898c6a59807241a3840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_68e11ab6f0b9a0c71be3364ce7ac07b736bec18fb152dfd19219a6e95660e167->leave($__internal_68e11ab6f0b9a0c71be3364ce7ac07b736bec18fb152dfd19219a6e95660e167_prof);

        
        $__internal_d2b2a2be9a4e996b76bbdacf8e608c62ab99c6c27ba4b898c6a59807241a3840->leave($__internal_d2b2a2be9a4e996b76bbdacf8e608c62ab99c6c27ba4b898c6a59807241a3840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_415876f28c6976afeeafd4d95df761ed734111edaf97d99dc57201d43754a38c extends Twig_Template
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
        $__internal_a49919915dbaef433af6193d050f515ab611eeb61874ac2bea239065534f36b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49919915dbaef433af6193d050f515ab611eeb61874ac2bea239065534f36b7->enter($__internal_a49919915dbaef433af6193d050f515ab611eeb61874ac2bea239065534f36b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7c8b1a0dcd90f4d500a7a67a6923bac4296dfe01f9d8cedb7197f88df875a41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8b1a0dcd90f4d500a7a67a6923bac4296dfe01f9d8cedb7197f88df875a41b->enter($__internal_7c8b1a0dcd90f4d500a7a67a6923bac4296dfe01f9d8cedb7197f88df875a41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a49919915dbaef433af6193d050f515ab611eeb61874ac2bea239065534f36b7->leave($__internal_a49919915dbaef433af6193d050f515ab611eeb61874ac2bea239065534f36b7_prof);

        
        $__internal_7c8b1a0dcd90f4d500a7a67a6923bac4296dfe01f9d8cedb7197f88df875a41b->leave($__internal_7c8b1a0dcd90f4d500a7a67a6923bac4296dfe01f9d8cedb7197f88df875a41b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

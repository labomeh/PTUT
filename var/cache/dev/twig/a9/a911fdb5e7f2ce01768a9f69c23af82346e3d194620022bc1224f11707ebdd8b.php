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
        $__internal_7da76a1ea4d875aa479208fb0909ff3888dd5ea9efbc487457ac60ad9f7f4b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da76a1ea4d875aa479208fb0909ff3888dd5ea9efbc487457ac60ad9f7f4b7b->enter($__internal_7da76a1ea4d875aa479208fb0909ff3888dd5ea9efbc487457ac60ad9f7f4b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1f16dc32685fc25a67020b6fd702f24db61daca48d2d4b4495543b7a388e5e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f16dc32685fc25a67020b6fd702f24db61daca48d2d4b4495543b7a388e5e38->enter($__internal_1f16dc32685fc25a67020b6fd702f24db61daca48d2d4b4495543b7a388e5e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7da76a1ea4d875aa479208fb0909ff3888dd5ea9efbc487457ac60ad9f7f4b7b->leave($__internal_7da76a1ea4d875aa479208fb0909ff3888dd5ea9efbc487457ac60ad9f7f4b7b_prof);

        
        $__internal_1f16dc32685fc25a67020b6fd702f24db61daca48d2d4b4495543b7a388e5e38->leave($__internal_1f16dc32685fc25a67020b6fd702f24db61daca48d2d4b4495543b7a388e5e38_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

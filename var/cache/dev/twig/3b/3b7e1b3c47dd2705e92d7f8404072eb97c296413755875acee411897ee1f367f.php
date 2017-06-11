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
        $__internal_9b889db4fd7682ab3428adbc9b2668176dff5e3661fdb86cc28a34b9bc0b2a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b889db4fd7682ab3428adbc9b2668176dff5e3661fdb86cc28a34b9bc0b2a8a->enter($__internal_9b889db4fd7682ab3428adbc9b2668176dff5e3661fdb86cc28a34b9bc0b2a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2c77d9a609dfef862bd0145e4a1b30d6c8ad1dcb0f3b0a402dcc6b74de814cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c77d9a609dfef862bd0145e4a1b30d6c8ad1dcb0f3b0a402dcc6b74de814cdf->enter($__internal_2c77d9a609dfef862bd0145e4a1b30d6c8ad1dcb0f3b0a402dcc6b74de814cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9b889db4fd7682ab3428adbc9b2668176dff5e3661fdb86cc28a34b9bc0b2a8a->leave($__internal_9b889db4fd7682ab3428adbc9b2668176dff5e3661fdb86cc28a34b9bc0b2a8a_prof);

        
        $__internal_2c77d9a609dfef862bd0145e4a1b30d6c8ad1dcb0f3b0a402dcc6b74de814cdf->leave($__internal_2c77d9a609dfef862bd0145e4a1b30d6c8ad1dcb0f3b0a402dcc6b74de814cdf_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

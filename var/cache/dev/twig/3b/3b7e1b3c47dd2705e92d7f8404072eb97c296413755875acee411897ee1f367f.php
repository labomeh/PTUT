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
        $__internal_fbea409326b051baa46aa70c28c6d66ff8f86b3d9d6305bb7460adfdb0d07b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbea409326b051baa46aa70c28c6d66ff8f86b3d9d6305bb7460adfdb0d07b09->enter($__internal_fbea409326b051baa46aa70c28c6d66ff8f86b3d9d6305bb7460adfdb0d07b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2613bdf810be666196f74177caa6f32337579c6e18cd2a410864ad65ca0284b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2613bdf810be666196f74177caa6f32337579c6e18cd2a410864ad65ca0284b8->enter($__internal_2613bdf810be666196f74177caa6f32337579c6e18cd2a410864ad65ca0284b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fbea409326b051baa46aa70c28c6d66ff8f86b3d9d6305bb7460adfdb0d07b09->leave($__internal_fbea409326b051baa46aa70c28c6d66ff8f86b3d9d6305bb7460adfdb0d07b09_prof);

        
        $__internal_2613bdf810be666196f74177caa6f32337579c6e18cd2a410864ad65ca0284b8->leave($__internal_2613bdf810be666196f74177caa6f32337579c6e18cd2a410864ad65ca0284b8_prof);

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

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
        $__internal_d3ad3f810ce13466bbd442040a189ec0586ba0459122e7286668abd9fe57c29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ad3f810ce13466bbd442040a189ec0586ba0459122e7286668abd9fe57c29b->enter($__internal_d3ad3f810ce13466bbd442040a189ec0586ba0459122e7286668abd9fe57c29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7931949fc1560c9f12cd50ecbbbfe6531b772cc3696d9aaf283530b9b6ef8b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7931949fc1560c9f12cd50ecbbbfe6531b772cc3696d9aaf283530b9b6ef8b2c->enter($__internal_7931949fc1560c9f12cd50ecbbbfe6531b772cc3696d9aaf283530b9b6ef8b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d3ad3f810ce13466bbd442040a189ec0586ba0459122e7286668abd9fe57c29b->leave($__internal_d3ad3f810ce13466bbd442040a189ec0586ba0459122e7286668abd9fe57c29b_prof);

        
        $__internal_7931949fc1560c9f12cd50ecbbbfe6531b772cc3696d9aaf283530b9b6ef8b2c->leave($__internal_7931949fc1560c9f12cd50ecbbbfe6531b772cc3696d9aaf283530b9b6ef8b2c_prof);

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

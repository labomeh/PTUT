<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2fbcc80903a889934e317688aaa3542d6cbe402c5fabaef50deacacf2f79db7f extends Twig_Template
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
        $__internal_d143e0ba57f48d828f427ccdca8f7863998a8cc42772131cac3a8e4af6031ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d143e0ba57f48d828f427ccdca8f7863998a8cc42772131cac3a8e4af6031ebe->enter($__internal_d143e0ba57f48d828f427ccdca8f7863998a8cc42772131cac3a8e4af6031ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_00cb85eca87eaa385788d91f32be4558f2b7b0c73e998eecd45889cb314d0c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00cb85eca87eaa385788d91f32be4558f2b7b0c73e998eecd45889cb314d0c52->enter($__internal_00cb85eca87eaa385788d91f32be4558f2b7b0c73e998eecd45889cb314d0c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d143e0ba57f48d828f427ccdca8f7863998a8cc42772131cac3a8e4af6031ebe->leave($__internal_d143e0ba57f48d828f427ccdca8f7863998a8cc42772131cac3a8e4af6031ebe_prof);

        
        $__internal_00cb85eca87eaa385788d91f32be4558f2b7b0c73e998eecd45889cb314d0c52->leave($__internal_00cb85eca87eaa385788d91f32be4558f2b7b0c73e998eecd45889cb314d0c52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

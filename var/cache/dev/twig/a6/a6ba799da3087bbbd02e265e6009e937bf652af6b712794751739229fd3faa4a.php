<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1ed83546a1edf4d3ec876e659bb94ef614f3c83aba763ca9e506bac27e40f94 extends Twig_Template
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
        $__internal_f029651b4a7c4db2330bbfe8ee6e8584646593f0470db283d43f8317cb92d54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f029651b4a7c4db2330bbfe8ee6e8584646593f0470db283d43f8317cb92d54b->enter($__internal_f029651b4a7c4db2330bbfe8ee6e8584646593f0470db283d43f8317cb92d54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ea00b94357d2270e24d94ff4fc01dc05d04b75de9cbe2c144a31e19a5e4eb411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea00b94357d2270e24d94ff4fc01dc05d04b75de9cbe2c144a31e19a5e4eb411->enter($__internal_ea00b94357d2270e24d94ff4fc01dc05d04b75de9cbe2c144a31e19a5e4eb411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f029651b4a7c4db2330bbfe8ee6e8584646593f0470db283d43f8317cb92d54b->leave($__internal_f029651b4a7c4db2330bbfe8ee6e8584646593f0470db283d43f8317cb92d54b_prof);

        
        $__internal_ea00b94357d2270e24d94ff4fc01dc05d04b75de9cbe2c144a31e19a5e4eb411->leave($__internal_ea00b94357d2270e24d94ff4fc01dc05d04b75de9cbe2c144a31e19a5e4eb411_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

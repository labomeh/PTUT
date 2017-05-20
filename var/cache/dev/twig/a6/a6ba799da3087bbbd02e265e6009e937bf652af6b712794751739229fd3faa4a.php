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
        $__internal_8dc44b8c39e8d5abd5d54522c24c1a599b51ab1cb5b6e2028fa213ad8281a75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc44b8c39e8d5abd5d54522c24c1a599b51ab1cb5b6e2028fa213ad8281a75e->enter($__internal_8dc44b8c39e8d5abd5d54522c24c1a599b51ab1cb5b6e2028fa213ad8281a75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_da3c1c1516f17fdf9bb32533d4e867a6fc6a488abc3e458f7681e3a88d98bf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3c1c1516f17fdf9bb32533d4e867a6fc6a488abc3e458f7681e3a88d98bf66->enter($__internal_da3c1c1516f17fdf9bb32533d4e867a6fc6a488abc3e458f7681e3a88d98bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8dc44b8c39e8d5abd5d54522c24c1a599b51ab1cb5b6e2028fa213ad8281a75e->leave($__internal_8dc44b8c39e8d5abd5d54522c24c1a599b51ab1cb5b6e2028fa213ad8281a75e_prof);

        
        $__internal_da3c1c1516f17fdf9bb32533d4e867a6fc6a488abc3e458f7681e3a88d98bf66->leave($__internal_da3c1c1516f17fdf9bb32533d4e867a6fc6a488abc3e458f7681e3a88d98bf66_prof);

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

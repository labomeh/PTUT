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
        $__internal_95e78c9e5ec86f084c325d21cd277c62f387b3a165a3c65db8664554f02475e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e78c9e5ec86f084c325d21cd277c62f387b3a165a3c65db8664554f02475e2->enter($__internal_95e78c9e5ec86f084c325d21cd277c62f387b3a165a3c65db8664554f02475e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7754d7a3e064b8fe24a813c03ee52146b5aab8bf860ee9982100e87a4625f3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7754d7a3e064b8fe24a813c03ee52146b5aab8bf860ee9982100e87a4625f3c7->enter($__internal_7754d7a3e064b8fe24a813c03ee52146b5aab8bf860ee9982100e87a4625f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_95e78c9e5ec86f084c325d21cd277c62f387b3a165a3c65db8664554f02475e2->leave($__internal_95e78c9e5ec86f084c325d21cd277c62f387b3a165a3c65db8664554f02475e2_prof);

        
        $__internal_7754d7a3e064b8fe24a813c03ee52146b5aab8bf860ee9982100e87a4625f3c7->leave($__internal_7754d7a3e064b8fe24a813c03ee52146b5aab8bf860ee9982100e87a4625f3c7_prof);

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

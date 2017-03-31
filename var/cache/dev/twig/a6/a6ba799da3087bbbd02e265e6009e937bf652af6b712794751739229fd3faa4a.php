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
        $__internal_2b9b142bcbcf3068e6c3f8e25d38f8d3db180141c71dbe4ec8eafe4325e77c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9b142bcbcf3068e6c3f8e25d38f8d3db180141c71dbe4ec8eafe4325e77c1c->enter($__internal_2b9b142bcbcf3068e6c3f8e25d38f8d3db180141c71dbe4ec8eafe4325e77c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_575bbd6d4ff89004ac9f79fbfdf004d8523bb88e2d04b1520f48f224432e4a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575bbd6d4ff89004ac9f79fbfdf004d8523bb88e2d04b1520f48f224432e4a0f->enter($__internal_575bbd6d4ff89004ac9f79fbfdf004d8523bb88e2d04b1520f48f224432e4a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2b9b142bcbcf3068e6c3f8e25d38f8d3db180141c71dbe4ec8eafe4325e77c1c->leave($__internal_2b9b142bcbcf3068e6c3f8e25d38f8d3db180141c71dbe4ec8eafe4325e77c1c_prof);

        
        $__internal_575bbd6d4ff89004ac9f79fbfdf004d8523bb88e2d04b1520f48f224432e4a0f->leave($__internal_575bbd6d4ff89004ac9f79fbfdf004d8523bb88e2d04b1520f48f224432e4a0f_prof);

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

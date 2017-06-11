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
        $__internal_c1521e5c613d712d7744258ff1c0b78acbbe98961e8dcbe57d59064125894a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1521e5c613d712d7744258ff1c0b78acbbe98961e8dcbe57d59064125894a6b->enter($__internal_c1521e5c613d712d7744258ff1c0b78acbbe98961e8dcbe57d59064125894a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2969ad116e05a0ae21bf65b3e29e337e27c2b1a2aeab00b0d17aa3b030bd3f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2969ad116e05a0ae21bf65b3e29e337e27c2b1a2aeab00b0d17aa3b030bd3f69->enter($__internal_2969ad116e05a0ae21bf65b3e29e337e27c2b1a2aeab00b0d17aa3b030bd3f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c1521e5c613d712d7744258ff1c0b78acbbe98961e8dcbe57d59064125894a6b->leave($__internal_c1521e5c613d712d7744258ff1c0b78acbbe98961e8dcbe57d59064125894a6b_prof);

        
        $__internal_2969ad116e05a0ae21bf65b3e29e337e27c2b1a2aeab00b0d17aa3b030bd3f69->leave($__internal_2969ad116e05a0ae21bf65b3e29e337e27c2b1a2aeab00b0d17aa3b030bd3f69_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

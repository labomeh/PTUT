<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6697662397ccf5a69e149f7d570853bf8a7cffde82417f62bf963bf7e15e69a5 extends Twig_Template
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
        $__internal_73450f2c32a23aea85bf885928d53cd16af2d6eb17ace8b24b79de0615a283ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73450f2c32a23aea85bf885928d53cd16af2d6eb17ace8b24b79de0615a283ae->enter($__internal_73450f2c32a23aea85bf885928d53cd16af2d6eb17ace8b24b79de0615a283ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a1e40ad025efc595e2a47e01f157b576c189a59d06036d06dd2125fc387f0586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e40ad025efc595e2a47e01f157b576c189a59d06036d06dd2125fc387f0586->enter($__internal_a1e40ad025efc595e2a47e01f157b576c189a59d06036d06dd2125fc387f0586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_73450f2c32a23aea85bf885928d53cd16af2d6eb17ace8b24b79de0615a283ae->leave($__internal_73450f2c32a23aea85bf885928d53cd16af2d6eb17ace8b24b79de0615a283ae_prof);

        
        $__internal_a1e40ad025efc595e2a47e01f157b576c189a59d06036d06dd2125fc387f0586->leave($__internal_a1e40ad025efc595e2a47e01f157b576c189a59d06036d06dd2125fc387f0586_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}

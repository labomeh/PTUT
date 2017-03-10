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
        $__internal_9365945e01450eed2de3a49e9844c18ff1e2eae09a4b143c1d3127fe2227972f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9365945e01450eed2de3a49e9844c18ff1e2eae09a4b143c1d3127fe2227972f->enter($__internal_9365945e01450eed2de3a49e9844c18ff1e2eae09a4b143c1d3127fe2227972f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7dc440751d429f9d7ad9a1b271529454c4e74a0b3c3411d0b7e10e9d39593090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc440751d429f9d7ad9a1b271529454c4e74a0b3c3411d0b7e10e9d39593090->enter($__internal_7dc440751d429f9d7ad9a1b271529454c4e74a0b3c3411d0b7e10e9d39593090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9365945e01450eed2de3a49e9844c18ff1e2eae09a4b143c1d3127fe2227972f->leave($__internal_9365945e01450eed2de3a49e9844c18ff1e2eae09a4b143c1d3127fe2227972f_prof);

        
        $__internal_7dc440751d429f9d7ad9a1b271529454c4e74a0b3c3411d0b7e10e9d39593090->leave($__internal_7dc440751d429f9d7ad9a1b271529454c4e74a0b3c3411d0b7e10e9d39593090_prof);

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

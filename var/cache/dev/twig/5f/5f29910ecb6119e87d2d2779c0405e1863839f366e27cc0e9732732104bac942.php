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
        $__internal_129b9bf7c780c1f72b594c925c23b86e1aa5b61e90521a8cc9ad23b21ee0b20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129b9bf7c780c1f72b594c925c23b86e1aa5b61e90521a8cc9ad23b21ee0b20a->enter($__internal_129b9bf7c780c1f72b594c925c23b86e1aa5b61e90521a8cc9ad23b21ee0b20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4d9129d1cbf78e6b36adbc163fc9191f06b1d81ffb4af4706b82c20682077e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9129d1cbf78e6b36adbc163fc9191f06b1d81ffb4af4706b82c20682077e5f->enter($__internal_4d9129d1cbf78e6b36adbc163fc9191f06b1d81ffb4af4706b82c20682077e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_129b9bf7c780c1f72b594c925c23b86e1aa5b61e90521a8cc9ad23b21ee0b20a->leave($__internal_129b9bf7c780c1f72b594c925c23b86e1aa5b61e90521a8cc9ad23b21ee0b20a_prof);

        
        $__internal_4d9129d1cbf78e6b36adbc163fc9191f06b1d81ffb4af4706b82c20682077e5f->leave($__internal_4d9129d1cbf78e6b36adbc163fc9191f06b1d81ffb4af4706b82c20682077e5f_prof);

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

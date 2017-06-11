<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7705f5f16ae20cf321cf838896f6a640eec275c13d7f0c049caaef631ce3e3a7 extends Twig_Template
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
        $__internal_fb7605efdd8c48bb6a6e2b5e91d3a3ecff56316fe560d2747b38dc21bd0673a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7605efdd8c48bb6a6e2b5e91d3a3ecff56316fe560d2747b38dc21bd0673a4->enter($__internal_fb7605efdd8c48bb6a6e2b5e91d3a3ecff56316fe560d2747b38dc21bd0673a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_404f9ddca189be887d833584495a5b006e8e9f91296892e74844afc04bcef23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404f9ddca189be887d833584495a5b006e8e9f91296892e74844afc04bcef23b->enter($__internal_404f9ddca189be887d833584495a5b006e8e9f91296892e74844afc04bcef23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fb7605efdd8c48bb6a6e2b5e91d3a3ecff56316fe560d2747b38dc21bd0673a4->leave($__internal_fb7605efdd8c48bb6a6e2b5e91d3a3ecff56316fe560d2747b38dc21bd0673a4_prof);

        
        $__internal_404f9ddca189be887d833584495a5b006e8e9f91296892e74844afc04bcef23b->leave($__internal_404f9ddca189be887d833584495a5b006e8e9f91296892e74844afc04bcef23b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

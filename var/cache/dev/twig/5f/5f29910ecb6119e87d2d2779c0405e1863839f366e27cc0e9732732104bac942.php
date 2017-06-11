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
        $__internal_641b23cd71aa143f984953208ca8c6ffc81df8f6edbd0232fc8f3d9e5b5c3368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641b23cd71aa143f984953208ca8c6ffc81df8f6edbd0232fc8f3d9e5b5c3368->enter($__internal_641b23cd71aa143f984953208ca8c6ffc81df8f6edbd0232fc8f3d9e5b5c3368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b4b55642d53e33fe2baa75997ebc3da152fdbd31ea6323d6595baffcd1c9d234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b55642d53e33fe2baa75997ebc3da152fdbd31ea6323d6595baffcd1c9d234->enter($__internal_b4b55642d53e33fe2baa75997ebc3da152fdbd31ea6323d6595baffcd1c9d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_641b23cd71aa143f984953208ca8c6ffc81df8f6edbd0232fc8f3d9e5b5c3368->leave($__internal_641b23cd71aa143f984953208ca8c6ffc81df8f6edbd0232fc8f3d9e5b5c3368_prof);

        
        $__internal_b4b55642d53e33fe2baa75997ebc3da152fdbd31ea6323d6595baffcd1c9d234->leave($__internal_b4b55642d53e33fe2baa75997ebc3da152fdbd31ea6323d6595baffcd1c9d234_prof);

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
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c6b29fdb34b2ae741a02c62ef09a0660ef07dc2dc26ca52bccb62100c7d7df5b extends Twig_Template
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
        $__internal_fb6b0c03d303bc32f00f7291c45ced11967e48229e682d81a3250ac374bac813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6b0c03d303bc32f00f7291c45ced11967e48229e682d81a3250ac374bac813->enter($__internal_fb6b0c03d303bc32f00f7291c45ced11967e48229e682d81a3250ac374bac813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_da9ca0f94f4d012f1fb590b8189edbceab25ccd0fa18caf626aaf9a8ce91adad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9ca0f94f4d012f1fb590b8189edbceab25ccd0fa18caf626aaf9a8ce91adad->enter($__internal_da9ca0f94f4d012f1fb590b8189edbceab25ccd0fa18caf626aaf9a8ce91adad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fb6b0c03d303bc32f00f7291c45ced11967e48229e682d81a3250ac374bac813->leave($__internal_fb6b0c03d303bc32f00f7291c45ced11967e48229e682d81a3250ac374bac813_prof);

        
        $__internal_da9ca0f94f4d012f1fb590b8189edbceab25ccd0fa18caf626aaf9a8ce91adad->leave($__internal_da9ca0f94f4d012f1fb590b8189edbceab25ccd0fa18caf626aaf9a8ce91adad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

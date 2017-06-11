<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_415876f28c6976afeeafd4d95df761ed734111edaf97d99dc57201d43754a38c extends Twig_Template
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
        $__internal_0a792b597407a836e61f5d09aeca5e105ffb5c9dedbee640dd54bb9b90a805e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a792b597407a836e61f5d09aeca5e105ffb5c9dedbee640dd54bb9b90a805e7->enter($__internal_0a792b597407a836e61f5d09aeca5e105ffb5c9dedbee640dd54bb9b90a805e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_70692937a8257160309e95b08639c1467e83979d010360c4e53fe31c6e60c03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70692937a8257160309e95b08639c1467e83979d010360c4e53fe31c6e60c03f->enter($__internal_70692937a8257160309e95b08639c1467e83979d010360c4e53fe31c6e60c03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a792b597407a836e61f5d09aeca5e105ffb5c9dedbee640dd54bb9b90a805e7->leave($__internal_0a792b597407a836e61f5d09aeca5e105ffb5c9dedbee640dd54bb9b90a805e7_prof);

        
        $__internal_70692937a8257160309e95b08639c1467e83979d010360c4e53fe31c6e60c03f->leave($__internal_70692937a8257160309e95b08639c1467e83979d010360c4e53fe31c6e60c03f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

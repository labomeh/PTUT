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
        $__internal_9a9ad1337f30aaacc2e6ee3649334ba148b9bd6968ff1221240c4bec9e1af89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9ad1337f30aaacc2e6ee3649334ba148b9bd6968ff1221240c4bec9e1af89f->enter($__internal_9a9ad1337f30aaacc2e6ee3649334ba148b9bd6968ff1221240c4bec9e1af89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ac135e1842a754deafeafd5463699deec6f33a33fe41e0b230b11ac95ca125f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac135e1842a754deafeafd5463699deec6f33a33fe41e0b230b11ac95ca125f9->enter($__internal_ac135e1842a754deafeafd5463699deec6f33a33fe41e0b230b11ac95ca125f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9a9ad1337f30aaacc2e6ee3649334ba148b9bd6968ff1221240c4bec9e1af89f->leave($__internal_9a9ad1337f30aaacc2e6ee3649334ba148b9bd6968ff1221240c4bec9e1af89f_prof);

        
        $__internal_ac135e1842a754deafeafd5463699deec6f33a33fe41e0b230b11ac95ca125f9->leave($__internal_ac135e1842a754deafeafd5463699deec6f33a33fe41e0b230b11ac95ca125f9_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

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
        $__internal_85d9a4a7106c92ee9700a33280280bc21d8acb04413fcd34abb56a7ba8c0cbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d9a4a7106c92ee9700a33280280bc21d8acb04413fcd34abb56a7ba8c0cbab->enter($__internal_85d9a4a7106c92ee9700a33280280bc21d8acb04413fcd34abb56a7ba8c0cbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6a9f29e60ac9775b695ba1a9ff19457b3a90c2632a303d554908f9b7c0fa43c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9f29e60ac9775b695ba1a9ff19457b3a90c2632a303d554908f9b7c0fa43c0->enter($__internal_6a9f29e60ac9775b695ba1a9ff19457b3a90c2632a303d554908f9b7c0fa43c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_85d9a4a7106c92ee9700a33280280bc21d8acb04413fcd34abb56a7ba8c0cbab->leave($__internal_85d9a4a7106c92ee9700a33280280bc21d8acb04413fcd34abb56a7ba8c0cbab_prof);

        
        $__internal_6a9f29e60ac9775b695ba1a9ff19457b3a90c2632a303d554908f9b7c0fa43c0->leave($__internal_6a9f29e60ac9775b695ba1a9ff19457b3a90c2632a303d554908f9b7c0fa43c0_prof);

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

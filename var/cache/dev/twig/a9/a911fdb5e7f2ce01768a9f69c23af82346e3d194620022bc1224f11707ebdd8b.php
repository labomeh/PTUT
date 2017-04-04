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
        $__internal_ccb88cca79aa1be26263e45731db728487ae4ca046b5c6f965069a1c70f8019c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb88cca79aa1be26263e45731db728487ae4ca046b5c6f965069a1c70f8019c->enter($__internal_ccb88cca79aa1be26263e45731db728487ae4ca046b5c6f965069a1c70f8019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_36d26409e785302e8d15719dd93313a802ea14fdca4c67eb53c659330515ba5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d26409e785302e8d15719dd93313a802ea14fdca4c67eb53c659330515ba5d->enter($__internal_36d26409e785302e8d15719dd93313a802ea14fdca4c67eb53c659330515ba5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ccb88cca79aa1be26263e45731db728487ae4ca046b5c6f965069a1c70f8019c->leave($__internal_ccb88cca79aa1be26263e45731db728487ae4ca046b5c6f965069a1c70f8019c_prof);

        
        $__internal_36d26409e785302e8d15719dd93313a802ea14fdca4c67eb53c659330515ba5d->leave($__internal_36d26409e785302e8d15719dd93313a802ea14fdca4c67eb53c659330515ba5d_prof);

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

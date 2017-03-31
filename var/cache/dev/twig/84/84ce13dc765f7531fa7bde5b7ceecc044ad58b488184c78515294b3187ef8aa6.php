<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_899395eb8f93ff7f2bbf1989f52b4496c16e1665d2242bcf11bf7a06ecbaa275 extends Twig_Template
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
        $__internal_698941e106687456f92a5c1eee068815e5445b58d21bb8739ae0a479de1c19c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698941e106687456f92a5c1eee068815e5445b58d21bb8739ae0a479de1c19c0->enter($__internal_698941e106687456f92a5c1eee068815e5445b58d21bb8739ae0a479de1c19c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3791e23f8b6a6e7483bb9122ab118826d3b5778165d546530f1ec87978caa15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3791e23f8b6a6e7483bb9122ab118826d3b5778165d546530f1ec87978caa15b->enter($__internal_3791e23f8b6a6e7483bb9122ab118826d3b5778165d546530f1ec87978caa15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_698941e106687456f92a5c1eee068815e5445b58d21bb8739ae0a479de1c19c0->leave($__internal_698941e106687456f92a5c1eee068815e5445b58d21bb8739ae0a479de1c19c0_prof);

        
        $__internal_3791e23f8b6a6e7483bb9122ab118826d3b5778165d546530f1ec87978caa15b->leave($__internal_3791e23f8b6a6e7483bb9122ab118826d3b5778165d546530f1ec87978caa15b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

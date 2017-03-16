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
        $__internal_ef9867384a751fa1a895f3d1f3bb8b59642cbac1ebdebda47e50827d142c0b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9867384a751fa1a895f3d1f3bb8b59642cbac1ebdebda47e50827d142c0b14->enter($__internal_ef9867384a751fa1a895f3d1f3bb8b59642cbac1ebdebda47e50827d142c0b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ff388b7e88db1b09116334c58e7d2d09b8971effb8c96f5d37c57763f8f0e085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff388b7e88db1b09116334c58e7d2d09b8971effb8c96f5d37c57763f8f0e085->enter($__internal_ff388b7e88db1b09116334c58e7d2d09b8971effb8c96f5d37c57763f8f0e085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ef9867384a751fa1a895f3d1f3bb8b59642cbac1ebdebda47e50827d142c0b14->leave($__internal_ef9867384a751fa1a895f3d1f3bb8b59642cbac1ebdebda47e50827d142c0b14_prof);

        
        $__internal_ff388b7e88db1b09116334c58e7d2d09b8971effb8c96f5d37c57763f8f0e085->leave($__internal_ff388b7e88db1b09116334c58e7d2d09b8971effb8c96f5d37c57763f8f0e085_prof);

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
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

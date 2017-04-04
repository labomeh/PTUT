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
        $__internal_61bfebde663029187794bf81149e231c4ded9117dbf9dcf2b72163d70c3d6798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bfebde663029187794bf81149e231c4ded9117dbf9dcf2b72163d70c3d6798->enter($__internal_61bfebde663029187794bf81149e231c4ded9117dbf9dcf2b72163d70c3d6798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e7db2270eff3e38c47b77bd863e3dcc8e116ab1f62866b48a28339cb504a5c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db2270eff3e38c47b77bd863e3dcc8e116ab1f62866b48a28339cb504a5c50->enter($__internal_e7db2270eff3e38c47b77bd863e3dcc8e116ab1f62866b48a28339cb504a5c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_61bfebde663029187794bf81149e231c4ded9117dbf9dcf2b72163d70c3d6798->leave($__internal_61bfebde663029187794bf81149e231c4ded9117dbf9dcf2b72163d70c3d6798_prof);

        
        $__internal_e7db2270eff3e38c47b77bd863e3dcc8e116ab1f62866b48a28339cb504a5c50->leave($__internal_e7db2270eff3e38c47b77bd863e3dcc8e116ab1f62866b48a28339cb504a5c50_prof);

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

<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f52e31fbf87ff51ac6b3b3a5d70a0d2149ae3b1926e6e441cd6d6335239c6f2e extends Twig_Template
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
        $__internal_6be707896ac89daac07907dfd0e63ec16bd1a16da2c6a5fe1bd6ed1c076476a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be707896ac89daac07907dfd0e63ec16bd1a16da2c6a5fe1bd6ed1c076476a3->enter($__internal_6be707896ac89daac07907dfd0e63ec16bd1a16da2c6a5fe1bd6ed1c076476a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d32db522619b03ec32fe4c3ad4beff69c538011adb210e844aa8d3b784bbb386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32db522619b03ec32fe4c3ad4beff69c538011adb210e844aa8d3b784bbb386->enter($__internal_d32db522619b03ec32fe4c3ad4beff69c538011adb210e844aa8d3b784bbb386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6be707896ac89daac07907dfd0e63ec16bd1a16da2c6a5fe1bd6ed1c076476a3->leave($__internal_6be707896ac89daac07907dfd0e63ec16bd1a16da2c6a5fe1bd6ed1c076476a3_prof);

        
        $__internal_d32db522619b03ec32fe4c3ad4beff69c538011adb210e844aa8d3b784bbb386->leave($__internal_d32db522619b03ec32fe4c3ad4beff69c538011adb210e844aa8d3b784bbb386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

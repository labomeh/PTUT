<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c4bd20018e0fbad59f3b7de5d1f00ccec1b0d56d952fd169bf466198bb251fef extends Twig_Template
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
        $__internal_6b1d2cdc3f98754e47850dc5ba75dd2a7d694133aafc5e16575c9bdf18e42ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1d2cdc3f98754e47850dc5ba75dd2a7d694133aafc5e16575c9bdf18e42ba3->enter($__internal_6b1d2cdc3f98754e47850dc5ba75dd2a7d694133aafc5e16575c9bdf18e42ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_693b4beb53a236a140f05e4029000a250d7bb3e7b0aea188bf94ded2ba722cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693b4beb53a236a140f05e4029000a250d7bb3e7b0aea188bf94ded2ba722cd8->enter($__internal_693b4beb53a236a140f05e4029000a250d7bb3e7b0aea188bf94ded2ba722cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6b1d2cdc3f98754e47850dc5ba75dd2a7d694133aafc5e16575c9bdf18e42ba3->leave($__internal_6b1d2cdc3f98754e47850dc5ba75dd2a7d694133aafc5e16575c9bdf18e42ba3_prof);

        
        $__internal_693b4beb53a236a140f05e4029000a250d7bb3e7b0aea188bf94ded2ba722cd8->leave($__internal_693b4beb53a236a140f05e4029000a250d7bb3e7b0aea188bf94ded2ba722cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

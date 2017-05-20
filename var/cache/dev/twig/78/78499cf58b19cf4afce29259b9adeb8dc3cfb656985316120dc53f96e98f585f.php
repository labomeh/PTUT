<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_428209b38e4363e5b102d89c36090f38f9640e341ac9625ef89b69d457080953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428209b38e4363e5b102d89c36090f38f9640e341ac9625ef89b69d457080953->enter($__internal_428209b38e4363e5b102d89c36090f38f9640e341ac9625ef89b69d457080953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9d286d665d0c823321c38e258a5fc2c3c9abd48829b8f8e80673435aa4a30205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d286d665d0c823321c38e258a5fc2c3c9abd48829b8f8e80673435aa4a30205->enter($__internal_9d286d665d0c823321c38e258a5fc2c3c9abd48829b8f8e80673435aa4a30205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_428209b38e4363e5b102d89c36090f38f9640e341ac9625ef89b69d457080953->leave($__internal_428209b38e4363e5b102d89c36090f38f9640e341ac9625ef89b69d457080953_prof);

        
        $__internal_9d286d665d0c823321c38e258a5fc2c3c9abd48829b8f8e80673435aa4a30205->leave($__internal_9d286d665d0c823321c38e258a5fc2c3c9abd48829b8f8e80673435aa4a30205_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

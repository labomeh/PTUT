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
        $__internal_7c46ce5d1910748b4d7591b4bba82aef8e2dffe9b4b9c58d368e2abc50f88c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c46ce5d1910748b4d7591b4bba82aef8e2dffe9b4b9c58d368e2abc50f88c0f->enter($__internal_7c46ce5d1910748b4d7591b4bba82aef8e2dffe9b4b9c58d368e2abc50f88c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3a34818284baee2e7765d8f511d64cf84fc69ccd7ea0311b07b5d5464a756b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a34818284baee2e7765d8f511d64cf84fc69ccd7ea0311b07b5d5464a756b2e->enter($__internal_3a34818284baee2e7765d8f511d64cf84fc69ccd7ea0311b07b5d5464a756b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7c46ce5d1910748b4d7591b4bba82aef8e2dffe9b4b9c58d368e2abc50f88c0f->leave($__internal_7c46ce5d1910748b4d7591b4bba82aef8e2dffe9b4b9c58d368e2abc50f88c0f_prof);

        
        $__internal_3a34818284baee2e7765d8f511d64cf84fc69ccd7ea0311b07b5d5464a756b2e->leave($__internal_3a34818284baee2e7765d8f511d64cf84fc69ccd7ea0311b07b5d5464a756b2e_prof);

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

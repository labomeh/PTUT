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
        $__internal_d6050ab40376932622a20311b5e5f7a7f531679cec29e76bb9cedc50b3102501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6050ab40376932622a20311b5e5f7a7f531679cec29e76bb9cedc50b3102501->enter($__internal_d6050ab40376932622a20311b5e5f7a7f531679cec29e76bb9cedc50b3102501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_217ee3d3873a9694cab1f68ed70b8ac04ee2c7f5b0c9cdd2dbc150d81ef4a3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217ee3d3873a9694cab1f68ed70b8ac04ee2c7f5b0c9cdd2dbc150d81ef4a3ec->enter($__internal_217ee3d3873a9694cab1f68ed70b8ac04ee2c7f5b0c9cdd2dbc150d81ef4a3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d6050ab40376932622a20311b5e5f7a7f531679cec29e76bb9cedc50b3102501->leave($__internal_d6050ab40376932622a20311b5e5f7a7f531679cec29e76bb9cedc50b3102501_prof);

        
        $__internal_217ee3d3873a9694cab1f68ed70b8ac04ee2c7f5b0c9cdd2dbc150d81ef4a3ec->leave($__internal_217ee3d3873a9694cab1f68ed70b8ac04ee2c7f5b0c9cdd2dbc150d81ef4a3ec_prof);

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

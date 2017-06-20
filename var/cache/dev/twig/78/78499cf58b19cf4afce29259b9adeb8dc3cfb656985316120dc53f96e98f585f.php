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
        $__internal_28fe2d736086af0236d29798227775ccfc7e0af06b28569b275203832c45abb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fe2d736086af0236d29798227775ccfc7e0af06b28569b275203832c45abb5->enter($__internal_28fe2d736086af0236d29798227775ccfc7e0af06b28569b275203832c45abb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_089acac9efaf1039e70cf2df7657e7c76bf0418125d3dc6720c8d88dff95334f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089acac9efaf1039e70cf2df7657e7c76bf0418125d3dc6720c8d88dff95334f->enter($__internal_089acac9efaf1039e70cf2df7657e7c76bf0418125d3dc6720c8d88dff95334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_28fe2d736086af0236d29798227775ccfc7e0af06b28569b275203832c45abb5->leave($__internal_28fe2d736086af0236d29798227775ccfc7e0af06b28569b275203832c45abb5_prof);

        
        $__internal_089acac9efaf1039e70cf2df7657e7c76bf0418125d3dc6720c8d88dff95334f->leave($__internal_089acac9efaf1039e70cf2df7657e7c76bf0418125d3dc6720c8d88dff95334f_prof);

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
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

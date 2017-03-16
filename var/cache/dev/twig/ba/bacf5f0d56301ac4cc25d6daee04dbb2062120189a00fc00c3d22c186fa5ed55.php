<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f36809a933f07499a17a19595c53b10aa963ae08aa007722828a211328d0e041 extends Twig_Template
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
        $__internal_5cfe4f694559fc00e3a62037b07be6bac55ecd291608d1528f37bb8d7552cb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfe4f694559fc00e3a62037b07be6bac55ecd291608d1528f37bb8d7552cb7e->enter($__internal_5cfe4f694559fc00e3a62037b07be6bac55ecd291608d1528f37bb8d7552cb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_754ef83b446053ba29ec497304ac6cdaa61cacc2ecbab50f61395a9193cde0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754ef83b446053ba29ec497304ac6cdaa61cacc2ecbab50f61395a9193cde0c3->enter($__internal_754ef83b446053ba29ec497304ac6cdaa61cacc2ecbab50f61395a9193cde0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5cfe4f694559fc00e3a62037b07be6bac55ecd291608d1528f37bb8d7552cb7e->leave($__internal_5cfe4f694559fc00e3a62037b07be6bac55ecd291608d1528f37bb8d7552cb7e_prof);

        
        $__internal_754ef83b446053ba29ec497304ac6cdaa61cacc2ecbab50f61395a9193cde0c3->leave($__internal_754ef83b446053ba29ec497304ac6cdaa61cacc2ecbab50f61395a9193cde0c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

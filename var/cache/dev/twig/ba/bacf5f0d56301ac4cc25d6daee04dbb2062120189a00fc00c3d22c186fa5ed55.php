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
        $__internal_b0242913f5f1e03b61ecb3b2884da762dbd2fc1465521a7ca4e74d72435ce804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0242913f5f1e03b61ecb3b2884da762dbd2fc1465521a7ca4e74d72435ce804->enter($__internal_b0242913f5f1e03b61ecb3b2884da762dbd2fc1465521a7ca4e74d72435ce804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2492c85bdb258310e16b6e70786c845c145fbb6903950464e9caabcfcf47c42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2492c85bdb258310e16b6e70786c845c145fbb6903950464e9caabcfcf47c42b->enter($__internal_2492c85bdb258310e16b6e70786c845c145fbb6903950464e9caabcfcf47c42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b0242913f5f1e03b61ecb3b2884da762dbd2fc1465521a7ca4e74d72435ce804->leave($__internal_b0242913f5f1e03b61ecb3b2884da762dbd2fc1465521a7ca4e74d72435ce804_prof);

        
        $__internal_2492c85bdb258310e16b6e70786c845c145fbb6903950464e9caabcfcf47c42b->leave($__internal_2492c85bdb258310e16b6e70786c845c145fbb6903950464e9caabcfcf47c42b_prof);

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

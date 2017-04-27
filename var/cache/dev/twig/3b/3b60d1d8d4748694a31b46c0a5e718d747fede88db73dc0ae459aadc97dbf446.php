<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd6bde29c12e4a2fad6dc1d6352473d5a801a0fc30fd61fb769919c8608a3c95 extends Twig_Template
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
        $__internal_ddfe16be663ea59d493f4e99bc481eac187ec1abb8eca6dfdd02be607b2c7a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfe16be663ea59d493f4e99bc481eac187ec1abb8eca6dfdd02be607b2c7a85->enter($__internal_ddfe16be663ea59d493f4e99bc481eac187ec1abb8eca6dfdd02be607b2c7a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c7e8369ba99e4e1368468a7e8bafef9b9f0984fe34c7d30fd6cab7d28d7929f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e8369ba99e4e1368468a7e8bafef9b9f0984fe34c7d30fd6cab7d28d7929f9->enter($__internal_c7e8369ba99e4e1368468a7e8bafef9b9f0984fe34c7d30fd6cab7d28d7929f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ddfe16be663ea59d493f4e99bc481eac187ec1abb8eca6dfdd02be607b2c7a85->leave($__internal_ddfe16be663ea59d493f4e99bc481eac187ec1abb8eca6dfdd02be607b2c7a85_prof);

        
        $__internal_c7e8369ba99e4e1368468a7e8bafef9b9f0984fe34c7d30fd6cab7d28d7929f9->leave($__internal_c7e8369ba99e4e1368468a7e8bafef9b9f0984fe34c7d30fd6cab7d28d7929f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

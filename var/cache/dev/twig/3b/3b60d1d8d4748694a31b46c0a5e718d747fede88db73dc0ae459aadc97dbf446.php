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
        $__internal_14d362bdc1bc1fbd356e3e7f5f8d2086ffef0612c0d75e942f43af087e89adc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d362bdc1bc1fbd356e3e7f5f8d2086ffef0612c0d75e942f43af087e89adc0->enter($__internal_14d362bdc1bc1fbd356e3e7f5f8d2086ffef0612c0d75e942f43af087e89adc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8ba11c24653c7d7f52109a984f738c6b81f2544308b86b0194492aed79e8b8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba11c24653c7d7f52109a984f738c6b81f2544308b86b0194492aed79e8b8a7->enter($__internal_8ba11c24653c7d7f52109a984f738c6b81f2544308b86b0194492aed79e8b8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_14d362bdc1bc1fbd356e3e7f5f8d2086ffef0612c0d75e942f43af087e89adc0->leave($__internal_14d362bdc1bc1fbd356e3e7f5f8d2086ffef0612c0d75e942f43af087e89adc0_prof);

        
        $__internal_8ba11c24653c7d7f52109a984f738c6b81f2544308b86b0194492aed79e8b8a7->leave($__internal_8ba11c24653c7d7f52109a984f738c6b81f2544308b86b0194492aed79e8b8a7_prof);

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

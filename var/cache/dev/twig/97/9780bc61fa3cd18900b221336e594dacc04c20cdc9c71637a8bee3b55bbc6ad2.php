<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_ae8608b43d0b75cb16d5f6182955f73fb759eede7a74556e8cb0020ff7b5fa25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8608b43d0b75cb16d5f6182955f73fb759eede7a74556e8cb0020ff7b5fa25->enter($__internal_ae8608b43d0b75cb16d5f6182955f73fb759eede7a74556e8cb0020ff7b5fa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b4a3fdd0167f7779c7866ee47687e0f9957e0697fdec6454223185d26a631a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a3fdd0167f7779c7866ee47687e0f9957e0697fdec6454223185d26a631a13->enter($__internal_b4a3fdd0167f7779c7866ee47687e0f9957e0697fdec6454223185d26a631a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ae8608b43d0b75cb16d5f6182955f73fb759eede7a74556e8cb0020ff7b5fa25->leave($__internal_ae8608b43d0b75cb16d5f6182955f73fb759eede7a74556e8cb0020ff7b5fa25_prof);

        
        $__internal_b4a3fdd0167f7779c7866ee47687e0f9957e0697fdec6454223185d26a631a13->leave($__internal_b4a3fdd0167f7779c7866ee47687e0f9957e0697fdec6454223185d26a631a13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

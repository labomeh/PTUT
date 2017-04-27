<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0b2e340029cc87b1c12b1220a336951822d49ce04d09d92fdb3a875c8bbc0834 extends Twig_Template
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
        $__internal_a360ca0622f89f26698ba3e0583ec9b6087101e4a284bcd94b7626981f5ce555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a360ca0622f89f26698ba3e0583ec9b6087101e4a284bcd94b7626981f5ce555->enter($__internal_a360ca0622f89f26698ba3e0583ec9b6087101e4a284bcd94b7626981f5ce555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_dd6c5c10204ddfa1de9b28f273b422c0f4d2d0e0c658799b255a0a697c73ecd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6c5c10204ddfa1de9b28f273b422c0f4d2d0e0c658799b255a0a697c73ecd9->enter($__internal_dd6c5c10204ddfa1de9b28f273b422c0f4d2d0e0c658799b255a0a697c73ecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a360ca0622f89f26698ba3e0583ec9b6087101e4a284bcd94b7626981f5ce555->leave($__internal_a360ca0622f89f26698ba3e0583ec9b6087101e4a284bcd94b7626981f5ce555_prof);

        
        $__internal_dd6c5c10204ddfa1de9b28f273b422c0f4d2d0e0c658799b255a0a697c73ecd9->leave($__internal_dd6c5c10204ddfa1de9b28f273b422c0f4d2d0e0c658799b255a0a697c73ecd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

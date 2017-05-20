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
        $__internal_dc4e5c1d5660501b639d89bb71cab36a19d117bba377b01efc233775bd8320da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4e5c1d5660501b639d89bb71cab36a19d117bba377b01efc233775bd8320da->enter($__internal_dc4e5c1d5660501b639d89bb71cab36a19d117bba377b01efc233775bd8320da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_892685528493393958458f6a00b79ad955ca70c83c1c7bf5918955abc2eb7a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892685528493393958458f6a00b79ad955ca70c83c1c7bf5918955abc2eb7a79->enter($__internal_892685528493393958458f6a00b79ad955ca70c83c1c7bf5918955abc2eb7a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_dc4e5c1d5660501b639d89bb71cab36a19d117bba377b01efc233775bd8320da->leave($__internal_dc4e5c1d5660501b639d89bb71cab36a19d117bba377b01efc233775bd8320da_prof);

        
        $__internal_892685528493393958458f6a00b79ad955ca70c83c1c7bf5918955abc2eb7a79->leave($__internal_892685528493393958458f6a00b79ad955ca70c83c1c7bf5918955abc2eb7a79_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

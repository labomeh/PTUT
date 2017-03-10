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
        $__internal_696421413278b5f6a18c5fd6a3a5642e282b83b86eef583abdc066ba34930902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696421413278b5f6a18c5fd6a3a5642e282b83b86eef583abdc066ba34930902->enter($__internal_696421413278b5f6a18c5fd6a3a5642e282b83b86eef583abdc066ba34930902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1de3618247160b62ef5ffef8572c8a7bf2816865bc581006400d6dc8d9f8fe46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de3618247160b62ef5ffef8572c8a7bf2816865bc581006400d6dc8d9f8fe46->enter($__internal_1de3618247160b62ef5ffef8572c8a7bf2816865bc581006400d6dc8d9f8fe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_696421413278b5f6a18c5fd6a3a5642e282b83b86eef583abdc066ba34930902->leave($__internal_696421413278b5f6a18c5fd6a3a5642e282b83b86eef583abdc066ba34930902_prof);

        
        $__internal_1de3618247160b62ef5ffef8572c8a7bf2816865bc581006400d6dc8d9f8fe46->leave($__internal_1de3618247160b62ef5ffef8572c8a7bf2816865bc581006400d6dc8d9f8fe46_prof);

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

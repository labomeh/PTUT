<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_1cdcdef632eaf383293195e53ebf9a02130e53a45da164dc86422b688195d4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdcdef632eaf383293195e53ebf9a02130e53a45da164dc86422b688195d4b7->enter($__internal_1cdcdef632eaf383293195e53ebf9a02130e53a45da164dc86422b688195d4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d73c65ea7bc9b4fd1a845347b7e95115ae5cd535ea5b86b0b60f186c8970107b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73c65ea7bc9b4fd1a845347b7e95115ae5cd535ea5b86b0b60f186c8970107b->enter($__internal_d73c65ea7bc9b4fd1a845347b7e95115ae5cd535ea5b86b0b60f186c8970107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1cdcdef632eaf383293195e53ebf9a02130e53a45da164dc86422b688195d4b7->leave($__internal_1cdcdef632eaf383293195e53ebf9a02130e53a45da164dc86422b688195d4b7_prof);

        
        $__internal_d73c65ea7bc9b4fd1a845347b7e95115ae5cd535ea5b86b0b60f186c8970107b->leave($__internal_d73c65ea7bc9b4fd1a845347b7e95115ae5cd535ea5b86b0b60f186c8970107b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

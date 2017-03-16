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
        $__internal_9b21614ccc54e628ee6c6df61846dc31e062822294e0e0f0cacfb28eba07ef6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b21614ccc54e628ee6c6df61846dc31e062822294e0e0f0cacfb28eba07ef6b->enter($__internal_9b21614ccc54e628ee6c6df61846dc31e062822294e0e0f0cacfb28eba07ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6896607d279c02d7909d9f5702ec02023f142cc39b699a8c536ef5e7280558f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6896607d279c02d7909d9f5702ec02023f142cc39b699a8c536ef5e7280558f2->enter($__internal_6896607d279c02d7909d9f5702ec02023f142cc39b699a8c536ef5e7280558f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9b21614ccc54e628ee6c6df61846dc31e062822294e0e0f0cacfb28eba07ef6b->leave($__internal_9b21614ccc54e628ee6c6df61846dc31e062822294e0e0f0cacfb28eba07ef6b_prof);

        
        $__internal_6896607d279c02d7909d9f5702ec02023f142cc39b699a8c536ef5e7280558f2->leave($__internal_6896607d279c02d7909d9f5702ec02023f142cc39b699a8c536ef5e7280558f2_prof);

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
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

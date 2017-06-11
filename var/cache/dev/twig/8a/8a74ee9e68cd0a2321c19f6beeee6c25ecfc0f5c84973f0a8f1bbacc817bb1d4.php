<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c4bd20018e0fbad59f3b7de5d1f00ccec1b0d56d952fd169bf466198bb251fef extends Twig_Template
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
        $__internal_b3a74ff4d21acb3e75ef7f137ff63fe2b95df87a68b80c3a7e0e5a3271f6e562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a74ff4d21acb3e75ef7f137ff63fe2b95df87a68b80c3a7e0e5a3271f6e562->enter($__internal_b3a74ff4d21acb3e75ef7f137ff63fe2b95df87a68b80c3a7e0e5a3271f6e562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_287f67aadf611cce4b78e077686c96bb8741f2c479f20d9416035956675df4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287f67aadf611cce4b78e077686c96bb8741f2c479f20d9416035956675df4f7->enter($__internal_287f67aadf611cce4b78e077686c96bb8741f2c479f20d9416035956675df4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b3a74ff4d21acb3e75ef7f137ff63fe2b95df87a68b80c3a7e0e5a3271f6e562->leave($__internal_b3a74ff4d21acb3e75ef7f137ff63fe2b95df87a68b80c3a7e0e5a3271f6e562_prof);

        
        $__internal_287f67aadf611cce4b78e077686c96bb8741f2c479f20d9416035956675df4f7->leave($__internal_287f67aadf611cce4b78e077686c96bb8741f2c479f20d9416035956675df4f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

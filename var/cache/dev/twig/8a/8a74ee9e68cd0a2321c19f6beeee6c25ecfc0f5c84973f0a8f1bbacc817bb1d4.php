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
        $__internal_d0212437b25c25f09dd193f392ebf5bffe3b050fd0b807fa358848ec627706a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0212437b25c25f09dd193f392ebf5bffe3b050fd0b807fa358848ec627706a2->enter($__internal_d0212437b25c25f09dd193f392ebf5bffe3b050fd0b807fa358848ec627706a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9e695880a6e68e88ae1b8f919f2079d98be558fda15725c6b5100f829fbc1dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e695880a6e68e88ae1b8f919f2079d98be558fda15725c6b5100f829fbc1dbb->enter($__internal_9e695880a6e68e88ae1b8f919f2079d98be558fda15725c6b5100f829fbc1dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d0212437b25c25f09dd193f392ebf5bffe3b050fd0b807fa358848ec627706a2->leave($__internal_d0212437b25c25f09dd193f392ebf5bffe3b050fd0b807fa358848ec627706a2_prof);

        
        $__internal_9e695880a6e68e88ae1b8f919f2079d98be558fda15725c6b5100f829fbc1dbb->leave($__internal_9e695880a6e68e88ae1b8f919f2079d98be558fda15725c6b5100f829fbc1dbb_prof);

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
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

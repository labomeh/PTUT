<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_739da95cb7243c55bb5700a0789afe60c231595ac5e49ca421abbcdc3a0cd681 extends Twig_Template
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
        $__internal_b6b3eb0ffc089f9f9875d9ad305cd0cb018fd9712d5defa970ab51e30ce5d985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b3eb0ffc089f9f9875d9ad305cd0cb018fd9712d5defa970ab51e30ce5d985->enter($__internal_b6b3eb0ffc089f9f9875d9ad305cd0cb018fd9712d5defa970ab51e30ce5d985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d5d1bbb5a30fe4ad8b921fcb009af6fc6ce7e0fb1a6e94d7ccc2cd247fb2169d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d1bbb5a30fe4ad8b921fcb009af6fc6ce7e0fb1a6e94d7ccc2cd247fb2169d->enter($__internal_d5d1bbb5a30fe4ad8b921fcb009af6fc6ce7e0fb1a6e94d7ccc2cd247fb2169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b6b3eb0ffc089f9f9875d9ad305cd0cb018fd9712d5defa970ab51e30ce5d985->leave($__internal_b6b3eb0ffc089f9f9875d9ad305cd0cb018fd9712d5defa970ab51e30ce5d985_prof);

        
        $__internal_d5d1bbb5a30fe4ad8b921fcb009af6fc6ce7e0fb1a6e94d7ccc2cd247fb2169d->leave($__internal_d5d1bbb5a30fe4ad8b921fcb009af6fc6ce7e0fb1a6e94d7ccc2cd247fb2169d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

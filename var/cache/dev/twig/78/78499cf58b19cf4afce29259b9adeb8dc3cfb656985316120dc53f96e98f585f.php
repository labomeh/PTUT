<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_cc66790b54bb66b0da98ac1a93db77c17df3eba571b7119e5651375b8987e649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc66790b54bb66b0da98ac1a93db77c17df3eba571b7119e5651375b8987e649->enter($__internal_cc66790b54bb66b0da98ac1a93db77c17df3eba571b7119e5651375b8987e649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_94ff6fe26db3f6f485696ccf5770b8dd19ba7301ced594c9c448b1a23e04a03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ff6fe26db3f6f485696ccf5770b8dd19ba7301ced594c9c448b1a23e04a03b->enter($__internal_94ff6fe26db3f6f485696ccf5770b8dd19ba7301ced594c9c448b1a23e04a03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cc66790b54bb66b0da98ac1a93db77c17df3eba571b7119e5651375b8987e649->leave($__internal_cc66790b54bb66b0da98ac1a93db77c17df3eba571b7119e5651375b8987e649_prof);

        
        $__internal_94ff6fe26db3f6f485696ccf5770b8dd19ba7301ced594c9c448b1a23e04a03b->leave($__internal_94ff6fe26db3f6f485696ccf5770b8dd19ba7301ced594c9c448b1a23e04a03b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

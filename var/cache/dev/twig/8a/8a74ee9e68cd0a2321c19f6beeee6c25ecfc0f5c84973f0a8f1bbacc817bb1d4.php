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
        $__internal_eda755db1c3107f1a2ffb16e1c55bbcec935be688bdbe6ade8e713c9153aa6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda755db1c3107f1a2ffb16e1c55bbcec935be688bdbe6ade8e713c9153aa6ee->enter($__internal_eda755db1c3107f1a2ffb16e1c55bbcec935be688bdbe6ade8e713c9153aa6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_61b2a060be56cf0baa54578c186822e6f5413c2ae5de766895487fc4b2ed760d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b2a060be56cf0baa54578c186822e6f5413c2ae5de766895487fc4b2ed760d->enter($__internal_61b2a060be56cf0baa54578c186822e6f5413c2ae5de766895487fc4b2ed760d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_eda755db1c3107f1a2ffb16e1c55bbcec935be688bdbe6ade8e713c9153aa6ee->leave($__internal_eda755db1c3107f1a2ffb16e1c55bbcec935be688bdbe6ade8e713c9153aa6ee_prof);

        
        $__internal_61b2a060be56cf0baa54578c186822e6f5413c2ae5de766895487fc4b2ed760d->leave($__internal_61b2a060be56cf0baa54578c186822e6f5413c2ae5de766895487fc4b2ed760d_prof);

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

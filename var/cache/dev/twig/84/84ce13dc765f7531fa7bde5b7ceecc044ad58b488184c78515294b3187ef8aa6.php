<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_899395eb8f93ff7f2bbf1989f52b4496c16e1665d2242bcf11bf7a06ecbaa275 extends Twig_Template
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
        $__internal_1ca4d6674e962f0bba908056e7aca6fa9ca8f222c0d965d724803eadd42261e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca4d6674e962f0bba908056e7aca6fa9ca8f222c0d965d724803eadd42261e8->enter($__internal_1ca4d6674e962f0bba908056e7aca6fa9ca8f222c0d965d724803eadd42261e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f80a8266e51dc7e8f9d2beda8e09d234af3841e0bb9465bbfea5a2e539fbfc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80a8266e51dc7e8f9d2beda8e09d234af3841e0bb9465bbfea5a2e539fbfc5e->enter($__internal_f80a8266e51dc7e8f9d2beda8e09d234af3841e0bb9465bbfea5a2e539fbfc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1ca4d6674e962f0bba908056e7aca6fa9ca8f222c0d965d724803eadd42261e8->leave($__internal_1ca4d6674e962f0bba908056e7aca6fa9ca8f222c0d965d724803eadd42261e8_prof);

        
        $__internal_f80a8266e51dc7e8f9d2beda8e09d234af3841e0bb9465bbfea5a2e539fbfc5e->leave($__internal_f80a8266e51dc7e8f9d2beda8e09d234af3841e0bb9465bbfea5a2e539fbfc5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

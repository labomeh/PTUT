<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43155966c45df880a914bea0e34fee9b9926202925b729a7a23e24bf8e15c10a extends Twig_Template
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
        $__internal_7f005281b02929cc77773d3ceb0f50ff47408101097eef4b1924e314a81570ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f005281b02929cc77773d3ceb0f50ff47408101097eef4b1924e314a81570ff->enter($__internal_7f005281b02929cc77773d3ceb0f50ff47408101097eef4b1924e314a81570ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_53e277963e442d85840b4fdd7640d192a52448db41ac899d521c6964beffd4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e277963e442d85840b4fdd7640d192a52448db41ac899d521c6964beffd4ce->enter($__internal_53e277963e442d85840b4fdd7640d192a52448db41ac899d521c6964beffd4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7f005281b02929cc77773d3ceb0f50ff47408101097eef4b1924e314a81570ff->leave($__internal_7f005281b02929cc77773d3ceb0f50ff47408101097eef4b1924e314a81570ff_prof);

        
        $__internal_53e277963e442d85840b4fdd7640d192a52448db41ac899d521c6964beffd4ce->leave($__internal_53e277963e442d85840b4fdd7640d192a52448db41ac899d521c6964beffd4ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

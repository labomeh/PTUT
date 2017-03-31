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
        $__internal_f11929fbe1f05672152288ef6254a49262e64d2f2fc13f5e5ac4388175ad7e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11929fbe1f05672152288ef6254a49262e64d2f2fc13f5e5ac4388175ad7e51->enter($__internal_f11929fbe1f05672152288ef6254a49262e64d2f2fc13f5e5ac4388175ad7e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a708cca06caadf21df238661d7cae6c91b47e37ea06751dec037eee336513029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a708cca06caadf21df238661d7cae6c91b47e37ea06751dec037eee336513029->enter($__internal_a708cca06caadf21df238661d7cae6c91b47e37ea06751dec037eee336513029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f11929fbe1f05672152288ef6254a49262e64d2f2fc13f5e5ac4388175ad7e51->leave($__internal_f11929fbe1f05672152288ef6254a49262e64d2f2fc13f5e5ac4388175ad7e51_prof);

        
        $__internal_a708cca06caadf21df238661d7cae6c91b47e37ea06751dec037eee336513029->leave($__internal_a708cca06caadf21df238661d7cae6c91b47e37ea06751dec037eee336513029_prof);

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

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
        $__internal_265052cea67b7be7cb1012f88e942fc3fcdba75d543db9eda57b592088a4a6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265052cea67b7be7cb1012f88e942fc3fcdba75d543db9eda57b592088a4a6a3->enter($__internal_265052cea67b7be7cb1012f88e942fc3fcdba75d543db9eda57b592088a4a6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_91b56aec380dfbc724592b9e741d0a44e94f991984c6d28c441fbf3145b752d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b56aec380dfbc724592b9e741d0a44e94f991984c6d28c441fbf3145b752d3->enter($__internal_91b56aec380dfbc724592b9e741d0a44e94f991984c6d28c441fbf3145b752d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_265052cea67b7be7cb1012f88e942fc3fcdba75d543db9eda57b592088a4a6a3->leave($__internal_265052cea67b7be7cb1012f88e942fc3fcdba75d543db9eda57b592088a4a6a3_prof);

        
        $__internal_91b56aec380dfbc724592b9e741d0a44e94f991984c6d28c441fbf3145b752d3->leave($__internal_91b56aec380dfbc724592b9e741d0a44e94f991984c6d28c441fbf3145b752d3_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

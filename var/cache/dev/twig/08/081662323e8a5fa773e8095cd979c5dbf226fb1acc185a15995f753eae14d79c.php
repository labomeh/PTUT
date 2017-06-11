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
        $__internal_5dc5a3e7347c4fee1b4b237efeeea27f9d131ed52c45ab3a52b54c53c07355dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc5a3e7347c4fee1b4b237efeeea27f9d131ed52c45ab3a52b54c53c07355dd->enter($__internal_5dc5a3e7347c4fee1b4b237efeeea27f9d131ed52c45ab3a52b54c53c07355dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2d984ad058d114dfa3fd839f592bdf44346683413711419f4f4e15665b77c11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d984ad058d114dfa3fd839f592bdf44346683413711419f4f4e15665b77c11b->enter($__internal_2d984ad058d114dfa3fd839f592bdf44346683413711419f4f4e15665b77c11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5dc5a3e7347c4fee1b4b237efeeea27f9d131ed52c45ab3a52b54c53c07355dd->leave($__internal_5dc5a3e7347c4fee1b4b237efeeea27f9d131ed52c45ab3a52b54c53c07355dd_prof);

        
        $__internal_2d984ad058d114dfa3fd839f592bdf44346683413711419f4f4e15665b77c11b->leave($__internal_2d984ad058d114dfa3fd839f592bdf44346683413711419f4f4e15665b77c11b_prof);

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

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
        $__internal_0a222c9b0045083ae48495712629f4c9ba494acb5fa225fbaeaafaf9020733fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a222c9b0045083ae48495712629f4c9ba494acb5fa225fbaeaafaf9020733fa->enter($__internal_0a222c9b0045083ae48495712629f4c9ba494acb5fa225fbaeaafaf9020733fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ba0f157a393abaa5e9dc7ff20e6831ea137f53af319657735333d30e8b82b414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f157a393abaa5e9dc7ff20e6831ea137f53af319657735333d30e8b82b414->enter($__internal_ba0f157a393abaa5e9dc7ff20e6831ea137f53af319657735333d30e8b82b414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0a222c9b0045083ae48495712629f4c9ba494acb5fa225fbaeaafaf9020733fa->leave($__internal_0a222c9b0045083ae48495712629f4c9ba494acb5fa225fbaeaafaf9020733fa_prof);

        
        $__internal_ba0f157a393abaa5e9dc7ff20e6831ea137f53af319657735333d30e8b82b414->leave($__internal_ba0f157a393abaa5e9dc7ff20e6831ea137f53af319657735333d30e8b82b414_prof);

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

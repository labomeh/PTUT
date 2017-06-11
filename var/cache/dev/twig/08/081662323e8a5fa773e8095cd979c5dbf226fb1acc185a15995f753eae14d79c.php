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
        $__internal_6decebaa3672c8d20ce2f46ce256e5e0815ece3e57dd5c8a6c1f6cdb4f9f4658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6decebaa3672c8d20ce2f46ce256e5e0815ece3e57dd5c8a6c1f6cdb4f9f4658->enter($__internal_6decebaa3672c8d20ce2f46ce256e5e0815ece3e57dd5c8a6c1f6cdb4f9f4658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a55a3ce891aad9038264c8a03fabaee1dd11d2df1a7a43f2a994ba3cfa59cb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55a3ce891aad9038264c8a03fabaee1dd11d2df1a7a43f2a994ba3cfa59cb11->enter($__internal_a55a3ce891aad9038264c8a03fabaee1dd11d2df1a7a43f2a994ba3cfa59cb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6decebaa3672c8d20ce2f46ce256e5e0815ece3e57dd5c8a6c1f6cdb4f9f4658->leave($__internal_6decebaa3672c8d20ce2f46ce256e5e0815ece3e57dd5c8a6c1f6cdb4f9f4658_prof);

        
        $__internal_a55a3ce891aad9038264c8a03fabaee1dd11d2df1a7a43f2a994ba3cfa59cb11->leave($__internal_a55a3ce891aad9038264c8a03fabaee1dd11d2df1a7a43f2a994ba3cfa59cb11_prof);

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

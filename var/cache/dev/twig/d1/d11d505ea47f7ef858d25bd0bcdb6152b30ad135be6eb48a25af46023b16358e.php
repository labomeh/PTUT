<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dece533eae3a867b80852feeb852d1e792806433d3124856faabc9498796bf79 extends Twig_Template
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
        $__internal_f9e41cbd16a2af8769823f84675a8c821f09b9adce52ba95f158163bdaadc0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e41cbd16a2af8769823f84675a8c821f09b9adce52ba95f158163bdaadc0a9->enter($__internal_f9e41cbd16a2af8769823f84675a8c821f09b9adce52ba95f158163bdaadc0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6c9eae921a945dcaf7bcc7c53fdf770f1f487a09f34eee969cf294bcdde8d555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9eae921a945dcaf7bcc7c53fdf770f1f487a09f34eee969cf294bcdde8d555->enter($__internal_6c9eae921a945dcaf7bcc7c53fdf770f1f487a09f34eee969cf294bcdde8d555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f9e41cbd16a2af8769823f84675a8c821f09b9adce52ba95f158163bdaadc0a9->leave($__internal_f9e41cbd16a2af8769823f84675a8c821f09b9adce52ba95f158163bdaadc0a9_prof);

        
        $__internal_6c9eae921a945dcaf7bcc7c53fdf770f1f487a09f34eee969cf294bcdde8d555->leave($__internal_6c9eae921a945dcaf7bcc7c53fdf770f1f487a09f34eee969cf294bcdde8d555_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

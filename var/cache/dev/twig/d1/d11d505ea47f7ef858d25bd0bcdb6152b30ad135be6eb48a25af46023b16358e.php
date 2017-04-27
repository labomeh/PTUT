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
        $__internal_55ff65f0b34ac10ff8d9228681958852383fa57ee321a74d3593700aaa54cb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ff65f0b34ac10ff8d9228681958852383fa57ee321a74d3593700aaa54cb60->enter($__internal_55ff65f0b34ac10ff8d9228681958852383fa57ee321a74d3593700aaa54cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_29a9e3cebe5b89ab1ddb9c0586665b1d010085e692a58aaa8d3b6079010f8cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a9e3cebe5b89ab1ddb9c0586665b1d010085e692a58aaa8d3b6079010f8cd0->enter($__internal_29a9e3cebe5b89ab1ddb9c0586665b1d010085e692a58aaa8d3b6079010f8cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_55ff65f0b34ac10ff8d9228681958852383fa57ee321a74d3593700aaa54cb60->leave($__internal_55ff65f0b34ac10ff8d9228681958852383fa57ee321a74d3593700aaa54cb60_prof);

        
        $__internal_29a9e3cebe5b89ab1ddb9c0586665b1d010085e692a58aaa8d3b6079010f8cd0->leave($__internal_29a9e3cebe5b89ab1ddb9c0586665b1d010085e692a58aaa8d3b6079010f8cd0_prof);

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

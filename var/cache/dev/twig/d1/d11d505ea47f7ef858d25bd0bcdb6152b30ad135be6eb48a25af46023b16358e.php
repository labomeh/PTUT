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
        $__internal_2efb09b6bd814df640c3f64f8b6860d9f52adea4bc582b8ae374268cb24f0e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efb09b6bd814df640c3f64f8b6860d9f52adea4bc582b8ae374268cb24f0e37->enter($__internal_2efb09b6bd814df640c3f64f8b6860d9f52adea4bc582b8ae374268cb24f0e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_baf6b674fa41b0ef634baf719eba589be87097d8af62b7da5e67cfed8e2ad7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf6b674fa41b0ef634baf719eba589be87097d8af62b7da5e67cfed8e2ad7ed->enter($__internal_baf6b674fa41b0ef634baf719eba589be87097d8af62b7da5e67cfed8e2ad7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2efb09b6bd814df640c3f64f8b6860d9f52adea4bc582b8ae374268cb24f0e37->leave($__internal_2efb09b6bd814df640c3f64f8b6860d9f52adea4bc582b8ae374268cb24f0e37_prof);

        
        $__internal_baf6b674fa41b0ef634baf719eba589be87097d8af62b7da5e67cfed8e2ad7ed->leave($__internal_baf6b674fa41b0ef634baf719eba589be87097d8af62b7da5e67cfed8e2ad7ed_prof);

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

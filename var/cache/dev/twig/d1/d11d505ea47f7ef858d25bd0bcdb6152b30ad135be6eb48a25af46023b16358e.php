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
        $__internal_8a1ee6e7d2a78c9c8569d4871fdaaa18ad20d33cfa70264de76574de5eaef596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1ee6e7d2a78c9c8569d4871fdaaa18ad20d33cfa70264de76574de5eaef596->enter($__internal_8a1ee6e7d2a78c9c8569d4871fdaaa18ad20d33cfa70264de76574de5eaef596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8df52c115390b89085d4788a8fa13d45452d9ee350705617f94005a9e1a48639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df52c115390b89085d4788a8fa13d45452d9ee350705617f94005a9e1a48639->enter($__internal_8df52c115390b89085d4788a8fa13d45452d9ee350705617f94005a9e1a48639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8a1ee6e7d2a78c9c8569d4871fdaaa18ad20d33cfa70264de76574de5eaef596->leave($__internal_8a1ee6e7d2a78c9c8569d4871fdaaa18ad20d33cfa70264de76574de5eaef596_prof);

        
        $__internal_8df52c115390b89085d4788a8fa13d45452d9ee350705617f94005a9e1a48639->leave($__internal_8df52c115390b89085d4788a8fa13d45452d9ee350705617f94005a9e1a48639_prof);

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

<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f52e31fbf87ff51ac6b3b3a5d70a0d2149ae3b1926e6e441cd6d6335239c6f2e extends Twig_Template
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
        $__internal_9789f7efef5cec31e16202bcb32619dd9c289fa6ecb59d86a4f9e05e9fd6b191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9789f7efef5cec31e16202bcb32619dd9c289fa6ecb59d86a4f9e05e9fd6b191->enter($__internal_9789f7efef5cec31e16202bcb32619dd9c289fa6ecb59d86a4f9e05e9fd6b191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f30cb95c216e83990bc4ddec7874b099115fde3c90de474a4cdd84271a696760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30cb95c216e83990bc4ddec7874b099115fde3c90de474a4cdd84271a696760->enter($__internal_f30cb95c216e83990bc4ddec7874b099115fde3c90de474a4cdd84271a696760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9789f7efef5cec31e16202bcb32619dd9c289fa6ecb59d86a4f9e05e9fd6b191->leave($__internal_9789f7efef5cec31e16202bcb32619dd9c289fa6ecb59d86a4f9e05e9fd6b191_prof);

        
        $__internal_f30cb95c216e83990bc4ddec7874b099115fde3c90de474a4cdd84271a696760->leave($__internal_f30cb95c216e83990bc4ddec7874b099115fde3c90de474a4cdd84271a696760_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

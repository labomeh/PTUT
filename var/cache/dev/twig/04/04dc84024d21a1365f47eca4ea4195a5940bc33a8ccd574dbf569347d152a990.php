<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0468f05df4181cc993fdbbb1cec4990b280077f600dc89689db138ed15838f93 extends Twig_Template
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
        $__internal_426ea77e5627f993fd8d95c3012be525805db05a9df1f8ee5493643729fa0a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426ea77e5627f993fd8d95c3012be525805db05a9df1f8ee5493643729fa0a2a->enter($__internal_426ea77e5627f993fd8d95c3012be525805db05a9df1f8ee5493643729fa0a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3f43147cb5ce57fb9b0a5349a73a4ca2f7f6feaa2c62fe9588edd82ea60f3134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f43147cb5ce57fb9b0a5349a73a4ca2f7f6feaa2c62fe9588edd82ea60f3134->enter($__internal_3f43147cb5ce57fb9b0a5349a73a4ca2f7f6feaa2c62fe9588edd82ea60f3134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_426ea77e5627f993fd8d95c3012be525805db05a9df1f8ee5493643729fa0a2a->leave($__internal_426ea77e5627f993fd8d95c3012be525805db05a9df1f8ee5493643729fa0a2a_prof);

        
        $__internal_3f43147cb5ce57fb9b0a5349a73a4ca2f7f6feaa2c62fe9588edd82ea60f3134->leave($__internal_3f43147cb5ce57fb9b0a5349a73a4ca2f7f6feaa2c62fe9588edd82ea60f3134_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9984595c51255aae81c32552cb2155768c4ccdc9d3607065e16d8f2651f35aa1 extends Twig_Template
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
        $__internal_ddfe4041a1f0e2c6c183338c1b126de535e1d008f8b425ecee5a8ed392f9f464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfe4041a1f0e2c6c183338c1b126de535e1d008f8b425ecee5a8ed392f9f464->enter($__internal_ddfe4041a1f0e2c6c183338c1b126de535e1d008f8b425ecee5a8ed392f9f464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3f661a5574d08941488392b4b7ca8d38cf72b5a49b31bab7c75de99d98188e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f661a5574d08941488392b4b7ca8d38cf72b5a49b31bab7c75de99d98188e99->enter($__internal_3f661a5574d08941488392b4b7ca8d38cf72b5a49b31bab7c75de99d98188e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ddfe4041a1f0e2c6c183338c1b126de535e1d008f8b425ecee5a8ed392f9f464->leave($__internal_ddfe4041a1f0e2c6c183338c1b126de535e1d008f8b425ecee5a8ed392f9f464_prof);

        
        $__internal_3f661a5574d08941488392b4b7ca8d38cf72b5a49b31bab7c75de99d98188e99->leave($__internal_3f661a5574d08941488392b4b7ca8d38cf72b5a49b31bab7c75de99d98188e99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
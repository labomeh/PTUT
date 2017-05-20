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
        $__internal_d0d4aa833e3bc24b9dfb09135816aaf14036bbd08a94acd2071192c0e975bde1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d4aa833e3bc24b9dfb09135816aaf14036bbd08a94acd2071192c0e975bde1->enter($__internal_d0d4aa833e3bc24b9dfb09135816aaf14036bbd08a94acd2071192c0e975bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_62acf9bb328ae6720ad07450fc7a56217b94200087ac305e551bf6eb2c0f291e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62acf9bb328ae6720ad07450fc7a56217b94200087ac305e551bf6eb2c0f291e->enter($__internal_62acf9bb328ae6720ad07450fc7a56217b94200087ac305e551bf6eb2c0f291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_d0d4aa833e3bc24b9dfb09135816aaf14036bbd08a94acd2071192c0e975bde1->leave($__internal_d0d4aa833e3bc24b9dfb09135816aaf14036bbd08a94acd2071192c0e975bde1_prof);

        
        $__internal_62acf9bb328ae6720ad07450fc7a56217b94200087ac305e551bf6eb2c0f291e->leave($__internal_62acf9bb328ae6720ad07450fc7a56217b94200087ac305e551bf6eb2c0f291e_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

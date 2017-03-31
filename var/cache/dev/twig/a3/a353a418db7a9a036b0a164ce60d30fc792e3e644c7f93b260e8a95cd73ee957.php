<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dac9ff7ddf7198b493c34af17936e9afbb8864a3abc7b78b7530e7bb051c0f28 extends Twig_Template
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
        $__internal_b1c2dcd6dfc1ed391d2c2e418f760029bfb4cf4d2ad78055024729b9c8ae2c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c2dcd6dfc1ed391d2c2e418f760029bfb4cf4d2ad78055024729b9c8ae2c90->enter($__internal_b1c2dcd6dfc1ed391d2c2e418f760029bfb4cf4d2ad78055024729b9c8ae2c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5e51a800b1eb4936d14627e910bffddfa4dc3f28f1045eb9d25750e189fa4f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e51a800b1eb4936d14627e910bffddfa4dc3f28f1045eb9d25750e189fa4f36->enter($__internal_5e51a800b1eb4936d14627e910bffddfa4dc3f28f1045eb9d25750e189fa4f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b1c2dcd6dfc1ed391d2c2e418f760029bfb4cf4d2ad78055024729b9c8ae2c90->leave($__internal_b1c2dcd6dfc1ed391d2c2e418f760029bfb4cf4d2ad78055024729b9c8ae2c90_prof);

        
        $__internal_5e51a800b1eb4936d14627e910bffddfa4dc3f28f1045eb9d25750e189fa4f36->leave($__internal_5e51a800b1eb4936d14627e910bffddfa4dc3f28f1045eb9d25750e189fa4f36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

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
        $__internal_b9d00368541f4069506aebb4e425503cc4190f00878025c033c4449d45203565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d00368541f4069506aebb4e425503cc4190f00878025c033c4449d45203565->enter($__internal_b9d00368541f4069506aebb4e425503cc4190f00878025c033c4449d45203565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_814eaaf39a7b1839418926af9df90c0518c12feced439814c673365b8dcf15be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814eaaf39a7b1839418926af9df90c0518c12feced439814c673365b8dcf15be->enter($__internal_814eaaf39a7b1839418926af9df90c0518c12feced439814c673365b8dcf15be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b9d00368541f4069506aebb4e425503cc4190f00878025c033c4449d45203565->leave($__internal_b9d00368541f4069506aebb4e425503cc4190f00878025c033c4449d45203565_prof);

        
        $__internal_814eaaf39a7b1839418926af9df90c0518c12feced439814c673365b8dcf15be->leave($__internal_814eaaf39a7b1839418926af9df90c0518c12feced439814c673365b8dcf15be_prof);

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

<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_54afc722913edc0b9b10153ad5d267b89b6f693962210995e8e8f65daac51f3a extends Twig_Template
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
        $__internal_ebc8df6dcb1eb3eefacd26a45a93f1789a6a026cdf7ee5160f80e4989bbe7098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc8df6dcb1eb3eefacd26a45a93f1789a6a026cdf7ee5160f80e4989bbe7098->enter($__internal_ebc8df6dcb1eb3eefacd26a45a93f1789a6a026cdf7ee5160f80e4989bbe7098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_62b65f19d6141a01173470e20f11ab9c25fbc7d3cc83237479329f87f011d805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b65f19d6141a01173470e20f11ab9c25fbc7d3cc83237479329f87f011d805->enter($__internal_62b65f19d6141a01173470e20f11ab9c25fbc7d3cc83237479329f87f011d805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ebc8df6dcb1eb3eefacd26a45a93f1789a6a026cdf7ee5160f80e4989bbe7098->leave($__internal_ebc8df6dcb1eb3eefacd26a45a93f1789a6a026cdf7ee5160f80e4989bbe7098_prof);

        
        $__internal_62b65f19d6141a01173470e20f11ab9c25fbc7d3cc83237479329f87f011d805->leave($__internal_62b65f19d6141a01173470e20f11ab9c25fbc7d3cc83237479329f87f011d805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

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
        $__internal_07cf5ef433f41ee35e3deb5f158b7267c390313695af6921c19b44cb2d3c195e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cf5ef433f41ee35e3deb5f158b7267c390313695af6921c19b44cb2d3c195e->enter($__internal_07cf5ef433f41ee35e3deb5f158b7267c390313695af6921c19b44cb2d3c195e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3ccb6b0fe00f6b71275816224a64788ad198f8d76b26c37d2023b18b279885d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccb6b0fe00f6b71275816224a64788ad198f8d76b26c37d2023b18b279885d8->enter($__internal_3ccb6b0fe00f6b71275816224a64788ad198f8d76b26c37d2023b18b279885d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_07cf5ef433f41ee35e3deb5f158b7267c390313695af6921c19b44cb2d3c195e->leave($__internal_07cf5ef433f41ee35e3deb5f158b7267c390313695af6921c19b44cb2d3c195e_prof);

        
        $__internal_3ccb6b0fe00f6b71275816224a64788ad198f8d76b26c37d2023b18b279885d8->leave($__internal_3ccb6b0fe00f6b71275816224a64788ad198f8d76b26c37d2023b18b279885d8_prof);

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

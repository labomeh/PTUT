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
        $__internal_1b56ddc5facbf5638cafb8fb0141f7427e6c3d827323a104165c9e5d229d35f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b56ddc5facbf5638cafb8fb0141f7427e6c3d827323a104165c9e5d229d35f8->enter($__internal_1b56ddc5facbf5638cafb8fb0141f7427e6c3d827323a104165c9e5d229d35f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2015b0e05e8eed2214e2ff3cc60d41d0daaf03fb585f08d76ed70286418f1c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2015b0e05e8eed2214e2ff3cc60d41d0daaf03fb585f08d76ed70286418f1c55->enter($__internal_2015b0e05e8eed2214e2ff3cc60d41d0daaf03fb585f08d76ed70286418f1c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1b56ddc5facbf5638cafb8fb0141f7427e6c3d827323a104165c9e5d229d35f8->leave($__internal_1b56ddc5facbf5638cafb8fb0141f7427e6c3d827323a104165c9e5d229d35f8_prof);

        
        $__internal_2015b0e05e8eed2214e2ff3cc60d41d0daaf03fb585f08d76ed70286418f1c55->leave($__internal_2015b0e05e8eed2214e2ff3cc60d41d0daaf03fb585f08d76ed70286418f1c55_prof);

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

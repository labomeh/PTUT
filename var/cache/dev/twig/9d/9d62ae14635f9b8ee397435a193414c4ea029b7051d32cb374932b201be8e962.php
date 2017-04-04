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
        $__internal_1a811be90ea4fc6681b5e4c3da970cbde3ad1280db729ffb3657626d992a9cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a811be90ea4fc6681b5e4c3da970cbde3ad1280db729ffb3657626d992a9cd6->enter($__internal_1a811be90ea4fc6681b5e4c3da970cbde3ad1280db729ffb3657626d992a9cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2ed670ae8d6cf7a248d5c08e603f3b852aa4b1f0aa0d34148dcba2d1be97971d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed670ae8d6cf7a248d5c08e603f3b852aa4b1f0aa0d34148dcba2d1be97971d->enter($__internal_2ed670ae8d6cf7a248d5c08e603f3b852aa4b1f0aa0d34148dcba2d1be97971d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1a811be90ea4fc6681b5e4c3da970cbde3ad1280db729ffb3657626d992a9cd6->leave($__internal_1a811be90ea4fc6681b5e4c3da970cbde3ad1280db729ffb3657626d992a9cd6_prof);

        
        $__internal_2ed670ae8d6cf7a248d5c08e603f3b852aa4b1f0aa0d34148dcba2d1be97971d->leave($__internal_2ed670ae8d6cf7a248d5c08e603f3b852aa4b1f0aa0d34148dcba2d1be97971d_prof);

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
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

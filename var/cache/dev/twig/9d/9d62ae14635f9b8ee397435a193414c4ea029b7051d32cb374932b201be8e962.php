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
        $__internal_4ea7ca941d030c6a9a424ddddf4cbf096539436611174b812083ab82048514ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea7ca941d030c6a9a424ddddf4cbf096539436611174b812083ab82048514ad->enter($__internal_4ea7ca941d030c6a9a424ddddf4cbf096539436611174b812083ab82048514ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_dc1a8a90acf3ab74e74a4dc883ce322abcc72a6f607fd16e0a7a99f23c7a6bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1a8a90acf3ab74e74a4dc883ce322abcc72a6f607fd16e0a7a99f23c7a6bce->enter($__internal_dc1a8a90acf3ab74e74a4dc883ce322abcc72a6f607fd16e0a7a99f23c7a6bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4ea7ca941d030c6a9a424ddddf4cbf096539436611174b812083ab82048514ad->leave($__internal_4ea7ca941d030c6a9a424ddddf4cbf096539436611174b812083ab82048514ad_prof);

        
        $__internal_dc1a8a90acf3ab74e74a4dc883ce322abcc72a6f607fd16e0a7a99f23c7a6bce->leave($__internal_dc1a8a90acf3ab74e74a4dc883ce322abcc72a6f607fd16e0a7a99f23c7a6bce_prof);

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

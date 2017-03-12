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
        $__internal_eddec214486230f73624d77805c08a9730363c79fc1675a2aba6da3e95c4f481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eddec214486230f73624d77805c08a9730363c79fc1675a2aba6da3e95c4f481->enter($__internal_eddec214486230f73624d77805c08a9730363c79fc1675a2aba6da3e95c4f481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7c1ae0808a2797988da0a0c96ad2cffb7f1b4255841f9e9456ed6dd48585773e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1ae0808a2797988da0a0c96ad2cffb7f1b4255841f9e9456ed6dd48585773e->enter($__internal_7c1ae0808a2797988da0a0c96ad2cffb7f1b4255841f9e9456ed6dd48585773e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_eddec214486230f73624d77805c08a9730363c79fc1675a2aba6da3e95c4f481->leave($__internal_eddec214486230f73624d77805c08a9730363c79fc1675a2aba6da3e95c4f481_prof);

        
        $__internal_7c1ae0808a2797988da0a0c96ad2cffb7f1b4255841f9e9456ed6dd48585773e->leave($__internal_7c1ae0808a2797988da0a0c96ad2cffb7f1b4255841f9e9456ed6dd48585773e_prof);

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

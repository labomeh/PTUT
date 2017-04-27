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
        $__internal_9c8a7ca7e4daeaea0045f470594b4c161e6b77e4fa2175b59852f10912400489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8a7ca7e4daeaea0045f470594b4c161e6b77e4fa2175b59852f10912400489->enter($__internal_9c8a7ca7e4daeaea0045f470594b4c161e6b77e4fa2175b59852f10912400489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_022d3c032d973e3637e118139384db34fff81d0a12e7a2f7211e90f05e6ea830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022d3c032d973e3637e118139384db34fff81d0a12e7a2f7211e90f05e6ea830->enter($__internal_022d3c032d973e3637e118139384db34fff81d0a12e7a2f7211e90f05e6ea830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9c8a7ca7e4daeaea0045f470594b4c161e6b77e4fa2175b59852f10912400489->leave($__internal_9c8a7ca7e4daeaea0045f470594b4c161e6b77e4fa2175b59852f10912400489_prof);

        
        $__internal_022d3c032d973e3637e118139384db34fff81d0a12e7a2f7211e90f05e6ea830->leave($__internal_022d3c032d973e3637e118139384db34fff81d0a12e7a2f7211e90f05e6ea830_prof);

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

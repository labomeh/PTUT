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
        $__internal_0322526847e065a49a5f654d5da95de4a8fc35026bef833a9fbb9d65a0f41a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0322526847e065a49a5f654d5da95de4a8fc35026bef833a9fbb9d65a0f41a33->enter($__internal_0322526847e065a49a5f654d5da95de4a8fc35026bef833a9fbb9d65a0f41a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a4e3533985de4507f94ec58aac5bfad3fd00cb1b8320605edc229e5cf433ac09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e3533985de4507f94ec58aac5bfad3fd00cb1b8320605edc229e5cf433ac09->enter($__internal_a4e3533985de4507f94ec58aac5bfad3fd00cb1b8320605edc229e5cf433ac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0322526847e065a49a5f654d5da95de4a8fc35026bef833a9fbb9d65a0f41a33->leave($__internal_0322526847e065a49a5f654d5da95de4a8fc35026bef833a9fbb9d65a0f41a33_prof);

        
        $__internal_a4e3533985de4507f94ec58aac5bfad3fd00cb1b8320605edc229e5cf433ac09->leave($__internal_a4e3533985de4507f94ec58aac5bfad3fd00cb1b8320605edc229e5cf433ac09_prof);

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

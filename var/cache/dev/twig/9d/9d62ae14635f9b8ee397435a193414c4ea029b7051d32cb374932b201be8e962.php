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
        $__internal_0139e0bc1f6fa3d8148506ca741c08dd265c527da63a4b3de8ca56d55986095a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0139e0bc1f6fa3d8148506ca741c08dd265c527da63a4b3de8ca56d55986095a->enter($__internal_0139e0bc1f6fa3d8148506ca741c08dd265c527da63a4b3de8ca56d55986095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d228d4741a6c53bf0d7bf2cc40eb8b036e8fdc658b46cdacd99b0a104e7d1fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d228d4741a6c53bf0d7bf2cc40eb8b036e8fdc658b46cdacd99b0a104e7d1fe0->enter($__internal_d228d4741a6c53bf0d7bf2cc40eb8b036e8fdc658b46cdacd99b0a104e7d1fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0139e0bc1f6fa3d8148506ca741c08dd265c527da63a4b3de8ca56d55986095a->leave($__internal_0139e0bc1f6fa3d8148506ca741c08dd265c527da63a4b3de8ca56d55986095a_prof);

        
        $__internal_d228d4741a6c53bf0d7bf2cc40eb8b036e8fdc658b46cdacd99b0a104e7d1fe0->leave($__internal_d228d4741a6c53bf0d7bf2cc40eb8b036e8fdc658b46cdacd99b0a104e7d1fe0_prof);

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

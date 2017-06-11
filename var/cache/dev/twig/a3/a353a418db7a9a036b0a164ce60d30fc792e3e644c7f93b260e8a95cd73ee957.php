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
        $__internal_1881166d2b1d35dfe34a7b20f950e9df90401f1de2f1d9ee71a6d0cca94b3310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1881166d2b1d35dfe34a7b20f950e9df90401f1de2f1d9ee71a6d0cca94b3310->enter($__internal_1881166d2b1d35dfe34a7b20f950e9df90401f1de2f1d9ee71a6d0cca94b3310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d9a2f3702db08c7372853720a8910952d5dbd7130b2fa0a7b28aa3059d2379f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a2f3702db08c7372853720a8910952d5dbd7130b2fa0a7b28aa3059d2379f9->enter($__internal_d9a2f3702db08c7372853720a8910952d5dbd7130b2fa0a7b28aa3059d2379f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1881166d2b1d35dfe34a7b20f950e9df90401f1de2f1d9ee71a6d0cca94b3310->leave($__internal_1881166d2b1d35dfe34a7b20f950e9df90401f1de2f1d9ee71a6d0cca94b3310_prof);

        
        $__internal_d9a2f3702db08c7372853720a8910952d5dbd7130b2fa0a7b28aa3059d2379f9->leave($__internal_d9a2f3702db08c7372853720a8910952d5dbd7130b2fa0a7b28aa3059d2379f9_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

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
        $__internal_9254e480b35c1e0ac45ba6647c90bd30a7477c1f7fc6f1122b799a32f73b6bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9254e480b35c1e0ac45ba6647c90bd30a7477c1f7fc6f1122b799a32f73b6bc5->enter($__internal_9254e480b35c1e0ac45ba6647c90bd30a7477c1f7fc6f1122b799a32f73b6bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bcc4f106fad4cc3d5975adc0524338dc18214c96ba34140d42a4c02dbdd38e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc4f106fad4cc3d5975adc0524338dc18214c96ba34140d42a4c02dbdd38e23->enter($__internal_bcc4f106fad4cc3d5975adc0524338dc18214c96ba34140d42a4c02dbdd38e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9254e480b35c1e0ac45ba6647c90bd30a7477c1f7fc6f1122b799a32f73b6bc5->leave($__internal_9254e480b35c1e0ac45ba6647c90bd30a7477c1f7fc6f1122b799a32f73b6bc5_prof);

        
        $__internal_bcc4f106fad4cc3d5975adc0524338dc18214c96ba34140d42a4c02dbdd38e23->leave($__internal_bcc4f106fad4cc3d5975adc0524338dc18214c96ba34140d42a4c02dbdd38e23_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

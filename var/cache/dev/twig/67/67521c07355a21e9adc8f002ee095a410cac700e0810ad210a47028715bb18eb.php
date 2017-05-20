<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0b2e340029cc87b1c12b1220a336951822d49ce04d09d92fdb3a875c8bbc0834 extends Twig_Template
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
        $__internal_e6c9f16c60d67b62dcd643f28b9c5f875f3d020cc5f8e026ddb653649150cd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c9f16c60d67b62dcd643f28b9c5f875f3d020cc5f8e026ddb653649150cd2c->enter($__internal_e6c9f16c60d67b62dcd643f28b9c5f875f3d020cc5f8e026ddb653649150cd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2a8a71eb1b8e5ca556ed75d5fb733fe1301a50f820552f60942bf33467f79f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8a71eb1b8e5ca556ed75d5fb733fe1301a50f820552f60942bf33467f79f20->enter($__internal_2a8a71eb1b8e5ca556ed75d5fb733fe1301a50f820552f60942bf33467f79f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e6c9f16c60d67b62dcd643f28b9c5f875f3d020cc5f8e026ddb653649150cd2c->leave($__internal_e6c9f16c60d67b62dcd643f28b9c5f875f3d020cc5f8e026ddb653649150cd2c_prof);

        
        $__internal_2a8a71eb1b8e5ca556ed75d5fb733fe1301a50f820552f60942bf33467f79f20->leave($__internal_2a8a71eb1b8e5ca556ed75d5fb733fe1301a50f820552f60942bf33467f79f20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

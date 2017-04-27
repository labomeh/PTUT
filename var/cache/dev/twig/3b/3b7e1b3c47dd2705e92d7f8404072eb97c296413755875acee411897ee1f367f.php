<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_17b969dc8bf695da52fed436aae800cf51cf7d434d88594d55de9d8c1d980fc6 extends Twig_Template
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
        $__internal_873d059b652fee9e6d5ff4d26a7ff5c52a9a480e829a948bf755ec8bbd00027c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873d059b652fee9e6d5ff4d26a7ff5c52a9a480e829a948bf755ec8bbd00027c->enter($__internal_873d059b652fee9e6d5ff4d26a7ff5c52a9a480e829a948bf755ec8bbd00027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0ab4e51700cdd375203defcb5bd84ba5844e407fa5367a64bf6c64770b9d4886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab4e51700cdd375203defcb5bd84ba5844e407fa5367a64bf6c64770b9d4886->enter($__internal_0ab4e51700cdd375203defcb5bd84ba5844e407fa5367a64bf6c64770b9d4886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_873d059b652fee9e6d5ff4d26a7ff5c52a9a480e829a948bf755ec8bbd00027c->leave($__internal_873d059b652fee9e6d5ff4d26a7ff5c52a9a480e829a948bf755ec8bbd00027c_prof);

        
        $__internal_0ab4e51700cdd375203defcb5bd84ba5844e407fa5367a64bf6c64770b9d4886->leave($__internal_0ab4e51700cdd375203defcb5bd84ba5844e407fa5367a64bf6c64770b9d4886_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

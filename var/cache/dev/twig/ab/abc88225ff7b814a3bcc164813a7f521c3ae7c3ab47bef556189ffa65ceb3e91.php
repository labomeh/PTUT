<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f678339ef624e0a41259bde234ed5b2a1c12f9e1b385bfb0965c06697d63feda extends Twig_Template
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
        $__internal_f227a5fac8a25fd2c94a8e374041114929c94cf61406edfa5e4c005475d4639e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f227a5fac8a25fd2c94a8e374041114929c94cf61406edfa5e4c005475d4639e->enter($__internal_f227a5fac8a25fd2c94a8e374041114929c94cf61406edfa5e4c005475d4639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bd35ffb1dddf0dfd12e910369bcf64d349b9c28021098d36d489235a8552e89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd35ffb1dddf0dfd12e910369bcf64d349b9c28021098d36d489235a8552e89f->enter($__internal_bd35ffb1dddf0dfd12e910369bcf64d349b9c28021098d36d489235a8552e89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f227a5fac8a25fd2c94a8e374041114929c94cf61406edfa5e4c005475d4639e->leave($__internal_f227a5fac8a25fd2c94a8e374041114929c94cf61406edfa5e4c005475d4639e_prof);

        
        $__internal_bd35ffb1dddf0dfd12e910369bcf64d349b9c28021098d36d489235a8552e89f->leave($__internal_bd35ffb1dddf0dfd12e910369bcf64d349b9c28021098d36d489235a8552e89f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_60e4c89623cceb6bbce80753f52f6abb881e1fb7a88d35ada90c333489a8b02f extends Twig_Template
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
        $__internal_4fb6899c3b81d76b5ffc08367d1d591492e8de2b47281358f5324a3335078de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb6899c3b81d76b5ffc08367d1d591492e8de2b47281358f5324a3335078de5->enter($__internal_4fb6899c3b81d76b5ffc08367d1d591492e8de2b47281358f5324a3335078de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3cd3e250a921456e2fed423d69f468070d17486edae0dddb1a07551105cfe694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd3e250a921456e2fed423d69f468070d17486edae0dddb1a07551105cfe694->enter($__internal_3cd3e250a921456e2fed423d69f468070d17486edae0dddb1a07551105cfe694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4fb6899c3b81d76b5ffc08367d1d591492e8de2b47281358f5324a3335078de5->leave($__internal_4fb6899c3b81d76b5ffc08367d1d591492e8de2b47281358f5324a3335078de5_prof);

        
        $__internal_3cd3e250a921456e2fed423d69f468070d17486edae0dddb1a07551105cfe694->leave($__internal_3cd3e250a921456e2fed423d69f468070d17486edae0dddb1a07551105cfe694_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

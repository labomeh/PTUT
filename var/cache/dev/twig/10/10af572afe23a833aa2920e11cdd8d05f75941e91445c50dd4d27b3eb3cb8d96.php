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
        $__internal_d681614ed9724a9947b57a13d0217541bc42ac34beb56afb8facb8a5a2625fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d681614ed9724a9947b57a13d0217541bc42ac34beb56afb8facb8a5a2625fbf->enter($__internal_d681614ed9724a9947b57a13d0217541bc42ac34beb56afb8facb8a5a2625fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b6c0e57de9a49a52d1909405be214b1a1af9f3c12039e03fc30f75017f42bb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c0e57de9a49a52d1909405be214b1a1af9f3c12039e03fc30f75017f42bb6d->enter($__internal_b6c0e57de9a49a52d1909405be214b1a1af9f3c12039e03fc30f75017f42bb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d681614ed9724a9947b57a13d0217541bc42ac34beb56afb8facb8a5a2625fbf->leave($__internal_d681614ed9724a9947b57a13d0217541bc42ac34beb56afb8facb8a5a2625fbf_prof);

        
        $__internal_b6c0e57de9a49a52d1909405be214b1a1af9f3c12039e03fc30f75017f42bb6d->leave($__internal_b6c0e57de9a49a52d1909405be214b1a1af9f3c12039e03fc30f75017f42bb6d_prof);

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

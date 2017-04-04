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
        $__internal_3e59f7193fcf6871f484c6e76060e86007412e90f9e25d8aa6c8691f3d1f47d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e59f7193fcf6871f484c6e76060e86007412e90f9e25d8aa6c8691f3d1f47d6->enter($__internal_3e59f7193fcf6871f484c6e76060e86007412e90f9e25d8aa6c8691f3d1f47d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0d5972b1080e9f9695c19f0b13b7d2a9592f5dcc4f4038e01903768fbe53eecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5972b1080e9f9695c19f0b13b7d2a9592f5dcc4f4038e01903768fbe53eecd->enter($__internal_0d5972b1080e9f9695c19f0b13b7d2a9592f5dcc4f4038e01903768fbe53eecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3e59f7193fcf6871f484c6e76060e86007412e90f9e25d8aa6c8691f3d1f47d6->leave($__internal_3e59f7193fcf6871f484c6e76060e86007412e90f9e25d8aa6c8691f3d1f47d6_prof);

        
        $__internal_0d5972b1080e9f9695c19f0b13b7d2a9592f5dcc4f4038e01903768fbe53eecd->leave($__internal_0d5972b1080e9f9695c19f0b13b7d2a9592f5dcc4f4038e01903768fbe53eecd_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

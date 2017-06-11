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
        $__internal_4a77a38e3d807fce16a02b39945f8738bd5b6a7e32eb9a8636e30fbff2e4452d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a77a38e3d807fce16a02b39945f8738bd5b6a7e32eb9a8636e30fbff2e4452d->enter($__internal_4a77a38e3d807fce16a02b39945f8738bd5b6a7e32eb9a8636e30fbff2e4452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7127f481fe2ccd2cd1ecd56f9dfe99e171a907371bae2b12ad17d298ef7e42c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7127f481fe2ccd2cd1ecd56f9dfe99e171a907371bae2b12ad17d298ef7e42c9->enter($__internal_7127f481fe2ccd2cd1ecd56f9dfe99e171a907371bae2b12ad17d298ef7e42c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4a77a38e3d807fce16a02b39945f8738bd5b6a7e32eb9a8636e30fbff2e4452d->leave($__internal_4a77a38e3d807fce16a02b39945f8738bd5b6a7e32eb9a8636e30fbff2e4452d_prof);

        
        $__internal_7127f481fe2ccd2cd1ecd56f9dfe99e171a907371bae2b12ad17d298ef7e42c9->leave($__internal_7127f481fe2ccd2cd1ecd56f9dfe99e171a907371bae2b12ad17d298ef7e42c9_prof);

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

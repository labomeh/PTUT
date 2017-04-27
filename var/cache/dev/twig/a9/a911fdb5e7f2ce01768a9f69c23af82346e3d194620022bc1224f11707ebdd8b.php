<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_415876f28c6976afeeafd4d95df761ed734111edaf97d99dc57201d43754a38c extends Twig_Template
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
        $__internal_1bf73d05a5da854110b8733b1e9396c43876204f508be33889fe9fbcb8755a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf73d05a5da854110b8733b1e9396c43876204f508be33889fe9fbcb8755a26->enter($__internal_1bf73d05a5da854110b8733b1e9396c43876204f508be33889fe9fbcb8755a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_232b638d91c950b37d1f262de649a62aea2d0d2acc5e6f5d13bd2932a1e7c43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232b638d91c950b37d1f262de649a62aea2d0d2acc5e6f5d13bd2932a1e7c43b->enter($__internal_232b638d91c950b37d1f262de649a62aea2d0d2acc5e6f5d13bd2932a1e7c43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1bf73d05a5da854110b8733b1e9396c43876204f508be33889fe9fbcb8755a26->leave($__internal_1bf73d05a5da854110b8733b1e9396c43876204f508be33889fe9fbcb8755a26_prof);

        
        $__internal_232b638d91c950b37d1f262de649a62aea2d0d2acc5e6f5d13bd2932a1e7c43b->leave($__internal_232b638d91c950b37d1f262de649a62aea2d0d2acc5e6f5d13bd2932a1e7c43b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

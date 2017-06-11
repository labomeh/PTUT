<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cb5cd4d8d267c9457af6ab3bf5e5fc99cb03bf69306ba2d6d801ef58f77f26ba extends Twig_Template
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
        $__internal_008fb1cfba7338992d0965e815fc8217c3e1334b2d2ba79286d5c5a180774438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008fb1cfba7338992d0965e815fc8217c3e1334b2d2ba79286d5c5a180774438->enter($__internal_008fb1cfba7338992d0965e815fc8217c3e1334b2d2ba79286d5c5a180774438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_42398bebb9362d144c2d1cd555c3ea1250758b9ca7fffd6252819959487fcbc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42398bebb9362d144c2d1cd555c3ea1250758b9ca7fffd6252819959487fcbc6->enter($__internal_42398bebb9362d144c2d1cd555c3ea1250758b9ca7fffd6252819959487fcbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_008fb1cfba7338992d0965e815fc8217c3e1334b2d2ba79286d5c5a180774438->leave($__internal_008fb1cfba7338992d0965e815fc8217c3e1334b2d2ba79286d5c5a180774438_prof);

        
        $__internal_42398bebb9362d144c2d1cd555c3ea1250758b9ca7fffd6252819959487fcbc6->leave($__internal_42398bebb9362d144c2d1cd555c3ea1250758b9ca7fffd6252819959487fcbc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}

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
        $__internal_de8298ed7af51b9bfd2b1e783520b2f7482139afcf08160d0e0fe48b8e1308a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8298ed7af51b9bfd2b1e783520b2f7482139afcf08160d0e0fe48b8e1308a8->enter($__internal_de8298ed7af51b9bfd2b1e783520b2f7482139afcf08160d0e0fe48b8e1308a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2a4cb781c7829cca707dbea2fc6e049de93d0dcb7727d0da2491332b4277ce2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4cb781c7829cca707dbea2fc6e049de93d0dcb7727d0da2491332b4277ce2d->enter($__internal_2a4cb781c7829cca707dbea2fc6e049de93d0dcb7727d0da2491332b4277ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_de8298ed7af51b9bfd2b1e783520b2f7482139afcf08160d0e0fe48b8e1308a8->leave($__internal_de8298ed7af51b9bfd2b1e783520b2f7482139afcf08160d0e0fe48b8e1308a8_prof);

        
        $__internal_2a4cb781c7829cca707dbea2fc6e049de93d0dcb7727d0da2491332b4277ce2d->leave($__internal_2a4cb781c7829cca707dbea2fc6e049de93d0dcb7727d0da2491332b4277ce2d_prof);

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
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}

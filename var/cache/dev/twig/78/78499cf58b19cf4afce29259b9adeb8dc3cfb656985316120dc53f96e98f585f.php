<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_ed86a47ecdc5115702cc07be5a8c79ae5052a88fb5e93f57a1bc9d18aad8cabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed86a47ecdc5115702cc07be5a8c79ae5052a88fb5e93f57a1bc9d18aad8cabd->enter($__internal_ed86a47ecdc5115702cc07be5a8c79ae5052a88fb5e93f57a1bc9d18aad8cabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_dc91100c8421fa6f801d24a41321b0f5376af77e09b3daeb5d2155336b768a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc91100c8421fa6f801d24a41321b0f5376af77e09b3daeb5d2155336b768a8e->enter($__internal_dc91100c8421fa6f801d24a41321b0f5376af77e09b3daeb5d2155336b768a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ed86a47ecdc5115702cc07be5a8c79ae5052a88fb5e93f57a1bc9d18aad8cabd->leave($__internal_ed86a47ecdc5115702cc07be5a8c79ae5052a88fb5e93f57a1bc9d18aad8cabd_prof);

        
        $__internal_dc91100c8421fa6f801d24a41321b0f5376af77e09b3daeb5d2155336b768a8e->leave($__internal_dc91100c8421fa6f801d24a41321b0f5376af77e09b3daeb5d2155336b768a8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

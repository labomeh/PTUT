<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f8d837562761f99e567bcf8958a6c7f32e26a7929e143cf261520b2ead9a6c3b extends Twig_Template
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
        $__internal_b6437e2276d2406ebbdab1ffbe9d54e25f0eb1f8bfd32683b577bd8a60d0f57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6437e2276d2406ebbdab1ffbe9d54e25f0eb1f8bfd32683b577bd8a60d0f57a->enter($__internal_b6437e2276d2406ebbdab1ffbe9d54e25f0eb1f8bfd32683b577bd8a60d0f57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2600cc5500e77f234fe9c91f6e1aa24395784b6a3ffc5b704ec8e067c3e8188f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2600cc5500e77f234fe9c91f6e1aa24395784b6a3ffc5b704ec8e067c3e8188f->enter($__internal_2600cc5500e77f234fe9c91f6e1aa24395784b6a3ffc5b704ec8e067c3e8188f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b6437e2276d2406ebbdab1ffbe9d54e25f0eb1f8bfd32683b577bd8a60d0f57a->leave($__internal_b6437e2276d2406ebbdab1ffbe9d54e25f0eb1f8bfd32683b577bd8a60d0f57a_prof);

        
        $__internal_2600cc5500e77f234fe9c91f6e1aa24395784b6a3ffc5b704ec8e067c3e8188f->leave($__internal_2600cc5500e77f234fe9c91f6e1aa24395784b6a3ffc5b704ec8e067c3e8188f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

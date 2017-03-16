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
        $__internal_291b5520f3769da0c69b9f5999473d13534f287271fcd84f2346f546030272fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291b5520f3769da0c69b9f5999473d13534f287271fcd84f2346f546030272fa->enter($__internal_291b5520f3769da0c69b9f5999473d13534f287271fcd84f2346f546030272fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_420bcb58eeb450f0c8dc13b7ab446eee77186c8bc4e88fd2bc9ef151da614826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420bcb58eeb450f0c8dc13b7ab446eee77186c8bc4e88fd2bc9ef151da614826->enter($__internal_420bcb58eeb450f0c8dc13b7ab446eee77186c8bc4e88fd2bc9ef151da614826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_291b5520f3769da0c69b9f5999473d13534f287271fcd84f2346f546030272fa->leave($__internal_291b5520f3769da0c69b9f5999473d13534f287271fcd84f2346f546030272fa_prof);

        
        $__internal_420bcb58eeb450f0c8dc13b7ab446eee77186c8bc4e88fd2bc9ef151da614826->leave($__internal_420bcb58eeb450f0c8dc13b7ab446eee77186c8bc4e88fd2bc9ef151da614826_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

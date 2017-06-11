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
        $__internal_43d2a3f07c83aa6ee5c18fe37351ffed87aa4f46eece0cf7ad977eff94c3e22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d2a3f07c83aa6ee5c18fe37351ffed87aa4f46eece0cf7ad977eff94c3e22e->enter($__internal_43d2a3f07c83aa6ee5c18fe37351ffed87aa4f46eece0cf7ad977eff94c3e22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8040e5bcff8a4dce8dec6c3fb405fe87781ab911ed13651753e1c6c0bd203788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8040e5bcff8a4dce8dec6c3fb405fe87781ab911ed13651753e1c6c0bd203788->enter($__internal_8040e5bcff8a4dce8dec6c3fb405fe87781ab911ed13651753e1c6c0bd203788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_43d2a3f07c83aa6ee5c18fe37351ffed87aa4f46eece0cf7ad977eff94c3e22e->leave($__internal_43d2a3f07c83aa6ee5c18fe37351ffed87aa4f46eece0cf7ad977eff94c3e22e_prof);

        
        $__internal_8040e5bcff8a4dce8dec6c3fb405fe87781ab911ed13651753e1c6c0bd203788->leave($__internal_8040e5bcff8a4dce8dec6c3fb405fe87781ab911ed13651753e1c6c0bd203788_prof);

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

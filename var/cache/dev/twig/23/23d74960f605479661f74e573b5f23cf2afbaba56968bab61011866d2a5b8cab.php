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
        $__internal_c8b4ae49a48835c944d5f4c8945ef0ea8af0f3b8a612a9368a2eb7e91d4ee478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b4ae49a48835c944d5f4c8945ef0ea8af0f3b8a612a9368a2eb7e91d4ee478->enter($__internal_c8b4ae49a48835c944d5f4c8945ef0ea8af0f3b8a612a9368a2eb7e91d4ee478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_429ce8c769cb1b0a255a03ac51e0348be320355a00e79aaeb1083e1c6b9b7736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429ce8c769cb1b0a255a03ac51e0348be320355a00e79aaeb1083e1c6b9b7736->enter($__internal_429ce8c769cb1b0a255a03ac51e0348be320355a00e79aaeb1083e1c6b9b7736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c8b4ae49a48835c944d5f4c8945ef0ea8af0f3b8a612a9368a2eb7e91d4ee478->leave($__internal_c8b4ae49a48835c944d5f4c8945ef0ea8af0f3b8a612a9368a2eb7e91d4ee478_prof);

        
        $__internal_429ce8c769cb1b0a255a03ac51e0348be320355a00e79aaeb1083e1c6b9b7736->leave($__internal_429ce8c769cb1b0a255a03ac51e0348be320355a00e79aaeb1083e1c6b9b7736_prof);

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

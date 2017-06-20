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
        $__internal_ae66c2e327b343ad99b40a8258f1228578f6cf24e94cd18f1fb5372d806fb40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae66c2e327b343ad99b40a8258f1228578f6cf24e94cd18f1fb5372d806fb40a->enter($__internal_ae66c2e327b343ad99b40a8258f1228578f6cf24e94cd18f1fb5372d806fb40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cecdd65d899a2eace3b2d216ef3324ec94d3725ccb4d1392a72f65fc0ba9f637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecdd65d899a2eace3b2d216ef3324ec94d3725ccb4d1392a72f65fc0ba9f637->enter($__internal_cecdd65d899a2eace3b2d216ef3324ec94d3725ccb4d1392a72f65fc0ba9f637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ae66c2e327b343ad99b40a8258f1228578f6cf24e94cd18f1fb5372d806fb40a->leave($__internal_ae66c2e327b343ad99b40a8258f1228578f6cf24e94cd18f1fb5372d806fb40a_prof);

        
        $__internal_cecdd65d899a2eace3b2d216ef3324ec94d3725ccb4d1392a72f65fc0ba9f637->leave($__internal_cecdd65d899a2eace3b2d216ef3324ec94d3725ccb4d1392a72f65fc0ba9f637_prof);

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

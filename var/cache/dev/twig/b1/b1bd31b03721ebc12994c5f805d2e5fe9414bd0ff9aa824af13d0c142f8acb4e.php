<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3dd3fcec98b9598adbbda2902b15ece9856c667421bac9f24eff70e939156bf extends Twig_Template
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
        $__internal_082a7a8bbbfb0e27e33b6948102fc7087cbc8b287c5875c343d53bee68d1a0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082a7a8bbbfb0e27e33b6948102fc7087cbc8b287c5875c343d53bee68d1a0d1->enter($__internal_082a7a8bbbfb0e27e33b6948102fc7087cbc8b287c5875c343d53bee68d1a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8d26d7c17493edd4ae2cc17dd800c35476bc3e71ee5ca4107a03bce9e90cf437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d26d7c17493edd4ae2cc17dd800c35476bc3e71ee5ca4107a03bce9e90cf437->enter($__internal_8d26d7c17493edd4ae2cc17dd800c35476bc3e71ee5ca4107a03bce9e90cf437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_082a7a8bbbfb0e27e33b6948102fc7087cbc8b287c5875c343d53bee68d1a0d1->leave($__internal_082a7a8bbbfb0e27e33b6948102fc7087cbc8b287c5875c343d53bee68d1a0d1_prof);

        
        $__internal_8d26d7c17493edd4ae2cc17dd800c35476bc3e71ee5ca4107a03bce9e90cf437->leave($__internal_8d26d7c17493edd4ae2cc17dd800c35476bc3e71ee5ca4107a03bce9e90cf437_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_739da95cb7243c55bb5700a0789afe60c231595ac5e49ca421abbcdc3a0cd681 extends Twig_Template
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
        $__internal_c8d821526c143646b63c1422744d2bb30bbe3affb4a5f4f2db5460fe6d399f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d821526c143646b63c1422744d2bb30bbe3affb4a5f4f2db5460fe6d399f5c->enter($__internal_c8d821526c143646b63c1422744d2bb30bbe3affb4a5f4f2db5460fe6d399f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cbec5703f42972b3d5fdf22fd29874497376100da610d1b7faf24862f92c3485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbec5703f42972b3d5fdf22fd29874497376100da610d1b7faf24862f92c3485->enter($__internal_cbec5703f42972b3d5fdf22fd29874497376100da610d1b7faf24862f92c3485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c8d821526c143646b63c1422744d2bb30bbe3affb4a5f4f2db5460fe6d399f5c->leave($__internal_c8d821526c143646b63c1422744d2bb30bbe3affb4a5f4f2db5460fe6d399f5c_prof);

        
        $__internal_cbec5703f42972b3d5fdf22fd29874497376100da610d1b7faf24862f92c3485->leave($__internal_cbec5703f42972b3d5fdf22fd29874497376100da610d1b7faf24862f92c3485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

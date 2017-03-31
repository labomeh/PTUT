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
        $__internal_015fb1f49caa95111a63b984c333b8b765c68296a3309be395de0e9b6dec5437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015fb1f49caa95111a63b984c333b8b765c68296a3309be395de0e9b6dec5437->enter($__internal_015fb1f49caa95111a63b984c333b8b765c68296a3309be395de0e9b6dec5437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8e6cf022a42c169acf13bf811214859d57dd05563d06a4b47b5b8a2b13ca8072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6cf022a42c169acf13bf811214859d57dd05563d06a4b47b5b8a2b13ca8072->enter($__internal_8e6cf022a42c169acf13bf811214859d57dd05563d06a4b47b5b8a2b13ca8072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_015fb1f49caa95111a63b984c333b8b765c68296a3309be395de0e9b6dec5437->leave($__internal_015fb1f49caa95111a63b984c333b8b765c68296a3309be395de0e9b6dec5437_prof);

        
        $__internal_8e6cf022a42c169acf13bf811214859d57dd05563d06a4b47b5b8a2b13ca8072->leave($__internal_8e6cf022a42c169acf13bf811214859d57dd05563d06a4b47b5b8a2b13ca8072_prof);

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

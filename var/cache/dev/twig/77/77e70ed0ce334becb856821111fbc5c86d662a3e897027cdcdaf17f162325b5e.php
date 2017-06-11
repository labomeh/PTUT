<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_3b956e40a754584f153df251ef6e9fd076c2e204df1d2b3fa5d7ec97a5d1591a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b956e40a754584f153df251ef6e9fd076c2e204df1d2b3fa5d7ec97a5d1591a->enter($__internal_3b956e40a754584f153df251ef6e9fd076c2e204df1d2b3fa5d7ec97a5d1591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_47925d34c90114da94372e0afd5ebd10d1ee839ebf945512dfad5670e3d00667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47925d34c90114da94372e0afd5ebd10d1ee839ebf945512dfad5670e3d00667->enter($__internal_47925d34c90114da94372e0afd5ebd10d1ee839ebf945512dfad5670e3d00667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3b956e40a754584f153df251ef6e9fd076c2e204df1d2b3fa5d7ec97a5d1591a->leave($__internal_3b956e40a754584f153df251ef6e9fd076c2e204df1d2b3fa5d7ec97a5d1591a_prof);

        
        $__internal_47925d34c90114da94372e0afd5ebd10d1ee839ebf945512dfad5670e3d00667->leave($__internal_47925d34c90114da94372e0afd5ebd10d1ee839ebf945512dfad5670e3d00667_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

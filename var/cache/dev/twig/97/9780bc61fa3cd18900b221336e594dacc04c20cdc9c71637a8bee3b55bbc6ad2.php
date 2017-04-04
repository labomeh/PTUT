<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_20b634e212732147540e14a5acd764630f8b6b0511b92cb91543ff0e3ca28496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b634e212732147540e14a5acd764630f8b6b0511b92cb91543ff0e3ca28496->enter($__internal_20b634e212732147540e14a5acd764630f8b6b0511b92cb91543ff0e3ca28496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5e22308cd598103f5eb863114745af460e87d75e2604f7099575fc2929caaa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e22308cd598103f5eb863114745af460e87d75e2604f7099575fc2929caaa36->enter($__internal_5e22308cd598103f5eb863114745af460e87d75e2604f7099575fc2929caaa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_20b634e212732147540e14a5acd764630f8b6b0511b92cb91543ff0e3ca28496->leave($__internal_20b634e212732147540e14a5acd764630f8b6b0511b92cb91543ff0e3ca28496_prof);

        
        $__internal_5e22308cd598103f5eb863114745af460e87d75e2604f7099575fc2929caaa36->leave($__internal_5e22308cd598103f5eb863114745af460e87d75e2604f7099575fc2929caaa36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

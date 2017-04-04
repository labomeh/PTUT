<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd6bde29c12e4a2fad6dc1d6352473d5a801a0fc30fd61fb769919c8608a3c95 extends Twig_Template
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
        $__internal_064151995d208386e5b8a3f86583b2e365c0f8371fcbcafa5e09f393ea8fc551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064151995d208386e5b8a3f86583b2e365c0f8371fcbcafa5e09f393ea8fc551->enter($__internal_064151995d208386e5b8a3f86583b2e365c0f8371fcbcafa5e09f393ea8fc551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3caa9b7e1b1e3fcc2acfcdbb96540087c52a6f449eab1ab2ff18ab137e920149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caa9b7e1b1e3fcc2acfcdbb96540087c52a6f449eab1ab2ff18ab137e920149->enter($__internal_3caa9b7e1b1e3fcc2acfcdbb96540087c52a6f449eab1ab2ff18ab137e920149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_064151995d208386e5b8a3f86583b2e365c0f8371fcbcafa5e09f393ea8fc551->leave($__internal_064151995d208386e5b8a3f86583b2e365c0f8371fcbcafa5e09f393ea8fc551_prof);

        
        $__internal_3caa9b7e1b1e3fcc2acfcdbb96540087c52a6f449eab1ab2ff18ab137e920149->leave($__internal_3caa9b7e1b1e3fcc2acfcdbb96540087c52a6f449eab1ab2ff18ab137e920149_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

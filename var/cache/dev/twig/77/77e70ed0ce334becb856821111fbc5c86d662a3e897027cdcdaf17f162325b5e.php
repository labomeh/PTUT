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
        $__internal_8d4ab34f20e3d597d440e8f5627a9b7b009ff78a6efeb0d380e28f88b62e70c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4ab34f20e3d597d440e8f5627a9b7b009ff78a6efeb0d380e28f88b62e70c2->enter($__internal_8d4ab34f20e3d597d440e8f5627a9b7b009ff78a6efeb0d380e28f88b62e70c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_29041960a1368b130e5939fbe7d678a72a36f8e5d32f4373badd28098e61112e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29041960a1368b130e5939fbe7d678a72a36f8e5d32f4373badd28098e61112e->enter($__internal_29041960a1368b130e5939fbe7d678a72a36f8e5d32f4373badd28098e61112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8d4ab34f20e3d597d440e8f5627a9b7b009ff78a6efeb0d380e28f88b62e70c2->leave($__internal_8d4ab34f20e3d597d440e8f5627a9b7b009ff78a6efeb0d380e28f88b62e70c2_prof);

        
        $__internal_29041960a1368b130e5939fbe7d678a72a36f8e5d32f4373badd28098e61112e->leave($__internal_29041960a1368b130e5939fbe7d678a72a36f8e5d32f4373badd28098e61112e_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

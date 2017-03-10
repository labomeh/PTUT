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
        $__internal_864885e674f6b8b360ed8e2db482dd766e4a7f52607f2a2ebf0681e4b2744248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864885e674f6b8b360ed8e2db482dd766e4a7f52607f2a2ebf0681e4b2744248->enter($__internal_864885e674f6b8b360ed8e2db482dd766e4a7f52607f2a2ebf0681e4b2744248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ebecf4db6a4f07f2ace90e0ed3fe0591a1919d02b6e212b2c17df5293617e795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebecf4db6a4f07f2ace90e0ed3fe0591a1919d02b6e212b2c17df5293617e795->enter($__internal_ebecf4db6a4f07f2ace90e0ed3fe0591a1919d02b6e212b2c17df5293617e795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_864885e674f6b8b360ed8e2db482dd766e4a7f52607f2a2ebf0681e4b2744248->leave($__internal_864885e674f6b8b360ed8e2db482dd766e4a7f52607f2a2ebf0681e4b2744248_prof);

        
        $__internal_ebecf4db6a4f07f2ace90e0ed3fe0591a1919d02b6e212b2c17df5293617e795->leave($__internal_ebecf4db6a4f07f2ace90e0ed3fe0591a1919d02b6e212b2c17df5293617e795_prof);

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

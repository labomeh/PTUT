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
        $__internal_898650290e9b570cb3edf6f3b3f826c07132b3e4e2656b8a341e4fb52dfcf611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898650290e9b570cb3edf6f3b3f826c07132b3e4e2656b8a341e4fb52dfcf611->enter($__internal_898650290e9b570cb3edf6f3b3f826c07132b3e4e2656b8a341e4fb52dfcf611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b88a34afbc0b78d4ad012a09bc1ba22b08da9fc670b2b8d9edd191952758f97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88a34afbc0b78d4ad012a09bc1ba22b08da9fc670b2b8d9edd191952758f97f->enter($__internal_b88a34afbc0b78d4ad012a09bc1ba22b08da9fc670b2b8d9edd191952758f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_898650290e9b570cb3edf6f3b3f826c07132b3e4e2656b8a341e4fb52dfcf611->leave($__internal_898650290e9b570cb3edf6f3b3f826c07132b3e4e2656b8a341e4fb52dfcf611_prof);

        
        $__internal_b88a34afbc0b78d4ad012a09bc1ba22b08da9fc670b2b8d9edd191952758f97f->leave($__internal_b88a34afbc0b78d4ad012a09bc1ba22b08da9fc670b2b8d9edd191952758f97f_prof);

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
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

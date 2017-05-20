<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c4bd20018e0fbad59f3b7de5d1f00ccec1b0d56d952fd169bf466198bb251fef extends Twig_Template
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
        $__internal_945e698d45882b9ffd8d1e5a8626dba741862f99f2405c95f07fc5805a67250a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945e698d45882b9ffd8d1e5a8626dba741862f99f2405c95f07fc5805a67250a->enter($__internal_945e698d45882b9ffd8d1e5a8626dba741862f99f2405c95f07fc5805a67250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4c0869a7ff35a5d6293e72749564b50b2798abe238961891896dbdfb432dfd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0869a7ff35a5d6293e72749564b50b2798abe238961891896dbdfb432dfd4a->enter($__internal_4c0869a7ff35a5d6293e72749564b50b2798abe238961891896dbdfb432dfd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_945e698d45882b9ffd8d1e5a8626dba741862f99f2405c95f07fc5805a67250a->leave($__internal_945e698d45882b9ffd8d1e5a8626dba741862f99f2405c95f07fc5805a67250a_prof);

        
        $__internal_4c0869a7ff35a5d6293e72749564b50b2798abe238961891896dbdfb432dfd4a->leave($__internal_4c0869a7ff35a5d6293e72749564b50b2798abe238961891896dbdfb432dfd4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

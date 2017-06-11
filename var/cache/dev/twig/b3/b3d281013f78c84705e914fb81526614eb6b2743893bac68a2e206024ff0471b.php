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
        $__internal_cdafe4318d5a07579ff7140f073ae3ee0eaa46c593193559b96380100a67e8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdafe4318d5a07579ff7140f073ae3ee0eaa46c593193559b96380100a67e8ff->enter($__internal_cdafe4318d5a07579ff7140f073ae3ee0eaa46c593193559b96380100a67e8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_85c196e6ddcec1c85745b876103cb61dec452bb07b21da2ba5e52c360e7f6f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c196e6ddcec1c85745b876103cb61dec452bb07b21da2ba5e52c360e7f6f13->enter($__internal_85c196e6ddcec1c85745b876103cb61dec452bb07b21da2ba5e52c360e7f6f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cdafe4318d5a07579ff7140f073ae3ee0eaa46c593193559b96380100a67e8ff->leave($__internal_cdafe4318d5a07579ff7140f073ae3ee0eaa46c593193559b96380100a67e8ff_prof);

        
        $__internal_85c196e6ddcec1c85745b876103cb61dec452bb07b21da2ba5e52c360e7f6f13->leave($__internal_85c196e6ddcec1c85745b876103cb61dec452bb07b21da2ba5e52c360e7f6f13_prof);

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

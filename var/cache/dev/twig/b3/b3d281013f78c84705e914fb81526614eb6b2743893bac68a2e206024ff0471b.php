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
        $__internal_a5b2b5d54b5f1e441f5203233450f5a483423b7f5be83db001bac5437cd07f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b2b5d54b5f1e441f5203233450f5a483423b7f5be83db001bac5437cd07f06->enter($__internal_a5b2b5d54b5f1e441f5203233450f5a483423b7f5be83db001bac5437cd07f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3b22812850f730d2683191efac47d4becde17be9fdb91bd0decde26153a6500e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b22812850f730d2683191efac47d4becde17be9fdb91bd0decde26153a6500e->enter($__internal_3b22812850f730d2683191efac47d4becde17be9fdb91bd0decde26153a6500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a5b2b5d54b5f1e441f5203233450f5a483423b7f5be83db001bac5437cd07f06->leave($__internal_a5b2b5d54b5f1e441f5203233450f5a483423b7f5be83db001bac5437cd07f06_prof);

        
        $__internal_3b22812850f730d2683191efac47d4becde17be9fdb91bd0decde26153a6500e->leave($__internal_3b22812850f730d2683191efac47d4becde17be9fdb91bd0decde26153a6500e_prof);

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

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
        $__internal_80b1dd8860a318673f932f1446a95871ccc1c75152328517a33afb6a3bfc1c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b1dd8860a318673f932f1446a95871ccc1c75152328517a33afb6a3bfc1c15->enter($__internal_80b1dd8860a318673f932f1446a95871ccc1c75152328517a33afb6a3bfc1c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c2bea08c7003a850194f03c4dc79c78192b6b5d4e518ac30208ef5a35bf384cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bea08c7003a850194f03c4dc79c78192b6b5d4e518ac30208ef5a35bf384cb->enter($__internal_c2bea08c7003a850194f03c4dc79c78192b6b5d4e518ac30208ef5a35bf384cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_80b1dd8860a318673f932f1446a95871ccc1c75152328517a33afb6a3bfc1c15->leave($__internal_80b1dd8860a318673f932f1446a95871ccc1c75152328517a33afb6a3bfc1c15_prof);

        
        $__internal_c2bea08c7003a850194f03c4dc79c78192b6b5d4e518ac30208ef5a35bf384cb->leave($__internal_c2bea08c7003a850194f03c4dc79c78192b6b5d4e518ac30208ef5a35bf384cb_prof);

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

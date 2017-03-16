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
        $__internal_4b293e68dec3e2ea47b09f533ce15172b0aa46160f5e406ab882e9ffc8c53052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b293e68dec3e2ea47b09f533ce15172b0aa46160f5e406ab882e9ffc8c53052->enter($__internal_4b293e68dec3e2ea47b09f533ce15172b0aa46160f5e406ab882e9ffc8c53052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4ff47344445aae0e2bf5155c531388082953c8a77e112f3f08c6b9a9a9f67599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff47344445aae0e2bf5155c531388082953c8a77e112f3f08c6b9a9a9f67599->enter($__internal_4ff47344445aae0e2bf5155c531388082953c8a77e112f3f08c6b9a9a9f67599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4b293e68dec3e2ea47b09f533ce15172b0aa46160f5e406ab882e9ffc8c53052->leave($__internal_4b293e68dec3e2ea47b09f533ce15172b0aa46160f5e406ab882e9ffc8c53052_prof);

        
        $__internal_4ff47344445aae0e2bf5155c531388082953c8a77e112f3f08c6b9a9a9f67599->leave($__internal_4ff47344445aae0e2bf5155c531388082953c8a77e112f3f08c6b9a9a9f67599_prof);

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
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

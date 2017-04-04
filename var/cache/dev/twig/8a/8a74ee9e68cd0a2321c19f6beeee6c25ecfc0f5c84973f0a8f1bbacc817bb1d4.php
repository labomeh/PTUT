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
        $__internal_7b39b6f45905bd73e53681cf31839f1f4e6dedfc026bc0b83a49b991dbc2f833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b39b6f45905bd73e53681cf31839f1f4e6dedfc026bc0b83a49b991dbc2f833->enter($__internal_7b39b6f45905bd73e53681cf31839f1f4e6dedfc026bc0b83a49b991dbc2f833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9832ea3e644f3d4625e339eadd50fe5f8e24b282b5c86a1a8473283feb98db69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9832ea3e644f3d4625e339eadd50fe5f8e24b282b5c86a1a8473283feb98db69->enter($__internal_9832ea3e644f3d4625e339eadd50fe5f8e24b282b5c86a1a8473283feb98db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7b39b6f45905bd73e53681cf31839f1f4e6dedfc026bc0b83a49b991dbc2f833->leave($__internal_7b39b6f45905bd73e53681cf31839f1f4e6dedfc026bc0b83a49b991dbc2f833_prof);

        
        $__internal_9832ea3e644f3d4625e339eadd50fe5f8e24b282b5c86a1a8473283feb98db69->leave($__internal_9832ea3e644f3d4625e339eadd50fe5f8e24b282b5c86a1a8473283feb98db69_prof);

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

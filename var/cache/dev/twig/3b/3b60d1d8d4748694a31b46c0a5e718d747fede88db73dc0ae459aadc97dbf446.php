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
        $__internal_df1fd478c00b580dc37924ccd6ad79b6007c424f5e841f699db6c2450f269324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1fd478c00b580dc37924ccd6ad79b6007c424f5e841f699db6c2450f269324->enter($__internal_df1fd478c00b580dc37924ccd6ad79b6007c424f5e841f699db6c2450f269324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5827770cd214618a95a5c2369277b41313fefd04fb16bb09ea300d27a33e0510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5827770cd214618a95a5c2369277b41313fefd04fb16bb09ea300d27a33e0510->enter($__internal_5827770cd214618a95a5c2369277b41313fefd04fb16bb09ea300d27a33e0510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_df1fd478c00b580dc37924ccd6ad79b6007c424f5e841f699db6c2450f269324->leave($__internal_df1fd478c00b580dc37924ccd6ad79b6007c424f5e841f699db6c2450f269324_prof);

        
        $__internal_5827770cd214618a95a5c2369277b41313fefd04fb16bb09ea300d27a33e0510->leave($__internal_5827770cd214618a95a5c2369277b41313fefd04fb16bb09ea300d27a33e0510_prof);

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

<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_60e4c89623cceb6bbce80753f52f6abb881e1fb7a88d35ada90c333489a8b02f extends Twig_Template
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
        $__internal_8c245a4911c6c75ca2ad39f4e285ef498b97166396a10d7e5022fa907157e985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c245a4911c6c75ca2ad39f4e285ef498b97166396a10d7e5022fa907157e985->enter($__internal_8c245a4911c6c75ca2ad39f4e285ef498b97166396a10d7e5022fa907157e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4306e5f561dee6c1e5059dbc575aaa97820e8686da46e8b9c4dd8d7ecf50187a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4306e5f561dee6c1e5059dbc575aaa97820e8686da46e8b9c4dd8d7ecf50187a->enter($__internal_4306e5f561dee6c1e5059dbc575aaa97820e8686da46e8b9c4dd8d7ecf50187a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8c245a4911c6c75ca2ad39f4e285ef498b97166396a10d7e5022fa907157e985->leave($__internal_8c245a4911c6c75ca2ad39f4e285ef498b97166396a10d7e5022fa907157e985_prof);

        
        $__internal_4306e5f561dee6c1e5059dbc575aaa97820e8686da46e8b9c4dd8d7ecf50187a->leave($__internal_4306e5f561dee6c1e5059dbc575aaa97820e8686da46e8b9c4dd8d7ecf50187a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

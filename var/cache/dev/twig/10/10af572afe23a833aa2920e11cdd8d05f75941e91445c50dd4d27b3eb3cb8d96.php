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
        $__internal_bbfa93f8a375658a27be46b1a10318d54bd18bd4b7366e168514a9e0e1f40efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfa93f8a375658a27be46b1a10318d54bd18bd4b7366e168514a9e0e1f40efd->enter($__internal_bbfa93f8a375658a27be46b1a10318d54bd18bd4b7366e168514a9e0e1f40efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c57caa79c0a2fb1247671d9f793b7490652704be4706eb1e4cfaae2907754ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57caa79c0a2fb1247671d9f793b7490652704be4706eb1e4cfaae2907754ff0->enter($__internal_c57caa79c0a2fb1247671d9f793b7490652704be4706eb1e4cfaae2907754ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bbfa93f8a375658a27be46b1a10318d54bd18bd4b7366e168514a9e0e1f40efd->leave($__internal_bbfa93f8a375658a27be46b1a10318d54bd18bd4b7366e168514a9e0e1f40efd_prof);

        
        $__internal_c57caa79c0a2fb1247671d9f793b7490652704be4706eb1e4cfaae2907754ff0->leave($__internal_c57caa79c0a2fb1247671d9f793b7490652704be4706eb1e4cfaae2907754ff0_prof);

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

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
        $__internal_caef82cc63b04a4b24842154bab16f07771714e69942cb9f7e29646f2331d3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caef82cc63b04a4b24842154bab16f07771714e69942cb9f7e29646f2331d3c8->enter($__internal_caef82cc63b04a4b24842154bab16f07771714e69942cb9f7e29646f2331d3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8cb384e4e75ae9d67449e666690bbc24325e404a2d595c00ab1e0f7e14257896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb384e4e75ae9d67449e666690bbc24325e404a2d595c00ab1e0f7e14257896->enter($__internal_8cb384e4e75ae9d67449e666690bbc24325e404a2d595c00ab1e0f7e14257896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_caef82cc63b04a4b24842154bab16f07771714e69942cb9f7e29646f2331d3c8->leave($__internal_caef82cc63b04a4b24842154bab16f07771714e69942cb9f7e29646f2331d3c8_prof);

        
        $__internal_8cb384e4e75ae9d67449e666690bbc24325e404a2d595c00ab1e0f7e14257896->leave($__internal_8cb384e4e75ae9d67449e666690bbc24325e404a2d595c00ab1e0f7e14257896_prof);

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

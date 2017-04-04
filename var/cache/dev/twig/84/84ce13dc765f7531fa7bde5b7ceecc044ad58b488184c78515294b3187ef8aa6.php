<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_899395eb8f93ff7f2bbf1989f52b4496c16e1665d2242bcf11bf7a06ecbaa275 extends Twig_Template
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
        $__internal_6ab027e4b0def95c3a2171b8e3a839b5566f8dc728244c9845fb8cccce836ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab027e4b0def95c3a2171b8e3a839b5566f8dc728244c9845fb8cccce836ba3->enter($__internal_6ab027e4b0def95c3a2171b8e3a839b5566f8dc728244c9845fb8cccce836ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4221b18ae664e6f294ceca1da266e77734479c7e5cf9ea8c37436d436b724193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4221b18ae664e6f294ceca1da266e77734479c7e5cf9ea8c37436d436b724193->enter($__internal_4221b18ae664e6f294ceca1da266e77734479c7e5cf9ea8c37436d436b724193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6ab027e4b0def95c3a2171b8e3a839b5566f8dc728244c9845fb8cccce836ba3->leave($__internal_6ab027e4b0def95c3a2171b8e3a839b5566f8dc728244c9845fb8cccce836ba3_prof);

        
        $__internal_4221b18ae664e6f294ceca1da266e77734479c7e5cf9ea8c37436d436b724193->leave($__internal_4221b18ae664e6f294ceca1da266e77734479c7e5cf9ea8c37436d436b724193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

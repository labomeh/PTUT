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
        $__internal_07f2813b4b40f5fa52b54c36bb891763acc7952d9b995bb28778f91ec0f708bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f2813b4b40f5fa52b54c36bb891763acc7952d9b995bb28778f91ec0f708bf->enter($__internal_07f2813b4b40f5fa52b54c36bb891763acc7952d9b995bb28778f91ec0f708bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_432cc471fcb5f4857a096b8f45732d241d40caed4afc05d0d0aaff7f6af3ef85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432cc471fcb5f4857a096b8f45732d241d40caed4afc05d0d0aaff7f6af3ef85->enter($__internal_432cc471fcb5f4857a096b8f45732d241d40caed4afc05d0d0aaff7f6af3ef85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_07f2813b4b40f5fa52b54c36bb891763acc7952d9b995bb28778f91ec0f708bf->leave($__internal_07f2813b4b40f5fa52b54c36bb891763acc7952d9b995bb28778f91ec0f708bf_prof);

        
        $__internal_432cc471fcb5f4857a096b8f45732d241d40caed4afc05d0d0aaff7f6af3ef85->leave($__internal_432cc471fcb5f4857a096b8f45732d241d40caed4afc05d0d0aaff7f6af3ef85_prof);

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
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

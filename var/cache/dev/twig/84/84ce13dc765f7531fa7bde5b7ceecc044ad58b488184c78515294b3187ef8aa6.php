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
        $__internal_8b25d3b79520e667b6bed8cbd44d4d32f6d88f1fa738d0c509050315e4a02631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b25d3b79520e667b6bed8cbd44d4d32f6d88f1fa738d0c509050315e4a02631->enter($__internal_8b25d3b79520e667b6bed8cbd44d4d32f6d88f1fa738d0c509050315e4a02631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c8d49d903ae2e649c08a131d0a95ebd4938bcf91f5175ef343694c44ba4c1b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d49d903ae2e649c08a131d0a95ebd4938bcf91f5175ef343694c44ba4c1b8c->enter($__internal_c8d49d903ae2e649c08a131d0a95ebd4938bcf91f5175ef343694c44ba4c1b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8b25d3b79520e667b6bed8cbd44d4d32f6d88f1fa738d0c509050315e4a02631->leave($__internal_8b25d3b79520e667b6bed8cbd44d4d32f6d88f1fa738d0c509050315e4a02631_prof);

        
        $__internal_c8d49d903ae2e649c08a131d0a95ebd4938bcf91f5175ef343694c44ba4c1b8c->leave($__internal_c8d49d903ae2e649c08a131d0a95ebd4938bcf91f5175ef343694c44ba4c1b8c_prof);

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

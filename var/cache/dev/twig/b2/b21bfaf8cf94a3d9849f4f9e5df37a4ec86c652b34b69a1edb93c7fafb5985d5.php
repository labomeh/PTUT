<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5cbcf378b9312a5ec3b687f97ddee2000149bd431d7fc22695742620f4f77ba5 extends Twig_Template
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
        $__internal_69e8655dc177eb4d894dc0c1c029a820eb7c5102713fd285e0f22e7d9e43eb15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e8655dc177eb4d894dc0c1c029a820eb7c5102713fd285e0f22e7d9e43eb15->enter($__internal_69e8655dc177eb4d894dc0c1c029a820eb7c5102713fd285e0f22e7d9e43eb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d6934d89f75c85aaf4c1d6ebc9cc889f01b3ce2e785752a1a2dadb4965b3775b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6934d89f75c85aaf4c1d6ebc9cc889f01b3ce2e785752a1a2dadb4965b3775b->enter($__internal_d6934d89f75c85aaf4c1d6ebc9cc889f01b3ce2e785752a1a2dadb4965b3775b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_69e8655dc177eb4d894dc0c1c029a820eb7c5102713fd285e0f22e7d9e43eb15->leave($__internal_69e8655dc177eb4d894dc0c1c029a820eb7c5102713fd285e0f22e7d9e43eb15_prof);

        
        $__internal_d6934d89f75c85aaf4c1d6ebc9cc889f01b3ce2e785752a1a2dadb4965b3775b->leave($__internal_d6934d89f75c85aaf4c1d6ebc9cc889f01b3ce2e785752a1a2dadb4965b3775b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_e3128502814b18455e83c904561c166cd08b51669976fc7b2427dc5f817f7971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3128502814b18455e83c904561c166cd08b51669976fc7b2427dc5f817f7971->enter($__internal_e3128502814b18455e83c904561c166cd08b51669976fc7b2427dc5f817f7971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_aa5b4fa3ea0ce5e38b9ca531db5c262049517e53ffaa8bcd570629ff41873805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5b4fa3ea0ce5e38b9ca531db5c262049517e53ffaa8bcd570629ff41873805->enter($__internal_aa5b4fa3ea0ce5e38b9ca531db5c262049517e53ffaa8bcd570629ff41873805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e3128502814b18455e83c904561c166cd08b51669976fc7b2427dc5f817f7971->leave($__internal_e3128502814b18455e83c904561c166cd08b51669976fc7b2427dc5f817f7971_prof);

        
        $__internal_aa5b4fa3ea0ce5e38b9ca531db5c262049517e53ffaa8bcd570629ff41873805->leave($__internal_aa5b4fa3ea0ce5e38b9ca531db5c262049517e53ffaa8bcd570629ff41873805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

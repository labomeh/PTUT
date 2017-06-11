<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_249942dc1bd6a1fa3960de53da2e6bf496c8faf802bdcd909d0f5790bcd286db extends Twig_Template
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
        $__internal_b31c3dd8eb6cdc7339f0640f2c6acf5b2d5a9a8fdf0f9ecd25cd0c195cd77ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31c3dd8eb6cdc7339f0640f2c6acf5b2d5a9a8fdf0f9ecd25cd0c195cd77ad2->enter($__internal_b31c3dd8eb6cdc7339f0640f2c6acf5b2d5a9a8fdf0f9ecd25cd0c195cd77ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bb333e1e2e81630456ab28463ac4ef16d4fdb4420330eecca216e22a153569a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb333e1e2e81630456ab28463ac4ef16d4fdb4420330eecca216e22a153569a1->enter($__internal_bb333e1e2e81630456ab28463ac4ef16d4fdb4420330eecca216e22a153569a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b31c3dd8eb6cdc7339f0640f2c6acf5b2d5a9a8fdf0f9ecd25cd0c195cd77ad2->leave($__internal_b31c3dd8eb6cdc7339f0640f2c6acf5b2d5a9a8fdf0f9ecd25cd0c195cd77ad2_prof);

        
        $__internal_bb333e1e2e81630456ab28463ac4ef16d4fdb4420330eecca216e22a153569a1->leave($__internal_bb333e1e2e81630456ab28463ac4ef16d4fdb4420330eecca216e22a153569a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_24079ab91f6fc05b0786c44f0732f4460ad51d3629e8245f249e9cd450444fb4 extends Twig_Template
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
        $__internal_a744d3051d3d241c3a5b356252e6010053e58d7cc449dae65b3b7e5649ca24a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a744d3051d3d241c3a5b356252e6010053e58d7cc449dae65b3b7e5649ca24a0->enter($__internal_a744d3051d3d241c3a5b356252e6010053e58d7cc449dae65b3b7e5649ca24a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c82897b1f4fb0237d456d9e57634e324e0f3e1375facd7939515da41ff32119f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82897b1f4fb0237d456d9e57634e324e0f3e1375facd7939515da41ff32119f->enter($__internal_c82897b1f4fb0237d456d9e57634e324e0f3e1375facd7939515da41ff32119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a744d3051d3d241c3a5b356252e6010053e58d7cc449dae65b3b7e5649ca24a0->leave($__internal_a744d3051d3d241c3a5b356252e6010053e58d7cc449dae65b3b7e5649ca24a0_prof);

        
        $__internal_c82897b1f4fb0237d456d9e57634e324e0f3e1375facd7939515da41ff32119f->leave($__internal_c82897b1f4fb0237d456d9e57634e324e0f3e1375facd7939515da41ff32119f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

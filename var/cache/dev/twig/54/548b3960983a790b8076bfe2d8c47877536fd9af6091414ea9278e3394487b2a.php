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
        $__internal_58ddbea6f03d617bcc96dda0d8980e2e74766cc71723630d2a2b16ee3f9daf6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ddbea6f03d617bcc96dda0d8980e2e74766cc71723630d2a2b16ee3f9daf6a->enter($__internal_58ddbea6f03d617bcc96dda0d8980e2e74766cc71723630d2a2b16ee3f9daf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1526da11613236db4dcecc8ce168087e15a3475b200fec12db6d1b655711e897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1526da11613236db4dcecc8ce168087e15a3475b200fec12db6d1b655711e897->enter($__internal_1526da11613236db4dcecc8ce168087e15a3475b200fec12db6d1b655711e897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_58ddbea6f03d617bcc96dda0d8980e2e74766cc71723630d2a2b16ee3f9daf6a->leave($__internal_58ddbea6f03d617bcc96dda0d8980e2e74766cc71723630d2a2b16ee3f9daf6a_prof);

        
        $__internal_1526da11613236db4dcecc8ce168087e15a3475b200fec12db6d1b655711e897->leave($__internal_1526da11613236db4dcecc8ce168087e15a3475b200fec12db6d1b655711e897_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

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
        $__internal_dd7a074816d2d485b3bbf573dfa1644bcbb1fb91585f85979c89b1d2a3e45379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7a074816d2d485b3bbf573dfa1644bcbb1fb91585f85979c89b1d2a3e45379->enter($__internal_dd7a074816d2d485b3bbf573dfa1644bcbb1fb91585f85979c89b1d2a3e45379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e69621029afd12017a9ef2cfe04cfd90d773829cafedd0617b154149dba49e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69621029afd12017a9ef2cfe04cfd90d773829cafedd0617b154149dba49e4b->enter($__internal_e69621029afd12017a9ef2cfe04cfd90d773829cafedd0617b154149dba49e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dd7a074816d2d485b3bbf573dfa1644bcbb1fb91585f85979c89b1d2a3e45379->leave($__internal_dd7a074816d2d485b3bbf573dfa1644bcbb1fb91585f85979c89b1d2a3e45379_prof);

        
        $__internal_e69621029afd12017a9ef2cfe04cfd90d773829cafedd0617b154149dba49e4b->leave($__internal_e69621029afd12017a9ef2cfe04cfd90d773829cafedd0617b154149dba49e4b_prof);

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

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
        $__internal_e10b1ef37dbc186af285412002674fe6174da698c3fd715df24a0c6e503ad8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10b1ef37dbc186af285412002674fe6174da698c3fd715df24a0c6e503ad8f8->enter($__internal_e10b1ef37dbc186af285412002674fe6174da698c3fd715df24a0c6e503ad8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0ea1faa357b13e3fe95ab63d357fb686c44fde83fce746b0fd490ce1e6de036f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea1faa357b13e3fe95ab63d357fb686c44fde83fce746b0fd490ce1e6de036f->enter($__internal_0ea1faa357b13e3fe95ab63d357fb686c44fde83fce746b0fd490ce1e6de036f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e10b1ef37dbc186af285412002674fe6174da698c3fd715df24a0c6e503ad8f8->leave($__internal_e10b1ef37dbc186af285412002674fe6174da698c3fd715df24a0c6e503ad8f8_prof);

        
        $__internal_0ea1faa357b13e3fe95ab63d357fb686c44fde83fce746b0fd490ce1e6de036f->leave($__internal_0ea1faa357b13e3fe95ab63d357fb686c44fde83fce746b0fd490ce1e6de036f_prof);

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

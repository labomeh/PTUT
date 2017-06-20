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
        $__internal_b6c21b56474800f8f894a3d06863ca74e481722d7ce5797a3399f5f0ef9d471d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c21b56474800f8f894a3d06863ca74e481722d7ce5797a3399f5f0ef9d471d->enter($__internal_b6c21b56474800f8f894a3d06863ca74e481722d7ce5797a3399f5f0ef9d471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_60f22fdc1a1ed69fddf35598554ebd370bafec25fa27b1a8b1c39490ff21f723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f22fdc1a1ed69fddf35598554ebd370bafec25fa27b1a8b1c39490ff21f723->enter($__internal_60f22fdc1a1ed69fddf35598554ebd370bafec25fa27b1a8b1c39490ff21f723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b6c21b56474800f8f894a3d06863ca74e481722d7ce5797a3399f5f0ef9d471d->leave($__internal_b6c21b56474800f8f894a3d06863ca74e481722d7ce5797a3399f5f0ef9d471d_prof);

        
        $__internal_60f22fdc1a1ed69fddf35598554ebd370bafec25fa27b1a8b1c39490ff21f723->leave($__internal_60f22fdc1a1ed69fddf35598554ebd370bafec25fa27b1a8b1c39490ff21f723_prof);

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

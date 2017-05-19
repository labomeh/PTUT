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
        $__internal_42321ae810ca799fa3a264eaa1c3dd53c2ecffa25411eada87b3077e887712f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42321ae810ca799fa3a264eaa1c3dd53c2ecffa25411eada87b3077e887712f3->enter($__internal_42321ae810ca799fa3a264eaa1c3dd53c2ecffa25411eada87b3077e887712f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3af58384f0a4b1d5b1fd3dd1b12125965fd51dc3db60f3e9e976922b24fc2ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af58384f0a4b1d5b1fd3dd1b12125965fd51dc3db60f3e9e976922b24fc2ac9->enter($__internal_3af58384f0a4b1d5b1fd3dd1b12125965fd51dc3db60f3e9e976922b24fc2ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_42321ae810ca799fa3a264eaa1c3dd53c2ecffa25411eada87b3077e887712f3->leave($__internal_42321ae810ca799fa3a264eaa1c3dd53c2ecffa25411eada87b3077e887712f3_prof);

        
        $__internal_3af58384f0a4b1d5b1fd3dd1b12125965fd51dc3db60f3e9e976922b24fc2ac9->leave($__internal_3af58384f0a4b1d5b1fd3dd1b12125965fd51dc3db60f3e9e976922b24fc2ac9_prof);

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

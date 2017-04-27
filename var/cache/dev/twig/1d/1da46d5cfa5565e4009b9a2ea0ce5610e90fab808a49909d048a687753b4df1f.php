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
        $__internal_ae49d532f5f59301828cd6756f933060bfe547d9f34a966a334cd08e74629821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae49d532f5f59301828cd6756f933060bfe547d9f34a966a334cd08e74629821->enter($__internal_ae49d532f5f59301828cd6756f933060bfe547d9f34a966a334cd08e74629821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_79fd64cc2d1d9bd30669e83073087f381b2bae85c950bc25100a4e0a4cf8586c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fd64cc2d1d9bd30669e83073087f381b2bae85c950bc25100a4e0a4cf8586c->enter($__internal_79fd64cc2d1d9bd30669e83073087f381b2bae85c950bc25100a4e0a4cf8586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ae49d532f5f59301828cd6756f933060bfe547d9f34a966a334cd08e74629821->leave($__internal_ae49d532f5f59301828cd6756f933060bfe547d9f34a966a334cd08e74629821_prof);

        
        $__internal_79fd64cc2d1d9bd30669e83073087f381b2bae85c950bc25100a4e0a4cf8586c->leave($__internal_79fd64cc2d1d9bd30669e83073087f381b2bae85c950bc25100a4e0a4cf8586c_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

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
        $__internal_84d9d58f06c2236052756f9083e4db9b7946021470f745aa0348294d54e00045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d9d58f06c2236052756f9083e4db9b7946021470f745aa0348294d54e00045->enter($__internal_84d9d58f06c2236052756f9083e4db9b7946021470f745aa0348294d54e00045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7e7006203b2e24e0da774c8771cc7c85be419888cb50724dffb3eb399819a1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7006203b2e24e0da774c8771cc7c85be419888cb50724dffb3eb399819a1e3->enter($__internal_7e7006203b2e24e0da774c8771cc7c85be419888cb50724dffb3eb399819a1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_84d9d58f06c2236052756f9083e4db9b7946021470f745aa0348294d54e00045->leave($__internal_84d9d58f06c2236052756f9083e4db9b7946021470f745aa0348294d54e00045_prof);

        
        $__internal_7e7006203b2e24e0da774c8771cc7c85be419888cb50724dffb3eb399819a1e3->leave($__internal_7e7006203b2e24e0da774c8771cc7c85be419888cb50724dffb3eb399819a1e3_prof);

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

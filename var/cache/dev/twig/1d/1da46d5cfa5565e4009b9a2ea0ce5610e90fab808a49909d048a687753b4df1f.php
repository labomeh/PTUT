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
        $__internal_0081503960967742c40e54d547f5028257bb3e569b514d3217d02ab06932d121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0081503960967742c40e54d547f5028257bb3e569b514d3217d02ab06932d121->enter($__internal_0081503960967742c40e54d547f5028257bb3e569b514d3217d02ab06932d121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_86df782e1e0f4c93887d363d82aee9dde4fe7d2d73257de657c0f226d0eb5490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86df782e1e0f4c93887d363d82aee9dde4fe7d2d73257de657c0f226d0eb5490->enter($__internal_86df782e1e0f4c93887d363d82aee9dde4fe7d2d73257de657c0f226d0eb5490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0081503960967742c40e54d547f5028257bb3e569b514d3217d02ab06932d121->leave($__internal_0081503960967742c40e54d547f5028257bb3e569b514d3217d02ab06932d121_prof);

        
        $__internal_86df782e1e0f4c93887d363d82aee9dde4fe7d2d73257de657c0f226d0eb5490->leave($__internal_86df782e1e0f4c93887d363d82aee9dde4fe7d2d73257de657c0f226d0eb5490_prof);

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

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
        $__internal_8aaf295a9aef7c6cb26e7cf0b82d21ac07096ca5f8cb7b2bafd8d875c0233085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aaf295a9aef7c6cb26e7cf0b82d21ac07096ca5f8cb7b2bafd8d875c0233085->enter($__internal_8aaf295a9aef7c6cb26e7cf0b82d21ac07096ca5f8cb7b2bafd8d875c0233085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1151df18448c3e44a56f8ebe226e2fa9f67a3095bd51c2857c8d1c6bd5c94fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1151df18448c3e44a56f8ebe226e2fa9f67a3095bd51c2857c8d1c6bd5c94fe5->enter($__internal_1151df18448c3e44a56f8ebe226e2fa9f67a3095bd51c2857c8d1c6bd5c94fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8aaf295a9aef7c6cb26e7cf0b82d21ac07096ca5f8cb7b2bafd8d875c0233085->leave($__internal_8aaf295a9aef7c6cb26e7cf0b82d21ac07096ca5f8cb7b2bafd8d875c0233085_prof);

        
        $__internal_1151df18448c3e44a56f8ebe226e2fa9f67a3095bd51c2857c8d1c6bd5c94fe5->leave($__internal_1151df18448c3e44a56f8ebe226e2fa9f67a3095bd51c2857c8d1c6bd5c94fe5_prof);

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

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
        $__internal_dc2df21c46555c9d52c8934c6e0d1710a3d478d2dc8fd1a8768462b724f53369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2df21c46555c9d52c8934c6e0d1710a3d478d2dc8fd1a8768462b724f53369->enter($__internal_dc2df21c46555c9d52c8934c6e0d1710a3d478d2dc8fd1a8768462b724f53369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_391f1307498d629c70cac1401edd5e9ff276971d42f36dc37e40de953b47662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391f1307498d629c70cac1401edd5e9ff276971d42f36dc37e40de953b47662a->enter($__internal_391f1307498d629c70cac1401edd5e9ff276971d42f36dc37e40de953b47662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dc2df21c46555c9d52c8934c6e0d1710a3d478d2dc8fd1a8768462b724f53369->leave($__internal_dc2df21c46555c9d52c8934c6e0d1710a3d478d2dc8fd1a8768462b724f53369_prof);

        
        $__internal_391f1307498d629c70cac1401edd5e9ff276971d42f36dc37e40de953b47662a->leave($__internal_391f1307498d629c70cac1401edd5e9ff276971d42f36dc37e40de953b47662a_prof);

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

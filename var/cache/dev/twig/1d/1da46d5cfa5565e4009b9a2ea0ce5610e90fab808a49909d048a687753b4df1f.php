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
        $__internal_08621899f2a4de1ae49711ff4702bca8e3ab82d1a76a683d84510dda840b9d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08621899f2a4de1ae49711ff4702bca8e3ab82d1a76a683d84510dda840b9d70->enter($__internal_08621899f2a4de1ae49711ff4702bca8e3ab82d1a76a683d84510dda840b9d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5e1d707cbf44e7a28399483d9390863a690b3234ba966de2602f168aa75d11c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1d707cbf44e7a28399483d9390863a690b3234ba966de2602f168aa75d11c5->enter($__internal_5e1d707cbf44e7a28399483d9390863a690b3234ba966de2602f168aa75d11c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_08621899f2a4de1ae49711ff4702bca8e3ab82d1a76a683d84510dda840b9d70->leave($__internal_08621899f2a4de1ae49711ff4702bca8e3ab82d1a76a683d84510dda840b9d70_prof);

        
        $__internal_5e1d707cbf44e7a28399483d9390863a690b3234ba966de2602f168aa75d11c5->leave($__internal_5e1d707cbf44e7a28399483d9390863a690b3234ba966de2602f168aa75d11c5_prof);

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

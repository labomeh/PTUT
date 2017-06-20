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
        $__internal_b0a9b2a1758b1260c38932282a10f1dfb9b654dd1d455e3356a51dde4d140cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a9b2a1758b1260c38932282a10f1dfb9b654dd1d455e3356a51dde4d140cb8->enter($__internal_b0a9b2a1758b1260c38932282a10f1dfb9b654dd1d455e3356a51dde4d140cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1e5a526d33b4a39768783620d98c328973d4dfb75f1b5935717271e359e9027c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5a526d33b4a39768783620d98c328973d4dfb75f1b5935717271e359e9027c->enter($__internal_1e5a526d33b4a39768783620d98c328973d4dfb75f1b5935717271e359e9027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b0a9b2a1758b1260c38932282a10f1dfb9b654dd1d455e3356a51dde4d140cb8->leave($__internal_b0a9b2a1758b1260c38932282a10f1dfb9b654dd1d455e3356a51dde4d140cb8_prof);

        
        $__internal_1e5a526d33b4a39768783620d98c328973d4dfb75f1b5935717271e359e9027c->leave($__internal_1e5a526d33b4a39768783620d98c328973d4dfb75f1b5935717271e359e9027c_prof);

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

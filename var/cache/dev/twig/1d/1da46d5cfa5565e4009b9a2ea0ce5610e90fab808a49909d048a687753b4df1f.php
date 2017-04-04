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
        $__internal_d83fd4c6e2804be4b4960e32c3077c0b286e0ef75d3cad5ba0909bf2e7ac018e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83fd4c6e2804be4b4960e32c3077c0b286e0ef75d3cad5ba0909bf2e7ac018e->enter($__internal_d83fd4c6e2804be4b4960e32c3077c0b286e0ef75d3cad5ba0909bf2e7ac018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_17792f56c3b8c8cf8aba569efcf168f349f0650b5a59b11d0291b310d7b3cb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17792f56c3b8c8cf8aba569efcf168f349f0650b5a59b11d0291b310d7b3cb42->enter($__internal_17792f56c3b8c8cf8aba569efcf168f349f0650b5a59b11d0291b310d7b3cb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d83fd4c6e2804be4b4960e32c3077c0b286e0ef75d3cad5ba0909bf2e7ac018e->leave($__internal_d83fd4c6e2804be4b4960e32c3077c0b286e0ef75d3cad5ba0909bf2e7ac018e_prof);

        
        $__internal_17792f56c3b8c8cf8aba569efcf168f349f0650b5a59b11d0291b310d7b3cb42->leave($__internal_17792f56c3b8c8cf8aba569efcf168f349f0650b5a59b11d0291b310d7b3cb42_prof);

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
